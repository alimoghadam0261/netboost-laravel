<div class="dark:bg-gray-800 h-auto justify-center
    transform    transition-all duration-700 ease-in-out shadow-lg">
    <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8"
         x-data="{ showAlert: false }">
        <h3><strong>دانلود ویدیو از فیسبوک</strong></h3>
        <p>
            برای شما عزیزان اپ دانلود ویدیو از فیسبوک را فراهم کرده ایم. شما می توانید با کپی کردن آدرس ویدیو فیسبوک
            مورد نظرتون در کادر پایین ویددیو را دانلود کنید.
        </p><br>

        <p><strong>نکته:</strong> برای استفاده حتما فی لتر شکن روشن باشد نسبت به زمان ویدیوتون پروسه کمی زمان میبرد .
            درصورتیکه مشکلی پیش اومد میتوانید از لینک های زیر برای دانلو استفاده کنید</p>
        <br>

        <form wire:submit.prevent="download">
            <input type="text" wire:model="url" placeholder="Enter FaceBook URL" class="border p-2 w-full mb-2">
            <select wire:model="format" class="border p-2 w-full mb-2">
                <option value="mp4">MP4 (Video)</option>
                <option value="mp3">MP3 (Audio)</option>
            </select>

            <!-- ✅ دکمه با نمایش آلرت -->
            <button
                type="submit"
                class="bg-green-300 text-white p-2 rounded-md hover:bg-green-700 transition"
                @click="showAlert = true; setTimeout(() => showAlert = false, 3000)"
            >
                دانلود
            </button>
        </form>

        <!-- ✅ آلرت با انیمیشن -->
        <div
            x-show="showAlert"
            x-transition
            class="bg-yellow-400 text-black p-3 rounded-md mt-4 shadow-md"
        >
            پروسه دانلود از یوتوب آغاز شد. چند لحظه صبر کنید تا لینک دانلود آماده شود...
        </div>

        @if ($progress)
            <div class="mt-4">
                <div class="w-full bg-gray-300 rounded-full">
                    <div class="bg-blue-500 text-xs leading-none py-1 text-center text-white rounded-full"
                         style="width: {{ $progress }}%">
                        {{ $progress }}%
                    </div>
                </div>
            </div>
        @endif

        @if ($downloadLink)
            <div class="mt-4">
                {{-- ✅ نمایش ویدیو بعد از دانلود --}}
                @if ($format === 'mp4')
                    <video width="100%" height="auto" controls class="rounded-md shadow-md mt-2 w-[200px] h-[250px]">
                        <source src="{{ $downloadLink }}" type="video/mp4">
                        مرورگر شما از پخش این ویدیو پشتیبانی نمی‌کند.
                    </video>
                @endif

                {{-- ✅ لینک دانلود --}}
                <a href="{{ $downloadLink }}" target="_blank" class="text-green-500 mt-4 block">
                    دانلود فایل
                </a>
            </div>
        @endif
        <br><br>
        <h1 class="text-[22px]">لینک های کمکی</h1><br>
        <div class="flex">
            <a href="https://snapsave.app/" target="_blank">
                <button
                    class="rounded-md w-[150px] h-[50px] bg-green-300 text-[#fff] px-2 mx-2 hover:bg-green-700 transition-all durations-500"
                >لینک اول
                </button>
            </a>
            <a href="https://fdownloader.net/en" target="_blank">
                <button
                    class="rounded-md w-[150px] h-[50px] bg-green-300 text-[#fff] px-2 mx-2 hover:bg-green-700 transition-all durations-500"
                >لینک دوم
                </button>
            </a>
            <a href="https://us.savefrom.net/" target="_blank">
                <button
                    class="rounded-md w-[150px] h-[50px] bg-green-300 text-[#fff] px-2 mx-2 hover:bg-green-700 transition-all durations-500"
                >لینک سوم
                </button>
            </a>
            <a href="https://contentstudio.io/tools/free-facebook-downloader" target="_blank">
                <button
                    class="rounded-md w-[150px] h-[50px] bg-green-300 text-[#fff] px-2 mx-2 hover:bg-green-700 transition-all durations-500"
                >لینک چهارم
                </button>
            </a>

        </div>
    </div>
</div>
