<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;
use MongoDB\Driver\Session;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\FlashBagAwareSessionInterface;

class FormController extends Controller
{
    public function saveContactForm(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'contact-name'    => 'required',
            'contact-email'   => 'required|email',
            'contact-phone'   => 'required',
            'contact-message' => 'required|string',
        ]);

        $existingForms = ContactForm::where('email', $request->get('contact-email'))->get();
        if ($existingForms->count() == ContactForm::MAX_SUBMITTED_FORMS_COUNT) {
            return response()->json(['success' => false, 'message' => 'This email is already submitted ' . $existingForms->count() ." times already" ], 400);
        }
        ContactForm::create([
            'name'    => $request->get('contact-name'),
            'email'   => $request->get('contact-email'),
            'phone'   => $request->get('contact-phone'),
            'message' => $request->get('contact-message'),
        ]);
        return response()->json(['success' => true]);
    }
}
