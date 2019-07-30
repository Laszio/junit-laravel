<?php
namespace Laszio\JunitLaravel\Http\Controller;

use Illuminate\Routing\Controller;
/**
* 
*/
class TestController extends Controller
{
	public function index()
	{
		return '这是一个测试控制器';
	}
}