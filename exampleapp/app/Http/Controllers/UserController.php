<?php

namespace App\Http\Controllers;
use App\Models\Usermodel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //create show user
    public function index(){
        $data['userdb']=Usermodel::all();
        return view('page.index',$data);
    }

    public function create(){
        return view('page.create');
    }
    
    public function store(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required',
            'name'=>'required',
            'point'=>'required'
        ]);
        $userdb= new Usermodel;
        $userdb->username=$request->username;
        $userdb->password=$request->password;
        $userdb->name=$request->name;
        $userdb->point=$request->point;
        $userdb->save();
        return redirect()->route('page.index')->with('success','Create Success');
        
    }

    public function destroy(Usermodel $page){
        $page->delete();
        return redirect()->route('page.index')->with('success','delete Success');
    }

    public function increasePoint(Request $request , $id)
    {
        $user = Usermodel::findOrFail($id);
        $user->point += 1;
        $user->save();

        // Perform any additional operations or redirect as needed

        return redirect()->back();
    }

    public function decreasePoint(Request $request , $id)
    {
        $user = Usermodel::findOrFail($id);
        if ($user->point > 0) {
            $user->point -= 1;
            $user->save();
        }

        // Perform any additional operations or redirect as needed

        return redirect()->back();
    }
}
