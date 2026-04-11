<x-app-layout>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#1e293b] rounded-2xl shadow-xl overflow-hidden p-8 border border-gray-700/50">
                <div class="mb-10 flex items-center gap-4">
                    <a href="{{ route('product.index') }}" class="text-gray-400 hover:text-white transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </a>
                    <div>
                        <h3 class="text-2xl font-bold text-white tracking-wide">Add Product</h3>
                        <p class="text-sm text-gray-400 mt-1">Fill in the details to add a new product</p>
                    </div>
                </div>

                <form method="POST" action="{{ route('product.store') }}">
                    @csrf
                    
                    <div class="mb-8">
                        <label for="name" class="block text-sm font-semibold text-gray-300 mb-3">Nama Produk <span class="text-rose-500">*</span></label>
                        <input type="text" name="name" id="name" class="bg-[#0f172a] border border-gray-700/80 text-white text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3.5 transition" placeholder="e.g. Wireless Headphones" required>
                    </div>

                    <div class="grid grid-cols-2 gap-8 mb-10">
                        <div>
                            <label for="quantity" class="block text-sm font-semibold text-gray-300 mb-3">Quantity <span class="text-rose-500">*</span></label>
                            <input type="number" name="quantity" id="quantity" class="bg-[#0f172a] border border-gray-700/80 text-white text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3.5 transition" placeholder="0" required>
                        </div>
                        <div>
                            <label for="price" class="block text-sm font-semibold text-gray-300 mb-3">Price (Rp) <span class="text-rose-500">*</span></label>
                            <input type="number" name="price" id="price" class="bg-[#0f172a] border border-gray-700/80 text-white text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3.5 transition" placeholder="1000" required>
                        </div>
                    </div>

                    <div class="flex justify-end gap-4 mt-8 pt-6 border-t border-gray-700/50">
                        <a href="{{ route('product.index') }}" class="py-2.5 px-6 text-sm font-bold text-gray-300 focus:outline-none bg-gray-700/40 rounded-xl hover:bg-gray-700 hover:text-white transition">
                            Cancel
                        </a>
                        <button type="submit" class="text-white bg-indigo-500 hover:bg-indigo-600 shadow-lg shadow-indigo-500/30 focus:ring-4 focus:outline-none focus:ring-indigo-800 font-bold rounded-xl text-sm px-6 py-2.5 text-center transition">
                            Save Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>