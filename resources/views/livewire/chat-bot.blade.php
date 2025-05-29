<div class="container mx-auto p-4 max-w-2xl">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <!-- تاریخچه چت -->
        <div class="h-96 mb-4 overflow-y-auto bg-gray-50 p-4 rounded-lg border border-gray-200">
            @foreach($messages as $message)
                <div class="@if($message['role'] === 'user') ml-12 @else mr-12 @endif mb-3">
                    <div class="@if($message['role'] === 'user') bg-blue-100 text-blue-800 @else bg-green-100 text-green-800 @endif p-3 rounded-lg">
                        <strong class="block text-sm font-semibold mb-1">
                            {{ $message['role'] === 'user' ? 'شما' : 'دستیار' }}:
                        </strong>
                        <p class="text-sm">{{ $message['content'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- فرم ارسال پیام -->
        <form wire:submit.prevent="sendMessage" class="flex gap-2">
            <input
                type="text"
                wire:model="userMessage"
                placeholder="پیام خود را وارد کنید..."
                class="flex-1 p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            >
            <button
                type="submit"
                class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors"
            >
                ارسال
            </button>
        </form>
    </div>
</div>
