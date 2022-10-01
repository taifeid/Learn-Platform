<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('home', [
            'courses' =>  Course::orderBy('updated_at', 'desc')->paginate(10)
        ]);
        // return Course::orderBy('created_at', 'DESC')->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCourse = new Course();
        $newCourse->code = $request->course["code"];
        $newCourse->name = $request->course["name"];
        $newCourse->decscription = $request->course["decscription"];
        $newCourse->instructor =$request->course["instructor"];
        $newCourse->type = $request->course["type"];
        $newCourse->image = $request->course["image"];
        $newCourse->save();
        return $newCourse;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = course::find($id);
        if ($course) {
        $course->code = $request->course["code"];
        $course->name = $request->course["name"];
        $course->decscription = $request->course["decscription"];
        $course->instructor =$request->course["instructor"];
        $course->type = $request->course["type"];
        $course->image = $request->course["image"];
            $course->save();
            return $course;
        }
        return "course not found !";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = course::find($id);
        if ($course) {
            $course->delete();
            return "course sucessfully deleted.";
        }
        return "course not found !!";
    }
}
