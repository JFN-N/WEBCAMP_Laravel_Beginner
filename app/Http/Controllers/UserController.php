<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginPostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests\TaskRegisterPostRequest;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function register(UserRegisterPostRequest $request)
    {
        // validate済みのデータの取得
        $datum = $request->validated();
        var_dump($datum); exit;
    }
}