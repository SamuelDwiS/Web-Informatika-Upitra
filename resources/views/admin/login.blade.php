  <!-- Form Login -->
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        {{-- Alert Section --}}
                        @if (session('success'))
                            <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        @if ($errors->any())
                            @foreach ($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                        @endif

                        <form action="{{ route('login_admin_action') }}" method="POST">
                            @csrf

                            <div class="form-outline mb-4">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" name="username_admin" id="username"
                                    class="form-control form-control-lg @error('username') is-invalid @enderror"
                                    value="{{ old('username') }}" placeholder="Enter your username" required />
                                @error('username')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-outline mb-3">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" name="password" id="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    placeholder="Enter password" required />

                                @error('password')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-check mb-0">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="remember" />
                                    <label class="form-check-label" for="remember">Remember me</label>
                                </div>
                                <a href="#!" class="text-body">Forgot password?</a>
                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" class="btn btn-primary btn-lg px-5">Login</button>
                            </div>

                        </form>
                    </div>