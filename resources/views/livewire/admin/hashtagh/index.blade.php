<div>

    <!-- دسته بندی اصلی -->
    <div class="mb-4 w-6/12">
        <label for="category" class="block mb-2 font-bold text-gray-700">دسته‌بندی اصلی</label>
        <select wire:model.live="selectedCategory" id="category"
                class="w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-md shadow-sm">
            <option value="">-- انتخاب دسته‌بندی --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }} {{ $category->id }}</option>
            @endforeach
        </select>
    </div>

    <!-- زیرمجموعه‌ها -->
    @if (!empty($subcategories))
        <div class="mb-4">
            <label for="subcategory" class="block mb-2 font-bold text-gray-700">زیرمجموعه</label>
            <select wire:model="selectedSubcategory" id="subcategory"
                    class="w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-md shadow-sm">
                <option value="">-- انتخاب زیرمجموعه --</option>
                @foreach ($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }} {{ $subcategory->id }}</option>
                @endforeach
            </select>
        </div>
    @endif

    <!-- هشتگ -->
    <div class="mb-4">
        <label for="tag" class="block mb-2 font-bold text-gray-700">هشتگ</label>
        <input type="text" wire:model="tag" id="tag"
               class="w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-md shadow-sm">
    </div>

    <!-- دکمه ثبت -->
    <div>
        <button wire:click="save"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-md">
            ذخیره
        </button>
    </div>

    <!-- پیام موفقیت -->
    @if (session()->has('success'))
        <div class="text-green-500 mt-2">
            {{ session('success') }}
        </div>
    @endif
</div>
