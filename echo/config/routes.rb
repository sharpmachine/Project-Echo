Echo::Application.routes.draw do

  resources :projects do
    resources :blogs
    resources :updates
    resources :comments
  end
  resources :users


  root to: "projects#index"
end
