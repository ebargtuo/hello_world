require 'sinatra'
require 'json'

set :bind, '0.0.0.0'

get '/' do
  "This is Sinatra"
end


get '/hello' do
    content_type :json
    {"message" => "Hello"}.to_json
end

get '/hello/:name' do |name|
    content_type :json
    {"message" => "Hello " + name.capitalize}.to_json
end
