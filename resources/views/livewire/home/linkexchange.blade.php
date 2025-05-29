<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('linkexchange')}}">تبادل لینک</a>


    </div>
    <br>
<div class="dark:bg-gray-800 h-auto justify-center
    transform    transition-all duration-700 ease-in-out shadow-lg" xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">تبادل لینک شبکه اجتماعی|link exchange</h1>
        <p class="text-center text-gray-600 mb-8 leading-relaxed">
            شما میتوانید توسط فرم زیر ، پیج خودتان را برای تبادل پیج دیگران ایجاد کنید. این کار باعث رشد سریع صفحه شما
            در شبکه‌های اجتماعی می‌شود.
        </p>
        <br>
        <p><strong>
                نکته: فرم زیر را با دقت پر کنید در حال حاضر امکان حذف یا تغییر اطلاعات توسط شما وجود ندارد
            </strong></p>
<br>
<div id="pos-article-text-card-106821"></div>

        <!-- دکمه برای نمایش فرم مودال -->
        <div class="flex justify-center mt-4 dark:bg-gray-800">
            <button id="openModal"
                    class="w-full sm:w-[200px] h-[45px] bg-green-500 text-white font-semibold rounded-md transition-all duration-300 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                ایجاد پیج جدید
            </button>
        </div>

        <!-- مودال فرم -->
        <div id="modalForm" class="hidden mx-[-100px] my-[-30px]">
            <div class="bg-sky-100 border-2 border-gray-300 rounded-lg p-2 space-y-3 dark:bg-gray-800 ">
                <div class="flex justify-end w-full">
                    <button id="closeModal" class="text-red-700 text-xl">&times;</button>
                </div>

                <form wire:submit.prevent="save" class="space-y-2 w-full">
                    @csrf
                    <!-- دسته بندی پیج -->
                    <div class="flex items-center">
                        <label class="block text-gray-700 text-[12px] font-medium mr-4 w-[120px]">دسته‌بندی پیج
                            شما:</label>
                        <select wire:model="category"
                                class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-green-500 focus:outline-none">
                            <option value="" selected>انتخاب کنید...</option>
                            <option value="هنری">هنری</option>
                            <option value="زیبایی">زیبایی</option>
                            <option value="خدماتی">خدماتی</option>
                            <option value="پوشاک">پوشاک</option>
                            <option value="غذا">غذا</option>
                            <option value="فناوری اطلاعات">فناوری اطلاعات</option>
                            <option value="پزشکی">پزشکی</option>
                            <option value="مهندسی">مهندسی</option>
                            <option value="ترید،ارز دیجیتال">ترید،ارز دیجیتال</option>
                            <option value="حمل و نقل">حمل و نقل</option>
                            <option value="املاک">املاک</option>
                            <option value="آموزشی">آموزشی</option>
                            <option value="سبک زندگی">سبک زندگی</option>
                            <option value="ورزشی">ورزشی</option>
                            <option value="فروشگاه">فروشگاه</option>
                            <option value="حیوانات">حیوانات</option>
                            <option value="دیگر">دیگر</option>
                        </select>
                        @error('category')
                        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- شبکه اجتماعی پیج -->
                    <div class="flex items-center">
                        <label class="block text-gray-700 text-[12px] font-medium mr-4 w-[120px]">شبکه اجتماعی پیج
                            شما:</label>
                        <select wire:model="social"
                                class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-green-500 focus:outline-none">
                            <option value="" selected>انتخاب کنید...</option>
                            <option value="اینستاگرام">اینستاگرام</option>
                            <option value="تلگرام">تلگرام</option>
                            <option value="فیسبوک">فیسبوک</option>
                            <option value="یوتوب">یوتوب</option>
                            <option value="لینکدین">لینکدین</option>
                            <option value="تیک تاک">تیک تاک</option>
                            <option value="شبکه X">شبکه X</option>
                        </select>
                        @error('social')
                        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- نام پیج -->
                    <div class="flex items-center">
                        <label class="block text-gray-700 text-[12px] font-medium mr-4 w-[120px]">نام پیج شما:</label>
                        <input wire:model="name" type="text" placeholder="نام صفحه شبکه اجتماعی خود را بنویسید"
                               class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-green-500 focus:outline-none"/>
                        @error('name')
                        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- آپلود تصویر -->
                    <div class="flex items-center">
                        <label class="block text-gray-700 text-[12px] font-medium mr-4 w-[120px]">آپلود تصویر
                            پیج:</label>
                        <input wire:model="img" type="file"
                               class="w-full border border-gray-300 rounded-md p-2 file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:bg-green-100 file:text-green-700 hover:file:bg-green-200 focus:ring-2 focus:ring-green-500 focus:outline-none"/>
                        @error('img')
                        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- توضیحات پیج -->
                    <div class="flex items-center">
                        <label class="block text-gray-700 text-[12px] font-medium mr-4 w-[120px]">توضیحات پیج
                            شما:</label>
                        <textarea wire:model="content" id="textInput" cols="90" rows="7" placeholder="متن خود را تایپ کنید..." maxlength="200"></textarea>
                        <br>

                        @error('content')
                        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="progress-container hidden">
                        <svg class="progress-circle" viewBox="0 0 80 80">
                            <circle class="progress-circle-bg" cx="40" cy="40" r="30" />
                            <circle class="progress-circle-fill" id="progressFill" cx="40" cy="40" r="30"
                                    transform="rotate(-90 40 40)" />
                        </svg>
                        <div class="progress-text" id="progressText">0%</div>
                    </div>
                    <div class="char-count text-gray-400 text-[15px] mx-[140px]"  id="charCount">0/200 کاراکتر</div>


                    <!-- دکمه ارسال -->
                    <div class="flex justify-around">
                        <button type="submit"
                                class="w-full sm:w-[200px] h-[45px] bg-green-500 text-white font-semibold rounded-md transition-all duration-300 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                            ذخیره
                        </button>


                        {{--                    <button id="closeModal" class="bg-red-500 w-full sm:w-[200px] h-[45px] text-white font-semibold rounded-md transition-all duration-300 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400">--}}
                        {{--                        بازگشت--}}
                        {{--                    </button>--}}
                    </div>
                </form>
            </div>
        </div>

        <br><br>
        <h2><strong>پیج های آماده تبادل ({{$count}})</strong></h2>
        <br><br>
        <div class="bg-white shadow-lg rounded-lg p-6  space-y-6 max-w-6xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
                @foreach($links as $link)
                    <div class="border border-sky-300 rounded-lg shadow-md overflow-hidden">
                        @if(auth()->check() && (auth()->id() === $link->user_id || auth()->user()->role === 'admin'))
                            <i wire:click="deleteLink({{ $link->id }})"
                               class="fa fa-trash text-[12px] text-red-300 cursor-pointer"></i>
                        @endif
                        <img src="{{ asset('storage/' . $link->img) }}" alt="{{ $link->name }}" loading="lazy"
                             class="w-full h-[200px] object-cover">
                        <div class="p-4">
                            <p class="text-gray-500 text-sm">دسته بندی: {{$link->category}}</p>
                            <p class="text-gray-500 text-sm">
                                @if($link->social === 'اینستاگرام')
                                    <i class="fab fa-instagram text-red-500 text-[20px]"></i>
                                @elseif($link->social === 'تلگرام')
                                    <i class="fab fa-telegram text-red-500 text-[20px]"></i>
                                @elseif($link->social === 'فیسبوک')
                                    <i class="fab fa-facebook text-red-500 text-[20px]"></i>
                                @elseif($link->social === 'یوتوب')
                                    <i class="fab fa-youtube text-red-500 text-[20px]"></i>
                                @elseif($link->social === 'لینکدین')
                                    <i class="fab fa-linkedin text-red-500 text-[20px]"></i>
                                @elseif($link->social === 'تیک تاک')
                                    <i class="fab fa-tiktok text-red-500 text-[20px]"></i>
                                @elseif($link->social === 'شبکه X')
                                    <i class="fab fa-twitter text-red-500 text-[20px]"></i>
                                @endif
                                {{$link->social}}</p>
                            <h2 class="text-lg font-bold text-gray-800 mt-2">{{$link->name}}</h2>
                            <p class="text-gray-700 mt-1">{{$link->content}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-6 flex justify-center">
            {{ $links->links('vendor.pagination.tailwind') }}
        </div>
<br>
<div>
<div id="pos-article-display-106828"></div>
</div>
<br>
<p class="ali">#تبادل_لینک, #بازاریابی_محتوا, #SEO, #بهینه_سازی_لینک</p>
        <script>
            var modalFormm = document.getElementById('modalForm')
            var openModall = document.getElementById('openModal')
            var closeModal = document.getElementById('closeModal')

            openModall.addEventListener('click',()=>{
                modalFormm.style.display = 'block'
            })
            closeModal.addEventListener('click',()=>{
                modalFormm.style.display = 'none'
            })

            //===========conter textarea==================
            const textInput = document.getElementById('textInput');
            const progressFill = document.getElementById('progressFill');
            const progressText = document.getElementById('progressText');
            const charCount = document.getElementById('charCount');
            const maxLength = 200;

            textInput.addEventListener('input', () => {
                const textLength = textInput.value.length;
                const percentage = (textLength / maxLength) * 100;
                const dashOffset = 188 - (188 * percentage) / 100;

                progressFill.style.strokeDashoffset = dashOffset;
                progressText.textContent = `${Math.round(percentage)}%`;
                charCount.textContent = `${textLength}/${maxLength} کاراکتر`;
            });
        </script>

    </div>
</div>
</div>
