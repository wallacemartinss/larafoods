@extends('adminlte::page')

@section('title', 'Cadastrar Novo Plano')

@section('content_header')
    <h1>Cadastrar Planos</h1>
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{route('plans.create')}}" class="">Cadastar Plano</a></li>
        

    </ol>
@stop

@section('content')
    <div class="card">
      <div class="card-body">
        <form action="{{ route('plans.store') }}" class="form" method="POST">
            @csrf
     
            @include('admin.pages.plans._partials.form')

            <div class="form-group">
              <button type="submit" class="btn btn-success"><i class="far fa-save"></i> Cadastrar</button>
            </div>

        </form>
    
       </div>
   

    </div>
@endsection

