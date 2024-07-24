<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];

    protected $with = ['author', 'category'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }

    public function scopeFilter(Builder $query, array $filters) : void
    {
    $query->when(
        $filters['search'] ?? false, 
        function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%');
        }
        );

        $query->when(
            $filters['category'] ?? false, 
            function ($query, $category) {
                $query->whereHas('category', fn ($query) => $query->where('slug', $category));
            }
            );


            $query->when(
                $filters['author'] ?? false, 
                function ($query, $author) {
                    $query->whereHas('author', fn ($query) => $query->where('username', $author));
                }
                );
    }

}