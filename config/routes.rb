Portfolio::Application.routes.draw do
  get "home", to: 'pages#home'
  get 'about', to: 'pages#about'
  get 'tetris', to: 'pages#tetris'
  root to: 'pages#home'
end
