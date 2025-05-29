<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 text-gray-700 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{ route('home') }}">خانه</a>
        <a class="bg-sky-100 text-gray-700 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{ route('music') }}">موزیک|صدا</a>
        <a class="bg-sky-100 text-gray-700 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{ route('musiceffect') }}">افکت صدا</a>
    </div>

    <br>

    <div class="dark:bg-gray-800 h-auto justify-center shadow-lg transition-all duration-700 ease-in-out">
        <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto py-10">
                <h1>برای شما عزیزان لیستی از افکت های صدا تهیه شده است که می توانید به رایگان دانلود کنید</h1>
                <br>
                <p>
                    در صورت نیاز به آموزش شما می توانید به بخش
                    <a class="text-sky-400" wire:navigate href="{{ route('tutorial') }}">آموزش</a>
                    مراجعه کنید و به رایگان استفاده نمایید
                </p>
            </div>

            <br>

            <div class="mb-4">
                <select wire:model.live="subcategory" id="subcategory" class="border p-2 rounded">
                    <option value="">انتخاب زیر دسته</option>
                    <option value="حیوانات">حیوانات</option>
                    <option value="طبیعت">طبیعت</option>
                    <option value="سلاح">سلاح و انفجار</option>
                    <option value="عمومی">عمومی</option>
                    <option value="ورزشی">ورزشی</option>
                    <option value="نوستالژی">نوستالژی</option>
                    <option value="وسیله نقلیه">وسایل نقلیه</option>
                </select>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @forelse ($sounds as $item)
                    <div class="bg-white h-[200px] shadow-md rounded-lg overflow-hidden">
                        <audio controls class="w-full h-40 mt-[-70px] object-cover">
                            <source src="{{ asset('storage/' . $item->sound) }}" type="audio/mpeg">
                            مرورگر شما از تگ ویدیو پشتیبانی نمی‌کند.
                        </audio>
                        <div class="p-1 text-center">
                            <h2 class="text-lg font-semibold mb-2">{{ $item->name }}</h2>
                            <a href="{{ asset('storage/' . $item->sound) }}" download="{{ $item->name }}"
                               class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">
                                دانلود
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-4 text-center text-gray-400">هیچ صدایی یافت نشد.</div>
                @endforelse
            </div>

            <div class="mt-6 flex justify-center">
                {{ $sounds->links('vendor.pagination.tailwind') }}
            </div>
        </div>
    </div>
</div>
