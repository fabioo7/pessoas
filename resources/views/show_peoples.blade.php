@extends('layouts.master')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet" />

<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script> 

@section('content')
    
 

<div class="content">
  
@if(session('mensagem'))
<br>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>OK!</strong> {{session('mensagem')}}.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

@endif
@if(session('erro'))
<br>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Ohh!</strong> {{session('erro')}}.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

@endif  
<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="card card-stats">
     <a href="{{ url('pax')}}/1/" style="color: black;">
      <div class="card-body ">
        <div class="row">
          <div class="col-3 col-md-3">
            <div class="icon-big text-center icon-danger">
              <i class="nc-icon nc-single-02 text-danger"></i>
            </div>
          </div>
          <div class="col-7 col-md-8">
            <div class="numbers">
            <p class="card-category" style="font-size: 9px;">Pessoas</p>
              <p class="card-category" style="font-size: 14px;">Contadas</p>
              <p class="card-title">{{$total_people}}<p>
            </div>
          </div>
        </div>
      </div>
    </a>
      
    </div>
  </div>

          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="card card-stats">
              <a href="{{ url('pax')}}/2/" style="color: black;">
              <div class="card-body ">
                <div class="row">
                  <div class="col-3 col-md-3">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-02 text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                    <p class="card-category" style="font-size: 9px;">Contatos</p>
                      <p class="card-category" style="font-size: 14px;">Registrados</p>
                      <p class="card-title">{{$total_contact}}<p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>
          </div>
   
        
   
          </div>
            <div class="card">
              <div class="card-header">

              <div class="row">
              <div class="col-md-6">
              <h4 class="card-title"> Cadastro de Pessoas</h4>
              </div>
              <div class="col-md-6" style="text-align:right; padding-top: 10px;">
    
              <button type="submit" class="btn-primary" id="nova_pessoa">+ Nova Pessoa</button>
              </div>
              </div>
              <div class="card-body">
                <form id="formulario" method="post" action="" enctype = "multipart/form-data"> 
                  {{ csrf_field() }}
                  <input type="hidden" name="id" value="">
                  <input type="hidden" name="nome_event" value="">
                  <input type="hidden" name="banner" value="">
                
                  <table class="table" style="font-size: 14px;" id="example">
                    <thead class=" text-primary">
                      <th style="width:10%" class="text-left">cod</th>
                      <th style="width:60%"class="text-left">Nome</th> 
                      <th style="width:25%" class="text-center">Ação</th>
                    </thead>
                    <tbody>
                    @foreach ($lista as $t)
                    <tr>
                      <td>{{$t->id}}</td>
                      <td>{{$t->name_people}}</td>
                      <td>
                      <a href="#" id="btn_list"   data-id="{{$t->id}}" class="badge badge-info" >  Contatos</a>
                      <a href="#" id="btn_update_pessoa" data-id="{{$t->id}}" class="badge badge-warning" >  Atualizar</a>
                      <a href="{{ url('api/people_del')}}/{{$t->id}}"  class="badge badge-danger" >	Deletar</a>
                      
                   
                    </td>
               
                        

                        
                    </tr>
                    @endforeach  
                  
                    </tbody>
                  </table>
                  
                
              </form>
              </div>
            </div>
          </div>
   
        </div>
      </div>


  <div class="modal fade" id="Modal_nova_pessoa" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #34b5b8">
          <h5 class="modal-title">Nova Pessoa</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ url('api/people')}}" enctype = "multipart/form-data"> 
          <input type="hidden" name="origin" value="site"> 
          {{ csrf_field() }}
                      <div class="row">
                        <div class="col-md-12 pr-1">
                          <div class="form-group">
                            <label>Nome da Pessoa</label>
                            <input type="text" class="form-control" name="name_people"   value="">
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" >Cadastrar</button>
                    </div>
                </div>
          </form>
    </div>
  </div>
<script type="text/javascript" src="//code.jquery.com/jquery-compat-git.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script>
  $(document).ready(function(){
    $("#nova_pessoa").click(function(){
      $("#Modal_nova_pessoa").modal();
    });
  });
</script>










     <!-------------------------------------Modal Listar Contatos------------------------------------------------>
     <script>
          jQuery("table").on('click',"#btn_list", function(){
              var id = jQuery(this).attr('data-id');  // pega o id do botão
              jQuery.post('https://fabiorangel.com.br/api_people/modal_list_contacts', {acao: 'alterar',id: id}, function(retorno){
                  jQuery("#modalsta").modal({ backdrop: 'static' });
                  jQuery("#detalhes3").html(retorno);        
              });
          });
          </script>
          <div class="modal" id="modalsta" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-content-demo">
                      <div class="modal-header" style="background-color: #34b5b8">
                        <h6 class="modal-title">Lista de Contatdos</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body">
                        <div id="detalhes3"></div>
                      </div>
                
                    </div>
                  </div>
          </div>
     <!-------------------------------------Modal Editar Pessoa------------------------------------------------>
     <script>
          jQuery("table").on('click',"#btn_update_pessoa", function(){
              var id = jQuery(this).attr('data-id');  // pega o id do botão
              jQuery.post('https://fabiorangel.com.br/api_people/modal_update_pessoa', {acao: 'alterar',id: id}, function(retorno){
                  jQuery("#modal2").modal({ backdrop: 'static' });
                  jQuery("#detalhes2").html(retorno);        
              });
          });
          </script>
          <div class="modal" id="modal2" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-content-demo">
                      <div class="modal-header" style="background-color: #34b5b8">
                        <h6 class="modal-title">Atualizar Pessoa</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body">
                        <div id="detalhes2"></div>
                      </div>
                
                    </div>
                  </div>
          </div>















@endsection

<script>
  $(document).ready(function() {
    // show the alert
    setTimeout(function() {
        $(".alert").alert('close');
    }, 2000);
});
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>




@section('js')


@endsection