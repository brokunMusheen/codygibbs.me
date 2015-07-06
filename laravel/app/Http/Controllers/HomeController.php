<?php namespace CodyGibbs\Http\Controllers;

use Illuminate\Http\Request;

use CodyGibbs\Http\Requests;
use CodyGibbs\Http\Controllers\Controller;

class HomeController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
      return view('pages.home.index');
   }

}
