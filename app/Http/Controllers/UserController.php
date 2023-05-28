<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginPostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests\UserRegisterPostRequest;

class UserController extends Controller
{
    public function index()
    {
        return view('user.register');
    }
    /*
    public function register(UserRegisterPostRequest $request)
    {
        // validate済みのデータの取得
        $datum = $request->validated();
        var_dump($datum); exit;

        // テーブルへのINSERT
        //try {
        //    $r = TaskModel::create($datum);
//var_dump($r); exit;
//        } catch(\Throwable $e) {
//            // XXX 本当はログに書く等の処理をする。今回は一端「出力する」だけ
//            echo $e->getMessage();
//           exit;

        // タスク登録成功
        //$request->session()->flash('front.user_register_success', true);

        //
        //return redirect('/login');
    }
    */



    public function register(UserRegisterPostRequest $request)
    {
        $this -> validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        $this->guard()->login($user);
        return $this->registered($request, $user)
                           ?: refirect($this->redirectPath());

        // タスク登録成功
        $request->session()->flash('front.user_register_success', true);


        return redirect('/login');
    }

}