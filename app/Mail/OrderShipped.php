<?php

namespace App\Mail;

use App\Http\Services\CartService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    protected $customer;
    protected $carts;

    public function __construct($customer, $carts)
    {
        $this->customer = $customer;
        $this->carts = $carts;
    }

    public function build()
    {
        return $this->view('users.mail.success')->with([
            'customer' => $this->customer,
            'carts' => $this->carts,
        ]);
    }
}
