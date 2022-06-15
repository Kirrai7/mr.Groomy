@extends('layouts.admin_layout')

@section('title','Мастера')
<link rel="icon" href="/public/img/favicon.ico" type="image/x-icon">
<style>
    @media screen and (max-width: 880px) {
        img{
            width:20px;
        }
    }
    .btn{
        padding:15px;
    }
</style>

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Все мастера</h1>
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
                     <th>Имя</th>
                     <th>Время работы</th>
                     <th>Фото</th>
                          <th style="width: 30%"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($master as $mas)
                     <tr>  
                     <td>{{$mas['id']}}</td>
                     <td>{{$mas['name']}}</td>
                     <td>{{$mas['time_work']}}</td>  
                     <td><img src="/{{$mas['photo']}}" alt="картинка" srcset"" style="width:150px;"></td>
                            
                          <td class="project-actions text-right">
                             <a class="btn btn-info btn-sm" href="{{route('masters.edit',$mas['id'])}}" >
                                 <i class="fas fa-pencil-alt" style="padding:7px">
                                 </i>
                                
                              </a>
                             <form action="{{route('masters.destroy',$mas['id'])}}" method="POST"    style="display: inline-block">
                             @csrf
                             @method('DELETE')
                                   <button type="submit" class="btn btn-danger btn-sm delete-btn" >
                                        <i class="fas fa-trash" style="padding:8px"></i>
                                            
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
            <a class="btn btn-info btn-sm" href="{{route('masters.create')}}">
                                 <i class="fa fa-plus">
                                 </i>
                                Добавить
                              </a>
            <!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection