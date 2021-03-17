<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class laravelController extends Controller{
	
	public function index()
	[
	
	$info = DB::table('info')->get();
	return view ('index',['info' => $info]);
	
}
}