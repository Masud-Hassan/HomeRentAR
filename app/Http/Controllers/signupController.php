<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class signupController extends Controller
{
    private $database;

    public function __construct(Database $database){
        $this->database = $database;
    }
    public function index()
    {
        return view('SignUp');
    }

    public function store(Request $request)
    {
        $ref_tablename = 'UserInfo';
        $postData = [
            'Email' => $request->email,
            'Password' => $request->pass,
            'First_name' => $request->Fname,
            'Last_name' => $request->Lname,
        ];
        $postRef = $this->database->getReference($ref_tablename)->push($postData);
        if($postRef)
        {
            return redirect('login')->with('status', 'Sign Up Done successfully');
        }
        else
        {
            return redirect('SignUp')->with('status', 'Sign Up Done successfully');
        }
    }
}
