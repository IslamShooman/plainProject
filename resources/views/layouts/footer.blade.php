<div class="alert alert-success text-center m-0 rounded-0">
    footer here
</div>

<!-- ***************** scripts *****************-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    let pusher = new Pusher('014ef1d05ade8a51e7c8', {
        cluster: 'eu'
    });

    let channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function (data) {
        alert(JSON.stringify(data));
    });
</script>
