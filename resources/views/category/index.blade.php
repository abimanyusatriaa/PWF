<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-8 px-4">
                <div>
                    <h2 class="text-2xl font-bold text-white tracking-wide">Category List</h2>
                    <p class="text-sm text-gray-400 mt-1">Manage your product categories</p>
                </div>
                <x-add-product url="{{ route('category.create') }}" name="Add New Category" />
            </div>

            <div class="bg-[#1e293b] rounded-2xl shadow-xl overflow-hidden border border-gray-700/40">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-gray-700/60 bg-[#1e293b]">
                                <th class="py-5 px-8 text-xs font-semibold text-gray-400 uppercase tracking-widest">#</th>
                                <th class="py-5 px-8 text-xs font-semibold text-gray-400 uppercase tracking-widest">NAME</th>
                                <th class="py-5 px-8 text-xs font-semibold text-gray-400 uppercase tracking-widest text-center">TOTAL PRODUCTS</th>
                                <th class="py-5 px-8 text-xs font-semibold text-gray-400 uppercase tracking-widest text-center">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr class="border-b border-gray-700/50 hover:bg-slate-700/20 transition duration-150">
                                    <td class="py-6 px-8 text-sm text-gray-400">{{ $loop->iteration }}</td>
                                    <td class="py-6 px-8 text-sm font-bold text-white">{{ $category->name }}</td>
                                    <td class="py-6 px-8 text-center">
                                        <span class="px-4 py-1.5 rounded-full text-xs font-bold bg-emerald-900/40 text-emerald-400 border border-emerald-800/60 shadow-sm">
                                            {{ $category->products_count }}
                                        </span>
                                    </td>
                                    <td class="py-6 px-8 text-center text-gray-500">
                                        <div class="flex items-center justify-center space-x-3">
                                            <x-edit-button url="{{ route('category.edit', $category) }}" />
                                            <x-delete-button url="{{ route('category.destroy', $category) }}" />
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
