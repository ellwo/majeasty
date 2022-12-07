<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    //


    public function updateNameEmail(Request $request){


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],]);



        $user =$request->user();
        $user->name=$request['name'];
        if($user->email==$request['email'])
        $user->email=$request['email'];

        else {
            $vildat = Validator::make($request->all(), ['email' => ['required', 'string', 'email', 'max:255', 'unique:users']]);


            if ($vildat->fails()) {
                return $request->validate(['email' => ['required', 'string', 'email', 'max:255', 'unique:users']]);
            }



        }
        $user->save();

        event(new Registered($user));


        return back()->with('stat', 'ok')->with('title', 'تمت العملية بنجاح')->with('message', 'تم تعديل الحساب بنجاح');


    }



    public function update(Request $request)
    {

        $this->validate($request,[
            'lastpassword'=>'required',
            'password'=>'required|confirmed|min:8|alpha_dash'
        ]);

        if(Auth::attempt(['email'=>auth()->user()->email,'password'=>$request['lastpassword']])){


            $user=User::find(auth()->user()->id);
            $user->update([
                'password'=>Hash::make($request['password'])
            ]);
            return back()->with('stat', 'ok')->with('title', 'تمت العملية بنجاح')->with('message', 'تم تعديل الحساب بنجاح');

        }

        else
        {
            throw ValidationException::withMessages([
                'password' => __('كلمة السر غير صحيحة'),
            ]);
        }



        if ($request->password) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
        }

        auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Profile updated.');
    }












}
