class Contact < ActiveRecord::Base
  attr_accessible :name, :email, :subject, :message

  validates_format_of :email, :with  => /\A([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})\z/i
  validates_presence_of :name,:subject,:message
end
