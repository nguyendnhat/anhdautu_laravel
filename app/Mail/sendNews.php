<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendNews extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $title;
    protected $content;
   

    public function __construct($title,$content)
    {
        $this->title=$title;
        $this->content=$content;

    /**
     * Build the message.
     *
     * @return $this
     */
}
    public function build()
    {
        return $this->from('vn3c2017@gmail.com','Thư gửi từ Website datxanhvietnam.net')->subject($this->title)->view('site.email.sendNews')->with([
                        'content' => $this->content
                    ]);
;
    }
}
