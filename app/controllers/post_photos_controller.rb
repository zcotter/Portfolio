class PostPhotosController < ApplicationController
  before_action :authenticate_user!
  before_action :find_photo, only: [:show, :edit, :update, :destroy]

  def index
    @photos = PostPhoto.all
  end

  def show
  end

  def new
    @photo = PostPhoto.new
  end

  def create
    @photo = PostPhoto.new(photo_params)
    if @photo.save!
      redirect_to @photo
    else
      redirect_to action: :new, notice: @photo.errors.full_messages
    end
  end

  def update
    if @photo.update_attributes!(photo_params)
      redirect_to @photo
    else
      redirect_to @photo, action: :edit, notice: @photo.errors.full_messages
    end
  end

  def destroy
    redirect_to action: :index if @photo.destroy!
  end

  private

  def find_photo
    @photo = PostPhoto.find(params[:id])
  end

  def photo_params
    params.require(:post_photo).permit(:image, :post_id)
  end
end
