<x-layout>
  <div class="min-h-screen ">
    <div class="container mx-auto py-8 px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold mb-6 text-gray-800 border-b pb-2">
        🥷 Currently Available Ninjas
      </h2>

    @if ($greeting)
      <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-lg shadow-sm">
        <p class="text-red-700 font-medium">{{ $greeting }}</p>
      </div>
    @endif

    <div class="grid grid-cols-1 gap-6 w-full">
      @foreach ($ninjas as $ninja)
        <x-card :ninja="$ninja" />
      @endforeach
    </div>
    </div>
  </div>
</x-layout>
