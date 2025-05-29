<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('contentproduct')}}">تولید محتوا</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('words')}}">سخن بزرگان</a>

    </div>
    <br>
<div class="dark:bg-gray-800 h-auto justify-center
    transform    transition-all duration-700 ease-in-out shadow-lg">
    <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
    <h1
    class="bg-blue-500 rounded-[15px] w-[150px] text-white text-[20px]"
    ><strong>سخن بزرگان({{$count}})</strong> </h1><br><br>
  <h1>سخنان بزرگان را سعی کرده ایم در این قسمت جمع آوری کرده ایم تا شما به راحتی بتوانید از این قسمت استفاده کنید</h1>
    <p><strong>لازم به ذکر است که این قسمت و قسمت های دیگر سایت مدام در حال به روز رسانی می باشد تا شما عزیزان بهترین خدمات را دریافت کنید . در صورت نیاز به آموزش میتوانید در قسمت
    <a wire:navigate.hover href="{{route('tutorial')}}" class="text-sky-400">آموزش</a>
    مراجعه کنید
        </strong></p><br>
<div id="pos-article-text-card-106821"></div>
<br>
    @foreach($wodOfHuman as $item)
        <p><strong>{{$item->author}}</strong></p>
        <p>{{$item->content}}</p>
        <hr>
    @endforeach
    <br>
    <div class="mt-6 flex justify-center ">
        {{ $wodOfHuman->links('vendor.pagination.tailwind') }}
    </div>
<br>
<div id="pos-article-display-106828"></div>
<p class="ali">#سخن_بزرگان, #حکمت_بزرگان, #جملات_الهام_بخش, #آموزش_زندگی</p>
</div>
</div>
</div>
