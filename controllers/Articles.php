<?php         //CONTROLEUR ARTICLES 


class Articles extends Controller{
    public function index(){
        $this->loadModel("Article");
        $articles = $this->Article->getAll();
        
     //equivalent $this->render('index', ['articles' => $articles ]);
     $this->render('index', compact('articles'));
    }

    public function lire($slug){
     $this->loadModel('Article');
     $article = $this->Article->findBySlug($slug);
      $this->render('lire', compact('article'));
    }
}
//render : nom fichier et nom class= page