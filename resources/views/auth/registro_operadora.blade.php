@extends('layouts.master2')
@section('css')
<!-- Sidemenu-respoansive-tabs css -->
<link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')
		<div class="container-fluid">
			<div class="row no-gutter">
				<!-- The image half -->
				<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
					<div class="row wd-100p mx-auto text-center">
						<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                        <img src="{{URL::asset('public/img/banner.jpg')}}" style="width:100%"  alt="logo">
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
										<div class="mb-5 d-flex"> <a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('public/img/logo4x2m.jpg')}}" class="sign-favicon ht-60" alt="logo"></a><h1 class="main-logo1 ml-1 mr-0 my-auto tx-28"></h1></div>
										<div class="main-signup-header">
											<h2 class="text-primary">Registro de Nova Operadora</h2>
											
											<form action="#">
												<div class="form-group">
													<label>Nome da Operadora</label> <input class="form-control" placeholder="Nome da Operadora" type="text">
												</div>
												<div class="form-group">
													<label>Responsável </label> <input class="form-control" placeholder="Nome do responsável " type="text">
												</div>
                                                <div class="form-group">
													<label>E-mail </label> <input class="form-control" placeholder="Nome do responsável " type="text">
												</div>
												
                                                <div class="row">
                                                <div class="col-md-6">
													<label>Password</label> <input class="form-control" placeholder="Enter your password" type="password">
												</div>
                                                <div class="col-md-6">
													<label>Repita Password</label> <input class="form-control" placeholder="Enter your password" type="password">
												</div>
                                                </div>
                                                
                                                <br>
                                                <button class="btn btn-main-primary btn-block">Create Account</button>
                                                
											
											</form>
											
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