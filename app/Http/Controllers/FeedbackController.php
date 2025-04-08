<?php

namespace App\Http\Controllers;
use App\Models\Complaint;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $complaints = Complaint::where('user_id', auth()->user()->id)->get();
    
        return view('feedback.index', compact('complaints'));
    }
}
