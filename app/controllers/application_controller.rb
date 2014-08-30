class ApplicationController < ActionController::Base
  protect_from_forgery
  before_action :all_projects
  before_action :stalk_viewer

  def all_projects
    @projects = Project.all
  end

  def stalk_viewer
    ip = request.remote_addr

    if Viewer.where(ip: ip).size != 0
      viewer = Viewer.where(ip: ip).first
    else
      viewer = Viewer.new({ip: ip})
      viewer.save!
    end
    view = View.new({viewer_id: viewer.id, path: request.path_info, at: Time.now, user_agent: request.user_agent})
    view.save!
  end
end
