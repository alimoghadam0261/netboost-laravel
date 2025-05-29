<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('templateinsta')}}">تمپلت های آماده</a>

    </div>
    <br>
<div xmlns:wire="http://www.w3.org/1999/xhtml" class="bg-white dark:bg-gray-900 text-black dark:text-white">
    <div class="max-w-5xl mx-auto py-10 px-4">
    <h1
    class="w-[200px] h-[45px] bg-sky-400 pr-[30px] pt-[5px] text-[22px] mr-[10px]"
    >قالبهای آماده ({{$count}})</h1>
    <br>

        قالب های آماده استوری برای شما عزیزان. شما می توانید هر کدام از عکس ها  انتخاب و در استوری خود قرار دهید و عکس و متن خودتونو بهش اضافه کنید.در صورت
        نیاز می توانید به بخش <a
            class="text-sky-400 hover:text-sky-700"
            href="{{route('tutorial')}}">آموزش</a>
        بروید و از آموزشهای این قسمت به رایگان استفاده کنید.
    </p>
    <br>
<div id="pos-article-text-card-106821"></div>
<br>
        <div>
            <div class="mb-4">
                <label class="bg-pink-100 p-1 rounded-sm" for="">دسته بندی:</label>
                <select wire:model.live="category">
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
        </div>
    {{-- گرید به سبک Pinterest --}}
    <div class="columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4">
        @foreach ($images as $image)
            <div class="relative group break-inside-avoid">
                {{-- تصویر کوچک --}}
                <img src="{{ asset('storage/' . $image->file_path) }}"
                     alt="{{ $image->title }}"
                     class="w-full h-auto rounded-lg cursor-pointer hover:opacity-75 transition"
                     @click="$wire.selectImage('{{ $image->file_path }}')">

                {{-- دکمه دانلود --}}
            </div>
        @endforeach
    </div>

    {{-- مودال نمایش تصویر بزرگ --}}
        {{-- مودال نمایش تصویر بزرگ --}}
        <div x-data="{ showModal: @entangle('selectedImage') }" x-cloak>
            <template x-if="showModal">
                <div
                    x-transition
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-80 backdrop-blur-sm"
                    @click="$wire.closeModal()"
                >
                    <div class="relative max-w-3xl w-full mx-4"
                         @click.stop>
                        {{-- نمایش تصویر بزرگ --}}
                        <img :src="'{{ asset('storage') }}/' + showModal"
                             alt="Preview"
                             class="w-full h-auto max-h-[80vh] object-contain rounded-lg shadow-lg mx-auto">

                        {{-- دکمه بستن --}}
                        <button @click="$wire.closeModal()"
                                class="absolute top-2 left-2 bg-white text-black rounded-full p-2 shadow hover:bg-red-600 hover:text-white">
                            ✕
                        </button>

                        {{-- دکمه دانلود --}}
                        <div class="text-center mt-4">
                            <a :href="'{{ asset('storage') }}/' + showModal"
                               download
                               class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">
                                دانلود تصویر
                            </a>
                        </div>
                    </div>
                </div>
            </template>
        </div>
 <div class="mt-6 flex justify-center ">
                    {{ $images->links('vendor.pagination.tailwind') }}
                </div>
<br>
<div id="pos-article-display-106828"></div>
<p class="ali">#تم_استوری, #کاور_استوری, #استوری_اینستاگرام, #طراحی_استوری</p>

    </div>
</div>
</div>
