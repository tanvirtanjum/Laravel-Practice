<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  public $data = [
        ['id'=>'1', 'name'=>'alamin','email'=>'abc@gmail.com', 'password'=>'123'],
        ['id'=>'2', 'name'=>'abc','email'=>'abc@aiub.com', 'password'=>'456'],
        ['id'=>'3', 'name'=>'xyz','email'=>'xyz@gmail.com', 'password'=>'789']
    ];

    function index(){

    	/*$data  = ['id'=>'1233', 'name'=>'alamin'];
    	return view('home.index', $data);*/

    	/*return view('home.index')
    			->with('name', 'alamin')
    			->with('id', '1233');*/

    	/*return view('home.index')
    			->withName('alamin')
    			->withId('1233');*/

    	/*$v = view('home.index');
    	$v->withName('alamin');
    	$v->withId('1234');
    	return $v;*/

    	$users = $this->getStudentList();
		  return view('home.index')->with('users', $users);
    }

    function uinfo($id){

    	$users = $this->getStudentList();

    	//find one student by ID from array

    	$user = $this->getSpecificStudentList($id-1);
    	return view('home.uinfo')->with('user', $user);

    }

    function edit($id){

    	$users = $this->getStudentList();

    	//find one student by ID from array

    	$user = $this->getSpecificStudentList($id-1);
    	return view('home.edit')->with('user', $user);

    }

    function update($id, Request $request){

    	$newUser = ['id'=>$id-1, 'name'=>$request->name,'email'=>$request->email, 'password'=>$request->password];
      $this->modify($newUser);
    	$users = $this->getStudentList();

    	//find one student by ID from array $& replace it's value
		//updated list

    	return view('home.index')->with('users', $users);
      //return redirect('/home');

    }

    function delete($id){

    	$users = $this->getStudentList();
    	//show comfirm view

    	return view('home.delete')->with('user', $user);

    }

    function destroy($id, Request $request){

    	$users = $this->getStudentList();
    	//find student by id & delete
    	//updated list

    	return view('home.index')->with('users', $users);
    }


    function getStudentList(){
    	return $this->data;
      //return $this->data = $content->data;
    }

    function getSpecificStudentList($id){
    	return $this->data[$id];
      //return $this->data = $content->data;
    }

    function modify($userInfo){
      //$this->data[$userInfo['id']] = ['name'=>$userInfo['name'],'email'=>$userInfo['email'], 'password'=>$userInfo['password']];
      $this->data[$userInfo['id']]['name'] = $userInfo['name'];
      $this->data[$userInfo['id']]['email'] = $userInfo['email'];
      $this->data[$userInfo['id']]['password'] = $userInfo['password'];
      //return $this->data[$id];
      //return $this->data = $content->data;
    }
}
