<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //企業が登録したインターンシップだけを表示
    public function index()
    {
        // ログインしているユーザーidを取得
        $id = Auth::id();
        //全てのインターンシップを呼び出し
        $internships = Internship::where('company_id', '=', $id)->get();
        return view('/company/interns', compact('internships'));
    }

    //インターンシップ全一覧を表示
    public function indexAll()
    {
        $internships = Internship::all();
        return view('personal.match-interns', compact('internships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/company/create-interns');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_id' => "required",
            'company_name' =>"required",
            'title'=> "required|min:2",
            'pic_name' => "required|min:2",
            'pic_email' => "required|email",
            'pic_tel' => "required|numeric",
            'position_name'=> "required",
            'duration'=> "required",
            'salary_type'=> "required",
            'content'=> "required",
            'image'=> "nullable",
            'limit_of_candidates'=> "required",
            'attachment_1'=> "nullable",
            'attachment_2'=> "nullable",
        ]);


        $internship = Internship::create([
            'company_id' => $request->company_id,
            'company_name' => $request->company_name,
            'title'=> $request->title,
            'pic_name' => $request->pic_name,
            'pic_email' => $request->pic_email,
            'pic_tel' => $request->pic_tel,
            'position_name'=> $request->position_name,
            'duration'=> $request->duration,
            'salary_type'=> $request->salary_type,
            'content'=> $request->content,
            'image'=> $request->image,
            'limit_of_candidates'=> $request->limit_of_candidates,
            'attachment_1'=> $request->attachment_1,
            'attachment_2'=> $request->attachment_2,
        ]); // データを新規作成
        return redirect()->route('index.internship');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function show(Internship $internship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function edit(Internship $internship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Internship $internship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Internship $internship)
    {
        //
    }
}
