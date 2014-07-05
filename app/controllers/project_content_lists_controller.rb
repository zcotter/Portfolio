class ProjectContentListsController < ApplicationController
  before_filter :authenticate_user!

  def index
    @project = Project.find(params[:project_id])
    @project_content_lists = @project.project_content_lists
  end

  def show
    @project = Project.find(params[:project_id])
    @project_content_list = @project.project_content_lists.find(params[:id])
  end

  def create
    @project = Project.find(params[:project_id])
    @project_content_list = @project.project_content_lists.create(project_content_list_params)
    redirect_to project_path(@project)
  end

  def destroy
    @project = Project.find(params[:project_id])
    @project_content_list = @project.project_content_lists.find(params[:id])
    @project_content_list.destroy
    redirect_to project_path(@project)
  end

  def project_content_list_params
    params.require(:project_content_list).permit(:title)
  end
end
