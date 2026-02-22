<section>
    <div class="container">
        <header>
            <h2 class="text-dark">
                {{ __('Informazioni') }}
            </h2>

            <p class="mt-1 text-muted">
                {{ __('Aggiorna qui i dati relativi al tuo profilo! ') }}
            </p>
        </header>

        <form id="send-verification" method="post"  action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div class="mb-3">
                <label for="name" class="mb-1">{{ __('Nome') }}</label>
                <input class="form-control form-control-sm" type="text" name="name" id="name"
                    autocomplete="name" value="{{ old('name', $user->name) }}" required autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->get('name') }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="mb-1">
                    {{ __('Email') }}
                </label>

                <input id="email" name="email" type="email" class="form-control form-control-sm"
                    value="{{ old('email', $user->email) }}" required autocomplete="username" />

                @error('email')
                    <span class="alert alert-danger mt-2" role="alert">
                        <strong>{{ $errors->get('email') }}</strong>
                    </span>
                @enderror

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-muted">
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification" class="btn btn-outline-dark">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 text-success">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="job_title" class="mb-1">{{ __('Qualifica Professionale') }}</label>
                <input id="job_title" name="job_title" type="text" class="form-control form-control-sm"
                    value="{{ old('job_title', $user->job_title) }}" placeholder="es. Full Stack Developer" />
                @error('job_title')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="bio" class="mb-1">{{ __('Bio / Descrizione') }}</label>
                <textarea id="bio" name="bio" class="form-control form-control-sm" rows="3">{{ old('bio', $user->bio) }}</textarea>
                @error('bio')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="profile_image" class="mb-1">{{ __('Immagine Profilo') }}</label>
                <input id="profile_image" name="profile_image" type="file" class="form-control form-control-sm" />

                @if ($user->profile_image)
                    <div class="my-4">
                        <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Preview"
                            style="width: 50px; height: 50px; border-radius: 50%;">
                        <span class="ms-2 small text-muted">Immagine attuale</span>
                    </div>
                @endif

                @error('profile_image')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <div class="row mb-2">
                <div class="col-md-6">
                    <label for="github_link" class="mb-1"><i class="bi bi-github mx-2"></i> {{ __('GitHub Link') }}</label>
                    <input id="github_link" name="github_link" type="text" class="form-control form-control-sm"
                        value="{{ old('github_link', $user->github_link) }}" />
                </div>
                <div class="col-md-6">
                    <label for="linkedin_link" class="mb-1"><i class="bi bi-linkedin mx-2"></i>{{ __('LinkedIn Link') }}</label>
                    <input id="linkedin_link" name="linkedin_link" type="text" class="form-control form-control-sm"
                        value="{{ old('linkedin_link', $user->linkedin_link) }}" />
                </div>
            </div>


            <div class="d-flex align-items-center gap-4">
                <button class="btn btn-sm btn-outline-success mt-3" type="submit">{{ __('Salva') }}</button>

                @if (session('status') === 'profile-updated')
                    <script>
                        const show = true;
                        setTimeout(() => show = false, 2000)
                        const el = document.getElementById('profile-status')
                        if (show) {
                            el.style.display = 'block';
                        }
                    </script>
                    <p id='profile-status' class="fs-6 text-muted">{{ __('Saved.') }}</p>
                @endif
            </div>
        </form>
        <hr class="my-5">
    </div>

</section>
