<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Laravel Vite Vue.js 3</title>
    @viteReactRefresh @vite(['resources/css/app.css', 'resources/js/app.jsx'])
  </head>
  <body class="flex justify-center items-center h-56">
    <h1 class="text-3xl text-green-500">Hello Tailwind</h1>
  </body>
</html>