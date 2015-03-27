<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Review;

class ReviewController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('auth');
    }

    /**
     * List reviews
     *
     * @return void
     */
    public function listReviews($param = null) {
        $reviews = Review::where('is_active', 1)->paginate(Config::get('constants.paginationCount'));
        return view('reviews.listreviews', compact('reviews'));
    }

    /**
     * Review approval
     *
     * @return view
     */
    public function reviewApproval(Request $request) {
        $reviewId=$request->get('id');
        $reviewType=$request->get('type');
        $review=  Review::findOrFail($reviewId);
        if($reviewType==1){
            $review->is_approved=1;
        }else{
             $review->is_approved=0;
        }
        if($review->update()){
             return response()->json(['status' => 'success']);
        }else{
             return response()->json(['status' => 'failure']);
        }
    }
    
    
}
