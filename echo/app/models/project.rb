class Project < ActiveRecord::Base
  belongs_to :user
  has_friendly_id :name, :use_slug => true
  has_many :comments
  has_many :updates
  has_many :blogs
end
