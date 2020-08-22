<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\work;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$tasks=work::all();
        //return view ('work.index',compact('tasks'));

        $tasks = DB::table('works')->get();
        return view('work.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('work.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        work::create($data);
        return redirect()->route('work.index')->with('success','Task Allot to user');

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
        //$task=work::findOrFail($id);
        //return view ('work.edit',compact('task'));

        $task=DB::table('works')->where('id',$id)->first();
        //dd($task->get());
        return view ('work.edit',compact('task'));

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
        // get the data from table
        $task=work::find($id);
        $data = $request->only(['first_name', 'last_name', 'email', 'phone', 'work', 'start', 'end']);
        // update the information or data
        $task->update($data);
        session()->flash('success', 'Data Updated');
        return redirect()->route('work.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task=work::find($id);
        $task->delete();
        session()->flash('success', 'Data Deleted');
        return redirect()->route('work.index');
    }
}
