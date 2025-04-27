<x-layout>
  <div class="min-h-screen">
    <div class="container mx-auto py-8">
      <h2 class="text-3xl font-bold mb-6 text-gray-800 border-b pb-2">
        🥷 Currently Available Ninjas
      </h2>

      @if ($greeting)
        <div class="bg-green-100 border-l-4 border-green-500 p-4 mb-6">
          <p class="text-green-700">{{ $greeting }}</p>
        </div>
      @endif

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($ninjas as $ninja)
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
        @endforeach
      </div>
    </div>
  </div>
</x-layout>
