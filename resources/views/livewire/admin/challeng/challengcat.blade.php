<div class="max-w-5xl mx-auto py-10">
    <a wire:navigate.hover href="{{route('challeng.admin')}}">
        <button    class="bg-sky-400 w-[150px] h-[45px] absolute left-[20px] rounded-md ">
            اضافه کردن چالش
        </button>
    </a>
    <form wire:submit.prevent="save" class="mb-6">
        <!-- پیام موفقیت -->
        @if (session()->has('success'))
            <div class="bg-green-100 text-green-800 p-2 rounded mb-3">
                {{ session('success') }}
            </div>
        @endif



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
                            delete
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
