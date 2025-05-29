<!doctype html>
<html lang="fa" xmlns:wire="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <script>
        !function (e, t, n) {
            e.yektanetAnalyticsObject = n, e[n] = e[n] || function () {
                e[n].q.push(arguments)
            }, e[n].q = e[n].q || [];
            var a = t.getElementsByTagName("head")[0], r = new Date,
                c = "https://cdn.yektanet.com/superscript/wafIVwEZ/native-netboost.ir-42722/yn_pub.js?v=" + r.getFullYear().toString() + "0" + r.getMonth() + "0" + r.getDate() + "0" + r.getHours(),
                s = t.createElement("link");
            s.rel = "preload", s.as = "script", s.href = c, a.appendChild(s);
            var l = t.createElement("script");
            l.async = !0, l.src = c, a.appendChild(l)
        }(window, document, "yektanet");
    </script>


    <link id="canonical" rel="canonical" href="{{ url()->current() }}">


    <meta charset="UTF-8">
{{--    <meta name="description" content="NetBoost یک دستیار رایگان که به شما کمک می‌کند تا در شبکه‌های اجتماعی بدرخشید و بیش از 30 خدمت--}}
{{--     از جمله تولید هشتگ، ترندهای روز گوگل... ارائه می‌دهد."/>--}}

    <title>{{ $title ?? 'netboost|دستیار شبکه اجتماعی' }}</title>
    <meta name="description" content="{{ $description ?? 'NetBoost یک دستیار رایگان که به شما کمک می‌کند تا در شبکه‌های اجتماعی بدرخشید و بیش از 30 خدمت
     از جمله تولید هشتگ، ترندهای روز گوگل... ارائه می‌دهد.' }}">



    <meta name="keywords" content="دستیار شبکه‌های اجتماعی, تولید هشتگ, کلمات کلیدی,
    ترند روز گوگل, موزیک ترند, ویدیو هوک, ابزارهای شبکه اجتماعی, آموزش آنلاین,
     دانلود یوتیوب, دانلود اینستاگرام, فاکت علمی, چالش‌های محتلف,ترند,
    افزایش تعامل, رشد فالوئر, تبادل لینک, ساخت هشتگ, ویدیو هوک
  ,سایت,تولید,لینک,دانلود,ویدیو,آموزش,حمایت,تبادل
    "/>
    <meta name="robots" content="index, follow"/>

    <!-- Open Graph Meta Tags (برای اشتراک‌گذاری در شبکه‌های اجتماعی) -->
    <meta property="og:title" content="NetBoost - دستیار رایگان شبکه‌های اجتماعی"/>
    <meta property="og:description"
          content="با NetBoost، بیش از 30 خدمت رایگان برای رشد صفحه مجازی خود دریافت کنید، از جمله تولید هشتگ، ترندهای روز، موزیک‌های ترند، ویدیوهای هوک و دیگر خدمات."/>
    <meta property="og:url" content="https://netboost.ir"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://netboost.ir/public/img/share.jpg"/>
    <!-- آدرس تصویری که می‌خواهید در اشتراک‌گذاری‌ها نمایش داده شود -->
    <meta property="og:site_name" content="NetBoost"/>
    <meta property="og:locale" content="fa_IR"/> <!-- تنظیم زبان سایت برای Open Graph -->

    <!-- Publisher meta tag -->
    <meta name="publisher" content="Ariyabod Group"/>

    <!-- Optional: Author and copyright -->
    <meta name="author" content="Ariyabod Group"/>
    <meta name="copyright" content="© 2025 Ariyabod Group. All rights reserved."/>


    <!-- رنگ نوار وضعیت و پس‌زمینه اسپلش -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- تنظیم نوار وضعیت در دستگاه‌های اپل -->
    <meta name="theme-color" content="#38bdf8">

    <!-- آیکون‌های اسپلش اسکرین -->
    <link rel="apple-touch-icon" href="{{ asset('img/defult/icon-192x192.png') }}">
    <link rel="apple-touch-startup-image" href="{{ asset('img/defult/icon-512x512.png') }}"
          media="(device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3)"
    >
    <!-- نام اپلیکیشن برای حالت standalone -->
    <meta name="apple-mobile-web-app-title" content="NetBoost">

    <!-- آیکون‌ها -->
    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('img/icon/android-chrome-192x192.png') }}">
    <link rel="manifest" href="/manifest.json">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/icon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/icon/favicon-16x16.png') }}">

    <!-- viewport settings -->
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <meta http-equiv=" X-UA-Compatible"  content="ie=edge">

{{--   <title>{{ $title ?? 'Page Title' }}</title>--}}

    <!-- Manifest -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">

    <!-- Service Worker -->
    {{--    <script>--}}
    {{--        if ('serviceWorker' in navigator) {--}}
    {{--            window.addEventListener('load', () => {--}}
    {{--                navigator.serviceWorker.register('/service-worker.js').then(registration => {--}}
    {{--                    console.log('Service Worker registered with scope:', registration.scope);--}}
    {{--                }).catch(error => {--}}
    {{--                    console.log('Service Worker registration failed:', error);--}}
    {{--                });--}}
    {{--            });--}}
    {{--        }--}}
    {{--    </script>--}}


    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">--}}
    @livewireStyles
    @vite([
    'resources/css/app.css',
    'resources/css/all.css',
    'resources/js/app.js',
    'resources/js/all.min.js'
    ])

</head>
<body dir="rtl" class="font-iransans bg-white text-gray-900 dark:bg-gray-900  dark:text-gray-200">
@livewire('components.topmenu')


<br><br><br>

@livewire('components.menu')
{{$slot}}


<div class="donate-mobile fixed bottom-[4%] right-[1%] pt-[5px] transition-all duration-300">
    <a wire:navigate.hover href="{{route('donate')}}">
        <img class="rounded-[50%] img-spanser" src="{{asset('./img/defult/webp/tifa.webp')}}" alt="spanser"
             loading="eager" height="80" width="80">
        <p class="text-[14px] mx-[10px]">اسپانسر</p>
    </a>
    <div class="spanser p-3">
        <img class="mx-[90px]" src="{{asset('./img/defult/webp/tifa.webp')}}" alt="spanser1" loading="eager"
             height="200" width="200"><br>
        <p class="text-[20px] text-center"><strong>tifa_underwear</strong> <i
                class="fa-brands fa-instagram text-gray-800 text-[25px]"></i></p><br>
        <p>مرجع تخصصی لباس زیر در ایران ارسال به تمام ایران با بهترین کیفیت و بهترین قیمت </p><br>
        <p>ما را در اینستاگرام دنبال کنید </p>
    </div>
</div>


<div class="donate-mobile rounded-lg fixed bottom-[4%] left-[1%] opacity-[0.5] pt-[5px]
hover:opacity-[1] transition-all duration-300
">
    <a wire:navigate.hover href="{{route('donate')}}">
        <img src="{{asset('./img/defult/webp/Donations.webp')}}" alt="donate" loading="eager" height="50" width="50">
        <p class="text-[14px]">حمایت از ما</p>
    </a>
</div>


@livewire('components.mobile')


@livewire('components.footer')
{{--<script src="{{asset('./service-worker.js')}}"></script>--}}
{{--@once--}}
{{--    <script src="{{ asset('livewire/livewire.js') }}" defer></script>--}}
{{--@endonce--}}

@livewireScripts

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "NetBoost",
  "url": "https://netboost.ir",
  "logo": "https://netboost.ir/img/logo1.png",
  "sameAs": [
    "https://instagram.com/ariyabodgroup",
    "https://www.youtube.com/@NetBoost021"
  ]
}

</script>


</body>
</html>





