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
end
