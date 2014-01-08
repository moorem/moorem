class HomeController < ApplicationController
  def index
    @tweets = Twitter.user_timeline[0..4]
  end

end
