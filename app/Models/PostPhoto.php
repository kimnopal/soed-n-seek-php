<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostPhoto extends Model
{
    use HasFactory;

    protected $table = 'post_photos';
    protected $primaryKey = "id";
    protected $incrementing = true;
    protected $keyType = "int";
    protected $timestamps = false;

    protected function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, "post_id", "id");
    }
}
