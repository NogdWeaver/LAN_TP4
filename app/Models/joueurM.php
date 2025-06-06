<?php

namespace App\Models;

use CodeIgniter\Model;


class joueurM extends Model {

    protected $table            ='joueurs';
    protected $primaryKey       ='iduser';
    protected $allowedFields    =['iduser', 'nom','prenom'];
    protected $returnType       ='array';

   public function getAllarray(){

        $requete = $this->select('*')->orderBy('iduser');

        return $requete->findAll();
    }

     

}