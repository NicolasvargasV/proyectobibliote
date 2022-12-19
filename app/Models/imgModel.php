<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class imgModel extends Model{
    protected $table = 'registroimg';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    
    protected $allowedFields = [ 'imagenes'];


    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $validationRules    = [];
    protected $validationMessages = [];


    
    protected $skipValidation     = true;





}   