<?php

namespace App\Models;
use CodeIgniter\Model;


class jeuM extends Model {

    protected $table            ='jeu';
    protected $primaryKey       ='IDJeu';
    protected $allowedFields    =['IDJeu', 'NOMjeu','IMGjeu','DESCjeu'];
    protected $returnType       ='array';

   public function getAllarray(){

        $requete = $this->select('*')->orderBy('IDjeu');

        return $requete->findAll();
    }

     

}