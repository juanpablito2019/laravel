@extends('dashboard.master')
@section('content')

<a class="btn btn-info mt-3 mb-3" href="{{route('post.create')}}">
    Crear
</a>

<table class="table">
    <thead>
        <tr>
            <td>
                Id
            </td>
            <td>
                Titulo
            </td>
            <td>
                Posteado
            </td>
            <td>
                Creación
            </td>
            <td>
                Actualización
            </td>
            <td>
                Acciones
            </td>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>
                {{$post->id}}
            </td>
            <td>
                {{$post->title}}
            </td>
            <td>
                {{$post->posted}}
            </td>
            <td>
                {{$post->created_at->format('d-m-Y')}}
            </td>
            <td>
                {{$post->updated_at->format('d-m-Y')}}
            </td>
            <td>
                <a class="btn btn-info" href="{{route('post.show',$post->id)}}">Detalle</a>
                <a class="btn btn-info" href="{{route('post.edit',$post->id)}}">Editar</a>
                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#eliminarPost" data-id="{{$post->id}}">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{{$posts->links()}}

<div class="modal fade" id="eliminarPost" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel">New message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Seguro desea eliminar el post seleccionado?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <form id="formDelete" method="POST" action="{{route('post.destroy',0)}}" data-action="{{route('post.destroy',0)}}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary">Eliminar</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  <script>
      $('#eliminarPost').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var id = button.data('id') /* Recibe el data del id del Post */
            /* Atributo data-action lo recibe desde el form */
            action=$('#formDelete').attr('data-action').slice(0,-1);
            var modal = $(this)
            $('#formDelete').attr('action',action+id);
            modal.find('.modal-title').text('Vas a eliminar el Post: ' + id)
        })
  </script>

@endsection