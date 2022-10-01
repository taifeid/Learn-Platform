<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

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
        //return view('home');
        return view('home', [
            'courses' =>  Course::orderBy('updated_at', 'desc')->paginate(10)
        ]);
    }
    public function create()
    {
        return view('home.create');
    }

    public function update(Request $request, $id)
    {
        Course::where('id',$id)->update([
            'code' => $request->code,
            'name' => $request->name,
            'decscription' => $request->decscription,
            'instructor' =>$request->instructor,
            'type' => $request->type,
           // 'image'=>$request->null,
        ]);
        return redirect(route('home.index'));
    }
    public function store(Request $request)
    {

        Course::create([
            'code' => $request->code,
            'name' => $request->name,
            'decscription' => $request->decscription,
            'instructor' =>$request->instructor,
            'type' => $request->type,
            'image'=>'https://helios-i.mashable.com/imagery/articles/00rwR1gy2yCm4vdltMZ0hRy/hero-image.fill.size_1200x1200.v1643723301.jpg',
        ]);

        return redirect(route('home.index'));
    }
    public function edit($id)
    {
     return view( 'home.edit',[
        'course'=>Course::where('id',$id)->first()
     ]);
    }

    public function destroy($id)
    {
        Course::destroy($id);
        return redirect(route('home.index'))->with('message','course has been deleted.');
    }
}
