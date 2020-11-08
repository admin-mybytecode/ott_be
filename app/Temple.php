<?php 

namespace App;
use Illuminate\Database\Eloquent\Model;

class Temple extends Model
{
    protected $table = 'temple';
    
    protected $fillable = ['name', 'description', 'file', 'bank_account_number', 'ifsc', 'branch', 'address'];
}