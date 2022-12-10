<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    {{-- <meta name="viewport" content="width=device-width, initial-scale=0.1, minimum-scale=0.1"/> --}}
    <meta content="width=1440,initial-scale=0,shrink-to-fit=no">
    @routes
    @vite('resources/css/app.css')
    @inertiaHead
    <title>Lottery</title>
</head>
<body>
    @inertia
    @vite('resources/js/app.js')
</body>
</html>