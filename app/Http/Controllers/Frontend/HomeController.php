<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Event;
use App\Models\Banner;
use App\Models\Setting;
use App\Models\Employee;
use App\Models\OurClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactEnquiryMail;
use App\Models\AfterSchool;
use App\Models\ContactEnquiry;
use App\Models\Enrollment;
use App\Models\KeyDate;
use App\Models\Newsletter;
use App\Models\RDProgram;
use App\Models\Testimonial;
use App\Models\WeekendSchool;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{   

    public function index(){
        $banners = Banner::where('page', 'Home')->take(5)->get(); // return 5 banner for the home page
        return view('frontend.home', compact('banners'));
    }

    public function about(){
        $banners = Banner::where('page', 'About')->take(10)->latest()->get();
        $employees = Employee::orderBy('sort')->get();
        $events = Event::where('is_special', 'normal')->get();
        $specialEvents = Event::where('is_special', 'special')->get();
        $programs = RDProgram::all();
        return view('frontend.about', compact('banners', 'employees', 'events', 'specialEvents', 'programs'));
    }

    public function almayeeyah(){
        return view('frontend.almayeeyah');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function curriculum(){
        $banners = Banner::where('page', 'Curriculum')->take(10)->latest()->get();
        return view('frontend.curriculum', compact('banners'));
    }

    public function ethos(){
        $banners = Banner::where('page', 'Ethos')->take(10)->latest()->get();
        return view('frontend.ethos', compact('banners'));
    }

    public function freestruc(){
        return view('frontend.freestruc');
    }

    public function guide($id){
        $data = RDProgram::where('id', $id)->firstOrFail();

        return view('frontend.guide', compact('data'));
    }

    public function class(){
        $classes = OurClass::all();
        $weekendSchool = WeekendSchool::all();
        $keyDate = KeyDate::all();
        $afterSchool = AfterSchool::select('id', 'name', 'where', 'when')->get();

        return view('frontend.ourclasses', compact('classes', 'weekendSchool', 'afterSchool', 'keyDate'));
    }

    public function partnerPage(){
        return view('frontend.partnerpage');
    }

    public function rdSection(){
        return view('frontend.rd');
    }

    public function research(){
        $banners = Banner::where('page', 'Research')->take(10)->latest()->get();
        return view('frontend.research', compact('banners'));
    }

    public function schoolclub(){
        return view('frontend.schoolclub');
    }

    public function weekPOP($id){
        $weekendSchool = WeekendSchool::where('id', $id)->firstOrFail();

        return view('frontend.week-pop', compact('weekendSchool'));
    }

    public function weekend(){
        $testimonials = Testimonial::orderBy('sort')->get();
        $enrollment = Enrollment::all();
        $weekendSchool = WeekendSchool::select('*')->get();
        $gallery = Banner::where('page', 'image_gallery')->latest()->get();

        return view('frontend.weekend', compact('testimonials', 'weekendSchool', 'gallery', 'enrollment'));
    }

    public function newsletterSubmit(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required | email | max:255',
		]);

        $data = Newsletter::create($validated);

        if ($data) {
            Session::flash('success', 'Thank you for submitting.');

            return redirect()->back();
        }

        Session::flash('error', 'Something went wrong :(');

        return redirect()->back();
    }

    public function sendcontactmail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required | string | max:255',
            'email' => 'required | email | max:255',
            'message' => 'nullable | string',
		]);

        $data = ContactEnquiry::create($validated);

        if ($data) {
            // Mail::to(config('myconfig.MAIL_TO_ADDRESS'))->send(new ContactEnquiryMail($data));
            Session::flash('success', 'Thank you for submitting the form. Our team will get back to you.');

            return redirect()->back();
        }

        Session::flash('error', 'Something went wrong :(');

        return redirect()->back();
    }
}
