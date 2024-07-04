<section class="container py-5">
    <header class="mb-4">
        <h2 class="h4">Delete Account</h2>
        <p class="text-muted">Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>
    </header>

    <button class="btn btn-danger" onclick="document.getElementById('confirm-user-deletion').style.display='block'">Delete Account</button>

    <div id="confirm-user-deletion" style="display:none;">
        <form method="post" action="{{ route('profile.destroy') }}" class="needs-validation">
            @csrf
            @method('delete')

            <h2 class="h5">Are you sure you want to delete your account?</h2>
            <p class="text-muted">Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.</p>

            <div class="form-group mb-3">
                <label for="password" class="col-form-label sr-only">Password</label>
                <input id="password" name="password" type="password" placeholder="Password" class="form-control" />
                <div class="invalid-feedback">{{ $errors->userDeletion->first('password') }}</div>
            </div>

            <div class="form-group">
                <button type="button" class="btn btn-secondary" onclick="document.getElementById('confirm-user-deletion').style.display='none'">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete Account</button>
            </div>
        </form>
    </div>
</section>
