<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Employees';
        $users = User::with(['position', 'hub', 'workday', 'roles'])->whereDoesntHave('roles', function ($query) {
            $query->where('name', 'Super Admin');
        })->paginate(8);
        return view('dashboard.employees.index', compact('title', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create Employee';
        return view('dashboard.employees.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {
        $random_number = random_int(100000, 999999);

        $user = User::create([
            'company_id' => auth()->user()->company_id,
            'position_id' => $request->position_id,
            'hub_id' => $request->hub_id,
            'division_id' => $request->division_id,
            'salary_id' => $request->salary_id,
            'workday_id' => $request->workday_id,
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'nik' => $request->nik,
            'email' => $request->email,
            'password' => Hash::make($random_number),
            'joined_at' => $request->joined_at,
            'status' => true,
            'inactive_at' => $request->inactive_at,
        ])->assignRole('Employee');

        return redirect(route('employees.index'))->with('status', 'create new employee '.$request->about);
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