<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Laravel\Prompts\Prompt;
use function Laravel\Prompts\text;
use function Laravel\Prompts\select;

class TestPrompt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-prompt';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Ask for the user's name
        $name =text('What is your name?');
        $role = select(
            label: 'What role should the user have?',
            options: ['Member', 'Contributor', 'Owner']
        );

        // Display a greeting message
        $this->info("Hello, $name is a $role .");

        return 0;
    }
}
