<?php
 
 class Portofolio extends Controller 
 {
     public function index()
     {
         $data['profile'] = $this->model('portofoliomodel');
         
         $this->view('portofolio/index',$data); 

     }
 }