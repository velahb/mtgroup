<div class="modal fade" id="modal-delete-{{$profesor->id}}" tabindex="-1">
  <div class="modal-dialog">
  <form action="{{route('profesor.destroy',$profesor->id)}}" method="post">
      @csrf
      @method('DELETE')
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar profesor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Estas seguro de eliminar a {{$profesor->nombre}}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-danger" value="Eliminar">
      </div>
    </div>
    </form>
  </div>
</div>


