<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends BaseController {

    public function index() {
        return $this->makeView('welcome')->with(['theme' => $this->theme]);
    }

    public function saveTheme(Request $request) {
        //skipped some validation
        setcookie("AppTheme", $request->post('theme'));
        $this->theme = $request->post('theme');
        return $this->makeView('welcome')->with(['theme' => $this->theme]);
    }

    public function contacts() {
        return $this->makeView('contacts')->with(['theme' => $this->theme]);
    }
}
