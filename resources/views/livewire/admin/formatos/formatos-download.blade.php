<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary card-outline mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Formatos Disponibles para la Descarga</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                               <select name="formato" id="formato" class="form form-control form-select">
                                      <option value="">Seleccione un Formato</option>
                                      @foreach ($formatos as $formato)                                          
                                          <option value="{{ asset($formato->path_formato) }}">{{ $formato->nombre }}</option>                                          
                                      @endforeach
                               </select>
                            </div>
                            
                        </div>
                    </div> 
                    <div class="card-footer">
                        <button id="btnImprimir" class="btn btn-outline-success"> <i class="fa fa-print"></i> Imprimir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>