<?php

namespace App\ViewModels;

use App\Post;
use App\Category;
use Spatie\ViewModels\ViewModel;

class PostViewModel extends ViewModel
{
    public $post;

    public $categories;

    public function __construct(Post $post = null)
    {
        $this->post = $post;
        $this->categories = Category::all();
        // $this->categories = Category::where('name', 'like', 'De%')->get();
    }

    public function isSelected(Category $category)
    {
        return $category->id === $this->post->category_id ? 'selected' : '';
    }
}
