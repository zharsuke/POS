<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller {
    public function beautyHealth() {
        return view('category.beautyHealth');
    }

    public function foodBeverage() {
        return view('category.foodBeverage');
    }

    public function homeCare() {
        return view('category.homeCare');
    }

    public function babyKid() {
        return view('category.babyKid');
    }
}
