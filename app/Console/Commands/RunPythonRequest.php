<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class RunPythonRequest extends Command
{
    protected $signature = 'run:python-request';
    protected $description = 'Run the Python request.py script every 3 minutes';

    public function handle()
    {
        $path = base_path('keywords/request.py');

        $process = new Process(['python', $path]);
        $process->run();

        if (!$process->isSuccessful()) {
            $this->error('Error running script: ' . $process->getErrorOutput());
        } else {
            $this->info('Script ran successfully: ' . $process->getOutput());
        }

        return 0;
    }
}
