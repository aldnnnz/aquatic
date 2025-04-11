@extends('frontend.layout')

@section('content')
	

	<!-- register-area start -->
	<div class="register-area" style="background-color: #fff; min-height: 100vh; display: flex; align-items: center;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-12 col-lg-8">
					<div class="login" style="background: #fff; border-radius: 10px; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
						<div class="login-form-container p-4">
							<div class="login-form">
								<form method="POST" action="{{ route('login') }}">
									@csrf
									<div class="form-group mb-4">
										<input id="email" type="email" 
											class="form-control @error('email') is-invalid @enderror" 
											name="email" 
											value="{{ old('email') }}" 
											required 
											autocomplete="email" 
											autofocus 
											placeholder="{{ __('E-Mail Address') }}"
											style="padding: 12px; border-radius: 5px;">
										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<div class="form-group mb-4">
										<input id="password" 
											type="password" 
											class="form-control @error('password') is-invalid @enderror" 
											name="password" 
											required 
											autocomplete="current-password" 
											placeholder="{{ __('Password') }}"
											style="padding: 12px; border-radius: 5px;">
										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<div class="form-group">
										<div class="button-box">
											<div class="login-toggle-btn d-flex justify-content-between align-items-center mb-4">
												<div class="form-check">
													<input class="form-check-input" 
														type="checkbox" 
														name="remember" 
														id="remember" 
														{{ old('remember') ? 'checked' : '' }}
														style="cursor: pointer;">
													<label class="form-check-label" for="remember" style="color: #666; cursor: pointer;">
														{{ __('Remember Me') }}
													</label>
												</div>
												<a href="{{ route('password.request') }}" 
													style="color: #007bff; text-decoration: none; transition: color 0.3s;">
													{{ __('Forgot Your Password?') }}
												</a>
											</div>
											<button type="submit" 
												class="btn btn-primary w-100 py-3"
												style="background: #007bff; border: none; border-radius: 5px; font-weight: 600; transition: all 0.3s;">
												Login
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	<!-- register-area end -->
@endsection