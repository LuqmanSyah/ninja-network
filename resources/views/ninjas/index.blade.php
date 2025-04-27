<x-layout>
  <div class="min-h-screen ">
    <div class="container mx-auto py-8 px-4 sm:px-6 lg:px-8">
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
            <x-card :ninja="$ninja" />
        @endforeach
      </div>
    </div>
  </div>
</x-layout>
