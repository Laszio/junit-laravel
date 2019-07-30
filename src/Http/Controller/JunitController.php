<?php
namespace Laszio\JunitLaravel\Http\Controller;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
/**
* 
*/
class JunitController extends Controller
{
	public function index()
	{
		return view('laszio::index');
	}

	/**
	 * 用来做单元测试的方法
	 */
	 public function store(Request $request)
	 {
	 	$namespace = $request->input('namespace');
	 	$className = $request->input('className');
	 	$action = $request->input('action');
	 	$param = $request->input('param');

	 	$class  = ($className == "")? $namespace:$namespace.'\\'.$className;
	 	$class = str_replace("/", "\\", $class);
	 	$obj = new $class();
	 	$param = ($param == "") ? []:explode("|", $param);
	 	$data = call_user_func_array([$obj,$action], $param);
	 	return (is_array($data)) ? json_decode($data):dd($data);
	 }
}