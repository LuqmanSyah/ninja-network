@props(['ninja'])

<div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
  <div class="p-6">
    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $ninja['name'] }}</h3>
    <a href="/ninjas/{{ $ninja['id'] }}"
      class="inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-md transition-colors duration-300">
      <span>View Details</span>
      <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </a>
  </div>
</div>
