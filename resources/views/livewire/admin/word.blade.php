<div class="max-w-5xl mx-auto py-10" xmlns:wire="http://www.w3.org/1999/xhtml">
    <div>
  <h1>فرم ثبت سخن بزرگان</h1>
        <br><br>
        <form wire:submit.prevent="save" class="space-y-6 px-6">
            @csrf
            <label>نام صاحب سخن :</label><br>
            <input wire:model="author" type="text" placeholder="نام"><br>
            @error('author')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            <label>متن سخن :</label><br>
            <textarea name="content" wire:model="content" id="" cols="70" rows="10"></textarea>
            @error('content')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            <br>
            <button
            class="bg-green-400"
            type="submit"
            >ثبت سخن</button>
        </form>

    </div>
    <!-- پیام موفقیت -->
    @if (session()->has('success'))
        <div class="mt-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-md" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <br>
    <div>
        <h1 class="pr-[20px] text-[22px]" >لیست سخنان ذخیره شده</h1>
        <p class="pr-[20px] text-[18px]" >تعداد : {{$count}}</p>
        <br>

        @foreach($wodOfHuman as $item)
        <div>
            <div class="flex justify-around">
            <h1>{{$item->author}}</h1>
                <i class="fa-solid fa-trash text-red-300" wire:click="delete({{$item->id}})"></i>
            </div>
            <div>
                <p>
                    {{$item->content}}
                </p>
            </div>

        </div>
            <hr>
        @endforeach
    </div>
    <div class="mt-6 flex justify-center ">
        {{ $wodOfHuman->links('vendor.pagination.tailwind') }}
    </div>
    <br><br>
</div>
