@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem - CREATE</div>


                   @if ($errors->any())
                  <div class="alert alert-danger">
                   <ul>
                  @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
              </ul>
             </div>
             @endif


                <form action="{{url('postagem')}}" method="post">
                        @csrf

                        <label>Título:</label>
                        <input type="text" name="titulo" class="form-control">

                        <label>Descrição:</label>
                        <textarea  name="descricao" rows="5" cols="33">

                            </textarea>

                        <button type="submit" class="btn btn-primary">ENVIAR</button>
                    </form>



            </div>
        </div>
    </div>
</div>
@endsection
