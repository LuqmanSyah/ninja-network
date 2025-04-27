<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ninja Network</title>
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="min-h-screen bg-gradient-to-tl from-red-600 via-red-900 to-black">
        <div class="flex flex-col items-center justify-center min-h-screen p-6">
            <h1 class="text-4xl font-bold text-white mb-4">
                Welcome to the Ninja Network
            </h1>

            <p class="text-lg text-gray-200 mb-8">
                Click the button below to view the list of ninjas.
            </p>

            <a href="/ninjas"
                class="px-6 py-3 bg-red-700 text-white font-semibold rounded-lg hover:bg-red-800 transition duration-300 shadow-lg">
                Find Ninjas!
            </a>
        </div>
    </div>
</body>

</html>
