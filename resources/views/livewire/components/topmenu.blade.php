<div
    class="topmenu z-30 w-full h-[60px] bg-sky-100 dark:bg-gray-800 fixed top-0 flex justify-between items-center text-black  dark:text-white"
    xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="w-1/2 px-[60px]">
        <ul class="flex justify-around">
            <li class="list-none transition-all duration-300 hover:scale-110 hover:bg-sky-200 dark:hover:bg-gray-700 rounded-md">
                <a wire:navigate href="{{route('home')}}">
                    <i class="fa fa-home"></i>
                    خانه
                </a>
            </li>

            <li class="category-menu list-none transition-all duration-300 hover:scale-110 hover:bg-sky-200 dark:hover:bg-gray-700 rounded-md">
                <p><i class="fa-brands fa-buffer"></i> دسته بندی</p>
                <div
                    class="w-[700px] h-[300px] bg-gradient-to-r from-sky-200 via-sky-400 to-sky-600 rounded-[15px] subdesk">
                    <div class="subb">
                    <ul>
                        <li><a wire:navigate href="{{route('linkexchange')}}">تبادل لینک</a></li>
                        <li><a wire:navigate href="{{route('youtube')}}"> دانلود یوتوب | اینستاگرام</a></li>
{{--                        <li><a wire:navigate href="{{route('instagram')}}">دانلود اینستاگرام</a></li>--}}
{{--                        <li><a wire:navigate href="{{route('facebook')}}">دانلود فیسبوک</a></li>--}}
                        <li><a wire:navigate href="{{route('terendgoogle')}}">ترند روز(گوگل)</a></li>
                        <li><a wire:navigate href="{{route('hashtag')}}">هشتگ</a></li>
                        <li><a wire:navigate href="{{route('keywords')}}">کلمات کلیدی</a></li>
                        <li><a wire:navigate href="{{route('helpsite')}}">سایت های کمکی</a></li>
                    </ul>
                    <ul>
                        <li><a wire:navigate href="{{route('proxy')}}">پروکسی های روزانه تلگرام</a></li>
                        <li class="subsub">
                            <a wire:navigate href="{{route('contentproduct')}}">تولید محتوا <i class="text-[12px]fa fa-arrow-circle-left"></i></a>

                        <ul class="subsub-ul">
                            <li><a wire:navigate href="{{route('cta')}}">جملات CTA</a></li>
                            <li><a wire:navigate href="{{route('faal')}}">فال حافظ</a></li>
                            <li><a wire:navigate href="{{route('infomation')}}">فکت های علمی</a></li>
                            <li><a wire:navigate href="{{route('puzzelinfo')}}">معماهای روزانه</a></li>
                            <li><a wire:navigate href="{{route('words')}}">سخن بزرگان</a></li>
                            <li><a wire:navigate href="{{route('challenglist')}}">چالش ها</a></li>
                            <li><a wire:navigate href="{{route('moamapic')}}">معماهای تصویری</a></li>
                            <li><a wire:navigate href="{{route('calender')}}">تقویم شبکه مجازی</a></li>
                            <li><a wire:navigate href="{{route('site')}}">سایت های کمک کننده</a></li>
                        </ul>


                        </li>
                        <li><a wire:navigate href="{{route('voice')}}">متن به صدا</a></li>
                        <li><a wire:navigate href="{{route('hook')}}">ویدیو قلاب</a></li>
                        <li><a wire:navigate href="{{route('music')}}">موزیک ترند</a></li>
                        <li><a wire:navigate href="{{route('templateinsta')}}">قالب استوری</a></li>

{{--                        <li><a wire:navigate href="{{route('imageread')}}">عکس های ترند</a></li>--}}
                    </ul>
                </div>
                </div>

            </li>


            <li class="list-none transition-all duration-300 hover:scale-110 hover:bg-sky-200 dark:hover:bg-gray-700 rounded-md">
                <a wire:navigate href="{{route('tutorial')}}">
                    <i class="fa fa-book-atlas"></i>
                    آموزش
                </a>
            </li>

            <li class="list-none transition-all duration-300 hover:scale-110 hover:bg-sky-200 dark:hover:bg-gray-700 rounded-md">
                <a wire:navigate href="{{route('about')}}">
                    <i class="fa fa-users"></i>
                    درباره ما
                </a>
            </li>

            <li class="list-none transition-all duration-300 hover:scale-110 hover:bg-sky-200 dark:hover:bg-gray-700 rounded-md">
                <a wire:navigate href="{{route('donate')}}">
                    <i class="fa fa-donate"></i>
                    حمایت از ما
                </a>
            </li>
        </ul>
    </div>


    <div class="w-auto text-left ml-6">
        <ul class="flex space-x-4">
            @if(Auth::check())
                <li class="list-none px-[5px] mx-[10px] bg-red-100 dark:bg-gray-700 transition-all duration-300 hover:scale-110 hover:bg-red-200 dark:hover:bg-gray-600 rounded-md">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">خروج</button>
                    </form>

                </li>

            @else
                <li class="list-none px-[5px] mx-[10px] bg-blue-200 dark:bg-gray-700 transition-all duration-300 hover:scale-110 hover:bg-blue-400 dark:hover:bg-gray-600 rounded-md">
                    <a wire:navigate href="{{route('login')}}">
                        <i class="fa fa-lock"></i>
                        ثبت نام | ورود
                    </a>
                </li>
            @endif

            <li class="list-none">
                <i class="fa fa-cloud-moon cursor-pointer" onclick="toggleDarkMode()"></i>
            </li>
        </ul>
    </div>
</div>

<!-- جاوااسکریپت برای دارک مود -->
<script>
    function toggleDarkMode() {
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }
    }

    // بررسی حالت دارک مود ذخیره‌شده در localStorage
    if (localStorage.getItem('theme') === 'dark') {
        document.documentElement.classList.add('dark');
    }


</script>
