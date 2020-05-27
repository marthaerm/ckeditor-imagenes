<div class="modal" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class= "message-text"> </p>
            </div>
            <div class="modal-footer">
        <span class="btn-inner--icon">
          <a id="url" class="btn btn-icon btn-2 btn-info btn-lg" role="button" title="url" href="">
              Sí, envíar
          </a>
        </span>
                <span class="btn-inner--icon">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar</button>


        </span>
            </div>
        </div>
    </div>
</div>




<div class="modal" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('modal-data', 1)}}">
                <div class="modal-body">
                    <p class= "message-text"> </p>
                        <input type="text" value="" name="dataModal">
                </div>
                <div class="modal-footer">
                    <span class="btn-inner--icon">
                      <button class="btn btn-icon btn-2 btn-info btn-lg" type="submit">Sí, envíar</button>
                    </span>
                    <span class="btn-inner--icon">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>