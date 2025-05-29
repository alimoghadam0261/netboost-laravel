<div xmlns:wire="http://www.w3.org/1999/xhtml" class="bg-white text-black dark:bg-gray-900 text-black dark:text-white">
    <div class="max-w-5xl mx-auto py-10 text-black bg-white">
        <!-- Tabs -->
        <div class="flex flex-wrap border-b border-gray-300 dark:border-gray-700 mb-5 gap-2 justify-center">
            <a wire:navigate.hover href="{{route('youtube')}}">
                <button class="min-w-[150px] px-4 py-2 text-black dark:text-white text-sm md:text-base
                bg-gray-100 dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-blue-400 hover:text-white rounded transition-all duration-300">
                    <strong><i class="fa-brands fa-youtube"></i> دانلود از یوتیوب | اینستاگرام </strong>
                </button>
            </a>

{{--            <a wire:navigate.hover href="{{route('instagram')}}">--}}
{{--                <button class="min-w-[150px] px-4 py-2 text-black dark:text-white text-sm md:text-base--}}
{{--                bg-gray-100 dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-blue-400 hover:text-white rounded transition-all duration-300">--}}
{{--                    <strong><i class="fa-brands fa-instagram"></i> دانلود از اینستاگرام</strong>--}}
{{--                </button>--}}
{{--            </a>--}}

{{--            <a wire:navigate.hover href="{{route('facebook')}}">--}}
{{--                <button class="min-w-[150px] px-4 py-2 text-black dark:text-white text-sm md:text-base--}}
{{--                bg-gray-100 dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-blue-400 hover:text-white rounded transition-all duration-300">--}}
{{--                    <strong><i class="fa-brands fa-facebook"></i> دانلود از فیسبوک</strong>--}}
{{--                </button>--}}
{{--            </a>--}}

            <a wire:navigate.hover href="{{route('linkexchange')}}">
                <button class="min-w-[150px] px-4 py-2 text-black text-[14px] dark:text-white text-sm md:text-base
                bg-gray-100 dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-blue-400 hover:text-white rounded transition-all duration-300">
                    <strong><i class="fa fa-comment"></i> تبادل لینک</strong>
                </button>
            </a>


            <a wire:navigate.hover href="{{route('hashtag')}}">
                <button class="min-w-[150px] px-4 py-2 text-black dark:text-white text-sm md:text-base
                bg-gray-100 dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-blue-400 hover:text-white rounded transition-all duration-300">
                    <strong><i class="fa fa-hashtag"></i> تولید هشتگ</strong>
                </button>
            </a>

            <a wire:navigate.hover href="{{route('keywords')}}">
                <button class="min-w-[150px] px-4 py-2 text-black dark:text-white text-sm md:text-base
                bg-gray-100 dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-blue-400 hover:text-white rounded transition-all duration-300">
                    <strong><i class="fa fa-keyboard"></i> کلمات کلیدی</strong>
                </button>
            </a>
            <a wire:navigate.hover href="{{route('proxy')}}">
                <button class="min-w-[150px] px-4 py-2 text-black dark:text-white text-sm md:text-base
                bg-gray-100 dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-blue-400 hover:text-white rounded transition-all duration-300">
                    <strong><i class="fa-brands fa-telegram"></i> پروکسی تلگرام</strong>
                </button>
            </a>

{{--            <a wire:navigate.hover href="{{route('voice')}}">--}}
{{--                <button class="min-w-[150px] px-4 py-2 text-black dark:text-white text-sm md:text-base--}}
{{--                bg-gray-100 dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-blue-400 hover:text-white rounded transition-all duration-300">--}}
{{--                    <strong><i class="fa fa-voicemail"></i> تبدیل متن به صدا</strong>--}}
{{--                </button>--}}
{{--            </a>--}}
        </div>
    </div>
</div>
