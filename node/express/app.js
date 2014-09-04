var express = require('express');
var params = require('express-params');
var S = require('string');
var app = express();

params.extend(app);

app.get('/hello', function(req, res){
  res.send('{"message": "Hello"}');
});

app.get('/hello/:name', function(req, res){
  res.send(JSON.stringify({
    "message": "Hello " + S(req.params.name).capitalize()
  }));
});

var server = app.listen(3000, function() {
    console.log('Listening on port %d', server.address().port);
});
