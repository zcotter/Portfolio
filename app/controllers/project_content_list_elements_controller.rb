class ProjectContentListElementsController < ApplicationController

  def index
    @project = Project.find(params[:project_id])
    @project_content_list = @project.project_content_lists.find(params[:project_content_list_id])
    @project_content_list_elements = @project_content_list.project_content_list_elements

    respond_to do |format|
      format.html # index.html.erb
      format.json { render json: @project_content_list_elements }
    end
  end

  # GET /project_content_list_elements/1
  # GET /project_content_list_elements/1.json
  def show
    @project = Project.find(params[:project_id])
    @project_content_list = @project.project_content_lists.find(params[:project_content_list_id])
    @project_content_list_element = @project_content_list.project_content_list_elements.find(params[:id])

    respond_to do |format|
      format.html # show.html.erb
      format.json { render json: @project_content_list_element }
    end
  end

  # POST /project_content_list_elements
  # POST /project_content_list_elements.json
  def create
    @project = Project.find(params[:project_id])
    @project_content_list = @project.project_content_lists.find(params[:project_content_list_id])
    @project_content_list_element = @project_content_list.project_content_list_elements.create(params[:project_content_list_element])
    redirect_to project_project_content_list_path(@project, @project_content_list)
  end

  # DELETE /project_content_list_elements/1
  # DELETE /project_content_list_elements/1.json
  def destroy

    @project_content_list = Project.find(params[:project_id]).project_content_lists.find(params[:project_content_list_id])
    @project_content_list_element = @project_content_list.project_content_list_elements.find(params[:project_content_list_element_id])
    @project_content_list_element.destroy
    redirect_to project_project_content_list_project_content_list_elements_path
  end
end
