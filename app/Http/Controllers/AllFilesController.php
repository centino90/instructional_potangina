<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\InstructionalResource;
use App\Models\ResourceType;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Queue\Middleware\RateLimited;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;

use function PHPUnit\Framework\isNull;

class AllFilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->view === 'list') {
            $IRs = InstructionalResource::orderByDesc('created_at')
                ->select(
                    DB::raw('instructional_resources.*'),
                )
                ->leftJoin('subjects', 'instructional_resources.subject_id', '=', 'subjects.id')
                ->where('subjects.dept_id', auth()->user()->usersInformation->dept_id)
                ->take(30)
                ->get();

            // auth()->user()->usersInformation->dept_id
            return view('pages.all-files')
                ->with('instructionals', $IRs)
                ->with('rowCount', InstructionalResource::all()->count())
                ->with('subjects', Subject::all())
                ->with('title', 'all files')
                ->with('view', 'list');
        }
        $IRs = InstructionalResource::orderByDesc('created_at')
            ->select(
                DB::raw('instructional_resources.*'),
            )
            ->leftJoin('subjects', 'instructional_resources.subject_id', '=', 'subjects.id')
            ->where('subjects.dept_id', auth()->user()->usersInformation->dept_id)
            ->take(10)
            ->get();

        $rowCount = InstructionalResource::select(
            DB::raw('instructional_resources.*'),
        )
            ->leftJoin('subjects', 'instructional_resources.subject_id', '=', 'subjects.id')
            ->where('subjects.dept_id', auth()->user()->usersInformation->dept_id)
            ->count();

        return view('pages.all-files')
            ->with('instructionals', $IRs)
            ->with('rowCount', $rowCount)
            ->with('subjects', Subject::all())
            ->with('title', 'all files')
            ->with('view', 'grid');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::where('dept_id', auth()->user()->usersInformation->dept_id)->get();
        $subjOptions = '';
        foreach ($subjects as $subject) {
            $subjOptions .= '<option value="' . $subject->id . '">' . $subject->title . '</option>';
        }

        $resourceTypes = ResourceType::all();
        $resTypeOptions = '';
        foreach ($resourceTypes as $resourceType) {
            $resTypeOptions .= '<option value="' . $resourceType->id . '">' . $resourceType->name . '</option>';
        }

        return
            '<form action="' . route('allFiles.store') . '" method="POST" enctype="multipart/form-data" class="row">

            <input type="hidden" name="_token" value="' . csrf_token() . '">

            <div class="col-12">
            <label class="material-form-standard w-100">
            <select name="ir_resource_type" id="ir_resource_type">
            ' . $resTypeOptions . '
            </select>
            <span>Resource Type</span>
            </label>
            </div>

            <div class="col-12">
            <label class="material-form-standard w-100">
            <input type="text" name="ir_name" id="ir_name" placeholder=" ">
            <span>Name</span>
            </label>
            </div>

            <div class="col-12">
            <label class="material-form-standard w-100">
            <select name="ir_subject" id="subject">
            ' . $subjOptions . '
            </select>
            <span>Subject</span>
            </label>
            </div>

            <div class="col-12">
            <label class="material-form-standard w-100">
            <input type="file" name="ir_file" id="ir_file" placeholder=" ">
            <span>File</span>
            </label>
            </div>

            <div class="ml-auto">
            <button type="button" class="dt-button" data-dismiss="modal">Close</button>
            <button type="submit" class="dt-button-contained">Submit</button>
            </div>
            </form>';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->file('ir_file')->extension());
        $request->validate([
            'ir_name' => 'required',
            'ir_resource_type' => 'required',
            'ir_subject' => 'required',
            'ir_file' => 'required'
        ]);

        $newFileName = time() . '-' . str_replace(' ', '-', $request->ir_name) . '.' . $request->ir_file->extension();

        $request->file('ir_file')->storeAs('public', $newFileName);

        if (InstructionalResource::create([
            'name' => $request->ir_name,
            'src_path' => $newFileName,
            'user_id' => auth()->user()->id,
            'resource_type_id' => $request->ir_resource_type,
            'subject_id' => $request->ir_subject
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
        $instructional = InstructionalResource::find($id);
        return view('pages.all-files-show')
            ->with('title', $instructional->name)
            ->with('subjects', Subject::all())
            ->with('instructional', $instructional);
    }

    public function downloadResource($file)
    {
        if (Storage::disk('public')->exists($file)) {
            return Storage::download('public/' . $file);
        }
        return redirect('/404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $currentIntructional = InstructionalResource::find($id);

        $subjects = Subject::all();
        $subjOptions = '';
        foreach ($subjects as $subject) {
            $selectedSubj = $subject->id === $currentIntructional->subject_id ? 'selected' : '';

            $subjOptions .= '<option ' . $selectedSubj . ' value="' . $subject->id . '">' . $subject->title . '</option>';
        }

        $resourceTypes = ResourceType::all();
        $resTypeOptions = '';
        foreach ($resourceTypes as $resourceType) {
            $selectedRes = $resourceType->id === $currentIntructional->resource_type_id ? 'selected' : '';

            $resTypeOptions .= '<option ' . $selectedRes . ' value="' . $resourceType->id . '">' . $resourceType->name . '</option>';
        }

        return
            '<form action="' . route('allFiles.update', $id) . '" method="POST" enctype="multipart/form-data" class="row">

            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="' . csrf_token() . '">

        <div class="col-12">
        <label class="material-form-standard w-100">
        <select name="ir_resource_type" id="ir_resource_type">
        ' . $resTypeOptions . '
        </select>
        <span>Resource Type</span>
        </label>
        </div>

        <div class="col-12">
        <label class="material-form-standard w-100">
        <input type="text" name="ir_name" id="ir_name" placeholder=" " value="' . $currentIntructional->name . '">
        <span>Name</span>
        </label>
        </div>

        <div class="col-12">
        <label class="material-form-standard w-100">
        <select name="ir_subject" id="subject">
        ' . $subjOptions . '
        </select>
        <span>Subject</span>
        </label>
        </div>

        <div class="col-12">
        <label class="material-form-standard w-100">
        <input type="text" disabled name="ir_file_placeholder" id="ir_file_placeholder" value="' . $currentIntructional->src_path . '" class="">
        <input type="file" name="ir_file" id="ir_file" placeholder="" style="display: none">
        <span>File</span>
        <a href="#" class="update-file-switch text-decoration-none ml-1">
            <small>Include a new file 
                <i class="fas fa-exchange-alt"></i>
            </small>
            <small style="display:none">Exclude file 
                <i class="fas fa-exchange-alt"></i>
            </small>
        </a>
        </label>
        </div>

        <div class="ml-auto">
        <button type="button" class="dt-button" data-dismiss="modal">Close</button>
        <button type="submit" class="dt-button-contained">Submit</button>
        </div>
        </form>';
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
        $request->validate([
            'ir_name' => 'required',
            'ir_resource_type' => 'required',
            'ir_subject' => 'required',
            'ir_file' => ''
        ]);

        $refInstructional = InstructionalResource::find($id)->src_path;

        if (isset($request->ir_file)) {
            $newFileName = time() . '-' . str_replace(' ', '-', $request->ir_name) . '.' . $request->ir_file->extension();

            //store new file
            $request->file('ir_file')->storeAs('public', $newFileName);
            //delete old file
            if (Storage::disk('public')->exists($refInstructional)) {
                Storage::delete('public/' . $refInstructional);
            }
        } else {
            $newFileName = $refInstructional;
        }

        if (InstructionalResource::where('id', $id)
            ->update([
                'name' => $request->ir_name,
                'src_path' => $newFileName,
                'user_id' => auth()->user()->id,
                'resource_type_id' => $request->ir_resource_type,
                'subject_id' => $request->ir_subject
            ])
        ) {
            $request->session()->flash('status', 'Task was successful!');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        return
            '<form action="' . route('allFiles.destroy', $id) . '" method="POST" enctype="multipart/form-data" class="row">

            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="' . csrf_token() . '">

            <div class="col-12">
            <label class="material-form-standard w-100">
            <input type="password" name="password" id="password" placeholder=" ">
            <span>Your Password</span>
            </label>

            <label for="password-toggler" class="d-flex align-items-center">
            <input type="checkbox" id="password-toggler" class="password-toggler mr-2"><small>Toggle Password</small>
            </label>
            </div>

            <div class="ml-auto">
            <button type="button" class="dt-button" data-dismiss="modal">Close</button>
            <button type="submit" class="dt-button-contained">Submit</button>
            </div>
            </form>';
    }

    public function destroy(Request $request, $id)
    {
        $request->validate([
            'password' => 'required'
        ]);

        if (Hash::check($request->password, auth()->user()->password)) {
            $refInstructional = InstructionalResource::find($id);

            if ($refInstructional->delete()) {

                if (Storage::disk('public')->exists($refInstructional->src_path)) {
                    Storage::delete('public/' . $refInstructional->src_path);
                }

                $request->session()->flash('status', 'Task was successful!');
            }

            return back();
        }

        return back()->withErrors([
            'password' => 'The provided credentials do not match our records.',
        ]);
    }

    public function loadMoreFiles(Request $request)
    {

        $IRs = InstructionalResource::orderByDesc('created_at')
            ->select(
                DB::raw('instructional_resources.*'),
            )
            ->leftJoin('subjects', 'instructional_resources.subject_id', '=', 'subjects.id')
            ->where('subjects.dept_id', auth()->user()->usersInformation->dept_id)
            ->take($request->amount)
            ->get();

        $output = '';
        foreach ($IRs as $IR) {
            $checkName = '';
            $checkOptions = '';
            $downloadRoute = route('allFiles.downloadResource', $IR->src_path);
            if (auth()->user()->usersInformation->userLevels->name === 'program dean' || auth()->user()->id === $IR->user_id) {
                $checkOptions = '<a href="#" class="download-btn btn btn-muted" title="edit" data-toggle="modal"
                data-target="#base__modal-new" modal-type="update"
                modal-title="Update Instructional Material"
                modal-route="' . route('allFiles.edit', $IR->id) . '">
                <i class="fa fa-pen"></i>
            </a>
            <a href="#" class="download-btn btn btn-muted" title="delete" title="delete"
                data-toggle="modal" data-target="#base__modal-new" modal-type="confirm"
                modal-title="Confirm Delete"
                modal-route="' . route('allFiles.delete', $IR->id) . '">
                <i class="fa fa-trash"></i>
                <form action="' . route('allFiles.destroy', $IR->id) . '"
                    method="POST">

                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="' . csrf_token() . '">

                    <input type="submit" class="d-none" />
                </form>
            </a>';
            }
            auth()->user()->id === $IR->user_id ? $checkName = "You" : $checkName = $IR->users->usersInformation->fullname; // checks if the id of the record is equal to the current user_id and applies the change "You" to it or otherwise change nothing

            $output .=  '
                <div class="mr-4 mb-3">
                    <div class="files__card card border" filetype="' . substr(strrchr($IR->src_path, '.'), 1) . '">
                        <div class="card-body p-2">
                            <div class="card-img"></div>
                            <div class="card-text my-2">
                                <span class="card-text-title text-dark d-block">' . $IR->name . '</span>
                                <small class="text-muted">' . $checkName .  '</small>
                            </div>
                            <small class="text-muted">Uploaded 
                            ' . $IR->created_at->diffForHumans() .     '</small>
                            <div class="options-wrapper">
                                <a href="' . route('allFiles.show', $IR->id) . '" class="preview-btn btn">
                                </a>
                                <div class="more-options">
                                    <a href="' . $downloadRoute . '" class="download-btn btn btn-muted" title="download">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    ' . $checkOptions . '
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ';
        }
        $amount = $request->amount > $IRs->count() ? $IRs->count() : $request->amount;
        $count = $IRs->count();
        // $count % 10 === 0 ? $count += 1 : $count += 1;
        $count++;
        if ($request->amount <= $count) {
            $output .= <<<EOT
                    <div class="mb-3">
                    <div class="files__card files__card-more card border shadow" filetype='load-more'>
                        <div class="card-body p-2">
                            <div class="card-img"></div>
                            <div class="card-text my-2">
                                <span class="text-primary d-block text-center">Click to load more</span>
                                <small class="file-count text-muted text-center d-block">(10 out of<span class="ml-1>{$amount})</span></small>
                            </div>
                            <small class="text-muted"></small>
                            <div class="options-wrapper-active">
                                <a href="#" class="load-more preview-btn btn">
                                    <form action="{$request->_route}" method="post">
                                    <input type="hidden" name="_token" value="{$request->session()->token()}">
                                        <button type="submit" class="invisible"></button>
                                    </form>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        EOT;
        }
        return [
            "html" => $output,
            'rowCount' => $IRs->count(),
            'amount' => $amount
        ];
    }
}
