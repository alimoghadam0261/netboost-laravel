<div>

    <div class="container mx-auto p-4">
        {{-- فرم آپلود --}}
        <form wire:submit.prevent="save" class="mb-6">
            @csrf
            <div class="mb-4">
                <input type="text" wire:model="name" class="w-full border-gray-300 rounded-lg p-2" placeholder="عنوان موزیک">
                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <input type="file" wire:model="sound" class="w-full border-gray-300 rounded-lg p-2">
                @error('sound') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <select wire:model="category">
                    <option value="music">موزیک</option>
                    <option value="soundEffect">افکت صدا</option>
                </select>
                @error('sound') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <select wire:model="subcategory">
                    <option value="">انتخاب کنید</option>
                    <option value="حیوانات">حیوانات</option>
                    <option value="طبیعت">طبیعت</option>
                    <option value="سلاح">سلاح و انفجار</option>
                    <option value="عمومی"> عمومی</option>
                    <option value="ورزشی"> ورزشی</option>
                    <option value="نوستالژی"> نوستالژی</option>
                    <option value="وسیله نقلیه"> وسایل نقلیه</option>
                </select>
                @error('sound') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                آپلود صدا
            </button>
        </form>

        {{-- نمایش پیام موفقیت --}}
        @if (session()->has('success'))
            <div class="mb-4 p-2 bg-green-200 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        {{-- نمایش لیست ویدیوها --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($sounds as $item)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <audio controls class="w-full h-48 object-cover" >
                        <source src="{{ asset('storage/' . $item->sound) }}" type="audio/mpeg">
                        مرورگر شما از تگ ویدیو پشتیبانی نمی‌کند.
                    </audio>
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-2">{{ $item->name }}</h2>
                        <a href="{{ asset('storage/' . $item->sound) }}" download="{{ $item->name }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">
                            دانلود
                        </a>
                        <button wire:click="delete({{ $item->id }})" class="inline-block bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-300">
                            حذف
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mt-6 flex justify-center ">
        {{ $sounds->links('vendor.pagination.tailwind') }}
    </div>
    <br><br>
</div>
