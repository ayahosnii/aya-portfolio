<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }


     public function projects()
    {
        $projects = Project::get();
        return view('admin.projects.index', compact('projects'));
    }

    public function createProject()
    {
        $skills = Skill::get();
        return view('admin.projects.create', compact('skills'));
    }


    public function storeProject(Request $request)
    {

            $validation = $request->validate([
                'title_en' => 'required',
                'slug' => 'required|unique:projects',
                'description_en' => 'required',
                'skills' => 'required|array|min:1',
                'image' => 'required',
                'github_link' => 'required',
                'project_link' => 'required',
            ]);


            $project = new Project();

            $project->slug = $validation['slug'];
            $project->github_link = $validation['github_link'];
            $project->project_link = $validation['project_link'];
            $project->image = $validation['image'];


            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(base_path('../assets/mock'), $imageName);
                $project->image = $imageName;
            }


            $project->save();

            $project->skills()->attach($validation['skills']);

            $project->translate('en')->title = $request->title_en;
            $project->translate('en')->description = $request->description;

            $project->translate('ar')->title = $request->title_ar;
            $project->translate('ar')->description = $request->description;

            return redirect()->route('admin.projects.index');
    }

    public function editProject($id)
    {
        $project = Project::where('id', $id)->with('skills')->first();
        $skills = Skill::get();
        return view('admin.projects.edit', compact('project', 'skills'));
    }


    public function updateProject(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => [
                'required',
                Rule::unique('projects')->ignore($id),
            ],
            'github_link' => 'required|url',
            'skills' => 'required|array',
            'description' => 'required',
        ]);

        $project = Project::findOrFail($id);

        $project->fill($validatedData);



        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $project->image = $imageName;
        }

        $project->skills()->sync($validatedData['skills']);

        $project->save();

        return redirect()->route('admin.projects.index')
            ->with('flash', [
                'type' => 'success',
                'message' => 'Project updated successfully'
            ]);
    }

    public function skills()
    {
        $skills = Skill::get();
        return view('admin.skills.index', compact('skills'));
    }
    public function views()
    {
        $visitors = Visitor::orderBy('created_at', 'desc')->paginate(6);
        $count = Visitor::count();
        return view('admin.visitors.index', compact('visitors','count'));
    }

    public function createSkill()
    {
        return view('admin.skills.create');
    }


    public function storeSkill(Request $request)
    {

        $validation = $request->validate([
            'name' => 'required',
        ]);

        $skill = Skill::create($validation);

        return redirect()->route('admin.skills.index')
            ->with('flash', [
                'type' => 'success',
                'message' => 'Skill created successfully'
            ]);
    }

    public function editSkill($id)
    {
        $skill = Skill::where('id', $id)->first();
        return view('admin.skills.edit', compact('skill'));
    }

    public function updateSkill(Request $request, $id)
    {

        $validation = $request->validate([
            'name' => 'required',
        ]);

        $skill = Skill::findOrFail($id);

        $skill->update($validation);

        return redirect()->route('admin.skills.index')
            ->with('flash', [
                'type' => 'success',
                'message' => 'Skill created successfully'
            ]);
    }

    public function destroySkill($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect()->route('admin.skills.index')
            ->with('flash', [
                'type' => 'success',
                'message' => 'Skill deleted successfully'
            ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admin.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
