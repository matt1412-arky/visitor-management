<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
    }

    public function getQuestion()
    {
        return response()->json([
            'status' => 'OK',
            'data' => Question::first(),
        ]);
    }
}
