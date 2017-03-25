<?php
	class News {
		function index(){
			$d=D("news");
            $data=$d->select();
            $this->assign("x",$data);
			$this->display();
		}
		function details(){
			$d=D("news");
			$data=$d->find($_GET['id']);
			$this->assign($data);
			$this->display();
		}
	}