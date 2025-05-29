<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('music')}}">موزیک|صدا</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('musicterend')}}">موزیک ترند</a>
    </div>
    <br>
    <div class="dark:bg-gray-800 h-auto justify-center transform transition-all duration-700 ease-in-out shadow-lg">
        <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto py-10">
                <h1>
                    برای شما عزیزان لیستی از موزیک های ترند تهیه شده است که می توانید به رایگان دانلود کنید
                </h1>
                <br>
                <p>
                    در صورت نیاز به آموزش شما می توانید به بخش
                    <a class="text-sky-400" wire:navigate href="{{route('tutorial')}}">آموزش</a>
                    مراجعه کنید و به رایگان استفاده نمایید
                </p>
            </div>
<div id="pos-article-text-card-106821"></div>
            <br>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

<h2 class="text-[18px]">در حال تکمیل این بخش هستیم و به زودی پکیج ها آپلود می شود</h2>
                @foreach ($sounds as $item)
                    <div class="bg-white h-[200px] shadow-md rounded-lg overflow-hidden">
                        <audio controls class="w-full h-40 mt-[-70px] object-cover">
                            <source src="{{ asset('storage/' . $item->sound) }}" type="audio/mpeg">
                            مرورگر شما از تگ ویدیو پشتیبانی نمی‌کند.
                        </audio>
                        <br>
                        <div class="p-1 text-center">
                            <h2 class="text-lg font-semibold mb-2">{{ $item->name }}</h2>
                            <a href="{{ asset('storage/' . $item->sound) }}" download="{{ $item->name }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">
                                دانلود
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-6 flex justify-center ">
                {{ $sounds->links('vendor.pagination.tailwind') }}
            </div>
            <br><br>
<div id="pos-article-display-106828"></div>
        </div>
    </div>
</div>
