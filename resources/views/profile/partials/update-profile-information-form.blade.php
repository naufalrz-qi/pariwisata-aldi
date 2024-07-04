<section class="container py-5">
    <header class="mb-4">
        <h2 class="h4">Profile Information</h2>
        <p class="text-muted">Update your account's profile information and email address.</p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}" class="d-none">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="needs-validation">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="name" class="col-form-label">Name</label>
            <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" class="form-control" />
            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
        </div>

        <div class="form-group mb-3">
            <label for="email" class="col-form-label">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required autocomplete="username" class="form-control" />
            <div class="invalid-feedback">{{ $errors->first('email') }}</div>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="alert alert-warning" role="alert">
                    <p>Your email address is unverified.</p>
                    <button type="button" class="btn btn-sm btn-primary" onclick="document.getElementById('send-verification').submit();">Click here to re-send the verification email.</button>
                    @if (session('status') === 'verification-link-sent')
                        <p class="text-success">A new verification link has been sent to your email address.</p>
                    @endif
                </div>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
            @if (session('status') === 'profile-updated')
                <p class="text-success">Saved.</p>
            @endif
        </div>
    </form>
</section>
