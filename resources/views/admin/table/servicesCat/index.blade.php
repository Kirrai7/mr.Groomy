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
                <table class="table  projects">
                    <thead>
                     <tr> 
                     <th>№</th>
                            <th>Название</th>
                            <th>Цена для короткой шерсти</th>
                            <th>Цена для длинной шерсти</th>
                          <th style="width: 20%"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services_cat as $s_cat)
                     <tr>  <td>{{$s_cat->id}}</td>
                            <td>{{$s_cat->title}}</td>
                            <td>{{$s_cat->price_short}}</td>
                            <td>{{$s_cat->price_long}}</td>
                          <td class="project-actions text-right">
                             <a class="btn btn-info btn-sm" href="{{route('servicesCat.edit',$s_cat['id'])}}">
                                 <i class="fas fa-pencil-alt" style="padding:8px">
                                 </i>
                               
                              </a>
                             <form action="{{route('servicesCat.destroy',$s_cat['id'])}}" method="POST"    style="display: inline-block">
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
            <a class="btn btn-info btn-sm" href="{{route('servicesCat.create')}}">
                                 <i class="fa fa-plus">
                                 </i>
                                Добавить
                              </a>
            <!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection