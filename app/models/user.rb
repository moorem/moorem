class User < ActiveRecord::Base
  # Include default devise modules. Others available are:
  # :confirmable, :lockable, :timeoutable and :omniauthable
  devise :database_authenticatable, :registerable,
         :recoverable, :rememberable, :trackable, :validatable
  attr_accessible :name, :email
  attr_accessible :role_ids, :password, :utf8, :_method, :authenticity_token, :commit

  has_many :users_roles
  has_many :roles, through: :users_roles
end
