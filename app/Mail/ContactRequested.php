<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactRequested extends Mailable implements ShouldQueue
{
    use Queueable;
    use SerializesModels;

    private string $name;
    private string $email;
    private ?string $phone;
    private string $message;
    private ?string $ipAddress;
    private ?string $userAgent;

    public function __construct(
        string $name,
        string $email,
        ?string $phone,
        string $subject,
        string $message,
        ?string $ipAddress = null,
        ?string $userAgent = null
    ) {
        $this->name      = $name;
        $this->email     = $email;
        $this->phone     = $phone;
        $this->subject   = $subject;
        $this->message   = $message;
        $this->ipAddress = $ipAddress;
        $this->userAgent = $userAgent;
    }

    public function build(): self
    {
        return $this
            ->to(config('mail.to.resume.contact.address'), config('mail.to.resume.contact.name'))
            ->replyTo($this->email, $this->name)
            ->view('mails.resume.contact', [
                'name'      => $this->name,
                'email'     => $this->email,
                'phone'     => $this->phone,
                'subject'   => $this->subject,
                'content'   => $this->message,
                'ip'        => $this->ipAddress,
                'userAgent' => $this->userAgent,
            ])
            ->text('mails.resume.contact_plain')
        ;
    }
}
