<form method="post" action="{{ url('contact')}}" enctype = "multipart/form-data"> 
            {{ csrf_field() }}
            <input type="hidden" name="id_people" value="">
                      <div class="row">
                        <div class="col-md-6 pr-1">
                          <div class="form-group">
                            <label>Nome do Contato</label>
                            <input type="text" class="form-control" name="name_contact"   value="">
                          </div>
                        </div>
                        <div class="col-md-6 pl-1">
                          <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email"  value="">
                          </div>
                        </div>
                      </div>
            
                      <div class="row">
                        <div class="col-md-6 pr-1">
                          <div class="form-group">
                            <label>Telefone</label>
                            <input type="tel" class="form-control" name="telefone"   value="">
                          </div>
                        </div>
                        <div class="col-md-6 pl-1">
                          <div class="form-group">
                            <label>Outros</label>
                            <input type="text" class="form-control" name="" value="">
                          </div>
                        </div>
                      </div>               
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" >Cadastrar</button>
        </div>
      </div>
      </form>