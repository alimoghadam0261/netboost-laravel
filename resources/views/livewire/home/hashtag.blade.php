<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('hashtag')}}">هشتگ</a>
    </div>
    <br>
<div class="dark:bg-gray-800 h-auto justify-center
    transform    transition-all duration-700 ease-in-out shadow-lg">
    <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8"x-data>
    <h1 class="text-lg font-bold mb-4">
        دسته‌بندی‌های مرتبط با موضوع را انتخاب کرده و سپس هشتگ‌های ذخیره شده را مشاهده نمایید
    </h1>
    <br>
    <div class="flex justify-between">
        <!-- دسته‌بندی اصلی -->
        <div class="mb-4 w-4/12 text-center">
            <label for="category" class="block mb-2 font-bold text-gray-700">دسته‌بندی اصلی</label>
            <select wire:model.live="selectedCategory" id="category"
                    class="w-full border border-blue-500 border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-md shadow-sm">
                <option value="">-- انتخاب دسته‌بندی --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- زیرمجموعه‌ها -->
        @if (!empty($subcategories))
            <div class="mb-4 w-4/12 submenu-hashtag">
                <label for="subcategory" class="block mb-2 font-bold text-gray-700  sub-menu-hashtag-title ">زیرمجموعه</label>
                <select wire:model="selectedSubcategory" id="subcategory"
                        class="w-full border border-blue-500  border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-md shadow-sm">
                    <option value="">-- انتخاب زیرمجموعه --</option>
                    @foreach ($subcategories as $subcategory)
                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                    @endforeach
                </select>
            </div>
        @endif

        <!-- دکمه show -->

    </div>
    <br>

<div id="pos-article-text-card-106821"></div>
    <!-- ورودی کلمه -->
    <div class="mb-4">
        <input type="text" wire:model="keyword" placeholder="کلمه را وارد کنید"
               class="border border-gray-300 rounded-md w-full p-2">
    </div>

    <!-- نمایش هشتگ‌های ترکیبی به صورت افقی -->
    @if(!empty($hashtags) && $hashtags->count())
        <div class="mt-4">
            <h2 class="text-lg font-bold mb-2">هشتگ‌های ساخته شده:</h2>
            <div class="flex flex-wrap gap-2">
                @foreach($hashtags as $hashtag)
                    <span class="bg-blue-200 text-blue-800 border border-blue-400 rounded-full px-3 py-1">
                        {{ '#' . str_replace(' ', '_', $keyword) . '_' . $hashtag->tag }}
                    </span>
                @endforeach
            </div>
        </div>
    @else
        <div class="mt-4">
            <p class="text-gray-500">هیچ هشتگی برای این دسته‌بندی و زیرمجموعه یافت نشد.</p>
        </div>
    @endif
    <br><br>
    <div class="mb-4">
        <button wire:click="loadHashtags" class=" w-full bg-blue-500 text-white p-2 rounded-md">
           نمایش هشتگ
        </button>
    </div>
<br>
<div>
<div id="pos-article-text-card-106821"></div>
</div>
<br>

<div id="pos-article-display-106828"></div>
<p class="ali">#تولید_هشتگ, #هشتگ_موثر, #شبکه_های_اجتماعی, #بازاریابی_شبکه_های_اجتماعی</p>

</div>
</div>
</div>
