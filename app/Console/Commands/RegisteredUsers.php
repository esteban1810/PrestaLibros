<?php

namespace App\Console\Commands;

use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Command;
use App\User;

class RegisteredUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'registered:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enviar un correo con el número de usuarios registrados';

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
        $totalUsers = \DB::table('users')
        ->whereRaw('Date(created_at) = CURDATE()')
        ->count();

        Mail::to('prestalibrosgdl@gmail.com')->send(new SendMailable($totalUsers));
    }
}
