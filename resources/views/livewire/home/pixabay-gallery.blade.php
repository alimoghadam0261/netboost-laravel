<div
    class="dark:bg-gray-900 text-black dark:text-white dark:max-w-full  youtube-mobile"
    x-data="{ open: false, imageUrl: '' }" class="p-4 bg-gray-100 rounded-lg shadow-md ">
    {{-- انتخاب دسته‌بندی --}}
    <div class="max-w-5xl mx-auto py-10">
    <div class="mb-4">
        <select wire:model.live="selectedCategory"
                class="w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-md p-2">
            <option value="">انتخاب دسته‌بندی</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    {{-- انتخاب زیرمجموعه --}}

    @if (!empty($subcategories))
        <div class="mb-4">
            <select wire:model.live="selectedSubcategory"
                    class="w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-md p-2">
                <option value="">انتخاب زیرمجموعه</option>
                @foreach ($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
    </div>
    {{-- نمایش تصاویر --}}
    @if ($images->isNotEmpty())
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($images as $image)
                <div class="overflow-hidden rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <img src="{{ asset('storage/' . $image->path) }}" loading="lazy"
                         alt="{{ $image->id }}"
                         class="w-full h-48 object-cover cursor-pointer"
                         @click="imageUrl = '{{ asset('storage/' . $image->path) }}'; open = true;">
                </div>
            @endforeach
        </div>

        {{-- پیجینیشن --}}
        <div class="mt-6">
            {{ $images->links('pagination::tailwind') }}
        </div>
    @else
        @if ($selectedSubcategory || $selectedCategory)
            <p class="text-red-500 mt-4">تصویری برای این دسته‌بندی وجود ندارد.</p>
        @endif
    @endif

    {{-- مودال برای نمایش تصویر --}}
    <div x-show="open" x-cloak
         class="fixed inset-0 bg-black bg-opacity-80 z-50 flex items-center justify-center"
         @click.self="open = false"> {{-- کلیک روی پس‌زمینه برای بستن مودال --}}
        <div class="relative">
            <button @click="open = false" class="absolute top-2 right-2 text-white text-2xl">&times;</button>
            <img :src="imageUrl" class="max-w-full max-h-[90vh] rounded-lg shadow-lg">
        </div>
    </div>
</div>
