<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    // protected $with = ['author', 'category'];

    public function scopeFilter($query, array $filters)
    {
        // if ($filters['search'] ?? false) {
        //     $query->where('title', 'like', '%' . $filters['search'] . '%')->orWhere('content', 'like', '%' . $filters['search'] . '%');
        // }
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('content', 'like', '%' . $search . '%');
        }); // when search is not empty, search for title and content
        // the first parameter is the query, the second is the search

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id'); // user_id is the foreign key in the posts table
    }
}
