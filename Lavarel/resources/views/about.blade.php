<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center bg-blue-100">
<li><a href="{{ route ('login') }}" class="text-3xl font-bold underline text-red-500"> Balik Login  </a></li>
<li><a class="text-3xl font-bold underline text-red-500"> About Me </a> </li>
<li><a href="{{ route ('index') }}" class="text-3xl font-bold underline text-red-500"> Balik index </a></li>
</body>
</html>