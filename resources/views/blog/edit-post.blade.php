
<h1>Edit Post</h1>

<form action="/edit-post/{{$post->id}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{$post->title}}">
    <textarea name="body">{{$post->body}}</textarea>
    <button class="btn btn-primary">Save Changes</button>
</form>