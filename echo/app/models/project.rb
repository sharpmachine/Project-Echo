class Project < ActiveRecord::Base
  belongs_to :user
  has_friendly_id :name, :use_slug => true
end
