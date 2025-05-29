<div class="dark:bg-gray-800 h-auto justify-center
    transform    transition-all duration-700 ease-in-out shadow-lg">
    <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
    <h3><strong>دانلود ویدیو از اینستاگرام</strong></h3>
    <p>
        برای شما عزیزان بهترین لینک های دانلود ویدیو از اینستاگرام را فراهم کرده ایم . شما با وارد شدن به هرکدام از لینک
        ها و کپی کردن آدرس مورد نظر
        ویدیوی اینستاگرام خود میتوانید به راحتی دانلود کنید
    </p><br>
    <p><strong>نکته:</strong> معمولا نیازی به روشن بودن فی ل تر شکن نیست اما بعضی اوقات نیاز می شود اگر هر کدام از لینک
        ها درست کار نکردن با فی لتر شکن تست کنید</p>
    <br>


    <div class="max-w-3xl mx-auto py-10" x-data="{ showAlert: false }">
        <form wire:submit.prevent="download">
            <input type="text" wire:model="url" placeholder="Enter Instagram URL" class="border p-2 w-full mb-2">

            <!-- ✅ دکمه دانلود -->
            <button
                type="submit"
                class="bg-pink-400 text-white p-2 rounded-md hover:bg-pink-700 transition"
                @click="showAlert = true; setTimeout(() => showAlert = false, 3000)"
            >
                دانلود
            </button>
        </form>

        <!-- ✅ آلرت شروع دانلود -->
        <div
            x-show="showAlert"
            x-transition
            class="bg-yellow-400 text-black p-3 rounded-md mt-4 shadow-md"
        >
            پروسه دانلود از اینستاگرام آغاز شد. لطفاً چند لحظه صبر کنید...
        </div>

        <!-- ✅ نمایش پروگرس بار -->
        @if ($progress)
            <div class="mt-4">
                <div class="w-full bg-gray-300 rounded-full">
                    <div class="bg-pink-500 text-xs leading-none py-1 text-center text-white rounded-full"
                         style="width: {{ $progress }}%">
                        {{ $progress }}%
                    </div>
                </div>
            </div>
        @endif

        <!-- ✅ لینک دانلود -->
        @if ($downloadLink)
            <div class="mt-4">
                <!-- ✅ نمایش ویدیو -->
                <video width="100%" height="auto" controls class="rounded-md shadow-md mt-2">
                    <source src="{{ $downloadLink }}" type="video/mp4">
                    مرورگر شما از پخش این ویدیو پشتیبانی نمی‌کند.
                </video>

                <!-- ✅ دکمه دانلود -->
                <a href="{{ $downloadLink }}" target="_blank" class="text-pink-500 mt-4 block">
                    دانلود فایل
                </a>
            </div>
        @endif
    </div>

    <h1 class="text-[22px]">لینک های کمکی</h1><br>
    <div class="flex">
        <a href="https://fastvideosave.net/" target="_blank">
            <button
                class="rounded-md w-[150px] h-[50px] bg-pink-400 text-[#fff] px-2 mx-2 hover:bg-pink-700 transition-all durations-500"
            >لینک اول
            </button>
        </a>
        <a href="https://snapinst.app/instagram-reels-video-download" target="_blank">
            <button
                class="rounded-md w-[150px] h-[50px] bg-pink-400 text-[#fff] px-2 mx-2 hover:bg-pink-700 transition-all durations-500"
            >لینک دوم
            </button>
        </a>
        <a href="https://fastdl.app/instagram-reels-download" target="_blank">
            <button
                class="rounded-md w-[150px] h-[50px] bg-pink-400 text-[#fff] px-2 mx-2 hover:bg-pink-700 transition-all durations-500"
            >لینک سوم
            </button>
        </a>
        <a href="https://inflact.com/instagram-downloader/reels/" target="_blank">
            <button
                class="rounded-md w-[150px] h-[50px] bg-pink-400 text-[#fff] px-2 mx-2 hover:bg-pink-700 transition-all durations-500"
            >لینک چهارم
            </button>
        </a>

    </div>


</div>
</div>
