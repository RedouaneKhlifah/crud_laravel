<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Echo_;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Students = Student::all() ;
        return view('index')->with('students',$Students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {

        $input  = $request->all();

        // dd($$request->file('image'));

        // if($image = $request->file('image')){
        //     $destination  = 'images/';
        //     $title = date('Ymdhis') .'.'. $image->getClientOriginalExtension();
        //     $image->move($destination ,$title);
            
        // }
        Student::create($input);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
 
       
        // return view('index')->with('students',$Student);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Student = Student::find($id);
        return response()->json([
            'status' => 200,
            'student' => $Student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id  =  $request->input('id');
     
        $Student = Student::find($id);
 
        $Student->name = $request->input('name');
        $Student->adress = $request->input('adress');
        $Student->mobile = $request->input('mobile');
        $Student->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
       
        $Student = Student::find($id);
        $Student->delete();
        return redirect()->back();


    }
}
