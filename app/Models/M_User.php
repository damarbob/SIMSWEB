<?php 
namespace App\Models;


use Codeigniter\Model;


class M_User extends Model{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['firstname', 'lastname', 'email', 'password', 'date_update'];
}