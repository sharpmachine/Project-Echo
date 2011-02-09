class CreateProjects < ActiveRecord::Migration
  def self.up
    create_table :projects do |t|
      t.string :name
      t.string :tagline
      t.string :location
      t.string :description
      t.integer :amount
      t.date :deadline
      t.references :user

      t.timestamps
    end
  end

  def self.down
    drop_table :projects
  end
end
