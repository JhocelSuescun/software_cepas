
<!----------------------------------MODAL FORM ELEVACION|---------------------------------------->

<div class="modal fade" id="modalElevacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Registro Elevacion</h4>
      </div>
      <div class="modal-body">
        <!--
        <div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div> -->

        <form class="form-horizontal" id="form_elevacion" role="form">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input type="hidden" name="id_elevacion" value="" id="id_elevacion">
            
            <div class="form-group{{ $errors->has('elevacion') ? ' has-error' : '' }}">
                
                <label  class="col-md-4 control-label">Elevacion</label>

                <div class="col-md-6">
                    <input id="elevacion" type="text" class="form-control" name="elevacion" value="{{ old('elevacion') }}" required autofocus>
                   <!-- @if ($errors->has('elevacion'))
                        <span class="help-block">
                            <strong>{{ $errors->first('elevacion') }}</strong>
                        </span>
                    @endif-->
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="button" id="añadirElevacion" class="btn btn-primary">Guardar</button>
                    <button type="button" id="cancelarElevacion" class="btn btn-default">Cancelar</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>