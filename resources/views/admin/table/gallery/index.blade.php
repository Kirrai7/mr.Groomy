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
                            <th>Фото</th>
                          <th style="width: 30%"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gallery as $gal)
                     <tr>  
                     <td>{{$gal['id']}}</td>  
                     <td><img src="/{{$gal['photo']}}" alt="картинка" srcset"" style="width:30%;"></td>
                            
                          <td class="project-actions text-right">
                             <a class="btn btn-info btn-sm" href="{{route('gallery.edit',$gal['id'])}}">
                                 <i class="fas fa-pencil-alt">
                                 </i>
                                Редактировать
                              </a>
                             <form action="{{route('gallery.destroy',$gal['id'])}}" method="POST"    style="display: inline-block">
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
            <a class="btn btn-info btn-sm" href="{{route('gallery.create')}}">
                                 <i class="fa fa-plus">
                                 </i>
                                Добавить
                              </a>
            <!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection