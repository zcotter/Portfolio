class ProjectLinkButtonsController < ApplicationController
  before_action :authenticate_user!

  def index
    @project = Project.find(params[:project_id])
    @project_link_buttons = @project.project_link_buttons
  end

  def show
    @project = Project.find(params[:project_id])
    @project_link_button = @project.project_link_buttons.find(params[:id])
  end

  def create
    @project = Project.find(params[:project_id])
    @project_link_button = @project.project_link_buttons.create(project_link_button_params)
    redirect_to project_path(@project)
  end

  def destroy
    @project_link_button = Project.find(params[:project_id]).project_link_buttons.find(params[:id])
    @project_link_button.destroy
    redirect_to project_project_link_buttons_path
  end

  private
  def project_link_button_params
    params.require(:project_link_button).permit(:name, :link)
  end
end
