@foreach ($contact as $t)
<form method="post" action="" class="ajax_form2" enctype="multipart/form-data">
    <input type="hidden" class="form-control" value="{{$t->id_contact}}" name="id_people">
    <div class="row">
        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Nome" name="name_contact" required></div>
        <div class="col-sm-3"><input type="email" class="form-control" placeholder="E-mail" name="email" required></div>
        <div class="col-sm-3"><input type="tel" class="form-control" placeholder="Telefone" name="tel" required></div>
    </div>
    <div class="row">
        <div class="col-md-12"> <input type="submit"
                class="btn btn-primary-gradient btn-block" value="Cadastrar"></div></div>
</form><br><br>
@endforeach 