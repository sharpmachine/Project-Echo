class CreateUsers < ActiveRecord::Migration
  def self.up
    create_table :users do |t|
      t.string :name
      t.string :email
      t.string :password
      t.string :bio
      t.string, :paypal_email
      t.string :paypal_first_name
      t.string :paypal_last_name

      t.timestamps
    end
  end

  def self.down
    drop_table :users
  end
end
