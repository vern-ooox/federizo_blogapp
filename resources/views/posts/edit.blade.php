<h1>Edit Post</h1>
 
<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
 
    <label>Title:</label><br>
    <input type="text" name="title" value="{{ $post->title }}"><br><br>
 
    <label>Body:</label><br>
    <textarea name="body">{{ $post->body }}</textarea><br><br>
 
    <button type="submit">Update</button>
</form>