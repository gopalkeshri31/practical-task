<?php

namespace App\Http\Controllers;

use App\Jobs\SendVerificationEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin_login');
    }
    public function loginOp(Request $request)
    {
        //   dd($request->all());
        //   "email" => "keshrigopal31@gmail.com"
        //   "password" => "123"
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 'admin'])) {
            if (Auth::user()->email_verified_at !== null) {
                return redirect()->route('admin_dashboard'); // Redirect to admin dashboard
            } else {
                Auth::logout(); // Logout the user
                return back()->with('error', 'You need to verify your account before login.');
            }
        } elseif (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 'customer'])) {

            if (Auth::user()->email_verified_at !== null) {
                return redirect()->route('customer_dashboard'); // Redirect to customer dashboard
            } else {
                Auth::logout(); // Logout the user
                return back()->with('error', 'You need to verify your account before login.');
            }
            // return redirect('/customer_dashboard');
        } else {
            return redirect('/')->with('error', 'Invalid Email or Password');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function customer_dashboard()
    {
        return view('customer_dashboard');
    }

    public function admin_dashboard()
    {
        return view('admin_dashboard');
    }

    public function admin_registration(){
        return view('admin_registration');
    }

    public function admin_registrationOp(Request $request){
        //   "_token" => "aDJzdXRIQmGcIOKosz4O3wXWAHd9fIAlj93bIKA5"
        //   dd($request->all());
       //   "firstName" => "gopal"
       //   "lastName" => "keshri"
       //   "email" => "keshrigopal44@gmail.com"
       //   "password" => "123"
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);


        $addnewadmin =new User();
        $addnewadmin->first_name = $request->firstName;
        $addnewadmin->last_name = $request->lastName;
        $addnewadmin->email = $request->email;
        $addnewadmin->password = Hash::make($request->password);
        $addnewadmin->role = 'admin';
        $addnewadmin->save();
        $maskEmailText=maskEmail($request->email);

        $hashId= base64_encode($addnewadmin->id);

        $details = [
            'email' => $request->email,
            'view'=> 'email.send_email',
            'url'=> url('/').'/email/verify/'.$hashId,
            'image'=> url('/').'/assets/images/logos/favicon.png'
        ];

        dispatch(new SendVerificationEmail($details));
        return view('send_email_verify', compact('maskEmailText'));
    }

    public function customer_registration(){
        return view('customer_registration');
    }

    public function customer_registrationOp(Request $request){
        // dd($request->all());
         //   "_token" => "aDJzdXRIQmGcIOKosz4O3wXWAHd9fIAlj93bIKA5"
        //   dd($request->all());
       //   "firstName" => "gopal"
       //   "lastName" => "keshri"
       //   "email" => "keshrigopal44@gmail.com"
       //   "password" => "123"
       $request->validate([
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|unique:users',
        'password' => 'required',
    ]);

    $addnewadmin =new User();
    $addnewadmin->first_name = $request->firstName;
    $addnewadmin->last_name = $request->lastName;
    $addnewadmin->email = $request->email;
    $addnewadmin->password = Hash::make($request->password);
    $addnewadmin->role = 'customer';
    $addnewadmin->save();
    $maskEmailText=maskEmail($request->email);
    $hashId= base64_encode($addnewadmin->id);
    $details = [
        'email' => $request->email,
        'view'=> 'email.send_email',
        'url'=> url('/').'/email/verify/'.$hashId,
        'image'=> url('/').'/assets/images/logos/favicon.png'
    ];

    dispatch(new SendVerificationEmail($details));
    return view('send_email_verify', compact('maskEmailText'));
    }

    public function verify_email($id){
        $id = base64_decode($id);
        $user = User::find($id);
        $user->email_verified_at = now();
        $user->save();
        $maskEmailText=maskEmail($user->email);

        if($user->email_verified_at){
            $message = 'Email verified successfully';
            return view('email_verification',compact('message','maskEmailText'));
        }else{
            $message = 'Email verification failed';
            return view('email_verification',compact('message','maskEmailText'));
        }
    }

}
