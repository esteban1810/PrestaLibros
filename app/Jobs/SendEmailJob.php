<?php

namespace App\Jobs;

use App\Mail\SendEmailTest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Libro;


class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $details;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->count = $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        //Mail::to('prestalibrosgdl@gmail.com')->send(new SendEmailTest($totalLibros));
        $email = \DB::table('libros')
        ->whereRaw('Date(created_at) = CURDATE()')
        ->count();

        //Mail::to(['email']->send($email));
        Mail::to('prestalibrosgdl@gmail.com')->send(new SendEmailTest($email));
    }
}
