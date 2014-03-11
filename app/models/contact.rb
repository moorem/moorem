class Contact < ActiveRecord::Base
  attr_accessible :name, :email, :subject, :message

  validates_format_of :email, :with  => /\A([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})\z/i
  validates_presence_of :name,:subject,:message
  acts_as_textcaptcha :api_key => '4pvjn4ouwum8ksk4o84k80oc460iw6to'
  #validates_presence_of :textcaptcha_answer,message: ""

end
