<form action="/users/update" method="POST" class="w-50" id="asd">
<h1 class="m-0 p-0">Edit User</h1>
    <input type="hidden" name="id" value="<?= $data->user->id ?>">
    <div class="mb-3">
        <label for="display-name" class="form-label">Display Name</label>
        <input type="text" class="form-control" id="display-name" name="display_name" value="<?= $data->user->display_name ?>">
    </div>
    <div class="mb-3">
        <label for="user-email" class="form-label">Email</label>
        <input type="email" class="form-control" id="user-email" name="email" value="<?= $data->user->email ?>">
    </div>
    <div class="mb-3">
        <label for="user-username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username-email" name="username" value="<?= $data->user->username ?>">
    </div>
    <div class="mb-3">
        <label for="user-password" class="form-label">Password</label>
        <input type="password" class="form-control" id="user-password" name="password" value="<?= $data->user->password ?>">
    </div>
    <div class="mb-3">
        <label for="item-image" class="form-label" style="color: white;">image</label>
        <input type="file" class="form-control" id="item-image" name="image">
    </div>
    <div class="mb-3">
        <label for="user-role" class="form-label">Role</label>
        <select class="form-select" aria-label="Role" name="permissions">
            <option value='a:12:{i:0;s:9:"post:read";i:1;s:11:"post:create";i:2;s:11:"post:update";i:3;s:11:"post:delete";i:4;s:9:"user:read";i:5;s:11:"user:create";i:6;s:11:"user:update";i:7;s:11:"user:delete";i:8;s:8:"tag:read";i:9;s:10:"tag:create";i:10;s:10:"tag:update";i:11;s:10:"tag:delete";}'>Admin</option>
            <option value="seller">Seller</option>
            <option value="procurement">Procurement</option>
            <option value="accountant">Accountant</option>
        </select>
    </div>
    <button type="submit" class="btn btn-warning mt-4">Update</button>
    <a href="/user?id=<?= $data->user->id ?>" class="btn btn-danger ms-3 mt-4">Cancel</a>

</form>