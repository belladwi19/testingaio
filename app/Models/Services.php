<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ServicesController;

class Services extends Model
{
    use HasFactory;
    protected $table = "services";
    protected $fillable = ['title','description','image'];
}
