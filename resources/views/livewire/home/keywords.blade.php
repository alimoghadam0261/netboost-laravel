<div>
    <br>
    <div class="flex">
        <p class="text-gray-300 mx-2">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('keywords')}}">کلمات کلیدی</a>
    </div>
    <br>
<div class="dark:bg-gray-800 h-auto justify-center
    transform    transition-all duration-700 ease-in-out shadow-lg">
    <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8 youtube-mobile">
    <div>
        <div class="max-w-3xl mx-auto py-10 keywords-page">
<h1 class="text-xl">کلمات کلیدی|keywords</h1>
<br>
            <p>متن خود را در کادر زیر وارد و دکمه استخراج را بزنید تا کلمات کلیدی متن و تعداد تکرارشون را برای شما نمایش دهد</p>
            <br>
            <form wire:submit.prevent="extract">
                <textarea wire:model="text" rows="5" cols="78"
                          class="border border-blue-300 rounded-md"
                ></textarea><br><br>
                <button
                    class="bg-blue-300 rounded-md hover:bg-blue-600 w-[200px] h-[50px]"
                    type="submit">استخراج کلمات کلیدی</button>
            </form>

            @if($keywords)
                <h3>کلمات کلیدی:</h3>
                <ul>
                    @foreach($keywords as $word => $count)
                        <li>{{ $word }} ({{ $count }})</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
<br>
<div>
<div id="pos-article-text-card-106821"></div>
</div>
<br>
<div id="pos-article-display-106828"></div>
<p class="ali"> #کلمات_کلیدی, #SEO, #محتوا, #بهینه_سازی_محتوا, #محتوای_بازاریابی</p>
</div>
</div>
</div>
