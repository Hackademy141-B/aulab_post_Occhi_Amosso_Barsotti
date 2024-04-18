<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    <title>Aulab_Post</title>
</head>
<body>
    

    <x-navbar />
     {{$slot}}

     <script type="text/javascript" src="js/particles.min.js"></script>
     <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>