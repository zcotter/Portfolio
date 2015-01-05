class Viewer < ActiveRecord::Base

  has_many :views

  def last_visited
    View.where(viewer_id: self.id).order(:at).last.at
  end

  def page_views
    View.where(viewer_id: self.id).count
  end

  def self.real_viewers
    blacklist = YAML.load_file('config/blacklist.yml')
    real = Viewer
    blacklist.each do |field, values|
      values.each do |value|
        real = real.where.not(field => value)
      end
    end
    real
  end

  def agents(key)
    views = View.where(viewer_id: self.id)
    total = views.count
    options = views.map(&key).uniq
    agent_report = ''
    agents = []
    counts = []
    views.each do |view|
      index = agents.find_index(view.try(key))
      if index
        counts[index] += 1
      else
        agents.push(view.try(key))
        counts.push(0)
      end
    end

    agents.each_with_index do |agent, index|
      percent = counts[index].to_f / total.to_f * 100
      agent_report += "#{agent} (#{percent.round(2)}%) "
    end

    return agent_report
  end

  def browsers
    agents(:browser)
  end

  def oss
    agents(:os)
  end
end
