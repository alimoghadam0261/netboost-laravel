<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('run:python-request', function () {
    $path = base_path('keywords/request.py');
    $output = shell_exec("python3 {$path}");
    $this->info($output);
})->describe('Run the Python request.py script 12 hours')
      ->cron('0 */12 * * *');  // هر 12 ساعت


Artisan::command('run:python-proxy', function () {
    $path = base_path('keywords/req.py');
    $output = shell_exec("python3 {$path}");
    $this->info($output);
})->describe('Run the Python request.py script 12 hours')
      ->cron('0 */12 * * *');  // هر 12 ساعت


//with open("trends_data.json", "w", encoding="utf-8") as file:
//    json.dump(data_json, file, ensure_ascii=False, indent=4)
