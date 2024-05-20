<!doctype html>
<html lang="en" class="h-full bg-gray-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Bootstrap demo</title>
    @vite('resources/css/app.css')
  </head>
  <body class="h-full"">
@include('components.navbar')

    <div class="xl:-mt-96">
      @yield('container')
    </div>

 


   
  </body>
</html>