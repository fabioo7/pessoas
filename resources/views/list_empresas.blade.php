               
<style type="text/css">
    .image-upload > input
    {
    display: none;
    }
    </style>

<form method="POST" action="{!! url('/update_inclusos'); !!}" enctype="multipart/form-data">
{{ csrf_field() }}
<table style="width:100%; ">
<tr  style="background-color:black; color:white">
    <td></td>
    <td>Nome</td>
    <td>E-mail</td>
    <td>Telefone</td>
    <td>Ramo</td>
    <td>Ultimo Envio</td>
    <td>obs</td>
    <td></td>
</tr>
@foreach ($lista AS $t) 

<?php

if($t->ultimo_envio <> '' ){
$bot = 'envio_ok.png';
}else{
$bot = 'enviar.png';
}

?>



    <tr>
        <td><a href="https://fabiorangel.com.br/send_prospect/{{$t->id_empresa}}/{{$t->email}}"><img src="https://fabiorangel.com.br/public/img/<?php echo $bot?>" style="width:30px;" alt=""></a></td>
        <td><input type="text" class="form-control" placeholder="Nome" value="{{$t->nome_empresa}}" name="nome[]"></td>
        <td><input type="text" class="form-control" placeholder="email" value="{{$t->email}}" name="email[]"></td>
        <td><input type="text" class="form-control" placeholder="Telefone" value="{{$t->telefone}}" name="tel[]"></td>
        <td>{{$t->ramo}}</td>
        <td>{{$t->ultimo_envio}}</td>
        <td><input type="text" class="form-control" placeholder="Obs" value="{{$t->obs}}" name="obs[]"></td>
        <td> <a href="#" id="{{$t->id_empresa}}"  onclick="del(this)" class="badge badge-danger" >Excluir</a></td>
    </tr>

                   
                   

@endforeach
</table>
</form>
