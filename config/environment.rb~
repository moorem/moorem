# Load the Rails application.
require File.expand_path('../application', __FILE__)

# Initialize the Rails application.
Moorem::Application.initialize!

ActionMailer::Base.smtp_settings = {
    :user_name => 'moorem',
    :password => 'moorem@2013',
    :domain => 'yourdomain.com',
    :address => 'smtp.sendgrid.net',
    :port => 587,
    :authentication => :plain,
    :enable_starttls_auto => true
}
