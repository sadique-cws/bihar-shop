<section class="container mx-auto p-6">
    <div class="flex flex-col lg:flex-row bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Product Image -->
        <div class="lg:w-1/2">
            <img src="https://via.placeholder.com/500" alt="Product Image" class="w-full h-full object-cover">
        </div>
        
        <!-- Product Details -->
        <div class="lg:w-1/2 p-8">
            <h1 class="text-3xl font-bold mb-2">Product Name</h1>
            <p class="text-xl text-gray-700 mb-4">$49.99</p>
            
            <p class="text-gray-600 mb-6">
                This is a detailed description of the product. It highlights the key features, benefits, and any other important information that the customer needs to know before making a purchase. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            </p>

            <!-- Quantity Selector -->
            <div class="mb-4">
                <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                <select id="quantity" class="mt-1 block w-20 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

            <!-- Add to Cart Button -->
            <div>
                <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">
                    Add to Cart
                </button>
            </div>
        </div>
    </div>
</section>