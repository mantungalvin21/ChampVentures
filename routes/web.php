<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('site.pages.index');
});

// Route::get('/contact-us', function () {
//     return view('site.pages.contact-us');
// });

Route::view('/contact-us', 'site.pages.contact-us')->name('site.pages.contact-us');
Route::post('/send', [ContactController::class, 'send'])->name('send.email');

Route::get('/about_us/mission_&_vision_statement', function () {
    return view('site.pages.about-us.mission_&_vision_statement');
});
Route::get('/about_us/company_values', function () {
    return view('site.pages.about-us.company_values');
});

// Medical Billing Quick Links
Route::get('/services/billing_services', function () {
    return view('site.pages.services.medical_billing_services');
});
Route::get('/services/billing_services/overview', function () {
    return view('site.pages.services.index.medical_billing_services.overview');
});
Route::get('/services/billing_services/introduction_to_our_billing_services', function () {
    return view('site.pages.services.index.medical_billing_services.introduction_to_our_billing_services');
});
Route::get('/services/billing_services/detailed_billing_services', function () {
    return view('site.pages.services.index.medical_billing_services.detailed_billing_services');
});
Route::get('/services/billing_services/benefits', function () {
    return view('site.pages.services.index.medical_billing_services.benefits');
});
Route::get('/services/billing_services/why_choose', function () {
    return view('site.pages.services.index.medical_billing_services.why_choose');
});
Route::get('/services/billing_services/faqs_for_medical_billing', function () {
    return view('site.pages.services.index.medical_billing_services.faqs_for_medical_billing');
});

// Medical Coding Services Quick Links
Route::get('/services/coding_services', function () {
    return view('site.pages.services.medical_coding_services');
});
Route::get('/services/medical_coding/overview', function () {
    return view('site.pages.services.index.medical_coding_services.overview');
});
Route::get('/services/medical_coding/introduction_to_our_coding_services', function () {
    return view('site.pages.services.index.medical_coding_services.introduction_to_our_coding_services');
});
Route::get('/services/medical_coding/detailed_coding_services', function () {
    return view('site.pages.services.index.medical_coding_services.detailed_coding_services');
});
Route::get('/services/medical_coding/benefits', function () {
    return view('site.pages.services.index.medical_coding_services.benefits');
});
Route::get('/services/medical_coding/why_choose', function () {
    return view('site.pages.services.index.medical_coding_services.why_choose');
});
Route::get('/services/medical_coding/faqs_for_coding_services', function () {
    return view('site.pages.services.index.medical_coding_services.faqs_for_coding_services');
});

// Credentialing Services Quick Links
Route::get('/services/physician_credentialing_services',function () {
    return view('site.pages.services.physician_credentialing_services');
});
Route::get('/services/credentialing_services/overview', function () {
    return view('site.pages.services.index.credentialing_services.overview');
});
Route::get('/services/credentialing_services/introduction_to_our_credentialing_services', function () {
    return view('site.pages.services.index.credentialing_services.introduction_to_our_credentialing_services');
});
Route::get('/services/credentialing_services/detailed_credentialing_services', function () {
    return view('site.pages.services.index.credentialing_services.detailed_credentialing_services');
});
Route::get('/services/credentialing_services/benefits', function () {
    return view('site.pages.services.index.credentialing_services.benefits');
});
Route::get('/services/credentialing_services/why_choose', function () {
    return view('site.pages.services.index.credentialing_services.why_choose');
});
Route::get('/services/credentialing_services/faqs_for_credentialing', function () {
    return view('site.pages.services.index.credentialing_services.faqs_for_credentialing_services');
});

// Auditing Services Quick Links
Route::get('/services/auditing_services', function () {
    return view('site.pages.services.medical_auditing_services');
});
Route::get('/services/auditing_services/overview', function () {
    return view('site.pages.services.index.medical_auditing_services.overview');
});
Route::get('/services/auditing_services/introduction_to_our_auditing_services', function () {
    return view('site.pages.services.index.medical_auditing_services.introduction_to_our_auditing_services');
});
Route::get('/services/auditing_services/detailed_auditing_services', function () {
    return view('site.pages.services.index.medical_auditing_services.detailed_auditing_services');
});
Route::get('/services/auditing_services/benefits', function () {
    return view('site.pages.services.index.medical_auditing_services.benefits');
});
Route::get('/services/auditing_services/why_choose', function () {
    return view('site.pages.services.index.medical_auditing_services.why_choose');
});
Route::get('/services/auditing_services/faqs_for_medical_auditing', function () {
    return view('site.pages.services.index.medical_auditing_services.faqs_for_auditing_services');
});

// Administrative Services Quick Links
Route::get('/services/administrative_services', function () {
    return view('site.pages.services.medical_administrative_services');
});
Route::get('/services/administrative_services/overview', function () {
    return view('site.pages.services.index.administrative_services.overview');
});
Route::get('/services/administrative_services/introduction_to_our_administrative_services', function () {
    return view('site.pages.services.index.administrative_services.introduction_to_our_administrative_services');
});
Route::get('/services/administrative_services/detailed_administrative_services', function () {
    return view('site.pages.services.index.administrative_services.detailed_administrative_services');
});
Route::get('/services/administrative_services/benefits', function () {
    return view('site.pages.services.index.administrative_services.benefits');
});
Route::get('/services/administrative_services/why_choose', function () {
    return view('site.pages.services.index.administrative_services.why_choose');
});
Route::get('/services/administrative_services/faqs_for_administrative_services', function () {
    return view('site.pages.services.index.administrative_services.faqs_for_administrative_services');
});

// Industries 
Route::get('/industries/gastroenterology', function () {
    return view('site.pages.industries.gastroenterology');
});
Route::get('/industries/internal_medicine', function () {
    return view('site.pages.industries.internal_medicine');
});
Route::get('/industries/pain_management', function () {
    return view('site.pages.industries.pain_management');
});
Route::get('/industries/pediatric_medical', function () {
    return view('site.pages.industries.pediatric_medical');
});
Route::get('/industries/physical_therapy', function () {
    return view('site.pages.industries.physical_therapy');
});
Route::get('/industries/plastic_surgery', function () {
    return view('site.pages.industries.plastic_surgery');
});
Route::get('/industries', function () {
    return view('site.pages.industries.index');
});