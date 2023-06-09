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
        $feedback = FeedBack::where('id_visit', $visit->id)->latest()->first();
        return view('feedback.create-index', compact('questions', 'visit', 'feed_backs'));
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
    public function visitorFeedback()
    {

        return view('layout.navigation-sidebar.manage-visitor.visitor-feedback', [
            'feedback' => FeedBack::find(1),
        ]);
    }

    public function updateFeedback(Request $request)
    {
        try {
            $feedback = FeedBack::findOrFail(1);
            // $feedback = FeedBack::findOrFail($request->id_feedback);

            $feedback->update([
                'skala_feed' => $request->skala_feed
            ]);
            return response()->json([
                'status' => 'OK',
                'msg' => 'success'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'fail',
                'msg' => $e->getMessage()
            ], 400);
        }
    }
}
