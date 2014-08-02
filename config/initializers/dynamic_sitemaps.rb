DynamicSitemaps.configure do |config|
  # Default is Google and Bing
  config.search_engine_ping_urls << "http://customsearchengine.com/ping?url=%s"

  # Default is pinging only in production
  config.ping_environments << "staging"
end