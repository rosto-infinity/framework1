<?php
namespace App\Controllers;
class BlogController extends Controller{
   
   
    public function welcome (){
        return $this->view('blog.welcome');

    }
    public function index (){

         $req ='SELECT * FROM posts ORDER BY created_at DESC';
        $statment = $this->db->getPDO()->query($req);
        $posts = $statment->fetchAll();
        return $this->view('blog.index', compact('posts'));


    }
    public function show (int $id){
        return $this->view('blog.show', compact('id'));

    }
}