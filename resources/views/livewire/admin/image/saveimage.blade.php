<div>
    <div>
        <label>دسته‌بندی:</label>
        <select wire:model.live="selectedCategory">
            <option value="">انتخاب دسته‌بندی</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    @if ($subcategories)
        <div>
            <label>زیرمجموعه:</label>
            <select wire:model="selectedSubcategory">
                <option value="">انتخاب زیرمجموعه</option>
                @foreach ($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                @endforeach
            </select>
        </div>
    @endif

    <div>
        <input type="file" wire:model="uploadedImages" multiple>
        @error('uploadedImages.*') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>

    <button wire:click="save">ذخیره</button>

    @if ($images)
        <div class="grid grid-cols-4 gap-4 mt-4">
            @foreach ($imgg as $image)
                <div class="relative">
                    <img src="{{ asset('storage/' . $image->path) }}" alt="Image" class="w-full h-40 object-cover">
                    <button wire:click="deleteImage({{ $image->id }})" class="absolute top-0 right-0 bg-red-500 text-white px-2 py-1">
                        حذف
                    </button>
                </div>
            @endforeach
        </div>
    @endif

    @if (session()->has('success'))
        <div class="text-green-500">{{ session('success') }}</div>
    @endif
</div>
