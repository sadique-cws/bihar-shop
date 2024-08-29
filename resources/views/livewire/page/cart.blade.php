<div>
    <livewire:home-header/>

<section class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Your Shopping Cart</h1>

    <!-- Cart Items -->
    <div class="bg-white shadow-lg rounded-lg p-4">
        <div class="flex justify-between items-center border-b pb-4 mb-4">
            <div class="flex items-center space-x-4">
                <img src="https://via.placeholder.com/100" alt="Product Image" class="w-16 h-16 object-cover rounded">
                <div>
                    <h2 class="text-lg font-semibold">Product Name</h2>
                    <p class="text-gray-500">$49.99</p>
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <button class="px-3 py-1 bg-gray-200 text-gray-600 rounded hover:bg-gray-300">-</button>
                <span class="px-4">1</span>
                <button class="px-3 py-1 bg-gray-200 text-gray-600 rounded hover:bg-gray-300">+</button>
            </div>
            <p class="text-lg font-semibold">$49.99</p>
            <button class="text-red-600 hover:text-red-800">Remove</button>
        </div>

        <!-- Repeat for more cart items -->
        <div class="flex justify-between items-center border-b pb-4 mb-4">
            <div class="flex items-center space-x-4">
                <img src="https://via.placeholder.com/100" alt="Product Image" class="w-16 h-16 object-cover rounded">
                <div>
                    <h2 class="text-lg font-semibold">Another Product</h2>
                    <p class="text-gray-500">$29.99</p>
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <button class="px-3 py-1 bg-gray-200 text-gray-600 rounded hover:bg-gray-300">-</button>
                <span class="px-4">2</span>
                <button class="px-3 py-1 bg-gray-200 text-gray-600 rounded hover:bg-gray-300">+</button>
            </div>
            <p class="text-lg font-semibold">$59.98</p>
            <button class="text-red-600 hover:text-red-800">Remove</button>
        </div>
    </div>

    <!-- Price Breakdown -->
    <div class="bg-white shadow-lg rounded-lg p-4 mt-6">
        <h2 class="text-2xl font-bold mb-4">Order Summary</h2>
        <div class="flex justify-between mb-2">
            <p class="text-gray-600">Subtotal</p>
            <p class="text-gray-800">$109.97</p>
        </div>
        <div class="flex justify-between mb-2">
            <p class="text-gray-600">Tax</p>
            <p class="text-gray-800">$8.25</p>
        </div>
        <div class="flex justify-between mb-4">
            <p class="text-gray-600">Shipping</p>
            <p class="text-gray-800">$5.00</p>
        </div>
        <div class="flex justify-between font-bold text-lg border-t pt-4">
            <p>Total</p>
            <p>$123.22</p>
        </div>
        <button class="w-full bg-blue-600 text-white py-3 rounded-lg mt-4 hover:bg-blue-700 transition">Proceed to Checkout</button>
    </div>
</section>
</div>