class Contact < ActiveRecord::Base
  attr_accessible :name, :email, :subject, :message
end