<x-app-layout>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#1e293b] rounded-2xl shadow-xl overflow-hidden p-8 border border-gray-700/50">
                <div class="mb-10 flex items-center gap-4">
                    <a href="{{ route('product.show', $product) }}" class="text-gray-400 hover:text-white transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </a>
                    <div>
                        <h3 class="text-2xl font-bold text-white tracking-wide">Edit Product</h3>
                        <p class="text-sm text-gray-400 mt-1">Update details for {{ $product->name }}</p>
                    </div>
                </div>

                <form id="update-form" method="POST" action="{{ route('product.update', $product) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-8">
                        <label for="name" class="block text-sm font-semibold text-gray-300 mb-3">Product Name <span
                                class="text-rose-500">*</span></label>
                        <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}"
                            class="bg-[#0f172a] border border-gray-700/80 text-white text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3.5 transition"
                            required>
                        @error('name')
                            <p class="text-rose-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-2 gap-8 mb-10">
                        <div>
                            <label for="quantity" class="block text-sm font-semibold text-gray-300 mb-3">Quantity <span
                                    class="text-rose-500">*</span></label>
                            <input type="number" name="quantity" id="quantity" value="{{ old('quantity', $product->quantity) }}"
                                class="bg-[#0f172a] border border-gray-700/80 text-white text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3.5 transition"
                                required>
                            @error('quantity')
                                <p class="text-rose-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="price" class="block text-sm font-semibold text-gray-300 mb-3">Price (Rp) <span
                                    class="text-rose-500">*</span></label>
                            <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}"
                                class="bg-[#0f172a] border border-gray-700/80 text-white text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3.5 transition"
                                required>
                            @error('price')
                                <p class="text-rose-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </form>

                <form id="delete-form" method="POST" action="{{ route('product.destroy', $product) }}" class="hidden">
                    @csrf
                    @method('DELETE')
                </form>

                <div class="flex items-center justify-between mt-8 pt-6 border-t border-gray-700/50">
                    <div>
                        @can('delete', $product)
                            <button type="submit" form="delete-form"
                                class="text-rose-500 hover:text-rose-400 font-bold text-sm flex items-center gap-2 transition px-3 py-2 rounded-lg hover:bg-rose-500/10"
                                onclick="return confirm('Are you sure you want to delete this product?')">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                                Delete Product
                            </button>
                        @endcan
                    </div>

                    <div class="flex gap-4">
                        <a href="{{ route('product.show', $product) }}"
                            class="py-2.5 px-6 text-sm font-bold text-gray-300 focus:outline-none bg-gray-700/40 rounded-xl hover:bg-gray-700 hover:text-white transition">
                            Cancel
                        </a>
                        <button type="submit" form="update-form"
                            class="text-white bg-indigo-500 hover:bg-indigo-600 shadow-lg shadow-indigo-500/30 focus:ring-4 focus:outline-none focus:ring-indigo-800 font-bold rounded-xl text-sm px-6 py-2.5 text-center transition">
                            Update Product
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>