<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('tutorial')}}">آموزش</a>
    </div>
    <br>
<div xmlns:wire="http://www.w3.org/1999/xhtml" class="bg-white dark:bg-gray-900 text-black dark:text-white">
    <div class="max-w-5xl mx-auto py-10 px-4">
        <h1 class="text-[25px]"><strong>آموزش</strong></h1>
        <p class="mt-4">
            برای ارتقای دانش شما در حوزه شبکه‌های اجتماعی و استفاده بهینه از این سایت، آموزش‌های رایگان را به‌صورت صدا، متن و ویدیو تهیه کرده‌ایم تا شما بتوانید در سریع‌ترین حالت بهترین نتیجه را بگیرید.
        </p>
        <p class="mt-4"><strong>
                لازم به ذکر است که تمامی امکانات سایت رایگان می‌باشد و روزانه تمامی قسمت‌های سایت به‌روزرسانی می‌شود که این امر مستلزم هزینه‌های اجرایی و نگهداری است.
                <br>
                لذا در صورت رضایت از سایت، از شما عزیزان صمیمانه درخواست داریم که در صورت تمایل و توان، با کمک مالی خود به ادامه‌ی این مسیر کمک کنید. 🙏
            </strong></p>

        <!-- دکمه حمایت از ما -->
        <div class="flex justify-center mt-6">
            <a  href="{{route('donate')}}">
                <button class="bg-pink-400 w-[200px] h-[45px] rounded-[15px] text-white">
                    <i class="fa-solid fa-donate"></i> حمایت از ما
                </button>
            </a>
        </div>
    </div>
<div id="pos-article-text-card-106821"></div>
    <!-- فیلتر دسته‌بندی -->
    <div class="container mx-auto px-4 py-4">
        <div class="mb-4">
            <label for="category" class="block mb-2 text-sm font-bold">فیلتر بر اساس دسته‌بندی:</label>
            <select wire:model.live="category" id="category" class="w-full p-2 border rounded-md bg-white dark:bg-gray-800 dark:text-white">
                <option value="" selected>انتخاب کنید</option>
                <option value="سایت">آموزش سایت netboost</option>
                <option value="اینستاگرام">آموزش اینستاگرام</option>
                <option value="تلگرام">آموزش تلگرام</option>
                <option value="یوتوب">آموزش یوتوب</option>
                <option value="فیسبوک">آموزش فیسبوک</option>
                <option value="اپلیکشن">آموزش اپلیکشن های ادیت عکس و فیلم</option>
                <option value="هوش مصنوعی">آموزش هوش مصنوعی</option>
            </select>



        </div>

        <!-- نمایش آموزش‌ها -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($tutorial as $item)
                <div class="w-full rounded-md border border-sky-400 bg-white shadow-md transition-all duration-300
                            transform hover:scale-105 hover:border-sky-600 flex flex-col items-center text-center p-4">
                    <img src="{{ asset('storage/'.$item->pic) }}" alt="{{ $item->title }}"
                         class="w-full h-[200px] object-cover rounded-md" loading="lazy">
                    <h2 class="text-[18px] font-bold mt-2">{{ $item->title }}</h2>
                    <p class="text-gray-600">دسته بندی: {{ $item->category }}</p>
                        <a href="{{ route('single', ['id' => $item->id]) }}">
                        <button class="bg-sky-300 transition-all duration-500 hover:bg-sky-600 text-white py-2 px-4 mt-2 rounded-md">
                            ادامه
                        </button>
                    </a>
                </div>
            @endforeach
        </div>

        <!-- صفحه‌بندی -->
        <!-- صفحه‌بندی -->
        <div class="mt-6 flex justify-center">
            {{ $tutorial->links('vendor.pagination.tailwind') }}
        </div>

    </div>
<br>
<div id="pos-article-display-106828"></div>
<p class="ali">#آموزش_ویدیویی, #آموزش_صوتی, #آموزش_متنی, #آموزش_آنلاین, #یادگیری_آنلاین</p>
</div>
</div>
