<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    
    <title>Document</title>
</head>
<body>
    @if(session('success'))
        <div class="notification is-info">
            {{ session('success') }}
        </div>
    @endif

    <div class="container">
        @yield('content')
    </div>
    
</body>
</html>