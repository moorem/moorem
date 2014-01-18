module ApplicationHelper

  def tweet_list
    tweets = Twitter.user_timeline[0..1]
  end

end
