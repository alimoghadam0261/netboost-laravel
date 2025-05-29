<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('terendgoogle')}}">ترند های گوگل</a>
    </div>
    <br>
<div class="dark:bg-gray-900 text-black dark:text-white dark:max-w-full  youtube-mobile">
    <h1
        class="bg-blue-100 rounded-md mr-2 w-[200px] h-[45px] py-2  pr-9 text-gray-2000 " >ترند  های گوگل|trends</h1>
    <br>
    <p
        class="max-w-7xl mx-10 "
    >ترند های روز در فضای مجازی مرتبط به کشور ایران در جدول زیر لیست شده است که هر 12 ساعت آپدیت می شود شما با
        مطالعه این جدول میتوانید کلمات کلیدی هشتگ های مورد نیاز موضوعات ساخت ویدیو و... را به دست آورید. لازم به ذکر است منبع این جدول از گوگل ترند می باشد که با یک اتصال مستقیم این جدول را در اختیار شما قرار داده ایم. </p>
    <br>

    <table class="table-auto w-full border-collapse border border-gray-300  max-w-5xl mx-auto py-10  ">
        <thead>
        <tr class="bg-sky-400">
            <th class="border border-gray-400 p-2">عنوان</th>
            <th class="border border-gray-400 p-2">تعداد جستجو</th>
            <th class="border border-gray-400 p-2">زمان شروع</th>
            <th class="border border-gray-400 p-2">تفکیک گرایش</th>
        </tr>
        </thead>
        <tbody>
        @foreach($trends as $trend)
            @if(count($trend) > 4)
                <tr class=" even:bg-blue-100">
                    <td class="border border-gray-400 p-2">{{ $trend[1] ?? '-' }}</td>
                    <td class="border border-gray-400 p-2">{{ $trend[2] ?? '-' }}</td>
                    <td class="border border-gray-400 p-2">{{ $trend[3] ?? '-' }}</td>
                    <td class="border border-gray-400 p-2">{{ $trend[4] ?? '-' }}</td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
<br>
<p class="ali">#ترندهای_گوگل, #گوگل_ترند, #تحلیل_ترندها, #جستجو_ترند_ها</p>
</div>
</div>
