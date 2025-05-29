<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('contentproduct')}}">تولید محتوا</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('cta')}}">جملات CTA</a>

    </div>
    <br>
<div id="pos-article-text-card-106821"></div>
<br>
<div class="dark:bg-gray-800 h-auto justify-center
    transform    transition-all duration-700 ease-in-out shadow-lg">
    <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
    <br><br>
    <h1>
        جملات CTA (تعداد : {{$count}})
    </h1>
    <br>
   <div
   class="flex justify-around"
   >
       <div>
           <ul>
               @foreach($ctasfr as $cta)
                   <li>
                       <p>
                           {{$cta}}
                       </p>
                   </li><hr>
               @endforeach
           </ul>
       </div>

       <div>
           <ul>
               @foreach($ctasen as $cta)
                   <li>
                       <p>
                           {{$cta}}
                       </p>
                   </li><hr>
               @endforeach
           </ul>
       </div>

   </div>
<br>
<div id="pos-article-display-106828"></div>
<p class="ali">#CTA, #دعوت_به_اقدام, #جملات_فعال, #جذب_مشتری</p>
</div>
</div>
</div>
