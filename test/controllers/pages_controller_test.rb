require 'test_helper'

class PagesControllerTest < ActionDispatch::IntegrationTest
  test "should get index" do
    get pages_index_url
    assert_response :success
  end

  test "should get about" do
    get pages_about_url
    assert_response :success
  end

  test "should get contact" do
    get pages_contact_url
    assert_response :success
  end

  test "should get blog" do
    get pages_blog_url
    assert_response :success
  end

  test "should get team" do
    get pages_team_url
    assert_response :success
  end

  test "should get services" do
    get pages_services_url
    assert_response :success
  end

  test "should get careers" do
    get pages_careers_url
    assert_response :success
  end

  test "should get products" do
    get pages_products_url
    assert_response :success
  end

  test "should get portfolio" do
    get pages_portfolio_url
    assert_response :success
  end

end
