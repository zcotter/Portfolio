class ProjectContentListElementsController < ApplicationController
  before_action :authenticate_user!

  def index
    @project = Project.find(params[:project_id])
    @project_content_list = @project.project_content_lists.find(params[:project_content_list_id])
    @project_content_list_elements = @project_content_list.project_content_list_elements
  end

  def show
    @project = Project.find(params[:project_id])
    @project_content_list = @project.project_content_lists.find(params[:project_content_list_id])
    @project_content_list_element = @project_content_list.project_content_list_elements.find(params[:id])
  end

  def create
    @project = Project.find(params[:project_id])
    @project_content_list = @project.project_content_lists.find(params[:project_content_list_id])
    @project_content_list_element = @project_content_list.project_content_list_elements.create(project_content_list_element_params)
    redirect_to action: :index
  end

  def destroy
    @project_content_list = Project.find(params[:project_id]).project_content_lists.find(params[:project_content_list_id])
    @project_content_list_element = @project_content_list.project_content_list_elements.find(params[:id])
    @project_content_list_element.destroy
    redirect_to action: :index
  end

  private

  def project_content_list_element_params
    params.require(:project_content_list_element).permit(:content)
  end
end
