<?php
	class Index {
		function index(){
			$this->display();
		}		
		function about(){
			$this->display();
		}
		function app_case(){
			$this->display();
		}
		function main_biz(){
			$this->display();
		}
		function partner(){
			$d=D("partner");
            $data=$d->select();
            $this->assign("x",$data);
			$this->display();
		}
		function product(){
			$this->display();
		}
		function profile(){
			$this->display();
		}
	}