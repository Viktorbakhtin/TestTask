<?php

namespace app\Http\Controllers;

use \vendor\laravel\framework\src\Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DatabaseController extends Controller
{
    public function name() {
    	$users = DB::select ('select * from bids where name =:name', ['name'=> "Екатерина"]);
    	return view('bids.name', ['bids' => $users]);
    	if ($users==false) {
    		echo "no";
    	}
    }

}
?>jejte