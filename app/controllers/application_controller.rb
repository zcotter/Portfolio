class ApplicationController < ActionController::Base
  protect_from_forgery
  before_action :all_projects
  before_action :stalk_viewer

  def all_projects
    @projects = Project.all
  end

  def stalk_viewer
    ip = request.remote_addr
    unless Viewer.exists?(ip)
      v = Viewer.new
      v.ip = ip
      v.save!
    end
  end
end
