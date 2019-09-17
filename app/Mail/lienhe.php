<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class lienhe extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $name;
    protected $email;
    protected $address;
    protected $content;
    protected $phone;

    public function __construct($name,$email,$address,$content,$phone)
    {
        $this->name=$name;
        $this->email=$email;
        $this->address=$address;
        $this->content=$content;
        $this->phone=$phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Thư liên hệ từ khách hàng Website datxanhvietnam.net')->from('vn3c2017@gmail.com','Ban quản trị')->view('admin.email.lienhe')->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'address' => $this->address,
                        'content' => $this->content,
                        'phone' => $this->phone,
                    ]);
;
    }
}
