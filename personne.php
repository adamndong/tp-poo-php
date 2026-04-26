<?php
class Personne{
    public $prenom;
    public $nom;
    public $age;


    public function coordonnees(){
        return $this->prenom . 'a' . $this->age . 'ans .';
    }
}
    private $prenom;
    private $nom;
    private $age;
    public function setNom($){
        $this->nom =$n;
    }
    public function setPrenom($){
        $this->prenom =$p;
    }
    public function setAge($){
        $this->nom =$a;
    }
    public function getNom($){
        return $this->nom;
    }
    public function getNom($){
        return $this->nom;
    }
    public function getNom($){
        return $this->nom;
    }
    public function coordonnees(){
        return $this->prenom . '' . $this->age . 'a'. $this->age.'ans.';
    }
$p1= new Personne ();
$p1->setPrenom = ('Bousso');
$p1->setNom = ('Diop');
$p1->setAge= (20);
echo $p->coordonnees();




$p1= new Personne ();
$p2 = new Personne ();
$p1->prenom = "Moussa";
$p1->nom = "Aw";
$p1->age= 20;

$p1->prenom = "Adam";
$p1->nom = "Ndong";
$p1->age= 20;
echo $p->coordonnees();


//Constructeur//
public function __ constructeur($n,$p){
    $this->nom = $n;
    $this->prenom = $p;
}
public function afficher(){
    echo"Nom : $this->nom, Pr nom : $this->prenom";
}



