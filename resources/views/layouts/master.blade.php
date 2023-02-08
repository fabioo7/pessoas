<!DOCTYPE html>
<html lang="br">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('public/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="https://www.logpax.com.br/sis/adm/resources/img/fav.png">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Pessoas
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{URL::asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{URL::asset('public/assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{URL::asset('public/assets/demo/demo.css')}}" rel="stylesheet" />
</head>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
        <!-- 
		<div class="logo-image-small">
            <img src="public/assets/img/logo-small.png">
          </div>
-->
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
	 Dados Cadastro
         
        </a>
      </div>

     

	

      <div class="sidebar-wrapper">

	   
        <ul class="nav">
        

      
          <li class="{{ (Request::segment(1) == '') ? "active" : "" }}">
            <a href="{!! url('show_peoples'); !!}/">
              <i class="nc-icon nc-single-02"></i>
              <p>Pessoas</p>
            </a>
          </li>
	
          <li class="{{ (Request::segment(1) == '') ? "active" : "" }}">
            <a href="{!! url('show_peoples'); !!}">
		    	<i class="nc-icon nc-badge"></i>
              <p>Lista de Contatos</p>
            </a>
          </li>
     
  

  



         
        </ul>

   
      </div>
    </div>
	<div class="main-panel">

     <!-- Navbar -->
	 <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            


            
            <a class="navbar-brand" href="javascript:;">Pessoas: <strong> 
  
            </strong>
            </a>
            
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
  
            <ul class="navbar-nav">

<form>
             

                
              </form>
		
       

           




            





            
            </ul>
          </div>
        </div>
      </nav>


      <div class="modal fade" id="myModalevent" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color: #fbc658">
              
              <h5 class="modal-title">Crie um Novo Evento</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{ url('insert_evento')}}" enctype = "multipart/form-data"> 
                {{ csrf_field() }}
              <div class="row">
                <div class="col-md-11 pr-1">
                 
                    <label>Nome do Evento:</label>
                    <input type="text" class="form-control" name="nome"   value="">
                 
                    <br>
                    <p>Deseja  já criar sua lista de convido com os seus Participantes ja cadastrados
                    <input type="checkbox" name="adcionar" value="sim"><b> Sim:</b>
                    </p>
                    
                </div>
               
              </div>
      
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-warning btn-round">Registrar</button>
            </div>
          </div>
        </form>
        </div>
      </div>

      <script>
          $(document).ready(function(){
    $("#myBtnnovoevento").click(function(){
      $("#myModalevent").modal();
    });
  });
      </script>



				@yield('content')





				@include('layouts.footer-scripts')	
	</body>
</html>