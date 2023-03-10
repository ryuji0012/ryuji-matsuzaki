<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Models;

class Post extends Models
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'body'
        ];

    public function getPaginateLimit(int $limit_count = 5)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count)->get();
    }
}