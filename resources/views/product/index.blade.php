<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-8 px-4">
                <div>
                    <h2 class="text-2xl font-bold text-white tracking-wide">Product List</h2>
                    <p class="text-sm text-gray-400 mt-1">Manage your product inventory</p>
                </div>
                <x-add-product url="{{ route('product.create') }}" name="Add New Product" />
            </div>

            <div class="bg-[#1e293b] rounded-2xl shadow-xl overflow-hidden border border-gray-700/40">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-gray-700/60 bg-[#1e293b]">
                                <th class="py-5 px-8 text-xs font-semibold text-gray-400 uppercase tracking-widest">#
                                </th>
                                <th class="py-5 px-8 text-xs font-semibold text-gray-400 uppercase tracking-widest">NAME
                                </th>
                                <th
                                    class="py-5 px-8 text-xs font-semibold text-gray-400 uppercase tracking-widest text-center">
                                    QUANTITY</th>
                                <th class="py-5 px-8 text-xs font-semibold text-gray-400 uppercase tracking-widest">
                                    PRICE</th>
                                <th class="py-5 px-8 text-xs font-semibold text-gray-400 uppercase tracking-widest">
                                    OWNER</th>
                                <th
                                    class="py-5 px-8 text-xs font-semibold text-gray-400 uppercase tracking-widest text-center">
                                    ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr class="border-b border-gray-700/50 hover:bg-slate-700/20 transition duration-150">
                                    <td class="py-6 px-8 text-sm text-gray-400">{{ $loop->iteration }}</td>
                                    <td class="py-6 px-8 text-sm font-bold text-white">{{ $product->name }}</td>
                                    <td class="py-6 px-8 text-center">
                                        <span
                                            class="px-4 py-1.5 rounded-full text-xs font-bold bg-emerald-900/40 text-emerald-400 border border-emerald-800/60 shadow-sm">
                                            {{ $product->quantity }}
                                        </span>
                                    </td>
                                    <td class="py-6 px-8 text-sm font-bold text-white">Rp
                                        {{ number_format($product->price, 0, ',', '.') }}</td>
                                    <td class="py-6 px-8 text-sm text-gray-300 font-medium">{{ $product->user->name }}</td>
                                    <td class="py-6 px-8 text-center text-gray-500">
                                        <div class="flex items-center justify-center space-x-3">
                                            <a href="{{ route('product.show', $product) }}"
                                                class="hover:text-gray-300 transition inline-block">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <x-edit-button url="{{ route('product.edit', $product) }}" />
                                            <x-delete-button url="{{ route('product.destroy', $product) }}" />
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>