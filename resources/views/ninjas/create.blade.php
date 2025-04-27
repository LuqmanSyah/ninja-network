<x-layout>
    <div class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-2xl overflow-hidden">
            <!-- Header Section -->
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 px-6 py-8">
                <h2 class="text-3xl font-extrabold text-white text-center">
                    Create Your Ninja Profile
                </h2>
                <p class="mt-2 text-white text-center text-sm">Enter the details to register a new ninja</p>
            </div>

            <!-- Form Section -->
            <div class="px-8 py-6">
                <form class="space-y-6">
                    @csrf

                    <div class="group">
                        <label for="name" class="block text-sm font-semibold text-gray-700">Ninja Name</label>
                        <input type="text" name="name" id="name"
                            class="mt-1 block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-600 focus:border-transparent transition duration-200"
                            placeholder="Enter ninja name">
                    </div>

                    <div class="group">
                        <label for="rank" class="block text-sm font-semibold text-gray-700">Ninja Rank</label>
                        <select name="rank" id="rank"
                            class="mt-1 block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-600 focus:border-transparent transition duration-200">
                            <option value="">Select Rank</option>
                            <option value="genin">Genin</option>
                            <option value="chunin">Chunin</option>
                            <option value="jonin">Jonin</option>
                        </select>
                    </div>

                    <div class="group">
                        <label for="village" class="block text-sm font-semibold text-gray-700">Hidden Village</label>
                        <input type="text" name="village" id="village"
                            class="mt-1 block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-600 focus:border-transparent transition duration-200"
                            placeholder="Enter village name">
                    </div>

                    <div class="group">
                        <label for="specialty" class="block text-sm font-semibold text-gray-700">Jutsu Specialty</label>
                        <input type="text" name="specialty" id="specialty"
                            class="mt-1 block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-600 focus:border-transparent transition duration-200"
                            placeholder="Enter ninja specialty">
                    </div>

                    <button type="submit"
                        class="w-full py-3 px-4 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-medium rounded-lg hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300 transform hover:-translate-y-1">
                        Register Ninja
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
