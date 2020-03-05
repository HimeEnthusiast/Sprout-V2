<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Returns entire product table.
    public function index() {
        return \DB::table('product')->get();
    }

    /*                                      **/
    /* Returns table data for each category **/
    /*                                      **/

    // Seeds
    public function getSeeds() {
        return \DB::table('product')->where('category', '=', 'Seeds')->get();
    }

    // Planters
    public function getPlanters() {
        return \DB::table('product')->where('category', '=', 'Planters')->get();
    }

    // Tools
    public  function getTools() {
        return \DB::table('product')->where('category', '=', 'Tools')->get();
    }

    // Soil
    public function getSoil() {
        return \DB::table('product')->where('category', '=', 'Soil')->get();
    }

}
