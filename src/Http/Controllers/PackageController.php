<?php
/**
 * Created by PhpStorm.
 * User: Alyson
 * Date: 09/01/2018
 * Time: 20:33
 */

namespace AlysonRodrigo\Package\Http\Controllers;


use AlysonRodrigo\Package\Models\Category;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{

    public function index(){

        $categories = Category::all();
        return view('package::index', compact('categories'));
    }
}