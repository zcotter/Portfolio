require 'test_helper'

class ProjectContentListsControllerTest < ActionController::TestCase
  setup do
    @project_content_list = project_content_lists(:one)
  end

  test "should get index" do
    get :index
    assert_response :success
    assert_not_nil assigns(:project_content_lists)
  end

  test "should create project_content_list" do
    assert_difference('ProjectContentList.count') do
      post :create, project_content_list: { title: @project_content_list.title }
    end

    assert_redirected_to project_content_list_path(assigns(:project_content_list))
  end

  test "should show project_content_list" do
    get :show, id: @project_content_list
    assert_response :success
  end

  test "should destroy project_content_list" do
    assert_difference('ProjectContentList.count', -1) do
      delete :destroy, id: @project_content_list
    end

    assert_redirected_to project_content_lists_path
  end
end
