<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('contentproduct')}}">تولید محتوا</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('challenglist')}}">چالش</a>

    </div>
    <br>

<div class="dark:bg-gray-800 h-auto justify-center
    transform    transition-all duration-700 ease-in-out shadow-lg">
    <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
    <div class="max-w-5xl mx-auto py-10">
    <h1>
        شما می توانید از دسته بندی های زیر موضوع چالش خود را انتخاب کنید و برای هر دسته بندی چالش های مختلفی قرار گرفته است شما میتوانید با راه اندازی چالش در پیج خود تعامل خود را با کاربران افزایش دهید این امر باعث بازدید بیشت و در نهایت فالوورهای بیشتر می شود لازم به ذکر است که نسبت به خدماتی که شما ارائه می دهید می توانید جوایز نقدی یا مرتبط با خدمات خود قرار دهید تا انگیزه مضاعف برای کاربران ایجاد کنید
    </h1>
    <br>
    <p><strong>
            در صورت نیاز و راهنمایی میتوانید به بخش
            <a class="text-sky-300" wire:navigate.hover href="{{route('tutorial')}}">آموزش</a>
            مراجعه کنید
        </strong></p><br>
<div id="pos-article-text-card-106821"></div>

    <!-- انتخاب دسته‌بندی -->
    <div class="mb-4">
        <label for="category" class="block text-gray-700 font-semibold mb-2">انتخاب دسته‌بندی:</label>
        <select wire:model="category" id="category" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="">انتخاب دسته‌بندی</option>
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
    </div>

    <!-- دکمه بارگذاری چالش‌ها -->
    <div class="mb-4">
        <button
            wire:click="loadChallengs"
            class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md font-semibold transition duration-200"
        >
            نمایش چالش‌ها
        </button>
    </div>
</div>
    <!-- نمایش چالش‌ها -->
    @if ($challengs)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($challengs as $challeng)
                <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $challeng->title }}</h3>
                    <p class="text-gray-600">{{ $challeng->content }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-500">چالشی برای این دسته‌بندی وجود ندارد.</p>
    @endif
<br>
<div id="pos-article-display-106828"></div>
<p class="ali">#چالش, #چالش_خلاقانه, #چالش_سخت, #چالش_هفته</p>
</div>
</div>
