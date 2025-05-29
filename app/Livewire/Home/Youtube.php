<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Symfony\Component\Process\Process;


class Youtube extends Component
{
    public string $title = 'دانلودر|downloader';
    public string $description="دانلودر شبکه های مجازی یوتوب اینستاگرام فیسبوک به رایگان|Free YouTube, Instagram, Facebook social media downloader";

    public $url;
    public $format = 'mp4';
    public $downloadLink;
    public $error;

    protected $rules = [
        'url'    => 'required|url',
        'format' => 'required|in:mp4,mp3',
    ];

    public function download()
    {
        set_time_limit(0);
        $this->reset(['downloadLink', 'error']);
        $this->validate();

        $ext = $this->format === 'mp3' ? 'mp3' : 'mp4';
        $fileName = 'downloads/' . uniqid() . ".{$ext}";
        $output = storage_path("app/public/{$fileName}");

        $yt = config('app.ytdlp_path', env('YTDLP_PATH', 'yt-dlp'));

        $cmd = [$yt];
        if ($this->format === 'mp3') {
            array_push($cmd, '-x', '--audio-format', 'mp3', '--audio-quality', '0');
        } else {
            array_push($cmd, '-f', 'bestvideo[ext=mp4]+bestaudio[ext=m4a]/best[ext=mp4]/best');
        }
        array_push($cmd, '-o', $output, '--no-part', $this->url);

        $process = new Process($cmd);
        $process->setEnv([
            'PATH' => getenv('PATH'),
            'SystemRoot' => getenv('SystemRoot'),
        ]);
        $process->setWorkingDirectory(storage_path('app'));
        $process->setTimeout(3600); // 1 ساعت

        try {
            $process->mustRun();
            $this->downloadLink = asset("storage/{$fileName}");
        } catch (\Exception $e) {
            $this->error = 'خطا در دانلود: ' . $process->getErrorOutput();
            logger()->error('YT-DLP Error: '.$e->getMessage(), [
                'output' => $process->getOutput(),
                'error' => $process->getErrorOutput()
            ]);
        }
    }



    public function render()
    {
        return view('livewire.home.youtube')
            ->layout('components.layouts.app', [
                'title' => $this->title,
                'description' => $this->description,
            ]);

    }
}
