Portfolio::Application.routes.draw do
  get "home", to: 'pages#home'
  get 'about', to: 'pages#about'
  get 'tetris', to: 'pages#tetris'
  get 'maze', to: 'pages#maze'
  get 'mandelbrot', to: 'pages#mandelbrot'
  root to: 'pages#home'
end
