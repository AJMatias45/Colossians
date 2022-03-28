<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColossiansController extends Controller
{
    public function readAll()
    {
        return view("colossians.all");
    }
    public function readByChapter($chapter_number)
    {
        return view("colossians.chapter", ['chapter_number' => $chapter_number]);
    }

}
