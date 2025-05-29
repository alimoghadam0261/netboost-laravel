<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ChatBot extends Component
{
    public $messages = [];
    public $userMessage;

    public function sendMessage()
    {
        if (empty(trim($this->userMessage))) return;

        // افزودن پیام کاربر
        $this->messages[] = [
            'role' => 'user',
            'content' => trim($this->userMessage),
        ];

        // دریافت پاسخ از AI
        $aiResponse = $this->askAI($this->messages);

        // افزودن پاسخ به تاریخچه چت
        $this->messages[] = [
            'role' => 'assistant',
            'content' => $aiResponse,
        ];

        $this->userMessage = '';
    }

    private function askAI($messages)
    {
        $apiKey = env('OPENROUTER_API_KEY');

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
                'HTTP-Referer' => 'http://localhost:8000', // آدرس لوکال شما
                'X-Title' => 'Local Chat App', // نام برنامه شما
            ])->timeout(25)->post('https://openrouter.ai/api/v1/chat/completions', [
                'model' => 'gryphe/mythomax-l2-13b', // مدل فعال
                'messages' => $messages,
                'temperature' => 0.7,
            ]);

            if ($response->failed()) {
                logger()->error('OpenRouter API Error', [
                    'status' => $response->status(),
                    'response' => $response->json(),
                ]);
                return 'خطا: ' . ($response->json()['error']['message'] ?? 'کد خطا: ' . $response->status());
            }

            return $response->json()['choices'][0]['message']['content'];

        } catch (\Exception $e) {
            logger()->error('API Connection Failed', [
                'error' => $e->getMessage()
            ]);
            return 'خطا در اتصال به سرور';
        }
    }

    public function render()
    {
        return view('livewire.chat-bot');
    }
}
