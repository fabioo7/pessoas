
<form method="post" action="" class="ajax_form2" enctype="multipart/form-data">
    <input type="hidden" class="form-control" value="{{$id}}" name="id_people">
    <div class="row">
        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Nome" name="name_contact" required></div>
        <div class="col-sm-3"><input type="email" class="form-control" placeholder="E-mail" name="email" required></div>
        <div class="col-sm-3"><input type="tel" class="form-control" placeholder="Telefone" name="tel" required></div>
    </div>
    <div class="row">
        <div class="col-md-12"> <input type="submit"
                class="btn btn-primary-gradient btn-block" value="Cadastrar"></div></div>
</form><br><br>
<div id="listagem"> Aguarde um Momento</div>



                
<!---------------------------------Insert contacts-------------------------------------->
<script type="text/javascript">
$(document).ready(function() {
    $('.ajax_form2').submit(function(e) {
        e.preventDefault();
        var dados = jQuery(this).serialize();
        //alert(dados);
        $("[type=submit]", this).each(function() {
            dados += "&" + escape($(this).attr("name")) + "=" + escape($(this).val());
        });
        $.ajax({
            type: "POST",
            url: "https://fabiorangel.com.br/api_people/api/contact",
            data: dados,
            success: function(data) {
                $('#myalert').show();
                //////////////atualizo a div depois de salvar //////////////////
                $('#listagem').load('{!! url('view_lita_contacts')!!}/{{$id}}');
                ////////////////////////////////////////////////////////////////
                setTimeout(function() { //fecho o alerta
                    $('#myalert').fadeOut();
                }, 3000);
            }
        });
        return false;
    });
});
//incializo a div de listagem
$(document).ready(function() {
    $('#listagem').load('{!! url('view_lita_contacts')!!}/{{$id}}');
});
</script>


<script type="text/javascript">
function del_contact(obj) {
    //alert(obj.id);
    if (confirm('Deseja realmente excluir este contato ')) {
        $.ajax({
            url: 'https://fabiorangel.com.br/api_people/api/del_contact',
            type: 'DELETE',
            data: {
                'id': obj.id
            },
            success: function(r) {
                //////////////atualizo a div depois de salvar //////////////////
                $('#listagem').load('{!! url('view_lita_contacts')!!}/{{$id}}');
                ////////////////////////////////////////////////////////////////
               
            },
            error: function(r) {
                alert('deu erro');
            }
        });
    } else {
        return false;
    }
}
</script>


              