<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('proxy')}}">پروکسی تلگرام</a>


    </div>
    <br>
<div class="dark:bg-gray-800 h-auto justify-center
    transform    transition-all duration-700 ease-in-out shadow-lg">
    <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-extrabold mb-6 text-center text-gray-800 dark:text-gray-100">پروکسی‌های امروز|proxy</h1>
<p>
    پروکسی ها روزانه به صورت کاملا رایگان آپدیت می شوند برای استفاده رایگان فقط کافیست روی هرکدام از لینک های زیر کلیک کنید تا به صورت اتومات روی تلگرام شما قرار بگیرند
    <br>
    لازم به ذکر است پروکسی ها امکان دارد فعال نباشند در صورت عدم کارکرد روی لینک دیگری تست کنید
    <br>
    برای آموزش رایگان این قسمت و آموزشها و ترفند های بیشتر به قسمت
    <a wire:navigate href="{{route('tutorial')}}" class="text-blue-400">آموزش</a>
    مراجعه کنید
</p>
    <br>
<div>
<div id="pos-article-text-card-106821"></div>
</div>
<br>
    @if(count($proxies))
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($proxies as $proxy)
                <a href="{{ $proxy['link'] }} "
                   target="_blank"
                   class="flex items-center justify-center p-4 bg-pink-300 hover:bg-pink-600 dark:bg-gray-700 rounded-xl
                   shadow hover:shadow-md transition-shadow duration-200
                   "
                >
                    <span class="text-lg font-medium text-gray-700 dark:text-gray-200">
                        لینک {{ $loop->iteration }}
                    </span>
                </a>
            @endforeach
        </div>
    @else
        <p class="text-center text-gray-500 dark:text-gray-400 mt-8">فعلاً پروکسی‌ای برای نمایش وجود ندارد.</p>
    @endif



<div id="pos-article-display-106828"></div>


<p class="ali">#پروکسی_تلگرام, #تلگرام, #پروکسی_رایگان, #تلگرام_رایگان, #امنیت_تلگرام</p>
</div>
</div>
</div>
