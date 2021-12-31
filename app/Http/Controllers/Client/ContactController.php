<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view("client.contact");
    }
    public function store(Request $request){
        $data = [
            "from"=>"T&T Media",
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "title"=>$request->title,
            "room"=>$request->room,
            "message"=>$request->message,
        ];
        Contact::create($data);
        return  redirect()->back();
    }
}
