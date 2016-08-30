@extends('layouts.default')
@section('content')
  <div id="titulonosotros">
    <p class="titulo3">Lista de PH</p>
  </div>
  <div class="container">
    <div class="col-md-12">
      <table class="table table-striped">
        <tbody>
          @foreach($phs as $value)
            <tr>
              <td>{{ $value->id }}</td>
              <td><a href="{{"ph/$value->id"}}">{{ $value->name }}</a></td>
              <td>
                  <button type="button" class="btn btn-primary"><a style="color: inherit;" href="{{"ph/$value->id/edit"}}">Editar</a></button>
              </td>
              <td>
                  <button type="button" class="btn btn-danger"><a style="color: inherit;" href="{{"ph/$value->id/delete"}}">Eliminar</a></button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div class="container">
          <button type="button" style="margin-top: 5%;" class="btn btn-success"><a style="color: inherit;" href="/ph/create">Nuevo</a></button>
        </div>
      </div>
    </div>
  </div>



@endsection
