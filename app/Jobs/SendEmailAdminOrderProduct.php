<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
class SendEmailAdminOrderProduct implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        //
        $this->data= $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $data= $this->data;
        Mail::send('.client.pages.mails.mail-order-admin', $data, function($message) {
            $message->to('tahuuhao1810@gmail.com', 'AlloShop')->subject
            ('Thanh You');
            $message->from('tahuuhao1810@gmail.com','Allshop');
        });
    }
}
