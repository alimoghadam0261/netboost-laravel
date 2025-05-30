<div>
    <div class="topmobile px-[10px] dark:bg-gray-900  text-black dark:text-white">
        <div>
            <i class="fa fa-bars bar-mobile" onclick="toggleMenu()"></i>
        </div>
        <div>
            <i class="fa fa-cloud-moon cursor-pointer" onclick="toggleDarkMode()"></i>
        </div>
    </div>

    <div class="mobile">
        <div><a wire:navigate.hover href="{{route('home')}}"><i class="fa fa-home px-[15px] py-[10px] text-[20px]"></i></a></div>
        <div><a wire:navigate.hover href="{{route('about')}}"><i class="fa fa-users px-[15px] py-[10px] text-[20px]"></i></a></div>
        <div><a wire:navigate.hover href="{{route('tutorial')}}"><i class="fa fa-book px-[15px] py-[10px] text-[20px]"></i></a></div>
        <div><a wire:navigate.hover href="{{route('donate')}}"><i class="fa fa-donate px-[15px] py-[10px] text-[20px]"></i></a></div>
        <div><a wire:navigate.hover href="{{route('login')}}"><i class="fa fa-lock px-[15px] py-[10px] text-[20px]"></i></a></div>
    </div>

    <div class="submenumobile">
        <ul>
            <li><a wire:navigate href="{{route('youtube')}}" class="block hover:text-indigo-600 text-[14px]">دانلود یوتوب|اینستاگرام</a></li>
            <li><a wire:navigate href="{{route('proxy')}}" class="block hover:text-indigo-600">پروکسی تلگرام</a></li>
            <li><a wire:navigate href="{{route('terendgoogle')}}">ترند روز</a></li>
            <li><a wire:navigate href="{{route('hashtag')}}">هشتگ</a></li>
            <li><a wire:navigate href="{{route('keywords')}}">کلمات کلیدی</a></li>
            <li><a wire:navigate href="{{route('voice')}}">متن به صدا</a></li>
            <li><a wire:navigate href="{{route('hook')}}">ویدیو قلاب</a></li>
            <li><a wire:navigate href="{{route('music')}}">موزیک ترند</a></li>
            <li><a wire:navigate href="{{route('templateinsta')}}">قالب استوری</a></li>
            <li><a wire:navigate href="{{route('imageread')}}">عکس های ترند</a></li>
            <li><a wire:navigate href="{{route('contentproduct')}}">تولید محتوا</a></li>
            <li><a wire:navigate href="{{route('tutorial')}}">آموزش</a></li>

        </ul>
        <br><br>
        <br><br>
        <div class="flex justify-around social-media-footer">
            <a href="https://instagram.com/ariyabodgroup" aria-label="صفحه اینستاگرام آریابُد" ><i class="fa-brands fa-instagram fa-2x m-2 transition-all duration-400 hover:text-white hover:scale-[1.1]"></i></a>
            <a href="https://www.youtube.com/@NetBoost021" aria-label="صفحه یوتوب آریابُد" ><i class="fa-brands fa-youtube fa-2x m-2 transition-all duration-400 hover:text-white hover:scale-[1.1]"></i></a>
            <a href="https://t.me/ariyabodgroup" aria-label="صفحه تلگرام آریابُد" ><i class="fa-brands fa-telegram fa-2x m-2 transition-all duration-400 hover:text-white hover:scale-[1.1]"></i></a>
            <a href="mailto:netboost021@gmail.com" aria-label="صفحه ارسال ایمیل آریابُد"><i class="fa fa-envelope fa-2x m-2 transition-all duration-400 hover:text-white hover:scale-[1.1]"></i></a>
        </div>
    </div>

</div>

<script>
    function toggleMenu() {
        const menu = document.querySelector('.submenumobile');
        // Toggle the display of the menu
        menu.style.display = (menu.style.display === 'block' ? 'none' : 'block');
    }
</script>
