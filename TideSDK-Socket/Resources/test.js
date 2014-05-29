require('longjohn');
var net = require('net');
clients = [];
console.log('Server Begin\r\n');
var server = net.createServer(function(socket){
    clients.push(socket);
    console.log('Server Connected ' + socket.remoteAddress + ':' +socket.remotePort);
    socket.on('data', function(data) {
        
        console.log('DATA ' + socket.remoteAddress + ': ' + data);
        // Write the data back to the socket, the client will receive it as data from the server
        socket.write('You said "' + data + '"');
        socket.end();
        clients.splice(clients.indexOf(socket));
        
    });

 



});

server.listen(8888, "127.0.0.1");