<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employers = Employer::all();
        return view('employers',['employers'=>$employers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employers.nouveau');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $req
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $req->validate([
            'Nom' => 'required|string|min:3|max:50',
            'Prénom' => 'required|regex:/(^([a-zA-z]+)(\d+)?$)/u',
            'age' => 'required|int|min:1|max:3',
            'code_employer' => 'required|int|min:1|max:3',
        ]);

        $employer = new Employer();
        $employer->Nom = $req->Nom;
        $employer->prénom = $req->Prénom;
        $employer->age = $req->age;
        $employer->code_employer = $req->code_employer;
        $employer->save();

        return redirect('/employers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function show(Employer $employer)
    {
        return view('employer', ['employer'=> $employer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function edit(Employer $employer)
    {
        return view('employers.modif',['employer'=> $employer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $req
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $employer = Employer::find($id);
        $input = $req->all();
        $employer->update($input);

        return redirect('/employers')->with('succes', "L'employer $employer->Prénom a bien été modifier");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employer $employer)
    {
        $employer->delete();
        return redirect('/employers');
    }
}
