class ApplicationController < ActionController::Base
  # Prevent CSRF attacks by raising an exception.
  # For APIs, you may want to use :null_session instead.
  protect_from_forgery with: :exception

  def exception
    flash[:notice] = "You tried to access unavailable path"
    redirect_to root_url
  end
end