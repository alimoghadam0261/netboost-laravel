<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('contentproduct')}}">تولید محتوا</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('infomation')}}"> فکت های علمی</a>

    </div>
    <br>
<div class="dark:bg-gray-800 h-auto justify-center
    transform    transition-all duration-700 ease-in-out shadow-lg">
    <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
    <h1
        class="bg-sky-300 w-[180px] h-[45px] rounded-md pr-[55px] pt-[5px] text-[22px]"
    >اطلاعات روز</h1><br>
    <p>
        ما کاملترین دیوان فکت های علمی را برای شما فراهم کرده ایم که می توانید به صورت روزانه
        به صورت استوری در شبکه های مجازی خود منتشر کنید .بانک اطلاعاتی این بخش بیش از 3000 فکت می باشد
    </p>
    <p>
        در صورت نیاز به آموزش و نحوه استفاده از آیتم های زیر میتوانید به قسمت
        <strong> <a class="text-sky-400 hover:text-sky-600" wire:navigate.hover href="{{route('tutorial')}}">آموزش</a></strong>
        بروید و ازآموزش های رایگان استفاده کنید
    </p>
<br>
<div id="pos-article-text-card-106821"></div>
    <div class="p-4 bg-gray-100 border rounded-lg">
        @if ($title)
            <div class="mb-4">
                <h2 class="text-lg font-bold">عنوان:</h2>
                <p class="text-gray-700">{{ $title }}</p>
            </div>

            <div class="mb-4">
                <h2 class="text-lg font-bold">توضیحات:</h2>
                <p class="text-gray-700">{{ $content }}</p>
            </div>
        @else
            <p class="text-gray-500">برای دریافت اطلاعات روزانه، دکمه زیر را بزنید:</p>
        @endif

        <button
            wire:click="info"
            class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
           دریافت اطلاعات روزانه
        </button>
    </div>
<br>
<div id="pos-article-display-106828"></div>
<p class="ali">#فکت_علمی, #اطلاعات_علمی, #مطالعه_علمی, #حقایق_علمی</p>
</div>
</div>
</div>
