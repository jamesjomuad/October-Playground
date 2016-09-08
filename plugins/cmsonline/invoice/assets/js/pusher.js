var pusher = new Pusher('03648de75ae6d7167dcc', {
  encrypted: true
});

var channel = pusher.subscribe('invoice');

channel.bind('event', function(data) {
    notifyUser(JSON.stringify(data));
});




function notifyUser(data) {
    var data = data;

    if (! ('Notification' in window)) {
        alert('Web Notification is not supported');

        return;
    }

    Notification.requestPermission(function(permission){
        var notification = new Notification(data);

        // notification.onclick = function() { location.href = '/'; }
    });
};