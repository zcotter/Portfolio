Portfolio::Application.routes.draw do
  get "home", to: 'pages#home'
  root to: 'pages#home'
end
