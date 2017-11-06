<<<<<<< HEAD
@extends('master')

@section('content')
    <p id="power">0</p>
@stop

@section('footer')

    <script src="{{ asset('js/socket.io.js') }}"></script>

    <script>
    var socket = io('http://localhost:3000');
  /*  var socket = io('http://41.216.130.6:3000');*/
    socket.on("test-channel:App\\Events\\MyEventNameHere", function(message){
         // increase the power everytime we load test route
         console.log(message);
         $('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));
     });
    </script>


@stop
=======
@extends('master')

@section('content')
    <p id="power">0</p>
@stop

@section('footer')

    <script src="{{ asset('js/socket.io.js') }}"></script>

    <script>
    var socket = io('http://localhost:3000');
  /*  var socket = io('http://41.216.130.6:3000');*/
    socket.on("test-channel:App\\Events\\MyEventNameHere", function(message){
         // increase the power everytime we load test route
         console.log(message);
         $('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));
     });
    </script>


@stop
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
