@extends('adminlte::page')

@section('title', 'Detalhes do Plano')

@section('content_header')
    <h1>Detalhes do Planos <b>{{ $plan->name }}</b></h1>
    <br>
     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('plans.index')}}" class="">Planos</a></li>
        <li class="breadcrumb-item active"><a href="" class="">Detalhes do Plano</a></li>
    </ol>
@stop

@section('content')
    <div class="card">
      <div class="card-body">
        <ul>
            <li>
                <strong>ID: </strong> {{ $plan->id }}
            </li>

            <li>
                <strong>Nome: </strong> {{ $plan->name }}
            </li>

            <li>
                <strong>Preço: </strong> R$ {{ number_format($plan->price, 2, ',','.') }}
            </li>

            <li>
                <strong>Descrição: </strong> {{ $plan->description }}
            </li>
        </ul>
<form action="{{ ROUTE ('plans.destroy', $plan->url)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"> Deletar Plano </button>
</form>
      </div>
    </div>
    
@endsection