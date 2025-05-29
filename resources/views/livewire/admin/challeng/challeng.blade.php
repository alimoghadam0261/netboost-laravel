<div class="container mx-auto p-6">
    @if (session()->has('message'))
        <div class="alert alert-success bg-green-500 text-white p-4 rounded-lg mb-4">
            {{ session('message') }}
        </div>
    @endif

    <!-- فرم وارد کردن چالش -->
    <form wire:submit.prevent="store" class="space-y-4">
        <div class="flex flex-col sm:flex-row gap-4">

            <div class="flex-1">
                <label for="content" class="block text-sm font-semibold text-gray-700">عنوان</label>
                <input wire:model="title" class=" p-3 border border-gray-300 rounded-md" >
                @error('title') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="flex-1">
                <label for="content" class="block text-sm font-semibold text-gray-700">محتوا</label>
                <textarea wire:model="content" id="content" class="w-full p-3 border border-gray-300 rounded-md" rows="4"></textarea>
                @error('content') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="flex-1">
                <label for="challengcat_id" class="block text-sm font-semibold text-gray-700">دسته‌بندی چالش</label>
                <select wire:model="challengcat_id" id="challengcat_id" class="w-full p-3 border border-gray-300 rounded-md">
                    <option value="">انتخاب دسته‌بندی</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('challengcat_id') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>

        <button type="submit" class="w-full sm:w-auto bg-blue-600 text-white py-2 px-6 rounded-md hover:bg-blue-700">ذخیره چالش</button>
    </form>

    <hr class="my-6 border-t border-gray-300">

    <!-- چالش‌های موجود -->
        <h3 class="text-xl font-semibold text-gray-800 mb-4">چالش‌های موجود</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($challengs as $challeng)
                <div class="flex flex-col bg-white p-4 border border-gray-300 rounded-lg shadow-md">
                    <div class="flex justify-between items-center">

                        <strong class="text-lg text-gray-800">{{ $challeng->category->name }}</strong>
                        <button wire:click="deleteChalleng({{ $challeng->id }})">
                            delete
                        </button>
                    </div>
                    <p class="mt-2 text-gray-600">{{ $challeng->content }}</p>
                </div>
            @endforeach

        </div>

</div>

