<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Akreditasi extends Model
{
    protected $fillable = ['lembaga', 'peringkat', 'tanggal'];
}
