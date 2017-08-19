<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ActiveScope;

class BlogPost extends AbstractModel
{
    use SoftDeletes;

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        // add ActiveScope that will return active pages only
        static::addGlobalScope(new ActiveScope);
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog_posts';

    /**
     * Return a one-to-one relationship.
     *
     * @param  string  $related
     * @param  string  $foreignKey
     * @param  string  $localKey
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function content() : \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(BlogPostContent::class, 'post_id');
    }

    /**
     * Return page content
     *
     * @return BlogPostContent
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set page content
     *
     * @param BlogPostContent $content
     * @return self
     */
    public function setContent(BlogPostContent $content) : BlogPost
    {
        return $this->content()
            ->associate($content);
    }

    /**
     * Return title
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return self
     */
    public function setTitle(string $title) : BlogPost
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Return alias
     *
     * @return string
     */
    public function getAlias() : string
    {
        return $this->alias;
    }

    /**
     * Set alias
     *
     * @param string $alias
     * @return self
     */
    public function setAlias(string $alias) : BlogPost
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Return active flag
     *
     * @return boolean
     */
    public function isActive() : boolan
    {
        return (boolean) $this->active;
    }

    /**
     * Set active flag
     *
     * @param boolean $active
     * @return self
     */
    public function setActive(boolean $active) : BlogPost
    {
        $this->active = $active;

        return $this;
    }
}
