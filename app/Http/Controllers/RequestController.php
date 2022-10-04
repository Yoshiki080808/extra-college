<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Matching;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RequestController extends Controller
{
    //ユーザー登録処理
    // public function store(Request $request)
    // {
    //     $validated = $request->validated();
    //     $validated['image'] = $request->file('image')->store('users', 'public');
    //     $validated['password'] = Hash::make($validated['password']);
    //     Student::create($validated);

    //     return back()->with('success', 'ユーザを登録しました');
    // }

    //生徒用登録フォーム画面表示
    public function createStudent()
    {
        return view('register-student');
    }

    // 生徒情報登録処理
    public function storeStudent(Request $request)
    {
        $request->validate([
            "name" => "required|min:2",
            'email'=> "required|email|unique:students",
            'password'=> "required",
            'zipcode'=> "required|numeric",
            'country'=> "required",
            'address_1'=> "required",
            'address_2'=> "required",
            'address_3'=> "required",
            'tel'=> "required|numeric|digits_between:10,11",
            'image'=> "nullable",
            'degree'=> "required",
            'university'=> "required",
            'department'=> "required",
            'faculty'=> "nullable",
            'student_id' => "nullable",
            'company_id' => "nullable",
            'internship_id' => "nullable",
        ]);

        $student = Student::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
            'zipcode'=> $request->zipcode,
            'country'=> $request->country,
            'address_1'=> $request->address_1,
            'address_2'=> $request->address_2,
            'address_3'=> $request->address_3,
            'tel'=> $request->tel,
            'image'=> $request->image,
            'degree'=> $request->degree,
            'university'=> $request->university,
            'department'=> $request->department,
            'faculty'=> $request->faculty,
        ]); // データを新規作成

        // $matching = Matching::create(   
        // [
        //     'student_id' => '3',
        //     'company_id' => '1',
        //     'internship_id' => '1',
        //     'is_matching' => '0',
        //     'is_orientation' => '0',
        //     'is_internship' => '0',
        //     'is_done' => '0'
        // ]);    


        return redirect()->route('select.interns')->with('success', '登録が完了しました');
    }


    //企業用登録フォーム画面表示
    public function createCompany () {
        return view('register-company');
    }

    // 企業情報登録処理
    public function storeCompany (Request $request)
    {
        $request->validate([
            'name'=> "required|min:2",
            'industry'=> "required",
            'zipcode'=> "required|numeric",
            'country'=> "required",
            'address_1'=> "required",
            'address_2'=> "required",
            'address_3'=> "required",
            'pic_name' => "required|min:2",
            'email' => "required|email|unique:companies",
            'password' => "required",
            'tel' => "required|numeric|digits_between:10,11",
            'image'=> "nullable",
        ]);

        $company = Company::create([
            'name'=> $request->name,
            'industry'=> $request->industry,
            'zipcode'=> $request->zipcode,
            'country'=> $request->country,
            'address_1'=> $request->address_1,
            'address_2'=> $request->address_2,
            'address_3'=> $request->address_3,
            'pic_name' => $request->pic_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tel' => $request->tel,
            'image'=> $request->image,
        ]); // データを新規作成
        return redirect()->route('company.login.form')->with('success', '登録が完了しました');
    }

}
