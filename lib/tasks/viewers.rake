namespace :viewers do
  desc "Use api to get location data on viewers"
  task identify: :environment do
    Viewer.where(country: nil).each do | viewer |
      json = Net::HTTP.get_response('www.telize.com',"/geoip/#{viewer.ip}").body
      json = JSON.parse(json)
      viewer.longitude = json['longitude']
      viewer.latitude = json['latitude']
      viewer.country = json['country']
      viewer.isp = json['isp']
      viewer.save!
    end
  end

  desc "Remove viewers and views that have been blacklisted"
  task clean: :environment do
    blacklist = YAML.load_file('config/blacklist.yml')
    blacklist.each do |field, values|
      values.each do |value|
        fake = Viewer.where(field => value)
        fake.each.map(&:views).each.map(&:destroy)
        fake.each.map(&:destroy!)
      end
    end
  end
end
