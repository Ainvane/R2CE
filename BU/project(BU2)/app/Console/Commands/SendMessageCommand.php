<?php

namespace App\Console\Commands;

use App\Events\MessageSent;
use GuzzleHttp\Psr7\Message;
use Illuminate\Console\Command;

use function Laravel\Prompts\text;

class SendMessageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a message to a chat';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = text(
            label: 'Enter your name',
            required: true
        );

        $text = text(
            label: 'Enter your message',
            required: true
        );

        MessageSent::dispatch($name, $text);
    }
}
