class Viewer < ActiveRecord::Base

  has_many :views

  def exists?(ip)
    Viewer.where(ip: ip).size != 0
  end

  def last_visited
    View.where(ip: self.ip).order(:at).last
  end
  
end
