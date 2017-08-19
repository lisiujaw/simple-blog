@php($content = $post->getContent())

<!-- .blog-post -->
<div class="blog-post">
    <h2 class="blog-post-title">{{ $post->getTitle() }}</h2>
    <p class="blog-post-meta">{{ $post->getCreatedAt() }}</p>
    {{ $content->getFirstChars(300) }}
    
    <br /><br /><a href="/post/{{ $post->getAlias() }}" class="btn btn-outline-primary">More</a>
</div>
<!-- /.blog-post -->
