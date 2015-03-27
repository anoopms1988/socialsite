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
        try {
            $reviews = Review::where('is_active', 1)->paginate(Config::get('constants.paginationCount'));
            return view('reviews.listreviews', compact('reviews'));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Review approval
     *
     * @return view
     */
    public function reviewApproval(Request $request) {
        try {
            $reviewId = $request->get('id');
            $reviewType = $request->get('type');
            $review = Review::findOrFail($reviewId);
            if ($reviewType == 1) {
                $review->is_approved = 1;
            } else {
                $review->is_approved = 0;
            }
            if ($review->update()) {
                return response()->json(['status' => 'success']);
            } else {
                return response()->json(['status' => 'failure']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * delete Review
     *
     * @return view
     */
    public function deleteReview(Request $request) {
        try {
            $reviewId = $request->get('id');
            $review = Review::findOrFail($reviewId);
            $review->is_active = 0;
            if ($review->update()) {
                return response()->json(['status' => 'success']);
            } else {
                return response()->json(['status' => 'failure']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
