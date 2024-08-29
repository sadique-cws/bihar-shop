<section class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Checkout</h1>

    <!-- Saved Addresses -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
        <h2 class="text-2xl font-bold mb-4">Saved Addresses</h2>
        <div class="space-y-4">
            <!-- Address Card -->
            <div class="p-4 border rounded-lg cursor-pointer hover:border-blue-600 transition">
                <h3 class="text-lg font-semibold">Home Address</h3>
                <p class="text-gray-600">123 Main Street, Apartment 4B, New York, NY, 10001</p>
            </div>
            <!-- Repeat for more saved addresses -->
            <div class="p-4 border rounded-lg cursor-pointer hover:border-blue-600 transition">
                <h3 class="text-lg font-semibold">Office Address</h3>
                <p class="text-gray-600">456 Market Street, Suite 1200, San Francisco, CA, 94105</p>
            </div>
        </div>
    </div>

    <!-- Add New Address Form -->
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Add New Address</h2>
        <form>
            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <input type="text" id="address" class="mt-1 block w-full p-2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="1234 Main St">
            </div>
            <div class="mb-4">
                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                <input type="text" id="city" class="mt-1 block w-full p-2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="New York">
            </div>
            <div class="mb-4">
                <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                <input type="text" id="state" class="mt-1 block w-full p-2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="NY">
            </div>
            <div class="mb-4">
                <label for="zip" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                <input type="text" id="zip" class="mt-1 block w-full p-2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="10001">
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">Save Address</button>
        </form>
    </div>

    <!-- Proceed to Payment Button -->
    <div class="mt-6">
        <button class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition">Proceed to Payment</button>
    </div>
</section>