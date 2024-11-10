<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyCronJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mycronjob:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run my custom cron job';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // Your cron job logic here
        $this->info('Custom cron job executed!');
        logger('This is a Cron Job');
    }
}
