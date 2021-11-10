<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
class SendEmailClientOrderProduct implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $email;
    public $data;
    public function __construct($email,$data)
    {
        //
        $this->email = $email;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data= $this->data;
        Mail::send('.client.pages.mails.mail-order-client', $data, function($message) {
            $message->to($this->email, 'AlloShop')->subject
            ('Thanh You');
            $message->from('tahuuhao1810@gmail.com','Allshop');
        });
    }
}
