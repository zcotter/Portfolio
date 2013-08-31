require 'test_helper'

class ProjectContentListElementsControllerTest < ActionController::TestCase
  setup do
    @project_content_list_element = project_content_list_elements(:one)
  end

  test "should get index" do
    get :index
    assert_response :success
    assert_not_nil assigns(:project_content_list_elements)
  end

  test "should get new" do
    get :new
    assert_response :success
  end

  test "should create project_content_list_element" do
    assert_difference('ProjectContentListElement.count') do
      post :create, project_content_list_element: { content: @project_content_list_element.content }
    end

    assert_redirected_to project_content_list_element_path(assigns(:project_content_list_element))
  end

  test "should show project_content_list_element" do
    get :show, id: @project_content_list_element
    assert_response :success
  end

  test "should get edit" do
    get :edit, id: @project_content_list_element
    assert_response :success
  end

  test "should update project_content_list_element" do
    put :update, id: @project_content_list_element, project_content_list_element: { content: @project_content_list_element.content }
    assert_redirected_to project_content_list_element_path(assigns(:project_content_list_element))
  end

  test "should destroy project_content_list_element" do
    assert_difference('ProjectContentListElement.count', -1) do
      delete :destroy, id: @project_content_list_element
    end

    assert_redirected_to project_content_list_elements_path
  end
end
