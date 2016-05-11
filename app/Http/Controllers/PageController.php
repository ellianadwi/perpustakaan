<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 18/02/2016
 * Time: 8:56
 */

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => ['getLogin']]);
        $this->middleware('auth', ['only' => ['dashboard']]);
    }

    public function getLogin()
    {
        return view('login');
    }

    public function token()
    {
        return csrf_token();
    }

    public function dashboard()
    {
        return view('pages.admin.index');
    }
}