<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('music')}}">موزیک|صدا</a>
    </div>
    <br>
<div class="dark:bg-gray-800 h-auto justify-center
    transform    transition-all duration-700 ease-in-out shadow-lg">
    <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8 youtube-mobile">

        <h1 class="text-[25px]"><strong>موزیک </strong></h1>
        <br>
        <p>
            شما در این بخش می توانید موزیک هایی که قانونی می توانید در ویدیو کیلیپ ها و ریلزهاتون استفاده کنید و به رایگان
            دانلود کنید
        </p>
        <p>
            در صورت نیاز به آموزش و نحوه استفاده میتوانید به بخش
            <a class="text-sky-400" wire:navigate href="{{route('tutorial')}}">آموزش</a>
            مراجعه کنید
        </p>
        <br>
        <div class="flex justify-around p-3">
            <div class="bg-[url('/img/defult/musicterend.jpeg')] rounded-[15px] w-[200px] h-[200px]
                transition-all duration-500  bg-cover bg-center hover:scale-[1.1] hover:shadow-lg
                flex items-center justify-center">
                <a
                    class="text-gray-300 text-[20px] text-center font-bold"
                    wire:navigate.hover href="{{ route('musicterend') }}"><strong>موزیک های ترند</strong></a>
            </div>

            <div class="bg-[url('/img/defult/effectsound.jpeg')] rounded-[15px] w-[200px] h-[200px]
                transition-all duration-500  bg-cover bg-center  hover:scale-[1.1] hover:shadow-lg
                flex items-center justify-center">
                <a
                    class="text-[20px]  text-center font-bold"
                    wire:navigate.hover href="{{ route('musiceffect') }}"><strong>افکت های صدا</strong></a>
            </div>
        </div>
<br>
<p class="ali">#موزیک_ترند, #دانلود_موزیک, #افکت_صدا, #صدا_رایگان, #موزیک_رایگان</p>
    </div>
    </div>
    </div>
