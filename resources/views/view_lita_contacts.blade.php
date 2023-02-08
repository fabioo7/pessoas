
<table class="table" style="font-size: 14px;" id="example">
    <thead class=" text-primary">
        <th  class="text-left">Nome</th>
        <th  class="text-left">E-mail</th>
        <th  class="text-left">Telefone</th> 
        <th  class="text-right">Ação</th>
        </thead>
    <tbody>
        @foreach ($lista as $t)
        <tr>
        <td>{{$t->name_contact}}</td>
        <td>{{$t->email}}</td>
        <td>{{$t->tel}}</td>
        <td  class="text-right">
        <a href="#" id="#btn_edit_contact" data-id="{{$t->id_contact}}" class="badge badge-info" >Editar</a>
        <a href="#" id="{{$t->id_contact}}"  onclick="del_contact(this)"  class="badge badge-danger" >Deletar</a></td>
        
        
                                
    
    </tr>
        @endforeach  
    </tbody>
</table>


 <!-------------------------------------Modal Editar contato------------------------------------------------>
 <script>
          jQuery("table").on('click',"#btn_edit_contact", function(){
              var id = jQuery(this).attr('data-id');  // pega o id do botão
              jQuery.post('https://fabiorangel.com.br/api_people/modal_update_contact', {acao: 'alterar',id: id}, function(retorno){
                  jQuery("#modal3").modal({ backdrop: 'static' });
                  jQuery("#detalhes3").html(retorno);        
              });
          });
          </script>
          <div style="z-index: 1042 !important;" class="modal" id="modal3" tabindex="2" role="dialog" aria-labelledby="" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-content-demo">
                      <div class="modal-header" style="background-color: #34b5b8">
                        <h6 class="modal-title">Atualizar Contato</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body">
                        <div id="detalhes3"></div>
                      </div>
                
                    </div>
                  </div>
          </div>
