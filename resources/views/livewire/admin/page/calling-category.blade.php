<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-semibold mb-4">Categories</h1>

    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
        <thead class="bg-gray-50 dark:bg-gray-800">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slug</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-900 dark:divide-gray-700">
            @forelse ($categories as $category)
                <tr>
                    <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-white">{{ $category->name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">{{ $category->slug }}</td>
                    <td class="px-6 py-4">
                        @if ($category->image)
                            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="w-16 h-16 object-cover rounded">
                        @else
                            <span class="text-gray-500 dark:text-gray-400">No Image</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-sm font-medium">
                        <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="text-red-600 dark:text-red-500 hover:underline">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">No categories found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>