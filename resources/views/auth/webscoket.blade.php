<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebSockets Test</title>

     <script src=" {{ asset('/js/app.js') }}" ></script> 
    </head>

    <body>
    <script type="module">
    // the dot before the event name is not an error!
    Echo.channel('example-channel,').listen('ExampleEvent',(e) => {
        alert(e.message)
    })
</script>
    </body>
</html>