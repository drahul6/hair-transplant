<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Handle the contact form submission.
     */
    public function store(ContactFormRequest $request)
    {
        try {
            $validatedData = $request->validated();
            
            // Log the validated data for debugging
            Log::info('Contact form data:', $validatedData);
            
            // Send email to admin
            Mail::to(config('mail.admin_email', 'admin@hairtranspro.com'))
                ->send(new ContactFormMail($validatedData));
            
            // Send confirmation email to user
            Mail::to($validatedData['email'])
                ->send(new ContactFormMail($validatedData));
            
            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message! We will get back to you soon.'
            ]);
            
        } catch (\Exception $e) {
            Log::error('Contact form submission failed: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            
            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again later.'
            ], 500);
        }
    }
}
