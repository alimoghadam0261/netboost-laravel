<div>
    <div class="container mx-auto p-4">
        {{-- فرم آپلود --}}
        <form wire:submit.prevent="save" class="mb-6" enctype="multipart/form-data">

            <div class="mb-4">
                <input type="text" wire:model="title" name="title" class="w-full border-gray-300 rounded-lg p-2" placeholder="عنوان عکس">
                @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <input type="file" wire:model="img" name="img" class="w-full border-gray-300 rounded-lg p-2" accept="image/*">
                @error('img') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="category">دسته بندی:</label>
                <select wire:model="category">
                    <option value="">انتخاب کنید</option>
                    <option value="بکگراند">بکگراند</option>
                    <option value="گیف متحرک">گیف متحرک</option>
                    <option value="قالب">قالب</option>
                    <option value="موشن گرافیک">موشن گرافیک</option>
                    <option value="میم">میم</option>
                    <option value="پرده سبز">پرده سبز</option>
                    <option value="تراول فیس">تراول فیس</option>
                </select>
                @error('category') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                آپلود عکس
            </button>
        </form>

        {{-- نمایش پیام موفقیت --}}
        @if (session()->has('success'))
            <div class="mb-4 p-2 bg-green-200 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        {{-- نمایش لیست عکس‌ها --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($images as $img)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $img->file_path) }}" alt="{{ $img->title }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-2">{{ $img->title }}</h2>
                        <a href="{{ asset('storage/' . $img->file_path) }}" download="{{ $img->title }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">
                            دانلود
                        </a>
                        <button wire:click="delete({{ $img->id }})" class="inline-block bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-300">
                            حذف
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- صفحه بندی --}}
    <div class="mt-6 flex justify-center">
        {{ $images->links('vendor.pagination.tailwind') }}
    </div>
</div>
