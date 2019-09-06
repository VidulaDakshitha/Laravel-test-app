<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class SampleController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        //
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
        $result = Post::find($id);
        $result->fullname = $request->fullname;
        $result->nic = $request->nic;
        $result->address1 = $request->address1;
        $result->address2 = $request->address2;
        $result->city = $request->city;
        $result->phone = $request->phone;
        $result->email = $request->Email;
        $result->password = $request->password;

        $result->save();

        // return redirect()->action('SampleController@update',['id'=>$id]);
        return redirect("/about/".$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $post = Post::find($id);
        $post->delete();
        return redirect('/register');
        //
    }

    public function search(Request $request)
    {
        
        $search1=$request->get('nic');
       // $search2=$request->get('pnumber');

        $result=DB::table('posts')->where('phone',$search1)->first();
        return view('patientManagement.userProfile',compact('result'));
    }


    public function userprofile($id)
    {        
        $result = Post::find($id);
        return view('patientManagement.userProfile',compact('result'));
    }
}