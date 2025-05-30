<div xmlns:wire="http://www.w3.org/1999/xhtml" class="bg-white dark:bg-gray-900 text-black dark:text-white">
    <div class="max-w-5xl mx-auto py-10 px-4">
        <p class="text-[14px] text-gray-400">تمامی ویدیو های آموزشی در کانال یوتوب برای شما عزیزان قرار گرفته تا بتوانید
            به رایگان استفاده کنید(فراموش نکنید که فیلتر شکن روشن باشد) </p>
        <div class="flex justify-around">
            <div class="w-full flex justify-center">
                <img
                    src="{{ asset('storage/'.$tutorials->pic) }}"
                    alt="{{ $tutorials->title }}"
                    loading="lazy"
                    class="w-4/5 max-w-xs md:max-w-md lg:max-w-lg aspect-square object-cover rounded-md"
                >
            </div>

            <div class="space-y-4 px-4 sm:px-6 md:px-8">
                <h1
                    class="bg-sky-100 text-center rounded-md p-2 sm:p-3 md:p-4 text-base sm:text-lg md:text-xl"
                >
                    <strong>عنوان : {{ $tutorials->title }}</strong>
                </h1>

                <h1
                    class="bg-sky-200 text-center rounded-md p-2 sm:p-3 md:p-4 text-base sm:text-lg md:text-xl"
                >
                    <strong>دسته‌بندی : {{ $tutorials->category }}</strong>
                </h1>

                <h1
                    class="bg-sky-300 text-center rounded-md p-2 sm:p-3 md:p-4 text-base sm:text-lg md:text-xl"
                >
                    <strong>فایل صوتی این آموزش</strong>
                </h1>

                @if(!$tutorials->voice)
                    <p class="text-gray-400 text-sm sm:text-base">این آموزش فایل صوتی ندارد</p>
                @else
                    <audio
                        controls
                        class="w-full sm:w-11/12 md:w-3/4 bg-gray-200 rounded-lg"
                    >
                        <source src="{{ asset('storage/'.$tutorials->voice) }}" type="audio/mp3">
                        مرورگر شما از تگ <code>audio</code> پشتیبان  نمی‌کند..
                    </audio>
                @endif
            </div>

        </div>
        <br>
<div id="pos-article-text-card-106821"></div>
        <div>
            <h1 class="text-gray-500 text-[20px]">آموزش های مرتبط که برای شما مفید است </h1><br>

            <!-- ظرف اسکرول‌پذیر -->
            <div class="overflow-x-auto w-[100%]">
                <!-- Flex container بدون wrap و با فاصله بین آیتم‌ها -->
                <div class="flex flex-nowrap space-x-4  p-1">
                    @foreach($relatedTutorials as $tutorial)
                        <div class="flex-none w-28 h-28 md:w-36 md:h-36 transition-all duration-300 hover:scale-[1.01] transform origin-center sugg">
                            <img
                                src="{{ asset('storage/'.$tutorial->pic) }}"
                                alt="{{ $tutorial->title }}"
                                loading="lazy"
                                class="w-20 h-20 md:w-28 md:h-28 rounded-full img-sugg mx-auto"
                            >
                            <a href="{{ route('single', ['id' => $tutorial->id]) }}">
                                <h1 class="text-sky-400 hover:text-sky-700 text-xs md:text-sm text-center mt-2 mobile-single-title">
                                    {{ $tutorial->title }}
                                </h1>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <br>

        @if(!$tutorials->video)
            <div class="w-12/12 bg-white p-6 rounded-lg shadow-lg hidden">این آموزش ویدیو ندارد</div>
        @else
            <div class="w-12/12 bg-white p-6 rounded-lg shadow-lg">
                @php
                    $videoUrl = $tutorials->video;
                    if (Str::contains($videoUrl, 'watch?v=')) {
                        $videoUrl = str_replace('watch?v=', 'embed/', $videoUrl);
                    }
                @endphp
                <iframe class="w-full h-[400px] rounded-lg"
                        src="{{$videoUrl}}"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                </iframe>
            </div>
        @endif
        <br>
        <h1 class="text-[20px]"><strong>توضیحات :</strong></h1><br>
        <p>

            {!! $tutorials->content !!}
        </p>
        <br>

        <h2 class="text-[20px]">لینک های مفید</h2><br>

                <h2 class="text-[20px]">لینک های مفید</h2><br>
        <ul>
            <li><a class="text-sky-500 hover:text-sky-700" href="{{route('tutorial')}}">آموزش های دیگر</a></li>
            <li><a class="text-sky-500 hover:text-sky-700" href="{{route('hashtag')}}">ساخت هشتگ </a></li>
            <li><a class="text-sky-500 hover:text-sky-700" href="{{route('keywords')}}">کلمات کلیدی</a></li>
            <li><a class="text-sky-500 hover:text-sky-700" href="{{route('voice')}}">تبدیل متن به صدا</a></li>
        </ul>
    </div>
<div id="pos-article-display-106828"></div>
</div>
