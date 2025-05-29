<div class="max-w-6xl mx-[40px] py-10 bg-gray-100 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-center text-purple-700 mb-6">اطلاعات فال را وارد نمایید</h1>

    <form wire:submit.prevent="save" class="space-y-6 px-6">
        <!-- عنوان -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">عنوان</label>
            <input wire:model="title" type="text" id="title" placeholder="عنوان..."
                   class="mt-1 w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-purple-400">
            @error('title')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- متن -->
        <div>
            <label for="content" class="block text-sm font-medium text-gray-700">متن</label>
            <textarea wire:model="content" id="content" rows="5" placeholder="متن..."
                      class="mt-1 w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-purple-400"></textarea>
            @error('content')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- دکمه ثبت -->
        <div class="text-center">
            <button type="submit"
                    class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 shadow-md">
                ذخیره
            </button>
        </div>
    </form>

    <!-- پیام موفقیت -->
    @if (session()->has('success'))
        <div class="mt-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-md" role="alert">
            {{ session('success') }}
        </div>
    @endif



<br>
    <h1 class="pr-[20px] text-[22px]" >لیست فال های ذخیره شده</h1>
    <br>
    <ul>
        @foreach($oment as $omen)
        <li class="pr-[20px]">
            <strong
            class="absolute left-[5%] "
            ><button wire:click="delete({{ $omen->id }})" ><i class="fa fa-trash text-[25px] text-red-600"></i></button></strong>
            <h3>{{$omen->title}}</h3><br>
            <p>{{$omen->content}}</p>
        </li>
            <hr>
            @endforeach
    </ul>
    <br>
    <div class="mt-6 flex justify-center ">
        {{ $oment->links('vendor.pagination.tailwind') }}
    </div>
</div>
