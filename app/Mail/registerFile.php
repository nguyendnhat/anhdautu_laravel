<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class registerFile extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $email;
    protected $phone;
    protected $link;

    public function __construct($email, $phone, $link)
    {
        $this->email= $email;
        $this->phone= $phone;
        $this->link= $link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Thư đăng ký nhận file từ khách hàng Website datxanhvietnam.net')->from('vn3c2017@gmail.com','Ban quản trị')->view('admin.email.register_file')->with([
            'email' => $this->email,
            'phone' => $this->phone,
            'link' => $this->link,
        ]);
        ;
    }
}
