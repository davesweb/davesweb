<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name'    => ['required', 'string', 'min:3'],
            'email'   => ['required', 'email'],
            'phone'   => ['nullable', 'string', 'min:8'],
            'subject' => ['required', 'string', 'min:5'],
            'message' => ['required', 'string', 'min:25'],
        ];
    }

    public function getName(): string
    {
        return $this->post('name');
    }

    public function getEmail(): string
    {
        return $this->post('email');
    }

    public function getPhone(): ?string
    {
        return $this->post('phone');
    }

    public function getSubject(): string
    {
        return $this->post('subject');
    }

    public function getMessage(): string
    {
        return $this->post('message');
    }
}
