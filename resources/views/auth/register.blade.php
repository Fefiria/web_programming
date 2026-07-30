<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registering Membership</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Outer Container dengan Background Putih + Gambar Asset -->
    <div class="d-flex flex-column justify-content-center align-items-center min-vh-100 py-5 px-3"
        style="background-image: url('{{ asset('assets/procom.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-color: #ffffff;">

        <!-- Form Card dengan Bootstrap & Glassmorphism (RGBA 92% White + Blur) -->
        <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5 w-100"
            style="max-width: 520px; background-color: rgba(255, 255, 255, 0.92); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);">

            <!-- Form Header -->
            <div class="text-center mb-4">
                <h3 class="fw-bold text-dark mb-1">Form Pendaftaran Anggota</h3>
                <p class="text-muted small mb-0">Lengkapi data diri Anda di bawah ini</p>
            </div>

            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold text-dark small">Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                        autocomplete="name" class="form-control form-control-lg bg-white rounded-3 fs-6" />
                    @error('name')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- NPM -->
                <div class="mb-3">
                    <label for="npm" class="form-label fw-semibold text-dark small">NPM</label>
                    <input id="npm" type="text" name="npm" value="{{ old('npm') }}" required
                        class="form-control form-control-lg bg-white rounded-3 fs-6" />
                    @error('npm')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Birth Date -->
                <div class="mb-3">
                    <label for="birth_date" class="form-label fw-semibold text-dark small">Tanggal Lahir</label>
                    <div class="input-group">
                        <input id="birth_date" type="text" name="birth_date" value="{{ old('birth_date') }}"
                            placeholder="Pilih tanggal lahir" required
                            class="form-control form-control-lg bg-white border-end-0 rounded-start-3 fs-6" />
                        <span class="input-group-text bg-white border-start-0 rounded-end-3 text-muted">
                            <i class="bi bi-calendar3"></i>
                        </span>
                    </div>
                    @error('birth_date')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Phone Number -->
                <div class="mb-3">
                    <label for="phone_number" class="form-label fw-semibold text-dark small">Nomor Telepon</label>
                    <input id="phone_number" type="text" name="phone_number" value="{{ old('phone_number') }}"
                        required class="form-control form-control-lg bg-white rounded-3 fs-6" />
                    @error('phone_number')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold text-dark small">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                        autocomplete="username" class="form-control form-control-lg bg-white rounded-3 fs-6" />
                    @error('email')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Bio -->
                <div class="mb-3">
                    <label for="bio" class="form-label fw-semibold text-dark small">Upload Biodata</label>
                    <input id="bio" type="file" name="bio" accept=".pdf" required
                        class="form-control rounded-3 fs-6">
                    <div class="form-text">Biodata harus berupa file PDF. Maksimal 2 MB.</div>
                    @error('bio')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- CV Upload -->
                <div class="mb-3">
                    <label for="cv" class="form-label fw-semibold text-dark small">Upload CV</label>
                    <input id="cv" type="file" name="cv" accept=".pdf" required
                        class="form-control rounded-3 fs-6">
                    <div class="form-text text-muted small mt-1">Format yang diterima: PDF. Maksimal ukuran file: 2 MB.
                    </div>
                    @error('cv')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold text-dark small">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password"
                        class="form-control form-control-lg bg-white rounded-3 fs-6" />
                    @error('password')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="password_confirmation" class="form-label fw-semibold text-dark small">Confirm
                        Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        autocomplete="new-password" class="form-control form-control-lg bg-white rounded-3 fs-6" />
                    @error('password_confirmation')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Information Box -->
                <div class="p-3 bg-light rounded-3 text-muted small mb-4 border border-light-subtle">
                    Dengan mendaftar, Anda mengajukan diri menjadi calon anggota UKM. Setelah data diterima, admin akan
                    meninjau dan mengonfirmasi keanggotaan Anda.
                </div>

                <!-- Action Buttons -->
                <div class="d-flex align-items-center justify-content-between pt-2">
                    <a href="{{ route('login') }}" class="text-decoration-underline text-secondary small">
                        Already registered?
                    </a>

                    <button type="submit" class="btn btn-primary px-4 py-2.5 fw-semibold rounded-3 shadow-sm">
                        Register as Member
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
