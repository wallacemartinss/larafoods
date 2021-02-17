@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')

    <div class="d-flex">
        <div class="mr-auto p-2">
            <h1 class="display-4 titulo"><b>Planos</b></h1>
        </div>
        <div class="p-2">
            <a href="{{route('plans.create')}}"  class="btn btn-dark"><i class="fas fa-plus"></i> Adcionar Planos</a>
        </div>
    </div>
    <div class="mr-auto p-2">  
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{route('plans.index')}}" aria-current="page">Planos</a></li>
        </ol>
    </nav>
    </div>
@stop

@section('content')
    <div class="card">
      <div class="card-header">
         <form action="{{ route('plans.search') }}" method="POST" class="form form-inline">
             @csrf
             <input type="text" name="filter" placeholder="buscar" class="form-control" value="{{ $filters['filter'] ?? ''}}">
             <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
      </form>
      </div>

      <div class="card-body">      
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                  <thead>
                      <tr>
                          <th class="text-center align-middle">Nome</th>
                          <th class="text-center align-middle">Valor</th>
                          <th class="text-center align-middle">Ações</th>
                      </tr>
                  </thead>
                  <tbody>
                  @foreach ($plans as $plan)

                   <tr>
                       <td class="text-center align-middle"> {{ $plan->name }} </td>
                       <td class="text-center align-middle"> R$ {{ number_format($plan->price, 2, ',','.') }} </td>
                       <td class="text-center align-middle">
                         <a href="{{ route('details.plan.index', $plan->url) }}" class="btn btn-primary"><i class="fas fa-info"></i> Detalhes</a>
                         <a href="{{ route('plans.edit', $plan->url) }}" class="btn btn-info"><i class="fas fa-pen"></i> Editar</a>
                         <a href="{{ route('plans.show', $plan->url) }}" class="btn btn-warning"><i class="far fa-eye"></i> Ver</a>
                         <form action="{{ ROUTE ('plans.destroy', $plan->url)}}" method="post">
                              @csrf
                              @method('DELETE')
                                  <button type="submit" class="btn btn-danger"> <i class="far fa-trash-alt"></i>Apagar</button>
                          </form>
                      </td>
                   </tr>
            
            @endforeach
        </tbody>

       </table>
    
       </div>
      <div class="card-footer">
            @if (@isset($filters))
            {!! $plans->appends($filters)->links()!!}
                                     
            @else
                 {!! $plans-> links()!!}
            @endif
      <div>


    </div>
@stop

