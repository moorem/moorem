require 'test_helper'

class PagesControllerTest < ActionController::TestCase
  test "should get team" do
    get :team
    assert_response :success
  end

  test "should get contact" do
    get :contact
    assert_response :success
  end

  test "should get about" do
    get :about
    assert_response :success
  end

  test "should get services" do
    get :services
    assert_response :success
  end

  test "should get portfolio" do
    get :portfolio
    assert_response :success
  end

end
