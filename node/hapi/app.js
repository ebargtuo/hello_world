var Hapi = require('hapi');
var S = require('string');

var server = new Hapi.Server('localhost', 8000);

server.route({
    method: 'GET',
    path: '/hello',
    handler: function (request, reply) {
        reply(JSON.stringify({
           'message': 'Hello'
        }));
    }
});

server.route({
    method: 'GET',
    path: '/hello/{name}',
    handler: function (request, reply) {
        reply(JSON.stringify({
           'message': 'Hello ' + S(request.params.name).capitalize()
        }));
    }
});

server.start();
