<section class="container py-5">
    <header class="mb-4">
        <h2 class="h4">Update Password</h2>
        <p class="text-muted">Ensure your account is using a long, random password to stay secure.</p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="needs-validation">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="update_password_current_password" class="col-form-label">Current Password</label>
            <input id="update_password_current_password" name="current_password" type="password" autocomplete="current-password" class="form-control" />
            <div class="invalid-feedback">{{ $errors->updatePassword->first('current_password') }}</div>
        </div>

        <div class="form-group">
            <label for="update_password_password" class="col-form-label">New Password</label>
            <input id="update_password_password" name="password" type="password" autocomplete="new-password" class="form-control" />
            <div class="invalid-feedback">{{ $errors->updatePassword->first('password') }}</div>
        </div>

        <div class="form-group mb-3">
            <label for="update_password_password_confirmation" class="col-form-label">Confirm Password</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" class="form-control" />
            <div class="invalid-feedback">{{ $errors->updatePassword->first('password_confirmation') }}</div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
            @if (session('status') === 'password-updated')
                <p class="text-success">Saved.</p>
            @endif
        </div>
    </form>
</section>
