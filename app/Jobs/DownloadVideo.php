<?php

namespace App\Jobs;

use App\Models\Download;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\Process\Process;
use Illuminate\Support\Str;

class DownloadVideo implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public $download;

    public function __construct(Download $download)
    {
        $this->download = $download;
    }

    public function handle()
    {
        $this->download->update(['status' => 'downloading']);

        $yt = config('app.ytdlp_path', env('YTDLP_PATH', 'yt-dlp'));

        $ext = $this->download->format === 'mp3' ? 'mp3' : 'mp4';
        $fileName = 'downloads/' . Str::uuid() . ".{$ext}";
        $outputPath = storage_path('app/public/' . $fileName);

        if ($this->download->format === 'mp3') {
            $cmd = [$yt, '-x', '--audio-format', 'mp3', '--audio-quality', '0', '-o', $outputPath, $this->download->url];
        } else {
            $cmd = [$yt, '-f', 'best', '-o', $outputPath, $this->download->url];
        }

        $process = new Process($cmd);
        $process->setTimeout(null);

        try {
            $process->mustRun();

            $this->download->update([
                'status' => 'completed',
                'file_path' => $fileName,
            ]);
        } catch (\Exception $e) {
            $this->download->update([
                'status' => 'failed',
            ]);
        }
    }
}
