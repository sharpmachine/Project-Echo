class CreateUpdates < ActiveRecord::Migration
  def self.up
    create_table :updates do |t|
      t.references :project
      t.string :content

      t.timestamps
    end
  end

  def self.down
    drop_table :updates
  end
end
