<?php

namespace App\Jobs;

use App\Mail\OrderShipped;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    protected $customer;
    protected $carts;

    public function __construct($email, $customer, $carts)
    {
        $this->email = $email;
        $this->customer = $customer;
        $this->carts = $carts;
    }

    public function handle()
    {
        Mail::to($this->email)->send(new OrderShipped($this->customer, $this->carts));
    }
}
