Portfolio::Application.routes.draw do
  resources :projects  do
    resources :project_link_buttons
    resources :project_content_lists do
      resources :project_content_list_elements
    end
  end


  get "home", to: 'pages#home'
  get 'about', to: 'pages#about'
  root to: 'pages#home'
end
