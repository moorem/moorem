class ErrorsController < ApplicationController

  def routing
    flash[:notice] = "You tried to access unavailable path"
    redirect_to root_url
  end
end
