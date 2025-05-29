<div class="p-6 bg-white shadow-md rounded-lg">
    <a wire:navigate.hover href="{{route('hashindex')}}">
        <button    class="bg-sky-400 w-[150px] h-[45px] absolute left-[20px] rounded-md ">
            ساخت هشتگ
        </button>
    </a>
    <form wire:submit.prevent="save" class="mb-6">
        <!-- پیام موفقیت -->
        @if (session()->has('success'))
            <div class="bg-green-100 text-green-800 p-2 rounded mb-3">
                {{ session('success') }}
            </div>
        @endif

        <!-- انتخاب والد -->
        <div class="mb-4">
            <label for="parent_id" class="block text-sm font-medium text-gray-700">دسته‌بندی والد (اختیاری):</label>
            <select wire:model.live="parent_id" id="parent_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="">بدون والد</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('parent_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- نام دسته‌بندی -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">نام دسته‌بندی:</label>
            <input type="text" wire:model="name" id="name" class="mt-1 block w-6/12 border-gray-300 rounded-md shadow-sm">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- دکمه ثبت -->
        <div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                ذخیره
            </button>
        </div>
    </form>

    <!-- لیست دسته‌بندی‌ها -->
    <div class="mt-6">
        <h2 class="text-lg font-semibold mb-3">دسته‌بندی‌های موجود:</h2>

        <!-- نمایش دسته‌بندی‌ها به‌صورت چند ستونه -->
        <div class="grid grid-cols-3 gap-4">
            @foreach ($categories as $category)
                <div class="border p-4 rounded-lg shadow-md">
                    <div class="flex justify-between items-center">
                        <span class="font-medium">{{ $category->name }}</span>
                        <button wire:click="deleteCategory({{ $category->id }})" class="text-red-500 hover:text-red-700">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>

                    @if ($category->children->isNotEmpty())
                        <ul class="mt-2 space-y-1">
                            @foreach ($category->children as $child)
                                <li class="flex justify-between items-center text-gray-600 pl-2 border-l">
                                    <span>{{ $child->name }}</span>
                                    <button wire:click="deleteCategory({{ $child->id }})" class="text-red-400 hover:text-red-600">
                                     delete
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

</div>
