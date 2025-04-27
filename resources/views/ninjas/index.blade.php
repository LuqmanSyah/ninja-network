<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ninja Network | Home</title>
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <div class="container mx-auto p-8">
    <h2 class="text-2xl font-bold mb-4 text-gray-800">Currently Available Ninjas</h2>
    <p>{{ $greeting }}</p>
    <ul class="list-disc pl-6 space-y-2">
      <li class="text-gray-700 hover:text-gray-900">
        <a href="/ninjas/{{ $ninjas[0]['id'] }}">{{ $ninjas[0]['name'] }}</a>
      </li>
      <li class="text-gray-700 hover:text-gray-900">
        <a href="/ninjas/{{ $ninjas[1]['id'] }}">{{ $ninjas[1]['name'] }}</a>
      </li>
      <li class="text-gray-700 hover:text-gray-900">
        <a href="/ninjas/{{ $ninjas[2]['id'] }}">{{ $ninjas[2]['name'] }}</a>
      </li>
    </ul>
  </div>
</body>

</html>
