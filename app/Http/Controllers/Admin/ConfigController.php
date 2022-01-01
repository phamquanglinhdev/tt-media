<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        $main_url = Config::where("type", "=", "main_url")->first()->value;
        $features = Config::where("type", "=", "feature")->get();
        $content = Config::where("type", "=", "content")->first()->value;
        $keyword = Config::where("type", "=", "keyword")->first()->value;
        $analytic = Config::where("type", "=", "analytic")->first()->value;
        return view("vendor.backpack.base.config",["main_url"=>$main_url,"features"=>$features,"content"=>$content,"keyword"=>$keyword,"analytic"=>$analytic]);
    }
    public function store(Request $request){
        //Change url
        Config::where("type","=","main_url")->update(["value"=>$request->main_url]);
        Config::where("name","=","T&T Digital Marketing")->update(["value"=>$request->{"feature-T&T_Digital_Marketing"}]);
        Config::where("name","=","T&T Web Marketing")->update(["value"=>$request->{"feature-T&T_Web_Marketing"}]);
        Config::where("name","=","T&T Education")->update(["value"=>$request->{"feature-T&T_Education"}]);
        //Change content, keyword, ana
        Config::where("type","=","content")->update(["value"=>$request->contents]);
        Config::where("type","=","keyword")->update(["value"=>$request->keyword]);
        Config::where("type","=","analytic")->update(["value"=>$request->analytic]);

        return redirect()->back()->with("success","Cập nhật thành công");
    }
}
