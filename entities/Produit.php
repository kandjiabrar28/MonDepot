<?php
namespace entities;

class Produit
{
private  $nomProduit;
private $refProduit;
private  $prixProduit;

    public function __construct($ref,$nom,$prix)
    {
        $this->refProduit=$ref;
        $this->nomProduit=$nom;
        $this->prixProduit=$prix;
    }
    /**
     * @return mixed
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /**
     * @return mixed
     */
    public function getRefProduit()
    {
        return $this->refProduit;
    }

    /**
     * @return mixed
     */
    public function getPrixProduit()
    {
        return $this->prixProduit;
    }

    /**
     * @param mixed $nomProduit
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;
    }

    /**
     * @param mixed $refProduit
     */
    public function setRefProduit($refProduit)
    {
        $this->refProduit = $refProduit;
    }

    /**
     * @param mixed $prixProduit
     */
    public function setPrixProduit($prixProduit)
    {
        $this->prixProduit = $prixProduit;
    }

    
}
$prods=new Produit("P1", "Clé USB 8GB", 4000);
$prods=new Produit("P2", "Ordinateur", 180000);
$prods=new Produit("P3", "Scanner", 45000);
$prods=new Produit("P4", "Imprimante", 65000);

for($i=0;$i<count($prods);$i++){
    echo $prods[$i];
    var_dump($prods);
    
}
?>

