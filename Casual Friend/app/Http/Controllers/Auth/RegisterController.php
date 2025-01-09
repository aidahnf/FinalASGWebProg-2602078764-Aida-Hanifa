<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class RegisterController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/payment';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

 

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'gender' => 'required|in:Male,Female',
            'hobbies' => ['required', 'string', 'min:3', function ($attribute, $value, $fail) {
                $hobbies = explode(',', $value);  
                if (count($hobbies) < 3) {
                    $fail('The hobbies must have at least 3 items.');
                }
            }],
            'instagram' => 'required|url|regex:/^https:\/\/www.instagram.com\/[a-zA-Z0-9._]+$/',
            'mobile' => 'required|digits:10',
            'age' => 'required|numeric|min:18|max:35',
            'friendship_intent' => 'required|in:casual_friendships,relationships,business_networking',
            'registration_fee' => 'required|numeric|min:100000|max:125000',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('register')
                             ->withErrors($validator)
                             ->withInput();
        }
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'gender' => $request->gender,
            'hobbies' => json_encode(explode(',', $request->hobbies)),
            'instagram' => $request->instagram,
            'mobile' => $request->mobile,
            'age' => $request->age,
            'friendship_intent' => $request->friendship_intent,
            'registration_fee' => $request->registration_fee,
        ]);
    

        Session::put('registration_fee', $request->registration_fee);

        Auth::login($user);  // Login otomatis 

        return redirect()->route('payment.index');
    }
    

}