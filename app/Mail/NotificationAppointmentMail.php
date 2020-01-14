<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Client;
use App\Employee;
use App\Appointment;

class NotificationAppointmentMail extends Mailable
{
    use Queueable, SerializesModels;

     /**
     * The order instance.
     *
     * @var Appointment
     */
    public $appointment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($appointment)
    {
        $this->appointment=$appointment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'rspindola@live.com';
        $subject = 'Salão xxxxxxxxx - Confirmação de agendamento';
        $name = 'renato';
        return $this->view('emails.notification')
            ->from($address, $name)
            ->cc($this->appointment->employee->email, $this->appointment->employee->name)
            ->subject($subject);
    }
}
