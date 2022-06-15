@extends('layouts.admin_layout')

@section('title','')
<link rel="icon" href="/public/img/favicon.ico" type="image/x-icon">
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Все услуги для собак</h1>
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
                    <thead >
                     <tr> 
                     <th>№</th>
                     <th>Название</th>
                            <th>Цена до 10кг</th>
                            <th>Цена 10-30кг</th>
                            <th>Цена от 30кг</th>
                          <th style="width: 30%"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($servicesDog as $s_dog)
                     <tr>  <td>{{$s_dog->id}}</td>
                            <td>{{$s_dog->title}}</td>
                            <td>{{$s_dog->price10}} руб</td>
                            <td>{{$s_dog->price10_30}} руб</td>
                            <td>{{$s_dog->price30}} руб</td>
                            
                             
                          <td class="project-actions text-right">
                             <a class="btn btn-info btn-sm" href="{{route('servicesDog.edit',$s_dog['id'])}}">
                                 <i class="fas fa-pencil-alt" style="padding:8px">
                                 </i>
                                
                              </a>
                             <form action="{{route('servicesDog.destroy',$s_dog['id'])}}" method="POST"    style="display: inline-block">
                             @csrf
                             @method('DELETE')
                                   <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                        <i class="fas fa-trash" style="padding:8px"></i>
                                            
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
            <a class="btn btn-info btn-sm" href="{{route('servicesDog.create')}}">
                                 <i class="fa fa-plus">
                                 </i>
                                Добавить
                              </a>
            <!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection