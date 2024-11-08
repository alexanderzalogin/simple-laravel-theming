<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class BaseController extends Controller {
    protected $theme;

    public function __construct() {
        if ( !isset($_COOKIE["AppTheme"]) ) {
            setcookie("AppTheme", 'themes.classic');
            $this->theme = 'themes.classic';
        } else {
            echo $_COOKIE["AppTheme"];
            $this->theme = $_COOKIE["AppTheme"];
        }
    }

    protected function makeView($viewname, $data=array()) {
        return View::make($this->theme.'.'.$viewname, $data);
    }
}
