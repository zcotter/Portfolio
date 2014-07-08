class Viewer < ActiveRecord::Base
  def exists?(ip)
    Viewer.where(ip: ip).size != 0
  end
end
