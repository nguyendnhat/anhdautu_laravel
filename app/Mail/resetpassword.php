<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class resetpassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $password;
    protected $account;

    public function __construct($password,$account)
    {
        $this->password=$password;
        $this->account=$account;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('vn3c2017@gmail.com','Ban quản trị Website datxanhvietnam.net')->subject('Đặt lại mật khẩu')->view('admin.email.reset')->with([
                        'password' => $this->password,
                        'account' => $this->account,
                    ]);
;
    }
}
