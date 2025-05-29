<div dir="rtl" class="bg-white dark:bg-gray-900 text-black dark:text-white">
    <!-- استفاده از lg:pr-[150px] به معنای اعمال این padding تنها در سایزهای بزرگتر از lg است -->
    <div class="flex flex-wrap w-full footer-bg dark:bg-gray-800 h-auto justify-between p-6 lg:pr-[150px] transform transition-all duration-700 ease-in-out shadow-lg">
        <!-- ستون اول -->
        <div class="w-full sm:w-1/3 p-4">
            <h3 class="text-lg font-bold mb-2">لینک های مهم</h3>
            <ul>
                <li><a wire:navigate href="{{route('terendgoogle')}}" class="hover:text-gray-300">ترند های روز</a></li>
                <li><a wire:navigate href="{{route('contentproduct')}}" class="hover:text-gray-300">تولید محتوا</a></li>
                <li><a wire:navigate href="{{route('templateinsta')}}" class="hover:text-gray-300">تم و کاور</a></li>
            </ul>
        </div>

        <!-- ستون دوم -->
        <div class="w-full sm:w-1/3 p-4">
            <h3 class="text-lg font-bold mb-2">درباره ما </h3>
            <ul>
                <li><a wire:navigate.hover href="{{route('about')}}" class="hover:text-gray-300">پرسش‌های متداول</a></li>
                <li><a wire:navigate.hover href="{{route('tutorial')}}" class="hover:text-gray-300">آموزش</a></li>
                <li><a wire:navigate.hover href="{{route('donate')}}" class="hover:text-gray-300">حمایت از ما</a></li>
            </ul>
        </div>

        <!-- ستون سوم -->
        <div class="w-full sm:w-1/3 p-4">
            <h3 class="text-lg font-bold mb-2">ارتباط با ما</h3>
            <ul>
                <li>
                    <h4>ما را در شبکه‌های اجتماعی دنبال کنید</h4>
                    <div class="social-media-footer">
                        <a href="https://instagram.com/ariyabodgroup" aria-label="صفحه اینستاگرام آریابُد" ><i class="fa-brands fa-instagram m-2 transition-all duration-400 hover:text-white hover:scale-[1.1]"></i></a>
                        <a href="https://www.youtube.com/@NetBoost021" aria-label="صفحه یوتوب آریابُد" ><i class="fa-brands fa-youtube m-2 transition-all duration-400 hover:text-white hover:scale-[1.1]"></i></a>
                        <a href="https://t.me/ariyabodgroup" aria-label="صفحه تلگرام آریابُد" ><i class="fa-brands fa-telegram m-2 transition-all duration-400 hover:text-white hover:scale-[1.1]"></i></a>
                        <a href="mailto:netboost021@gmail.com" aria-label="صفحه ارسال ایمیل آریابُد"><i class="fa fa-envelope m-2 transition-all duration-400 hover:text-white hover:scale-[1.1]"></i></a>
                    </div>
                </li>
            </ul>
            <div class="flex justify-around items-center">
                <a class="transition-all duration-300 hover:scale-110" href="{{route('home')}}">
                    <img src="{{asset('./img/logo11.webp')}}" width="40" class="mt-[-15px]" alt="logo-footer" loading="lazy">
                </a>
                <a class="transition-all duration-300 hover:scale-110" href="http://ariyabodgroup.ir/">
                    <img src="{{asset('./img/defult/webp/ariyabodgroup.webp')}}" width="60" alt="logo-footer1" loading="lazy">
                </a>
                <a class="transition-all duration-300 hover:scale-110" href="https://ariyabodmenu.ir/">
                    <img src="{{asset('./img/defult/webp/ariyabodmenu.webp')}}" width="80" alt="logo-footer2" loading="lazy">
                </a>
                <a class="transition-all duration-300 hover:scale-110" href="http://www.chabaharfroosh.ir/">
                    <img src="{{asset('./img/defult/webp/chabahar.webp')}}" width="80" alt="logo-footer3" loading="lazy">
                </a>
            </div>
        </div>
    </div>
</div>
