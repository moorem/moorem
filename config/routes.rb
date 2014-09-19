Rails.application.routes.draw do

  root 'home#index'

  resources :pages, path: '' do
    collection do
      get :team
      get :contact
      get :about
      get :portfolio
      get :career
      get :who_we_are
      post :send_newsletter
      get :blog
      get :sitemap
      get '*path' => 'home#error'
    end
  end

  %w( 404 422 500 ).each do |code|
    get "#{code}", :to => 'pages#show', :code => code
  end

  get "sitemap.xml" => "home#sitemap", format: :xml, as: :sitemap
  get "robots.txt" => "home#robots", format: :text, as: :robots
end