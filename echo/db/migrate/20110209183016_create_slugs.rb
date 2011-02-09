class CreateSlugs < ActiveRecord::Migration
  def self.up
    create_table :slugs do |t|
      t.string :name
      t.integer :sluggable_id
      t.integer :sequence, :null => false, :default => 1
      t.string :sluggable_type, :limit => 40
      t.string :scope
      t.datetime :created_at
    end
    add_index :slugs, :sluggable_id
    add_index :slugs, [:name, :sluggable_type, :sequence, :scope], :name => "index_slugs_on_n_s_s_and_s", :unique => true
    
    add_column :projects, :cached_slug, :string
    add_column :users, :cached_slug, :string
    
    Project.all.each do |project|
      project.save
    end
    
    User.all.each do |user|
      user.save
    end
  end

  def self.down
    drop_table :slugs
    
    remove_column :projects, :cached_slug
    remove_column :users, :cached_slug
  end
end
