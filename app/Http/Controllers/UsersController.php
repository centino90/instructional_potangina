<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use App\Models\UserLevel;
use App\Models\UsersInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentPage = "personnels";
        return view("pages.personnels")->with("title", $currentPage);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usersInfos = UsersInformation::where(
            'dept_id',
            auth()->user()->usersInformation->dept_id
        )
            ->where('user_level_id', '1')
            ->get();
        $usersInfoOptions = '';
        foreach ($usersInfos as $usersInfo) {
            $usersInfoOptions .= '<option value="' . $usersInfo->id . '">' . $usersInfo->fullname . '</option>';
        }

        $userLevels = UserLevel::all();
        $userLevelOptions = '';
        foreach ($userLevels as $userLevel) {
            $userLevelOptions .= '<option value="' . $userLevel->id . '">' . $userLevel->name . '</option>';
        }

        return
            '<form action="' . route('users.store') . '" method="POST" class="row" id="form-storePersonnel">
            <input type="hidden" name="_token" value="' . csrf_token() . '">
            <div class="col-12">
            <label class="material-form-standard w-100">
            <input type="text" name="pers_fullname" id="pers_fullname" placeholder=" ">
            <span>Full Name</span>
            </label>
            </div>

            <div class="col-12">
            <label class="material-form-standard w-100">
            <select name="pers_userlevel" id="pers_userlevel">
            ' . $userLevelOptions . '
            </select>
            <span>Level</span>
            </label>
            </div>

            <div class="col-12">
            <label class="material-form-standard w-100">
            <input type="text" name="user_uname" id="user_uname" placeholder=" ">
            <span>Username</span>
            </label>
            </div>

            <div class="col-12">
            <label class="material-form-standard w-100">
            <input type="password" name="user_pass" id="user_pass" placeholder=" ">
            <span>Password</span>
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
        $request->validate([
            'pers_fullname' => 'required|string|max:255',
            'pers_userlevel' => 'required|int|max:255',
            'user_uname' => 'required|string|max:255|unique:users,username',
            'user_pass' => 'required|string|max:255'
        ]);
        $usersInformation = UsersInformation::create([
            'fullname' => $request->input('pers_fullname'),
            'dept_id' => auth()->user()->usersInformation->dept_id,
            'user_level_id' => $request->input('pers_userlevel')
        ]);
        $userAccount = User::create([
            'id' => $usersInformation->id,
            'username' => $request->input('user_uname'),
            'password' => Hash::make($request->input('user_pass'))
        ]);

        if ($usersInformation && $userAccount) {
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
