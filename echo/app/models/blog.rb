class Blog < ActiveRecord::Base
  belongs_to :project
  validates :title, presence: true
  has_friendly_id :title, :use_slug => true
end
