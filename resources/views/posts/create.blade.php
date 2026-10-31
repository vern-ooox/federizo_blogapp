<h1>Create Post</h1>
 
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
 
    <label>Title:</label><br>
    <input type="text" name="title"><br><br>
 
    <label>Body:</label><br>
    <textarea name="body"></textarea><br><br>
 
    <button type="submit">Save</button>
</form>