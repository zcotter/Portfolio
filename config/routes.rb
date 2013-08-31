Portfolio::Application.routes.draw do






  resources :projects  do
    resources :project_link_buttons
    resources :project_content_lists
  end


  get "home", to: 'pages#home'
  get 'about', to: 'pages#about'
  get 'tetris', to: 'pages#tetris'
  get 'maze', to: 'pages#maze'
  get 'mandelbrot', to: 'pages#mandelbrot'
  get 'androidtetris', to: 'pages#androidtetris'
  root to: 'pages#home'
end
