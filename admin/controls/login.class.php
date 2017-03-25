<?php
   class Login extends Action{
   	   function index(){
           $this->display();
   	   }
   	   function login(){
   	   		$user = D('admin')->field('id, username')->where(array('username'=>$_POST['username'], 'password'=>$_POST['password']))->find();
			if($user) {
				$_SESSION=$user;
				$_SESSION['isLogin']=1;

				$this->redirect('index/index');
			} else {
				$this->error('Error,Login Failed',3, "index");
			}
   	   }
   	   function logout(){
          $username = $_SESSION['user'];

			$_SESSION=array();
			
			if(isset($_COOKIE[session_name()])) {
				setCookie(session_name(), '', time()-3600, '/');
			}

			session_destroy();
			$this->success("Logout Success!", 1, "index");
   	   }

   }