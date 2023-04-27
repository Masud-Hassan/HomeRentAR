<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Contract\Database;
use Illuminate\Http\Request;

class loginController extends Controller
{
    private $database;

    public function __construct(Database $database){
        $this->database = $database;
    }

    public function index(){
        return view('Login');
    }

    public function verify(Request $request){
        
        $ref_tablename = 'UserInfo';

        $reference = $this->database->getReference($ref_tablename)->getValue();
        
        $email = $request->email;
        $pass = $request->pass;

        $val = 0;

        foreach($reference as $key => $item)
        {
            if($item['Email'] == $email && $item['Password'] == $pass){
                return redirect('Dashboard');
            };
        }
            return redirect('login')->with('status', 'Logged In successfully');
        
    }
}
