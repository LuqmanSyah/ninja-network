<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ninja Network</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <header>
    <nav class="bg-gray-800 p-4">
      <div class="container mx-auto flex justify-between items-center">
        <a href="/">
            <h1 class="text-white text-2xl font-bold">Ninja Network</h1>
        </a>
        <div class="space-x-4">
          <a href="/ninjas" class="text-white hover:text-gray-300">All Ninjas</a>
          <a href="/ninjas/create" class="text-white hover:text-gray-300">Create New Ninjas</a>
        </div>
      </div>
    </nav>
  </header>

  <main class="min-h-screen bg-gray-100">
    {{ $slot }}
  </main>

</body>

</html>
