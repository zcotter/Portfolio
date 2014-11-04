Rails.application.routes.draw do
  resources :post_photos
  resources :posts
  resources :viewers
  resources :bananagrams_players
  resources :bananagrams_scores
  resources :bananagrams_games
  resources :bananagrams_moves

  devise_for :users, skip: :registrations

  resources :projects do
    resources :project_link_buttons
    resources :project_content_lists do
      resources :project_content_list_elements
    end
  end

  get 'home', to: 'pages#home'
  get 'license', to: 'pages#license'
  get 'contact', to: 'pages#contact'
  root to: 'pages#home'
end
