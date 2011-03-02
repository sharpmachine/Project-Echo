# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rake db:seed (or created alongside the db with db:setup).
#
# Examples:
#
#   cities = City.create([{ :name => 'Chicago' }, { :name => 'Copenhagen' }])
#   Mayor.create(:name => 'Daley', :city => cities.first)

User.destroy_all

(1..100).each do
  @user = User.create(name: Faker::Name.name, email: Faker::Internet.email, password: Faker::Name.last_name, bio: Faker::Lorem.paragraphs(3), paypal_email: Faker::Internet.email, paypal_first_name: Faker::Name.first_name, paypal_last_name: Faker::Name.last_name)
  
  (1..Random.new.rand(1..2)).each do
    @project = Project.create(name: Faker::Company.name, tagline: Faker::Company.bs, location: Faker::Address.city, description: Faker::Lorem.paragraphs(2), amount: Random.new.rand(1..5000), deadline: 60.days.from_now, user: @user)
    
    (1..Random.new.rand(1..20)).each do
      Update.create(project: @project, content: Faker::Lorem.words(10))
      Blog.create(project: @project, title: Faker::Company.catch_phrase, content: Faker::Lorem.paragraphs(4))
    end
    
  end
end