@foreach ($pessoa as $p)
<form method="post" action="{{ url('api/people_update')}}" enctype = "multipart/form-data"> 
<input type="hidden" name="id" value="{{$p->id}}"> 
<input type="hidden" name="origin" value="site">        
{{ csrf_field() }}
                      <div class="row">
                        <div class="col-md-12 pr-1">
                          <div class="form-group">
                            <label>Nome da Pessoa</label>
                            <input type="text" class="form-control" name="name"   value="{{$p->name_people}}">
                          </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" >Editar</button>
                    </div>
                </div>
          </form>
@endforeach  