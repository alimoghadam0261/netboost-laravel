<div xmlns:wire="http://www.w3.org/1999/xhtml" class="bg-white dark:bg-gray-900 text-black dark:text-white">
    <div class="max-w-5xl mx-auto py-10 px-4 flex">
<div>
                <img src="{{asset('./img/defult/webp/404.webp')}}" alt="404" loading="lazy" width="300">
</div>
        <div>
                <h1 class="text=[25px]"><strong>خطای ورودی</strong></h1>
                <p>
                    دوست عزیز به نظر می رسه مسیر اشتباهی اومدی و آدرس را استباه وارد کردی
                </p>
                <a wire:navigate href="{{route('home')}}">
                    <button class="rounded-md shadow-lg bg-sky-400 w-[150px] h-[50px]" >بیا به این صفحه</button></a>

    </div>
    </div>
    </div>
