<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Ensure `Complaint` model exists
        $complaintsSubmitted = Complaint::where('user_id', $user->id)->count();
        $complaintsResolved = Complaint::where('user_id', $user->id)
                                       ->where('status', 'resolved')
                                       ->count();
        $pendingComplaints = $complaintsSubmitted - $complaintsResolved;

        // Debugging: Check if variables exist
        if (!isset($complaintsSubmitted, $complaintsResolved, $pendingComplaints)) {
            abort(500, 'Complaint data is missing');
        }

        return view('dashboard', compact('complaintsSubmitted', 'complaintsResolved', 'pendingComplaints'));
    }
}
?>
