<div>

    <div class="container mx-auto p-4">
        {{-- فرم آپلود --}}
        <form wire:submit.prevent="save" class="mb-6">
            @csrf
            <div class="mb-4">
                <input type="text" wire:model="title" class="w-full border-gray-300 rounded-lg p-2" placeholder="عنوان ویدیو">
                @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <input type="file" wire:model="video" class="w-full border-gray-300 rounded-lg p-2">
                @error('video') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                آپلود ویدیو
            </button>
        </form>

        {{-- نمایش پیام موفقیت --}}
        @if (session()->has('success'))
            <div class="mb-4 p-2 bg-green-200 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        {{-- نمایش لیست ویدیوها --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($videos as $video)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <video class="w-full h-48 object-cover" controls>
                        <source src="{{ asset('storage/' . $video->video) }}" type="video/mp4">
                        مرورگر شما از تگ ویدیو پشتیبانی نمی‌کند.
                    </video>
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-2">{{ $video->title }}</h2>
                        <a href="{{ asset('storage/' . $video->video) }}" download="{{ $video->title }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">
                            دانلود
                        </a>
                        <button wire:click="delete({{ $video->id }})" class="inline-block bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-300">
                            حذف
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mt-6 flex justify-center ">
        {{ $videos->links('vendor.pagination.tailwind') }}
    </div>
    <br><br>
</div>
