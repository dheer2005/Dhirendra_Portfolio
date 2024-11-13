<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBackModel extends Model
{
    use HasFactory;
    protected $table = 'port_folio_feedback';
    protected $primarykey = "id"; 
}
