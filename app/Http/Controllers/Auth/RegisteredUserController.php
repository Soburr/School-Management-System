<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bcrypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentRegistration;
use Illuminate\Support\Str;
use App\Models\Student;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
{

    public function create()
    {
        return view('auth.register');
    }


    public function store(Request $request)
    {

            $validatedData = $request->validate([
               'name' => 'required',
               'email' => 'required|unique:students,email',
            ]);

           $password = Str::random(8);

           $name = $validatedData['name'];
           $firstname = substr($name, 0, 3);
           $randomNumbers = '';
           do {
                $randomNumbers = mt_rand(1000, 9999);
          } while (DB::table('students')->where('student_id', $firstname.$randomNumbers)->exists());

           $student_id = $firstname.$randomNumbers;

           $student = new Student([
              'name' => $request->input('name'),
              'email' => $request->input('email'),
              'student_id' => ($student_id),
              'password' => bcrypt($password)
           ]);
           $student->save();

           Mail::to($request->email)->send(new StudentRegistration($request->name, $student_id, $password));

           return redirect('/login')->with('success', 'Registration Successful, Please Check your Email for your login credentials');

        }

        public function showLoginForm () {
            return view('auth.login');
         }

        public function login (Request $request){
             $request->validate([
                'student_id' => 'required',
                'password' => 'required',
             ]);

             $student = Student::where('student_id', $request->student_id)->first();

             if ($student && Hash::check($request->password, $student->password)){
                //   Auth::login($student);
                  return redirect('/dashboard')->with('success', 'You are Logged in');
             } else {
                return redirect()->back()->withErrors('Invalid Credentials');
             }
        }




        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);

}
