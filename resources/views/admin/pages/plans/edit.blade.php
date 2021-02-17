@extends('adminlte::page')

@section('title', 'Cadastrar Novo Plano')

@section('content_header')
    <h1>Editar Plano - {{ $plan->name }}</h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('plans.index')}}" class="">Planos</a></li>
        <li class="breadcrumb-item active"><a href="" class="">Editar Plano - {{ $plan->name }}</a></li>

    </ol>
@stop

@section('content')
    <div class="card">
      <div class="card-body">
        <form action="{{ route('plans.update', $plan->url) }}" class="form" method="POST">
            @csrf
            @method('PUT')

            @include('admin.pages.plans._partials.form')

            <div class="form-group">
              <button type="submit" class="btn btn-success"><i class="far fa-save"></i> Editar</button>
            </div>

        </form>
    
       </div>
   

    </div>
@endsection

