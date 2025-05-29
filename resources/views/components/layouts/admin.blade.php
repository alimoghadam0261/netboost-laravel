<!doctype html>
<html lang="en" xmlns:wire="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">

        @livewireStyles

    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>
<body dir="rtl" class="font-iransans ">
<br><br><br>
<div class="flex">
    <div class="md:w-2/12">
@livewire('components.adminsidebar')
    </div>
    <div class="md:w-10/12">
        {{$slot}}
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
@stack('scripts')
@livewireScripts
</body>
</html>
