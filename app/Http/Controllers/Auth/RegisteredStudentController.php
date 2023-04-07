<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bcrypt;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentRegistration;
use Illuminate\Support\Str;
use App\Models\Student;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisteredStudentController extends Controller
{

    public function registerStudent () {

        return view('auth.register');
     }

   public function processSignUp (Request $request) {

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
         'password' => Hash::create($password)
      ]);
      $student->save();

      Mail::to($request->email)->send(new StudentRegistration($request->name, $student_id, $password));

      return redirect('/login')->with('success', 'Registration Successful, Please Check your Email for your login credentials');

   }

}
