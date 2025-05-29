<div class="max-w-6xl mx-[40px] py-10 bg-gray-100 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-center text-purple-700 mb-6">اطلاعات معمای تصویری را وارد نمایید</h1>
    <br>
    @if (session()->has('success'))
        <div class="mt-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-md" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <form wire:submit.prevent="save" class="space-y-6 px-6" enctype="multipart/form-data">
        <br>
        <label>نام </label>
        <input type="text" wire:model="title" required placeholder="نام یا شماره عکس">
        <br>
        <label>عکس</label>
        <input type="file" wire:model="pic" placeholder="عکس معمای خود ر وارد نمایید" required
onchange"img.src=window.URLcreateObjectURL(this.files[0])"s
>

        <br>
@error('pic') <span>{{ $message }}</span> @enderror
        <button class="bg-green-400 w-[150px] h-[50px]" type="submit">ذخیره</button>
    </form>
    <hr>
    <h1>تعداد : {{$count}}</h1><br>
    <div
    class="grid grid-cols-4"
    >
        @foreach($moamapic as $item)
            <div
            class="w-[250px] h-[300px] rounded-md"
            >
                <img  class="w-[250px] h-[230px]"
                      src="{{ asset('storage/'.$item->pic) }}" alt="{{ $item->title }}" loading="lazy">


                <h1>{{$item->title}}</h1>
                <button class="bg-red-400 p-2 rounded-md" wire:click="delete({{ $item->id }})">حذف</button>
            </div>
        @endforeach
    </div>
    <div class="mt-6 flex justify-center ">
        {{ $moamapic->links('vendor.pagination.tailwind') }}
    </div>


</div>
