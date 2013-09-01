class ProjectLinkButtonsController < ApplicationController
  before_filter :authenticate_user!
  # GET /project_link_buttons
  # GET /project_link_buttons.json
  def index
    @project = Project.find(params[:project_id])
    @project_link_buttons = @project.project_link_buttons

    respond_to do |format|
      format.html # index.html.erb
      format.json { render json: @project_link_buttons }
    end
  end

  # GET /project_link_buttons/1
  # GET /project_link_buttons/1.json
  def show
    @project = Project.find(params[:project_id])
    @project_link_button = @project.project_link_buttons.find(params[:id])

    respond_to do |format|
      format.html # show.html.erb
      format.json { render json: @project_link_button }
    end
  end

  # POST /project_link_buttons
  # POST /project_link_buttons.json
  def create
    @project = Project.find(params[:project_id])
    @project_link_button = @project.project_link_buttons.create(params[:project_link_button])
    redirect_to project_path(@project)
  end

  # DELETE /project_link_buttons/1
  # DELETE /project_link_buttons/1.json
  def destroy
    @project_link_button = Project.find(params[:project_id]).project_link_buttons.find(params[:id])
    @project_link_button.destroy
    redirect_to project_project_link_buttons_path
  end
end
