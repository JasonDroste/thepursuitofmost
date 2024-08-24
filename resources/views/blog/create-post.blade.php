
<h3>Create new Post</h3>
<form action="/create-post" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Post Title"> 
    <textarea name="body" placeholder="Body content..."></textarea>
    <button class="btn btn-primary">Submit Post</button>
</form>
