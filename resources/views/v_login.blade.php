<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('login-t/css/style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Welcome to login</h2>
								<p>Don't have an account?</p>
								<a href="{{ route('register') }}" class="btn btn-white btn-outline-white">Register</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Login</h3>
			      		</div>
			          </div>
                      <form method="POST" action="{{ route('login') }}">
                              @csrf
			           <div class="form-group mb-3">
			      	     <label class="label" for="name" >Email</label>
			      	     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" name="email" required autocomplete="email" autofocus>
                                   @error('email')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                                  @enderror
			           </div>
		                <div class="form-group mb-3">
		            	    <label class="label" for="password">Password</label>
		                  <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		                </div>
		            <div class="form-group">
		            	<button type="submit"  class="form-control btn btn-primary submit px-3">Login</button>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('login-t/js/popper.js')}}"></script>
  <script src="{{asset('login-t/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('login-t/js/main.js')}}"></script>

	</body>
</html>

