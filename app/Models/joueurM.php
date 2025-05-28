<?php

namespace App\Models;

use CodeIgniter\Model;


class joueurM extends Model {

    protected $table            ='joueurs';
    protected $primaryKey       ='IDuser';
    protected $allowedFields    =['IDuser', 'NOM','PRENOM'];
    protected $returnType       ='array';

   public function getAllarray(){

        $requete = $this->select('*')->orderBy('IDuser');

        return $requete->findAll();
    }

     

}