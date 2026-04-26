<?php
class Etudiant{
    public $prenom;
    public $nom;
    public $formation;

     public function construct($n,$p,$f){
        $this->nom=$n;
        $this->prenom=$p;
        $this->formation=$f;

     }

     public function afficher(){
        return $this->nom . ' ' . $this->prenom . 'suit la formation' . $this->formation;
     }

     public function__destruct(){
        echo 'fin de traitement...';
    }
 }
  
 $e = new Etudiant('Diop','Bousso','PHP');
 echo $e->affiher();


 class Tableau{
   public static function $remplir($n){
      $obj = new self;
      for($i = 0; si <$n;$i++ ) {
      $obj ->tab[]=rand (1,100);
      }
return $obj;
   }

   public static function $trier(){
      sort ($this->tab);
      return $this;
   }
   public static function $afficher(){

   }
   
 }