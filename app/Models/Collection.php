<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    
    public function slug(): string
    {
        return strtolower(preg_replace('#[ -]+#', '-', $this->name));
    }
}
