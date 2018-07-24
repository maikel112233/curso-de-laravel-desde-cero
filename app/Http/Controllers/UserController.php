<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class UserController extends Controller
{

	
    public function index()
    {
	if (request()->has('empty')){
	    $users= [];
	}else{
            $users=['Joel','Ellie','Tess','Tommy','Bill','<script>alert("Clicker")</script>'];
        }
	$hola="hola";
        //dd(compact('users','hola'));
		return view('users.index',['users'=>$users,'title'=>" el listado"]);
    }
    public function show($id)
    {
        return "Mostrando detalle del usuario: {$id}";
    }
    public function create()
    {
        return 'Crear nuevo usuario';
    }
}
