<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Hash;
class Notification extends Mailable
{
    use Queueable, SerializesModels;
    
   
    /**
     * The data.
     *
     * @var array
     */

    public $filename;
    public $request;
   
     /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($filename=null,$request)
    {
        $this->filename = $filename;
        $this->request = $request;
      
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   

        ////otomatik gelen mail ve direkt adminin gönderdiği mail view'i burada ayrılacak! Buraya bir qery parameter girerek bu olay sağlanacak!
        if($this->filename){
            return $this->view('adminPanel.mail.notification',[$this->request])
            ->subject('This is notification')
            ->attach($this->filename);
        }
        else{
            return $this->view('adminPanel.mail.notification',[$this->request])
            ->subject('This is notification');
        }
        
    }
}
