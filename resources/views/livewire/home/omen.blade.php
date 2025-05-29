<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('contentproduct')}}">تولید محتوا</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('omen')}}"> فال حافظ</a>

    </div>
    <br>
<div class="dark:bg-gray-800 h-auto justify-center
    transform    transition-all duration-700 ease-in-out shadow-lg">
    <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
     <h1
         class="bg-sky-300 w-[180px] h-[45px] rounded-md pr-[55px] pt-[5px] text-[22px]"
     >فال روز</h1><br>
     <p>
         ما کاملترین دیوان حافظ به همراه تفسیر و فال را برای شما فراهم کرده ایم که می توانید به صورت روزانه
         به صورت استوری در شبکه های مجازی خود منتشر کنید .
     </p>
     <p>
         در صورت نیاز به آموزش و نحوه استفاده از آیتم های زیر میتوانید به قسمت
         <strong> <a class="text-sky-400 hover:text-sky-600" wire:navigate.hover href="{{route('tutorial')}}">آموزش</a></strong>
         بروید و ازآموزش های رایگان استفاده کنید
     </p>
<br>
<div id="pos-article-text-card-106821"></div>
<div class="p-4 bg-gray-100 border rounded-lg">
    @if ($Poem)
        <div class="mb-4">
            <h2 class="text-lg font-bold">شعر:</h2>
            <p class="text-gray-700">{{ $Poem }}</p>
        </div>

        <div class="mb-4">
            <h2 class="text-lg font-bold">تفسیر:</h2>
            <p class="text-gray-700">{{ $Interpretation }}</p>
        </div>
    @else
        <p class="text-gray-500">برای گرفتن فال، دکمه زیر را بزنید:</p>
    @endif

    <button
        wire:click="faal"
        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
        گرفتن فال
    </button>

<br>
<div id="pos-article-display-106828"></div>
<p class="ali">#فال_حافظ, #فال_روزانه, #فال_حافظ_امروز, #تفسیر_فال</p>
</div>
</div>
</div>
</div>
