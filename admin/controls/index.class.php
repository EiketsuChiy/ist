<?php
	class Index {
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
		function delete(){
			$d=D("news");
			$rows=$d->delete($_GET['id']);
			$this->redirect(index);
		}
		function add(){
			$this->display();
		}
		function insert(){
			$d=D("news");
			$id=$d->insert();
			$this->redirect(index);
		}		
		function edit(){
			$d=D("news");
			$data=$d->find($_GET['id']);
			$this->assign($data);
			$this->display();
		}
		function update(){
			$d=D("news");
			$rows=$d->update();
			$this->redirect(index);
		}
	}