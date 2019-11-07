<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\SendEmailCron as SendEmailCron1;
use Mail;

class SendEmailCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command that sends an email every hour';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $email = new SendEmailCron1();
        Mail::to(config('mail.username'))->send($email);
        
    }
}
