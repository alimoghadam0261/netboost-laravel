<div class="my-[-20%]">
<ul>
    <li><a wire:navigate.hover href="{{route('dashboard')}}"><button
            class="bg-blue-300 w-[120px] h-[45px] rounded-md mr-3 text-[14px]"
            >داشبورد</button></a></li>
    <br>
    <li><a wire:navigate.hover href="{{route('hashcreate')}}"><button
                class="bg-blue-300 w-[120px] h-[45px] rounded-md mr-3 text-[14px]"
            >مدیریت هشتگ</button></a></li>
    <br>
    <li><a wire:navigate.hover href="{{route('videocreate')}}"><button
                class="bg-blue-300 w-[120px] h-[45px] rounded-md mr-3 text-[14px]"
            >مدیریت ویدیو قلاب</button></a></li>
    <br>
    <li><a wire:navigate.hover href="{{route('soundcreate')}}"><button
                class="bg-blue-300 w-[120px] h-[45px] rounded-md mr-3 text-[14px]"
            >مدیریت موزیک</button></a></li>
    <br>

    <li><a wire:navigate.hover href="{{route('templatestory')}}"><button
                class="bg-blue-300 w-[120px] h-[45px] rounded-md mr-3 text-[14px]"
            >مدیریت تم استوری</button></a></li>
    <br>
    <li><a wire:navigate.hover href="{{route('catimg')}}"><button
                class="bg-blue-300 w-[120px] h-[45px] rounded-md mr-3 text-[14px]"
            >مدیریت عکس ترند</button></a></li>
    <br>

    <li><a wire:navigate.hover href="{{route('productonstory')}}"><button
                class="bg-blue-300 w-[120px] h-[45px] rounded-md mr-3 text-[14px]"
            >مدیریت تولید محتوا</button></a></li>
    <br>
    <li><a wire:navigate.hover href="{{route('tutorialadmin')}}"><button
                class="bg-blue-300 w-[120px] h-[45px] rounded-md mr-3 text-[14px]"
            >مدیریت آموزش</button></a></li>
    <br>
    <li>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button
                class="bg-red-300 w-[120px] h-[45px] rounded-md mr-3 text-[14px]"
                type="submit">خروج</button>
        </form>
    </li>

{{--    <li><a wire:navigate.hover href="{{route('omen')}}"><button--}}
{{--                class="bg-blue-300 w-[120px] h-[45px] rounded-md mr-3 text-[14px]"--}}
{{--            >مدیریت فال روز</button></a></li>--}}
{{--    <br>--}}
{{--    <li><a wire:navigate.hover href="{{route('infoday')}}"><button--}}
{{--                class="bg-blue-300 w-[120px] h-[45px] rounded-md mr-3 text-[14px]"--}}
{{--            >مدیریت اطلاعات روز</button></a></li>--}}
{{--    <br>--}}
{{--    <li><a wire:navigate.hover href="{{route('puzzle')}}"><button--}}
{{--                class="bg-blue-300 w-[120px] h-[45px] rounded-md mr-3 text-[14px]"--}}
{{--            >مدیریت معما روز</button></a></li>--}}




</ul>
</div>
