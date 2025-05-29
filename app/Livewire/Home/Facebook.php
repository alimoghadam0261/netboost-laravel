<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;

class Facebook extends Component
{

    public $url;
    public $format = 'mp4';
    public $progress = 0;
    public $downloadLink;

    public function download()
    {
        $this->validate([
            'url' => 'required|url',
            'format' => 'required|in:mp4,mp3',
        ]);

        $fileName = 'downloads/' . uniqid() . '.' . ($this->format === 'mp3' ? 'mp3' : 'mp4');
        $outputPath = storage_path('app/public/facebook/' . $fileName);

        $command = $this->buildCommand($outputPath);

        $process = new Process($command);
        $process->setTimeout(null);

        $process->start();

        // ارسال آپدیت به صورت async
        while ($process->isRunning()) {
            $this->progress = $this->getProgress($process);
            $this->dispatch('progressUpdated', $this->progress);
            usleep(500000); // هر 500 میلی‌ثانیه (نیم‌ثانیه) وضعیت را بررسی کن
        }

        if ($process->isSuccessful()) {
            $this->progress = 100;
            $this->dispatch('progressUpdated', $this->progress);
            $this->downloadLink = asset('storage/' . $fileName);
            session()->flash('success', 'دانلود با موفقیت انجام شد!');
        } else {
            session()->flash('error', 'خطا در دانلود ویدیو: ' . $process->getErrorOutput());
        }
    }

    private function buildCommand($outputPath)
    {
        $ytDlpPath = 'C:\\Users\\ali\\AppData\\Local\\Programs\\Python\\Python313\\Scripts\\yt-dlp.exe';

        if ($this->format === 'mp3') {
            return [
                $ytDlpPath,
                '-x',
                '--audio-format', 'mp3',
                '--audio-quality', '0',
                '-o', $outputPath,
                $this->url
            ];
        }

        return [
            $ytDlpPath,
            '-f', 'best',
            '-o', $outputPath,
            $this->url
        ];
    }

    private function getProgress(Process $process)
    {
        $output = $process->getIncrementalOutput() . $process->getIncrementalErrorOutput();

        if (preg_match('/(\d+\.\d+)%/', $output, $matches)) {
            return (float) $matches[1];
        }

        return $this->progress;
    }






    public function render()
    {
        return view('livewire.home.facebook');
    }
}
