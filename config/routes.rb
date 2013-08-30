Portfolio::Application.routes.draw do
  get "home", to: 'pages#home'
  get 'about', to: 'pages#about'
  get 'tetris', to: 'pages#tetris'
  get 'maze', to: 'pages#maze'
  get 'mandelbrot', to: 'pages#mandelbrot'
  get 'androidtetris', to: 'pages#androidtetris'
  root to: 'pages#home'
end
