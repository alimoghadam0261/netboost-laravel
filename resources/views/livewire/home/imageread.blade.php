<div >
    {{-- پیام موفقیت --}}
    @if (session()->has('success'))
        <div class="bg-green-500 text-white p-2 rounded mb-2">
            {{ session('success') }}
        </div>
    @endif

    {{-- فرم آپلود عکس --}}
    <form wire:submit.prevent="savePhoto" class="space-y-4">
        <input type="file" wire:model="photo">

        @error('photo')
        <div class="text-red-500">{{ $message }}</div>
        @enderror

        {{-- تنظیم عرض، ارتفاع و کیفیت --}}
        <div>
            <input type="number" wire:model="width" placeholder="عرض" class="border p-1">
            <input type="number" wire:model="height" placeholder="ارتفاع" class="border p-1">
            <input type="number" wire:model="quality" placeholder="کیفیت (1-100)" class="border p-1">
        </div>

        <button type="submit" class="bg-blue-500 text-white p-2 rounded">
            ذخیره عکس
        </button>
    </form>

    {{-- پیش‌نمایش عکس --}}
    @if ($photo)
        <div class="mt-4">
            <img src="{{ $photo->temporaryUrl() }}" class="max-w-full h-auto border rounded" />
        </div>
    @endif
</div>
