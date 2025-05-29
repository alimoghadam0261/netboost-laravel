<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('contentproduct')}}">تولید محتوا</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('moamapic')}}">معمای تصویری</a>
    </div>
    <br>

    <div class="dark:bg-gray-800 h-auto justify-center transform transition-all duration-700 ease-in-out shadow-lg">
        <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
            <h1 class="text-[25px]"><strong>معما های تصویری</strong></h1>
            <br>
            <p>
                شما میتوانید به رایگان معماهای تصویری را دانلود و در شبکه های اجتماعی خود منتشر کنید
            </p>
            <br>
            <p><strong>
                    برای نحوه استفاده می توانید به قسمت
                    <a class="text-sky-400" wire:navigate href="{{route('tutorial')}}">آموزش</a>
                    مراجعه کنید
                </strong></p>
        </div>
<div id="pos-article-text-card-106821"></div>
        <h1 class="text-[20px] p-[30px]"><strong>تعداد : {{$count}}</strong></h1>

        <div x-data="{ showModal: false, imageSrc: '', imageAlt: '' }" @keydown.escape.window="showModal = false">
            <!-- گالری تصاویر -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 p-5">
                @foreach($moama as $item)
                    <div class="w-full max-w-[250px] mx-auto h-[320px] rounded-md transition-all duration-500 hover:scale-[1.2] m-3 cursor-pointer"
                         @click="showModal = true; imageSrc = '{{ asset('storage/'.$item->pic) }}'; imageAlt = '{{ $item->title }}'">
                        <img src="{{ asset('storage/'.$item->pic) }}" alt="{{ $item->title }}" loading="lazy" class="w-full h-[250px] object-cover rounded-md shadow-md">
                        <h1 class="text-center text-sm mt-2">{{ $item->title }}</h1>
                    </div>
                @endforeach
            </div>

            <!-- مودال نمایش تصویر و دکمه دانلود -->
            <template x-teleport="body">
                <div x-show="showModal" x-transition
                     class="fixed inset-0 z-50 flex items-center justify-center bg-black/70"
                     @click.self="showModal = false"
                     style="backdrop-filter: blur(3px);">
                    <div class="relative max-w-3xl w-full mx-4 text-center">
                        <!-- دکمه بستن -->
                        <button @click="showModal = false"
                                class="absolute -top-3 -right-3 text-white bg-red-500 rounded-full w-8 h-8 flex items-center justify-center shadow-md hover:bg-red-600 z-50">
                            ✕
                        </button>

                        <!-- عکس -->
                        <img :src="imageSrc" :alt="imageAlt" class="w-full max-h-[80vh] object-contain rounded-md shadow-lg mb-4">

                        <!-- دکمه دانلود -->
                        <a :href="imageSrc"
                           :download="imageAlt"
                           class="inline-block bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition">
                            دانلود تصویر
                        </a>
                    </div>
                </div>
            </template>
        </div>


        <div class="mt-6 flex justify-center">
            {{ $moama->links('vendor.pagination.tailwind') }}
        </div>
<br>
<div id="pos-article-display-106828"></div>
<p class="ali">#معما_تصویری, #حل_معما_تصویری, #تفکر_انتقادی, #معما_عکس</p>
    </div>
</div>
