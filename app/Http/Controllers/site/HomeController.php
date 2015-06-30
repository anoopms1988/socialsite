<?php
namespace App\Http\Controllers\site;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Company;

class HomeController extends Controller
{
    /**
     * home page
     * @return view
     */
    public function index(  )
    {
    	$homePageFlag =1;
    	$companies = Company::all();
        return view( 'site.home.index',compact('companies','homePageFlag') );
    }
}
