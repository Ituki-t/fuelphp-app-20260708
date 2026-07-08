<h2>Create Post</h2>

<form method="post" action="/posts/create">
    <div>
        <label>Title:</label>
        <input type="text" name="title" required>
    </div>
    <div>
        <label>Body:</label>
        <textarea name="body" required></textarea>
    </div>
    <button type="submit">Create Post</button>
</form>