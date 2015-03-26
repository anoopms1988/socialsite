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
    public function listReviews($param=null) {
        $reviews =  Review::where('is_active', 1)->paginate(Config::get('constants.paginationCount'));
        return view('reviews.listreviews', compact('reviews') );
    }

}
