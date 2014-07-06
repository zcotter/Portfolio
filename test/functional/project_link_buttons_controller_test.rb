require 'test_helper'

class ProjectLinkButtonsControllerTest < ActionController::TestCase
  setup do
    @project_link_button = project_link_buttons(:one)
  end

  test 'should get index' do
    get :index
    assert_response :success
    assert_not_nil assigns(:project_link_buttons)
  end

  test 'should create project_link_button' do
    assert_difference('ProjectLinkButton.count') do
      post :create, project_link_button: { link: @project_link_button.link, name: @project_link_button.name }
    end

    assert_redirected_to project_link_button_path(assigns(:project_link_button))
  end

  test 'should show project_link_button' do
    get :show, id: @project_link_button
    assert_response :success
  end

  test 'should destroy project_link_button' do
    assert_difference('ProjectLinkButton.count', -1) do
      delete :destroy, id: @project_link_button
    end

    assert_redirected_to project_link_buttons_path
  end
end
