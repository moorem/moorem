class Contact < ActiveRecord::Base
  attr_accessible :name, :email, :subject, :message

  validates_format_of :email, :with  => /\A([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})\z/i
  validates_presence_of :name,:subject,:message

    # (this is the simplest way to configure the gem, with an API key only)
    acts_as_textcaptcha :api_key => '7jhdx5ag20g8oo8o808cs0ss89mwpabr'

end
