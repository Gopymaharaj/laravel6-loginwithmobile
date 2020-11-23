<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function store(Request $request){
        
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'number'=> 'required|digits:10',
            'password'=> 'required|min:5',
            'file'=>'required',
            'date'=>'required',
            'gender'=>'required',
            'country'=>'required',
            'address'=>'required|min:10'
        ]);
        if($request->hasFile('file')){
        $data = new Student;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->number;
        $data->password = Hash::make($request->password);
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->storeAs('public',$filename);
        $data->photo = $filename;
        $data->date = $request->date;
        $data->gender = $request->gender;
        $data->country = $request->country;
        $data->address = $request->address;
        $data->save();
        return redirect('/insert')->with('message','Success');
        }else{
            return 'not saved';
        }
    }
    public function GetStudentData(){
        $data = Student::all();
        return view('show',['data'=>$data]);
    }
    public function DeleteStudetnData(Request $request){
        Student::where('id',$request->id)->delete();
        return redirect('/show');
    }
}
