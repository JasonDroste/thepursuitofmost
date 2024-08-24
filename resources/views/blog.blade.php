@isset($posts)
@foreach($posts as $post)
{{ $post['title']}}
@endforeach
<h1>Posts</h1>
@endisset
<div>
@include('blog.create-post')
</div>

<div>
    @include('blog.edit-post')
</div>

<div>
    @include('blog.delete-post')
</div>