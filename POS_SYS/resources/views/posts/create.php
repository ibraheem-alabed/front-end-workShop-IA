<h1 style="color: white;">Create item</h1>

<form action="/posts/store" method="POST" class="w-50">
    <div class="mb-3">
        <label for="post-title" class="form-label" style="color: white;">item Title</label>
        <input type="text" class="form-control" id="post-title" name="title">
    </div>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Your post content.." id="post-content" style="height: 100px" name="content"></textarea>
        <label for="post-content">item Content</label>
    </div>
    <button type="submit" class="btn btn-success mt-4">Create</button>
</form>