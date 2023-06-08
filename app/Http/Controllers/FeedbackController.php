<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use App\Models\Question;
use App\Models\Visit;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function getVisitorFeedback()
    {
        $visit_ids = auth()->user()->visit()->get(['id'])->pluck('id');
        $feedback = FeedBack::whereIn('id_visit', $visit_ids)->latest()->first();
        return response()->json([
            'status' => 'OK',
            'data' => Question::where('id', $feedback['id_question'])->latest()->first(),
        ]);
    }
    public function createFeedback(Visit $visit)
    {
        $questions = Question::all(['id', 'category']);
        return view('feedback.create-index', compact('questions', 'visit'));
    }

    public function postFeedback(Request $request)
    {
        $data = $request->validate([
            'id_question' => 'required',
        ]);
        $question_categoty = Question::where('id', $request->id_question)->first();
        if (
            strtolower($request->category_name) !=
            strtolower($question_categoty['category'])
        ) {
            return back()->with('fail_cat', 'You have to choose the appropriate category');
        }
        $feedback = FeedBack::create([
            'id_question' => $request->id_question,
            'id_visit' => $request->id_visit,
            'skala_feed' => 0
        ]);
        return back()->with('success', 'Data was made');
    }

    public function updateFeedback(Request $request)
    {
        $data = $request->validate([
            'id' => 'required',
        ]);

        $feedback = FeedBack::findOrFail($request->id);

        // Menghitung skala_feed berdasarkan pilihan yang dipilih
        $totalScale = 0;
        $totalQuestions = count($request->except(['_token', 'feedback_id']));
        foreach ($request->except(['_token', 'feedback_id']) as $value) {
            $totalScale += (int)$value;
        }
        $skalaFeed = $totalScale / $totalQuestions;

        // Memperbarui nilai skala_feed
        $feedback->skala_feed = $skalaFeed;
        $feedback->save();

        return back()->with('success', 'Feedback updated successfully');
    }
}
