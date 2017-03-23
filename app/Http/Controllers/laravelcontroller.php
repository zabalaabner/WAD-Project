<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\firstmodel;
use App\Article;
use App\User;
class laravelcontroller extends Controller
{
    public function startindex(Request $request)
    {
        return view('index');
    }

     public function processRegistration(Request $request)
    {
        $Fname = $request->Fname;
        $Lname = $request->Lname;
        $Mname = $request->Mname;
        $age = $request->age;
        $course = $request->course;
        $address = $request->address;


        $firstmodel = new firstmodel;
        $firstmodel->Fname = $Fname;
        $firstmodel->Lname = $Lname; 
        $firstmodel->Mname = $Mname;
        $firstmodel->age = $age;
        $firstmodel->course = $course;
        $firstmodel->address = $address;
        $firstmodel ->save();

        return view ('registration-complete',
    [
        'Fname' => $Fname,
        'Lname' => $Lname,
        'Mname' => $Mname,
        'age' => $age,
        'course' => $course,
        'address' => $address,
    ]
    );

    }
    
}
