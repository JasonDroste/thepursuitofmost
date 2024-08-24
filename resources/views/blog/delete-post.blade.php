<h3>All Posts</h3>
            
             <div class="row">
                <h4>{{$post['title']}} by {{$post->user->name}}</h4> 
                    {{$post['body']}}  
                    <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
                    <form action="/delete-post/{{$post->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn">Delete</button>
                    </form> 
            </div>   
            