<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Siswa</title>
    @vite(['resources/js/app.js'])
</head>
<body class="bg-info">
    <a href="/guru">Data Guru</a>
    <a href="/siswa">Data Siswa</a>
    <br/>
    <br/>
    <br/>
    <br/>
    
    
    @yield('title')
    
    <br><br><br>
    
    <div class="container">
        @yield('content')
    </div>
</body>
</html>