<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class MainController extends BaseController {

    public function index() {
        return $this->makeView('welcome')->with(['theme' => $this->theme]);
    }

    public function saveTheme(Request $request) {
        setcookie("AppTheme", $request->post('theme'));
        $this->theme = $request->post('theme');
        return $this->makeView('welcome')->with(['theme' => $this->theme]);
    }

    public function contacts() {
        var_dump($_COOKIE["AppTheme"]);
        return $this->makeView('contacts')->with(['theme' => $this->theme]);
    }
}
