<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctor;
use DB;


class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $doctors=doctor::latest()->paginate(1);
        return view('show2',compact('doctors'))
                ->with('i',(request()->input('page',1)-1)*1);
    //    $check= $request->input('find');

        // $doctors= doctor::all();
        // $posts=doctor::where('fname','pradeep')->get();
        // // $posts=DB::select('SELECT * FROM doctors');
        // return view('show')->with('posts',$posts);
        // $doctors= DB::table('doctors')->get();

        // return view('show',['doctors' => $doctors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('show');
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
        $enter=new doctor;

        $enter->fullname=$request->input('fullname');
        $enter->nic=$request->input('nic');
        $enter->type=$request->input('type');

        $enter->save();

        return redirect('/doctor');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $doctors=doctor::find($id);
        return view('detail', compact('doctors'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
 
        $search1=$request->get('doctor');
        $search2=$request->get('specialization');

        if($search1=='any doctor' && $search2=='any specialization')
        {
            $posts = doctor::all();
             return view('patientManagement.showDoc', compact('posts'));
        }
        else if($search1=='any doctor'){

            $posts=DB::table('doctors')->where('type',$search2)->get();
        return view('patientManagement.showDoc',compact('posts'));

        }
        else if($search2=='any specialization')
        {
            $posts=DB::table('doctors')->where('fullname',$search1)->get();
        return view('patientManagement.showDoc',compact('posts'));

        }
        else if($search1!='any doctor' && $search2!='any specialization')
        {
            $posts=DB::table('doctors')->where([['fullname',$search1],['type',$search2]])->get();
        return view('patientManagement.showDoc',compact('posts'));

        }

        else
        {
            
            return view('patientManagement.showDoc')->with('error','Invalid search results');
        }
      


    }
}
