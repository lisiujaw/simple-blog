<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class BlogPostContent extends AbstractModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog_post_contents';

    /**
     * Return an inverse one-to-one or many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(BlogPost::class, 'post_id');
    }

    /**
     * Return blog post
     *
     * @return BlogPost
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set blog post
     *
     * @param BlogPost $post
     * @return self
     */
    public function setPost(BlogPost $post) : BlogPostContent
    {
        return $this->post()
            ->associate($post);
    }

    /**
     * Return content
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }

    /**
     * Set content
     * 
     * @param string $content
     * @return self
     */
    public function setContent(string $content) : BlogPostContent
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Return first chars of content
     *
     * @return string
     */
    public function getFirstChars(int $number)
    {
        $content = $this->getContent();

        if (strlen($content) <= $number) {
            return $content;
        }

        return substr($content, 0, $number) . '...';
    }
}
