<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\ResourceType;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.subjects')
            ->with('title', 'subjects')
            ->with('subjects', Subject::where('dept_id', auth()->user()->usersInformation->dept_id)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  '<form action="' . route('subjects.store') . '" method="POST" class="row">
        <input type="hidden" name="_token" value="' . csrf_token() . '">
        
        <div class="col-12">
        <label class="material-form-standard w-100">
        <input type="text" name="subj_title" id="subj_title" placeholder=" ">
        <span>Name</span>
        </label>
        </div>

        <div class="ml-auto mt-2">
        <button type="button" class="dt-button" data-dismiss="modal">Close</button>
        <button type="submit" class="dt-button-contained">Submit</button>
        </div>
    
    </form>';;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'subj_title' => 'required|string|max:255|unique:subjects,title'
        ]);

        if (Subject::create([
            'title' => $request->subj_title,
            'dept_id' => auth()->user()->usersInformation->departments->id,
        ])) {
            $request->session()->flash('status', 'Task was successful!');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::find($id);
        return view('pages.subjects-show')
            ->with('title', $subject->title)
            ->with('subject', $subject);
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
