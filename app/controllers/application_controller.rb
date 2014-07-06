class ApplicationController < ActionController::Base
  protect_from_forgery
  before_action :all_projects

  def all_projects
    @projects = Project.all
  end
end
