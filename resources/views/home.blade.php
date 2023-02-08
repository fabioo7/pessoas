@extends('layouts.master2')
@section('css')
<!--- Internal Fontawesome css-->
<link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
<!---Ionicons css-->
<link href="{{URL::asset('assets/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
<!---Internal Typicons css-->
<link href="{{URL::asset('assets/plugins/typicons.font/typicons.css')}}" rel="stylesheet">
<!---Internal Feather css-->
<link href="{{URL::asset('assets/plugins/feather/feather.css')}}" rel="stylesheet">
<!---Internal Falg-icons css-->
<link href="{{URL::asset('assets/plugins/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
@endsection
@section('content')
		<!-- Main-error-wrapper -->
		<div class="main-error-wrapper  page page-h ">
			<img src="https://fabiorangel.com.br/public/img/logo_novo.png" class="error-page" alt="error">
			<h2>Oopps. Você está Logado.</h2>
			<h6>Volte e tente novamente.</h6>
            <a class="btn btn-outline-danger" href="{{ url('/' . $page='novoarq') }}">Back to Home</a>
		
        


            @guest
                          
                          @else
                                    
                          
                           {{ Auth::user()->name }}
                                
                           <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                              Logout
                          </a>
  
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                          {{ csrf_field() }}
                          </form>
                                 
                          @endguest













        
        </div>
		<!-- /Main-error-wrapper -->
@endsection
@section('js')
@endsection












