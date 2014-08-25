require 'sinatra'
require 'json'

set :bind, '0.0.0.0'

get '/' do
  "This is Sinatra"
end


get '/hello' do
    {"message" => "Hello"}.to_json
end

get '/hello/:name' do |name|
    #echo json_encode(array("message" => "Hello " . ucfirst($name)));
    {"message" => "Hello " + name.capitalize}.to_json
end
