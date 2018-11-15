<?php

namespace Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.administrator.index');
    }

    public function forms(){
        return view('dashboard.administrator.forms');
    }

    public function calendar(){
        return view('dashboard.administrator.calendar');
    }

    public function email(){
        return view('dashboard.administrator.email');
    }

    public function compose(){
        return view('dashboard.administrator.compose');
    }

    public function chat(){
        return view('dashboard.administrator.chat');
    }

    public function charts(){
        return view('dashboard.administrator.charts');
    }

    public function uielements(){
        return view('dashboard.administrator.uielements');
    }

    public function basicTables(){
        return view('dashboard.administrator.tables.basic_tables');
    }

    public function datatable(){
        return view('dashboard.administrator.tables.datatable');
    }

    public function notFoundPage(){
        return view('dashboard.administrator.pages.404');
    }

    public function serverErrorPage(){
        return view('dashboard.administrator.pages.500');
    }

    public function signInPage(){
        return view('dashboard.administrator.pages.signin');
    }

    public function signUpPage(){
        return view('dashboard.administrator.pages.signup');
    }
}
