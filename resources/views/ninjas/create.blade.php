<x-layout>
    <div class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-[0_0_15px_rgba(255,0,0,0.3)] overflow-hidden border border-red-800">
            <!-- Header Section -->
            <div class="bg-gradient-to-r from-red-800 to-black px-6 py-8">
                <h2 class="text-3xl font-extrabold text-red-100 text-center">
                    Create Your Ninja Profile
                </h2>
                <p class="mt-2 text-red-200 text-center text-sm">Enter the details to register a new ninja</p>
            </div>

            <!-- Form Section -->
            <div class="px-8 py-6">
                <form class="space-y-6">
                    @csrf

                    <div class="group">
                        <label for="name" class="block text-sm font-semibold text-gray-700">Ninja Name</label>
                        <input type="text" name="name" id="name"
                            class="mt-1 block w-full px-4 py-3 rounded-lg bg-white border border-red-700 text-gray-900 placeholder-gray-500 focus:ring-2 focus:ring-red-600 focus:border-transparent transition duration-200"
                            placeholder="Enter ninja name">
                    </div>

                    <div class="group">
                        <label for="rank" class="block text-sm font-semibold text-gray-700">Ninja Rank</label>
                        <select name="rank" id="rank"
                            class="mt-1 block w-full px-4 py-3 rounded-lg bg-white border border-red-700 text-gray-900 focus:ring-2 focus:ring-red-600 focus:border-transparent transition duration-200">
                            <option value="">Select Rank</option>
                            <option value="genin">Genin</option>
                            <option value="chunin">Chunin</option>
                            <option value="jonin">Jonin</option>
                        </select>
                    </div>

                    <div class="group">
                        <label for="village" class="block text-sm font-semibold text-gray-700">Hidden Village</label>
                        <input type="text" name="village" id="village"
                            class="mt-1 block w-full px-4 py-3 rounded-lg bg-white border border-red-700 text-gray-900 placeholder-gray-500 focus:ring-2 focus:ring-red-600 focus:border-transparent transition duration-200"
                            placeholder="Enter village name">
                    </div>

                    <div class="group">
                        <label for="specialty" class="block text-sm font-semibold text-gray-700">Jutsu Specialty</label>
                        <input type="text" name="specialty" id="specialty"
                            class="mt-1 block w-full px-4 py-3 rounded-lg bg-white border border-red-700 text-gray-900 placeholder-gray-500 focus:ring-2 focus:ring-red-600 focus:border-transparent transition duration-200"
                            placeholder="Enter ninja specialty">
                    </div>

                    <button type="submit"
                        class="w-full py-3 px-4 bg-gradient-to-r from-red-800 to-black text-white font-medium rounded-lg hover:from-red-900 hover:to-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_0_10px_rgba(255,0,0,0.5)]">
                        Register Ninja
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
