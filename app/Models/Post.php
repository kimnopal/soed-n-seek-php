<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $table =  "posts";
    protected $primaryKey = "id";
    protected $incrementing = true;
    protected $keyType = "int";
    protected $timestamps = true;

    public function postStatus(): BelongsTo
    {
        return $this->belongsTo(PostStatus::class, "post_status_id", "id");
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function contacts(): BelongsToMany
    {
        return $this->belongsToMany(Contact::class, "contact_post", "post_id", "contact_id");
    }

    public function postPhotos(): HasMany
    {
        return $this->hasMany(PostPhoto::class, "post_id", "id");
    }
}
