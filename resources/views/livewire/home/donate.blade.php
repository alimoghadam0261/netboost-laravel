<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('donate')}}">حمایت از ما</a>
    </div>
    <br>
<div class="dark:bg-gray-800 h-auto justify-center transform transition-all duration-700 ease-in-out shadow-lg">
    <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold text-center">حمایت از ما</h1>
        <br>
        <p class="text-justify">
            👋 دوستان عزیز و همراهان گرامی
            <br><br>
            تمامی امکانات سایت ما به صورت رایگان برای شما عزیزان فراهم شده است تا بتوانید به راحتی از خدمات ما استفاده کنید. اما حفظ و نگهداری این پروژه، به‌روزرسانی بخش‌های مختلف و ارائه‌ی امکانات جدید، هزینه‌های زیادی را به همراه دارد.
            <br><br>
            برای تکمیل این پروژه و افزودن بخش‌های جدید مانند:
        </p>
        <br>
        <ul class="list-disc list-inside">
            <li>✅ کپشن‌نویسی خودکار</li>
            <li>✅ داستان‌نویسی و مقاله‌نویسی هوشمند</li>
            <li>✅ افزودن قابلیت‌های پیشرفته برای عکس و فیلم</li>
            <li>✅ هزینه‌های جانبی این پروژه و …</li>
        </ul>
        <br>
        <p class="text-justify">
            ما به سخت‌افزارهای به‌روز و منابع مالی نیاز داریم. از این رو، از شما عزیزان صمیمانه درخواست داریم که اگر مایل هستید و در توان شماست، با کمک مالی خود به ادامه‌ی این مسیر کمک کنید. 🙏
            <br><br>
            مجموعه‌ی آریابد از همراهی و حمایت شما از صمیم قلب سپاسگزار است. ❤️
            <br><br>
            🔗 لینک حمایت مالی
            <br><br>
            هر مبلغ، هرچند کوچک، برای ادامه این مسیر ارزشمند است. 🌟
        </p>
        <br>
        <!-- دکمه حمایت از ما با مرکزچین و اندازه واکنش‌گرا -->
        <div class="flex justify-center">
            <button id="btn-donate" class="bg-pink-300 transition-all duration-500 hover:bg-pink-500 text-black hover:text-white rounded-md w-1/2 sm:w-1/4 h-10">
                <i class="fa-solid fa-donate"></i> حمایت از ما
            </button>
        </div>
        <!-- پنجره حمایت مالی: اندازه واکنش‌گرا و موقعیت ثابت در پایین صفحه -->
        <div id="page-donate" class="w-full max-w-md bg-blue-200 rounded-md p-5 fixed bottom-4 left-1/2 transform -translate-x-1/2 hidden">
            <div class="flex flex-col sm:flex-row justify-around items-center">
                <div class="w-full sm:w-7/12">
                    <h2 class="text-xl font-bold">حمایت مالی</h2>
                    <br>
                    <p>
                        به دلیل رایگان بودن تمامی امکانات سایت ترجیح بر آن شد که از درگاه‌های اینترنتی در این سایت استفاده نشود؛ لذا برای حمایت مالی از این سایت می‌توانید به شماره کارت بلو بانک سامان حمایت خود را انجام دهید. با تشکر
                    </p>
                </div>
                <div class="mt-4 sm:mt-0">
                    <img src="{{asset('./img/defult/webp/blu.webp')}}" alt="blu" loading="lazy" class="w-32">
                </div>
            </div>
        </div>
    </div>

    <script>
        var btnDonate = document.getElementById('btn-donate');
        var pageDonate = document.getElementById('page-donate');

        // نمایش/مخفی کردن پنجره حمایت مالی هنگام کلیک روی دکمه
        btnDonate.addEventListener('click', (e) => {
            // جلوگیری از فراخوانی event listener کل سند
            e.stopPropagation();
            if (pageDonate.style.display === "none" || pageDonate.style.display === "") {
                pageDonate.style.display = "block";
            } else {
                pageDonate.style.display = "none";
            }
        });

        // اگر روی بخش دیگری از صفحه کلیک شود، پنجره حمایت مالی پنهان شود.
        document.addEventListener('click', (e) => {
            // اگر کلیک روی دکمه یا داخل پنجره حمایت مالی نباشد
            if (!btnDonate.contains(e.target) && !pageDonate.contains(e.target)) {
                pageDonate.style.display = "none";
            }
        });
    </script>

</div>
</div>
