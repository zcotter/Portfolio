class ViewersController < ApplicationController
  def index
    @viewers = Viewer.all
  end

  def show
    @viewer = Viewer.find(params[:id])
  end
end
