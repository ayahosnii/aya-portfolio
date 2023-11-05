<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Welcome;
use Google\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Google\Service\Gmail;
use Google\Auth\Credentials\UserRefreshCredentials;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::get();
        $skills = Skill::get();
        return view('welcome', compact('projects', 'skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function details($slug)
    {
        $project = Project::where('slug', $slug)->with('skills')->first();

        if (!$project) {
            abort(404);
        }

        return view('details', compact('project'));
    }


    public function all()
    {
        $projects = Project::get();
        return view('all-projects', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500',
        ]);

        $contact = Contact::create($validatedData);


        $to = 'ayia.hosni@gmail.com';
        Mail::to($to)->send(new ContactFormSubmitted($validatedData));

        return view('thank-you');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function thank(Welcome $welcome)
    {
        return view('thank-you');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Welcome $welcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Welcome $welcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Welcome $welcome)
    {
        //
    }
}
