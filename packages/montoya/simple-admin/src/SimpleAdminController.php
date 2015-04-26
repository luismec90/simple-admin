<?php namespace Montoya\SimpleAdmin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SimpleAdminController extends Controller {

    public function __construct()
    {

    }

    public function index()
    {
        $users = [['name'=>'Luis'],['name'=>'Lui2'],['name'=>'Luis3']];

        return view('simpleAdmin::admin')->with('users', $users);
    }


}
