class Viewer < ActiveRecord::Base

  has_many :views

  def exists?(ip)
    Viewer.where(ip: ip).size != 0
  end
end
