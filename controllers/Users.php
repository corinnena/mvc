<?php         //CONTROLEUR ARTICLES 


class Users extends Controller{
    public function index(){
        $this->loadModel("User");
        $users = $this->User->getAll();
        
     //equivalent $this->render('index', ['articles' => $articles]);
     $this->render('index', compact('users'));
    }

    public function lire($id){
     $this->loadModel('User');
     $user = $this->User->findById($id);
      $this->render('lire', compact('user'));
    }
}