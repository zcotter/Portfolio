class PostsController < ApplicationController
  before_action :authenticate_user!, except: [:index, :show]
  before_action :find_post, only: [:show, :edit, :update, :destroy]

  def index
    @posts = Post.all
  end

  def show
  end

  def new
    @post = Post.new
  end

  def edit
  end

  def create
    @post = Post.new(post_params)
    if @post.save!
      redirect_to @post
    else
      redirect_to action: :new, notice: @post.errors.full_messages
    end
  end

  def update
    if @post.update_attributes!(project_params)
      redirect_to @post
    else
      redirect_to @post, action: :edit, notice: @post.errors.full_messages
    end
  end

  def destroy
    redirect_to action: :index if @post.destroy!
  end

  private

  def find_post
    @post = Post.find(params[:id])
  end

  def post_params
    params.require(:post).permit(:title, :content)
  end
end
