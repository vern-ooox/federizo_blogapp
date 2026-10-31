<h1>Blog Posts</h1>
 
<a href="{{ route('posts.create') }}">Create New Post</a>
 
@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif
 
@foreach($posts as $post)
    <hr>
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->body }}</p>
 
    <a href="{{ route('posts.show', $post->id) }}">View</a>
    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
 
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach