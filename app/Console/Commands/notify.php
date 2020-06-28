<?php

namespace App\Console\Commands;

use App\Mail\NotifyMail;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify.email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'sends emails to users';

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
        $data = ['title'=>'programing','body'=>'php'];
        $emails = User::select('email')->get();
        foreach ($emails as $email){
            Mail::To($email)->Send(new NotifyMail($data));
        }
    }
}
