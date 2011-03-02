class AddingCachingSlug < ActiveRecord::Migration
  def self.up
    add_column :blogs, :cached_slug, :string
    Blog.all.each do |blog|
      blog.save unless blog.title.blank?
    end
  end

  def self.down
    remove_column :blogs, :cached_slug
  end
end