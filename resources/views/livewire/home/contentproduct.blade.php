<div class="bg-white dark:bg-gray-900 text-black dark:text-white">
    <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8 font-vazir">

        <!-- عنوان -->
        <h1 class="bg-teal-400 inline-block px-6 py-2 text-[22px] rounded-md mb-6">
            تولید محتوا
        </h1>

        <!-- توضیحات -->
        <div class="space-y-4 mb-8">
            <p>برای شما عزیزان محتواهای مختلف آماده کرده‌ایم که می‌توانید در استوری، پست، ویدیو یا عکس‌های خود استفاده کنید.</p>
            <p>
                در صورت نیاز به آموزش و نحوه استفاده از آیتم‌های زیر می‌توانید به بخش
                <strong>
                    <a href="{{route('tutorial')}}" class="text-sky-400 hover:text-sky-600">آموزش</a>
                </strong>
                بروید و از آموزش‌های رایگان استفاده کنید.
            </p>
            <p>
                <strong>تمامی قسمت‌های سایت رایگان است و روزانه به‌روز می‌شود.</strong>
                در صورت تمایل،
                <a href="{{route('donate')}}" class="text-sky-400 hover:text-sky-700">حمایت مالی از سایت</a>
                را فراموش نکنید.
            </p>
        </div>

        <!-- گرید: دو ستون موبایل، سه ستون md+ -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 px-2">
            <a href="{{route('cta')}}" class="block">
                <button
                    class="w-full h-[150px] rounded-[15px] shadow-md border border-lime-400
                 bg-lime-300 transition duration-500 hover:bg-lime-600 hover:text-white">
                    جمله‌های CTA
                </button>
            </a>

            <a href="{{route('faal')}}" class="block">
                <button
                    class="w-full h-[150px] rounded-[15px] shadow-md border border-fuchsia-400
                 bg-fuchsia-300 transition duration-500 hover:bg-fuchsia-600 hover:text-white">
                    فال‌های حافظ روزانه
                </button>
            </a>

            <a href="{{route('infomation')}}" class="block">
                <button
                    class="w-full h-[150px] rounded-[15px] shadow-lg border border-pink-400
                 bg-pink-300 transition duration-500 hover:bg-pink-600 hover:text-white hover:shadow-sm">
                    فکت‌های علمی
                </button>
            </a>

            <a href="{{route('puzzelinfo')}}" class="block">
                <button
                    class="w-full h-[150px] rounded-[15px] shadow-md border border-violet-400
                 bg-violet-300 transition duration-500 hover:bg-violet-600 hover:text-white">
                    معماهای روزانه
                </button>
            </a>

            <a href="{{route('words')}}" class="block">
                <button
                    class="w-full h-[150px] rounded-[15px] shadow-md border border-violet-400
                 bg-violet-300 transition duration-500 hover:bg-violet-600 hover:text-white">
                    سخن بزرگان
                </button>
            </a>

            <a href="{{route('challenglist')}}" class="block">
                <button
                    class="w-full h-[150px] rounded-[15px] shadow-md border border-yellow-400
                 bg-yellow-300 transition duration-500 hover:bg-yellow-600 hover:text-white">
                    چالش‌ها
                </button>
            </a>

            <a href="{{route('calender')}}" class="block">
                <button
                    class="w-full h-[150px] rounded-[15px] shadow-md border border-blue-400
                 bg-blue-300 transition duration-500 hover:bg-blue-600 hover:text-white">
                    تقویم چالش و تخفیف
                </button>
            </a>

            <a href="{{route('moamapic')}}" class="block">
                <button
                    class="w-full h-[150px] rounded-[15px] shadow-md border border-pink-400
                 bg-pink-300 transition duration-500 hover:bg-pink-600 hover:text-white">
                    معما تصویری
                </button>
            </a>
        </div>

    </div>
</div>
