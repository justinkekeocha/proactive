<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('auth.login');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
 
        if (!$user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $request->session()->regenerate();
        return new UserResource($user);
        
       /* if(auth()->attempt($formFields,request()->filled('remember'))) {
            $user = auth()->user();
            $token = $user->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token' => $token], 200);
            $request->session()->regenerate();
            return response()->json([
                'status'=>'success',
                'data'=>$formFields,
                'customMessage' => '<p>You are now logged in! </p> <p>You will be redirected soon.</p>'
            ]);
        }
        
        //the error code below does not tell if whether it is email or passoword is incorrect
        //telling the user which one is a security risk
        return response()->json([
            "status" => 'error',
            'email' => 'The provided credentials do not match our records.',
        ],422);*/
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

     // Logout User
     public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return response()->noContent();
        
        //$user->tokens()->delete();
      /* 
      
        $user = auth()->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Logged out'
        ]);*


        /*
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        Session::flash('message', 'You have been logged out!'); 
        Session::flash('background', 'bg-info bg-gradient'); 

        return redirect('/login');*/

    }
}
