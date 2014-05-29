function sockConnect(){

    var url = "54.186.189.3",
    port = 8888,
    socket = Ti.Network.createTCPSocket(url, port);

    socket.connect();
    console.log("Client Connected");
    try{
        socket.write("test test test");
        socket.onRead(function(e){
            alert(e);
        });
    }   catch (error) {
        console.log(error);
    }


};

function endSocket(){
    //do nothing
}

function store(data) {

};
