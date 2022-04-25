<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Position;
use App\Models\Election;
use Illuminate\Support\Facades\Hash;


class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function save(Request $request){
        $request->validate([
            'fullname'  => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'min:8|required_with:cpassword|same:cpassword',
            'cpassword' => 'min:8'

        ]);

        $User =new User;
        $User->name      = $request->fullname;
        $User->email     = $request->email;
        $User->password  = Hash::make($request->password);
        $User->cpassword = Hash::make($request->cpassword);
        $User->user_role = 'user';
        $save            = $User->save();
        if($save)
        {
            return back()->with('success','New User created Successfully.');
        }else{
            return back()->with('fail','Something Went wrong , try again later');
        }
        // return view('auth.register');
    }
    function check(Request $request)
    {
        $request ->validate([
            'email'    => 'required|email',
            'password' => 'min:8'
        ]);
        $userInfo = User::where('email','=',$request->email)->first();
        if(!$userInfo)
        {
            return back()->with('fail','we do not reconize your email address.');
        }
        else{
            if(Hash::check($request->password, $userInfo->password))
            {
                $request = session()->put('loginUserID',$userInfo->id);
                $request = session()->put('loginUserRole',$userInfo->user_role);
                $request = session()->put('loginUserName',$userInfo->name);
                return redirect('admin/dashboard');
            }else{
                return back()->with('fail','Incorrect Password');
            }
        }
    }
    function logout()
    {   
        if(session()->has('loginUserID'))
        {
            session()->pull('loginUserID');
            return redirect('/auth/login');
        }
    }
    function dashboard()
    {   
        $data = User::where('id','=',session('loginUserID'))->first();
        // getiing position value
        $position = Position::all();
        $position_val =[];
        foreach($position as $post)
        {
            $position_val[] = $post->position_val;
        }

        // get election value
        $Election = Election::all();
        if(session('loginUserRole') =='admin')
        {   
            return view('admin.dashboard',array('data' => $data,'position_val'=> $position_val,'Election'=> $Election));
        }
    }
}
