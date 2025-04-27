@props(['ninja'])

<div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-l-4 border-red-500">
    <div class="p-6">
        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-red-600 transition-colors duration-300">{{ $ninja['name'] }}</h3>
        <a href="/ninjas/{{ $ninja['id'] }}" class="text-red-500 hover:underline hover:text-red-600 transition-colors duration-300">
            View Details
        </a>
    </div>
</div>
