<?php


namespace App\Livewire\Home;

use Livewire\Component;

class Keywords extends Component
{
    public string $title = 'کلمات کلیدی|keywords';
    public string $description = "کلمات کلیدی متن های شما برای سئو و هشتگ گذاری به رایگان|Keywords in your texts for SEO and hashtags for free";


    public $text;
    public $keywords = [];

    public function extract()
    {
        $this->keywords = $this->extractKeywords($this->text);
    }

    private function extractKeywords($text)
    {
        // استخراج کلمات فارسی و انگلیسی با استفاده از regex
        preg_match_all('/\p{L}+/u', strtolower($text), $matches);
        $words = $matches[0];

        $wordCount = array_count_values($words);
        arsort($wordCount);

        // با تنظیم preserve_keys به true، کلیدهای اصلی حفظ می‌شوند
        return array_slice($wordCount, 0, 10, true);
    }

    public function render()
    {
        return view('livewire.home.keywords')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description,
        ]);
    }
}
