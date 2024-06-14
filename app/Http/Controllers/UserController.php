<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action','users.action')
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('users.index');
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('users.create');
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
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_admin = 0;
        $user->save();
        return redirect()->route('users.index')
        ->with('success',"L'utilisateur a bien été créé.");
    }
    /**
    * Display the specified resource.
    *
    * @param  \App\user  $user
    * @return \Illuminate\Http\Response
    */
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    } 
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\User $user
    * @return \Illuminate\Http\Response
    */
    public function edit(User $user)
    {
    return view('users.edit',compact('user'));
    }
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\user  $user
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $request->validate([
        'name' => 'required',
        'email' => 'required',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('users.index')
        ->with('success',"L'utilisateur a bien été modifié");
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\User  $user
    * @return \Illuminate\Http\Response
    */
    public function destroy(Request $request)
    {
        $user = User::where('id',$request->id)->delete();
        return Response()->json($user);
    }
}
