<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 認証
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';



// トップベージ
Route::get('/', fn() => view('top'));

//フォーム等で登録や認証
//生徒用ログイン
Route::get('/login-student', [AuthController::class, 'studentLoginForm'])->name('student.login.form');
Route::post('/student/login', [AuthController::class, 'studentLogin'])->name('student.login');

//生徒用登録画面（Storeで登録）
Route::get('/register-student', [RequestController::class, 'createStudent'])->name('register.student');
Route::post('/store/student', [RequestController::class, 'storeStudent'])->name('store.student');

//企業用ログイン
Route::get('/login-company', [AuthController::class, 'companyLoginForm'])->name('company.login.form');
Route::post('/company/login', [AuthController::class, 'companyLogin'])->name('company.login');

//企業用登録ページ（Storeで登録）
Route::get('/register-company', [RequestController::class, 'createCompany'])->name('register.company');
Route::post('/store/company', [RequestController::class, 'storeCompany'])->name('store.company');


//生徒用ダッシュボード
// 生徒用ステータス画面（マッチング待ちや承認後の状態管理）
Route::get('/personal/status', fn() => view('personal.status'));
// 個別のインターンシップ内容表示画面
Route::get('/personal/curriculum/{id}', [InternshipController::class, 'show'])->name('show.interns');
// インターンシップ全部閲覧画面
Route::get('/personal/match-interns', [InternshipController::class, 'indexAll'])->name('select.interns');
// 生徒のプロフィール画面（編集等）
Route::get('/personal/profile', fn() => view('personal.profile'));


//企業用ダッシュボード
// 企業用ステータス画面（マッチング待ちや承認後の状態管理）
Route::get('/company/status', [StudentController::class, 'index'])->name('company.status');
// 企業から見た個別生徒情報表示画面
Route::get('/company/student-profile', fn() => view('company.student-profile'));
// 企業毎のインターン表示画面（複数になっていく）
Route::get('/company/interns', [InternshipController::class, 'index'])->name('index.internship');
Route::get('/company/interns/{id}', [InternshipController::class, 'showCompany'])->name('show.company.interns');
// 企業の新規インターン作成画面（編集等）
Route::get('/company/create-interns', [InternshipController::class, 'create'])->name('create.internship');
Route::post('/store/interns', [InternshipController::class, 'store'])->name('store.internship');
// 企業用プロフィール画面（編集等）
Route::get('/company/profile', fn() => view('company.profile'));
// ログアウト処理
Route::post('/company/logout', [AuthController::class, 'logout'])->name('company.logout');

//企業用ダッシュボード
Route::get('/institution/show-email', fn() => view('institution.show-email'));



//データを扱うのは基本コントローラにメソッドを書くぞお



//コントローラーに飛ばす例。
// viewファイル表示をコントローラーでかく。
// Route::get('/form', [RequestSampleController::class, 'form']);
// コントローラの内容
// public function form()
//     {
//         return view('form');
//     }

// ただのアクションだけ。
// Route::get('/query-strings', [RequestSampleController::class, 'queryStrings']);
// コントローラの内容
// public function queryStrings(Request $request)
//     {
        // 普通にやった場合
        // $keyword = $request->keyword;

        // 未設定を加える場合(if文Ver.)
        // $keyword = '未設定';
        // if ($request->has('keyword')){
        //     $keyword = $request->keyword;
        // }

        // 省略Ver.
    //     $keyword = $request->get('keyword', '未設定');
    //     return 'キーワードは「'.$keyword.'」です';
    // }

// name属性で飛ぶURLを指定するパターン。
// Route::get('/users/{id}', [RequestSampleController::class, 'profile'])->name('profile');
// コントローラの内容
// public function profile($id)
//     {
//         return 'ID:'. $id;
//     }


// カリキュラム内容説明ページ（DB連携無し）
// Route::get('/curriculum', fn() => view('curriculum'));

// 大学生向けLP１
// Route::get('/lp1', fn() => view('lp1'));

// 企業向けLP２
// Route::get('/lp2', fn() => view('lp2'));

// 教育機関向けLP3
// Route::get('/lp3', fn() => view('lp3'));

// Extra Collegeの説明
// Route::get('/about', fn() => view('about'));

//Tailwind練習用
Route::get('/prac', fn() => view('layouts.prac'));

// Route::get('/', function () {
//     return view('index');
// });
