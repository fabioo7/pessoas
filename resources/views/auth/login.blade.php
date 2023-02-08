@extends('layouts.master2')
@section('css')
<!-- Sidemenu-respoansive-tabs css -->
<link href="{{URL::asset('public/assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')


		<div class="container-fluid" style="width:100%;padding: 0px;">
			<div class="row no-gutter">
				<!-- The image half -->
				<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex " style="background-color:black; padding: 0px;">
					<div class="row wd-100p mx-auto text-left" style="padding-left: 0px;">
						<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p" style="padding: 0px;">
							<img src="{{URL::asset('public/img/banner_logo.jpg')}}" style="width:100%;padding: 0px;"  alt="logo">
						</div>
					</div>
				</div>
				<!-- The content half -->
				<div class="col-md-6 col-lg-6 col-xl-5 bg-white">
					<div class="login d-flex align-items-center py-2">
						<!-- Demo content-->
						<div class="container p-0">
							<div class="row">
								<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
									<div class="card-sigin">
										<div class="mb-5 d-flex" > <a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('public/img/logo_novo.png')}}" class="sign-favicon ht-60" style="padding-left: 100px;" alt="logo"></a><h1 class="main-logo1 ml-1 mr-0 my-auto tx-28"></h1></div>
										<div class="card-sigin">
											<div class="main-signup-header">
												<form  method="POST" action="login">
                                                {{ csrf_field() }}
													<div class="form-group">
														<label>Email</label>   <input id="email" type="email" placeholder="Login" class="form-control text-center" name="email" value="{{ old('email') }}" required autofocus>
                                                        @if ($errors->has('email'))
    <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif

													</div>
													<div class="form-group">
														<label>Password</label>   <input id="password" type="password" placeholder="Password" class="form-control text-center" name="password" required>
                                                        @if ($errors->has('password'))
    <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
@endif
                      


</div><button class="btn btn-main-primary btn-block">Acessar</button>
												


<div class="form-group">
                        <strong style="color:red">{{ $errors->first('g-recaptcha-response') }}</strong>
                        <br>
						{!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}
                     </div>

</form>
												<div class="main-signin-footer mt-5">
                                        			
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- End -->
					</div>
				</div><!-- End -->
			</div>
		</div>
@endsection
@section('js')
@endsection