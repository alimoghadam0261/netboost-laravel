<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('helpsite')}}">سایت های مورد نیاز</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('helpsite1')}}">سایت های کمکی</a>
    </div>
    <br>
<div class="dark:bg-gray-800 h-auto justify-center
    transform    transition-all duration-700 ease-in-out shadow-lg">
    <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8 youtube-mobile">
        <p>
            در این قسمت لیستی از سایت های رایگان را برای شما تهیه کرده ایم که شما با عضویت و قرار دادن عکس و فیلم هایی
            که در شبکه اجتماعی قرار میدهید با عث می شود فالوورهای هدف را به سمت صفحه شبکه اجتماعی شما سوق می دهد
            این امر باعث می شود شما با هشتگ گذاری مشترک و فیلمهای مشترک در سرچ گوگل و اکسپلور اینستاگرام و ... به کاربران
            توصیه شود
        </p>
        <p>
            برای آموزش و نحوه استفاده از این سایت ها می توانید در قسمت
            <strong><a class="text-sky-500" wire:navigate.hover href="{{route('tutorial')}}">آموزش</a></strong>
            که به صورت رایگان می باشد را ببنید
        </p>
    </div>

    <div>
        <div class="w-2/3 mx-auto">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          نام سایت
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                           توضیحات
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Odd row -->
                    <tr class="bg-white">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <a href="https:youtube.com">youtube</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                           یکی از ببهترین سای هایی که شما می توانید ویدیو های خود را آپلود کنیئ و با کپشن و هشتگ های مناسب پیج خود را معرفی کنید
                        </td>

                    </tr>

                    <!-- Even row -->
                    <tr class="bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <a href="https:facebook.com">facebook</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            فیسبوک بر خلاف ایران یکی از شبکه های مجازی محبوب در دنیاست و پیشنهاد می گردد حتما در اینستاگرام پیج خود را متصل به فیسبوک کنید
                        </td>


                    </tr>

                    <tr class="bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <a href="https:pintrest.com">pintrest</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            پینترست یکی از سایت هایی می باشد که در سالهای اخیرا شدیدامحبوب شده شما با ثبت نام و قرار دادن عکس های پیج خود و هشتگ های مناسب می توانید رشد خیلی زیادی را تجربه کنید
                        </td>


                    </tr>

                    <tr class="bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <a href="https://www.wikipedia.org/">wikipedia</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            ویکی پدیا یک از سایت هایی هست که شما به صورت متن میتوانیدصفحه شبکه اجتماعی خود را معرفی کنید و با هشتگ های
                            مناسب پیج خود را معرفی کنید
                        </td>


                    </tr>

                    <tr class="bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <a href="https://www.google.com/maps/">google map</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            شما می توانید در گوگل مپ شغل و خدمات خود را معرفی کنید این امر بسیار رشد شما را تشدید می کند
                        </td>


                    </tr>

                    <tr class="bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <a href="https://www.google.com/business/">Google My Business</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            ثبت رایگان کسب‌وکار در گوگل برای افزایش دیده شدن
                        </td>


                    </tr>

                    <tr class="bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <a href="https://www.craigslist.org/">Craigslist </a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            ارسال تبلیغات رایگان در دسته‌بندی‌های مختلف
                        </td>


                    </tr>

                    <tr class="bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <a href=" https://www.producthunt.com"> Product Hunt </a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            معرفی شبکه اجتماعی و دریافت بازخورد از کاربران حوزه فناوری
                        </td>


                    </tr>

                    <tr class="bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <a href=" https://zest.is/"> Zest </a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            انتشار محتوای بازاریابی برای جذب کاربران حرفه‌ای
                        </td>


                    </tr>

                    <tr class="bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <a href="  https://www.aparat.com/"> آپارات </a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                           نمونه ایرانی یوتوب که تاثیر زیادی برای پیج های ایرانی دارد
                        </td>


                    </tr>

                    </tbody>
                </table>
            </div>
        </div>



    </div>



    </div>
