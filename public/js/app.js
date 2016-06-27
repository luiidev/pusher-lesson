(function(){
	var pusher = new Pusher('3af9472db014da6465ce');

	var channel = pusher.subscribe('demoChannel');

	channel.bind('userLikedPost', function(data){
		var output = document.getElementsByTagName('output')[0];
		var count = parseInt(output.value);
		output.value = ++count;
	});
})();