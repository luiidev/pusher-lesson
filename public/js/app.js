(function(){
	var pusher = new Pusher('3af9472db014da6465ce');

	var channel = pusher.subscribe('demoChannel');

	window.App = {};
	App.Listeners = {};

	// Notifier 
	App.Notifier = function(){
		this.notify = function(message){
			console.log(message);
			document.body.appendChild(document.createTextNode(message));
		}
	}

	// Listeners
    App.Listeners.Post = {
        whenPostWasPublished: function(data) {
        	console.log(data);
            (new App.Notifier).notify(data.title);
        }
    };

	channel.bind('userLikedPost', App.Listeners.Post.whenPostWasPublished);
})();