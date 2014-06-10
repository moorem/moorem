class Newsletter < ActiveRecord::Base
  attr_accessible :email
  validates_format_of :email, :with  => /\A([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})\z/i
  validates :email, :presence => true
end
