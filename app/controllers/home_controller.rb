class HomeController < ApplicationController
  def index
    @client = Twitter::REST::Client.new do |config|
      config.consumer_key = "3rUhSEFcUz0riHnWAty8g"
      config.consumer_secret = "U9VYod7lZaCzWY2C3aTEWxFb2i5FmYSK6HvsBfLE4"
      config.access_token = "2242115442-UTNvRleupAG71ddBdNLbyvsG0SvGrtY9x7gsp8W"
      config.access_token_secret = "thZVAM76GpgOYVRpqJOg19ztBWyHBlmFFGRbbUR2Ovhvc"
    end
    @test = get_all_tweets("mooremtech")
  end

  def collect_with_max_id(collection=[], max_id=nil, &block)
    response = yield max_id
    collection += response
    response.empty? ? collection.flatten : collect_with_max_id(collection, response.last.id - 1, &block)
  end

  def get_all_tweets(user)
    collect_with_max_id do |max_id|
      options = {:count => 200, :include_rts => true}
      options[:max_id] = max_id unless max_id.nil?
      @client.user_timeline(user, options)
    end
  end

end
