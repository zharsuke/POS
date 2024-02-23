<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller {
    public function getBeautyHealth() {
        return view('category.beautyHealth');
    }

    public function getFoodBeverage() {
        return view('category.foodBeverage');
    }

    public function getHomeCare() {
        return view('category.homeCare');
    }

    public function getBabyKid() {
        return view('category.babyKid');
    }
}
