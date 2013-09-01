class ProjectContentListsController < ApplicationController
  # GET /project_content_lists
  # GET /project_content_lists.json
  def index
    @project = Project.find(params[:project_id])
    @project_content_lists = @project.project_content_lists

    respond_to do |format|
      format.html # index.html.erb
      format.json { render json: @project_content_lists }
    end
  end

  # GET /project_content_lists/1
  # GET /project_content_lists/1.json
  def show
    @project = Project.find(params[:project_id])
    @project_content_list = @project.project_content_lists.find(params[:id])

    respond_to do |format|
      format.html # show.html.erb
      format.json { render json: @project_content_list }
    end
  end

  # POST /project_content_lists
  # POST /project_content_lists.json
  def create
    @project = Project.find(params[:project_id])
    @project_content_list = @project.project_content_lists.create(params[:project_content_list])
    redirect_to project_path(@project)
  end

  # DELETE /project_content_lists/1
  # DELETE /project_content_lists/1.json
  def destroy
    @project_content_list = Project.find(params[:project_id]).project_content_lists.find(params[:id])
    @project_content_list.destroy
    redirect_to project_project_content_lists_path(@project)
  end
end
