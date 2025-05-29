<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('hook')}}">ویدیو قلاب</a>
    </div>
    <br>
    <div class="dark:bg-gray-800 h-auto justify-center transform transition-all duration-700 ease-in-out shadow-lg">
        <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8 youtube-mobile">

            <h1 class="pr-[20px] pt-[10px] bg-sky-200 w-[280px] h-[45px] text-[20px]">
                دانلود ویدیو های قلاب (hook)
            </h1>
            <br>
            <p>
                تیم آریابد مجموعه ای از ویدیوهای قلاب را برای شما مهیا کرده است و به صورت رایگان در اختیار شما عزیزان قرار داده است.
                برای اینکه مفهوم هوک یا قلاب رابدانید و نحوه استفاده و کاربرد این ویدیوها را یاد بگیرید به بخش آموزش مراجعه کنید
            </p>
            <br>
<div id="pos-article-text-card-106821"></div>
<br>
            <div class="container mx-auto p-4">
                <h2 class="text-2xl font-bold mb-4">ویدیوهای آپلود شده (تعداد: {{$count}})</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ($videos as $video)
                        <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300">
                            <video controls class="w-[350px] h-[200px] sm:w-[400px] sm:h-[220px]">
                                <source src="{{ asset('storage/' . $video->video) }}" type="video/mp4">
                                مرورگر شما از تگ ویدیو پشتیبانی نمی‌کند.
                            </video>
                            <div class="p-4">
                                <h2 class="text-lg font-semibold mb-2">{{ $video->title }}</h2>
                                <a href="{{ asset('storage/' . $video->video) }}" download="{{ $video->title }}"
                                   class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-800 transition">
                                    دانلود
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-6 flex justify-center ">
                    {{ $videos->links('vendor.pagination.tailwind') }}
                </div>
<br>
<div id="pos-article-display-106828"></div>
<p class="ali">#دانلود_رایگان_ویدیو, #ویدیو_رایگان, #ویدیوهای_قلابی, #محتوا_رایگان</p>
            </div>
        </div>
    </div>
</div>
