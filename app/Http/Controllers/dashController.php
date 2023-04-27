<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;
class dashController extends Controller
{
    private $database;

    public function __construct(Database $database){
        $this->database = $database;
    }

    public function index(){
        return view('dashboard');
    }

    public function adPost(){
        return view('postAd');
    }

    public function adPostStore(Request $request){

        $ref_tablename = 'OwnPosts';
        $postData = [
            'City' => $request->citylist,
            'Post-Code' => $request->postcode,
            'Description' => $request->description,
        ];

        $postRef = $this->database->getReference($ref_tablename)->push($postData);

        return redirect('Dashboard');

    }

    public function showData(){
        $ref_tablename = 'OwnPosts';

        $reference = $this->database->getReference($ref_tablename)->getValue();

        return view('viewposts', compact('reference'));
    }
}
