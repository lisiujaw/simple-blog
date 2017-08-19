<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use View;

class BlogController extends Controller
{
    /**
     * Return index page with blog posts
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request)
    {
        $page = $request->get('page') ?? 1;

        $posts = BlogPost::with('content')
            ->paginate(3, null, 'page', $page);

        return view('blog.blog-list', [
            'posts' => $posts,
        ]);
    }

    /**
     * Return post page
     *
     * @param string $alias
     * @return View
     */
    public function post(string $alias)
    {
        $post = BlogPost::where('alias', $alias)
            ->firstOrFail();

        return view('blog.post', [
            'post' => $post,
        ]);
    }
}
