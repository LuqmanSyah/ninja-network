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
    <nav class="bg-gradient-to-r from-red-800 to-gray-900 shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center py-4">
                <a href="/" class="mb-4 md:mb-0">
                    <h1 class="text-white text-3xl font-bold hover:text-red-400 transition duration-300">
                        Ninja Network
                    </h1>
                </a>
                <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6">
                    <a href="/ninjas"
                       class="text-white text-lg hover:text-red-400 transition duration-300 border-b-2 border-transparent hover:border-red-400 px-3 py-2">
                        All Ninjas
                    </a>
                    <a href="/ninjas/create"
                       class="text-white text-lg bg-red-700 hover:bg-red-600 px-4 py-2 rounded-lg transition duration-300 shadow-md hover:shadow-lg">
                        Create New Ninja
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>

  <main class="min-h-screen bg-gray-100">
    {{ $slot }}
  </main>

</body>

</html>
