<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#1e293b] rounded-2xl shadow-xl overflow-hidden p-10 border border-gray-700/50">
                <!-- Header part inside the card -->
                <div class="flex justify-between items-center mb-8 border-b border-gray-700/50 pb-8">
                    <div class="flex items-center gap-5">
                        <a href="{{ route('product.index') }}" class="text-gray-400 hover:text-white transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </a>
                        <div>
                            <h3 class="text-2xl font-bold text-white tracking-wide">Product Detail</h3>
                            <p class="text-sm text-gray-400 mt-1">Viewing product #{{ $product->id }}</p>
                        </div>
                    </div>

                    @can('update', $product)
                        <div class="flex gap-4">
                            <a href="{{ route('product.edit', $product) }}"
                                class="py-2.5 px-6 text-sm font-bold text-amber-500 bg-transparent rounded-xl border border-amber-500/50 hover:bg-amber-500/10 hover:text-amber-400 transition flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                    </path>
                                </svg>
                                Edit
                            </a>

                            <form method="POST" action="{{ route('product.destroy', $product) }}" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete this product?')"
                                    class="py-2.5 px-6 text-sm font-bold text-rose-500 bg-transparent rounded-xl border border-rose-500/50 hover:bg-rose-500/10 hover:text-rose-400 transition flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        </div>
                    @endcan
                </div>

                <div class="space-y-0 px-2">
                    <div class="grid grid-cols-3 py-6 border-b border-gray-700/50">
                        <div class="text-xs font-semibold text-gray-500 uppercase tracking-widest flex items-center">
                            PRODUCT NAME</div>
                        <div class="col-span-2 text-base font-bold text-white">{{ $product->name }}</div>
                    </div>

                    <div class="grid grid-cols-3 py-6 border-b border-gray-700/50">
                        <div class="text-xs font-semibold text-gray-500 uppercase tracking-widest flex items-center">
                            QUANTITY</div>
                        <div class="col-span-2">
                            <span
                                class="px-5 py-2 rounded-full text-xs font-bold bg-emerald-900/40 text-emerald-400 border border-emerald-800/60 shadow-sm">
                                {{ $product->quantity }} IN STOCK
                            </span>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 py-6 border-b border-gray-700/50">
                        <div class="text-xs font-semibold text-gray-500 uppercase tracking-widest flex items-center">
                            PRICE</div>
                        <div class="col-span-2 text-base font-bold text-white">Rp
                            {{ number_format($product->price, 0, ',', '.') }}</div>
                    </div>

                    <div class="grid grid-cols-3 py-6 border-b border-gray-700/50">
                        <div class="text-xs font-semibold text-gray-500 uppercase tracking-widest flex items-center">
                            OWNER</div>
                        <div class="col-span-2 flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-indigo-600/80 flex items-center justify-center text-sm font-bold text-white shadow-md">
                                {{ strtoupper(substr($product->user->name, 0, 1)) }}
                            </div>
                            <span class="text-base font-bold text-white">{{ $product->user->name }}</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 py-6 border-b border-gray-700/50">
                        <div class="text-xs font-semibold text-gray-500 uppercase tracking-widest flex items-center">
                            CREATED AT</div>
                        <div class="col-span-2 text-sm text-gray-300 font-medium">
                            {{ $product->created_at->format('d M Y, H:i') }}</div>
                    </div>

                    <div class="grid grid-cols-3 py-6">
                        <div class="text-xs font-semibold text-gray-500 uppercase tracking-widest flex items-center">
                            UPDATED AT</div>
                        <div class="col-span-2 text-sm text-gray-300 font-medium">
                            {{ $product->updated_at->format('d M Y, H:i') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>