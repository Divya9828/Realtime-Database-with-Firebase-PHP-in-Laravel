<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->database = app('firebase.database');
        $this->tablename = 'contacts';

    }
    public function index()
    {
        $retrieveData = $this->database->getReference($this->tablename)->getvalue();
        return view('firebase.contact.index',compact('retrieveData'));
    }
    public function create()
    {
        return view('firebase.contact.create');
    }
    public function insertData(Request $request)
    {
        $postData = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'address'=>$request->address,
        ];
        $insertData = $this->database->getReference($this->tablename)->push($postData);
        if($insertData)
        {
            return redirect('contacts')->with('status','Data Added Successfully :)');
        }
        else
        {
            return redirect('contacts')->with('status','Data Not Added :(');
            
        }
    }

}
