<?php

namespace App\Http\Controllers\Resume;

use App\Mail\ContactRequested;
use Illuminate\Mail\MailManager;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function store(ContactRequest $request, MailManager $mailer): JsonResponse
    {
        $mailer->queue(new ContactRequested(
            $request->getName(),
            $request->getEmail(),
            $request->getPhone(),
            $request->getSubject(),
            $request->getMessage(),
            $request->ip(),
            $request->userAgent(),
        ));

        return new JsonResponse(['success' => true, 'message' => __('Thank you for your message. I will get back to you within 2 business days. You can now close this model.')]);
    }
}
