<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
   
    public $table="users";
    protected $fillable=[
        "name",
        "email",
        "password",
        "image",
        "role"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];

}