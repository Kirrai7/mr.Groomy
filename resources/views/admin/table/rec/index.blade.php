@extends('layouts.admin_layout')

@section('title','')
<link rel="icon" href="/public/img/favicon.ico" type="image/x-icon">

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Все записи</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i>{{session('success') }}</h4>
            </div>
            @endif
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body p-0">
                <table class="table projects">
                    <thead>
                     <tr> 
                     <th>№</th>
                            <th>Имя</th>
                            <th>Вид</th>
                            <th>Вес</th>
                            <th>Дата</th>
                            <th>Услуги</th>
                            <th>Номер</th>
                          <th style="width: 15%"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rec as $new_rec)
                     <tr>  <td>{{$new_rec->id}}</td>
                            <td>{{$new_rec->name}}</td>
                            <td>{{$new_rec->breed}}</td>
                            <td>{{$new_rec->weight}}</td>
                            <td>{{$new_rec->date}}</td>
                            <td>{{$new_rec->services}}</td>
                            <td>{{$new_rec->number}}</td>
                          <td class="project-actions text-right">
                             
                             <form action="{{route('rec.destroy',$new_rec['id'])}}" method="POST"    style="display: inline-block">
                             @csrf
                             @method('DELETE')
                                   <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                        <i class="fas fa-trash"></i>
                                            Удалить
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection