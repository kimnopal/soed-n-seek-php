<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostStatus extends Model
{
    use HasFactory;

    protected $table = "post_statuses";
    protected $primaryKey = "id";
    protected $incrementing = true;
    protected $keyType = "int";
    protected $timestamps = false;

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, "post_id", "id");
    }
}
