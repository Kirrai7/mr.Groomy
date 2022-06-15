@extends('layouts.admin_layout')
<link rel="icon" href="/public/img/favicon.ico" type="image/x-icon">
@section('title','')


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
                    <thead clas="thead-light" >
                     <tr> 
                     <th>id</th>
                            <th>Текст</th>
                          <th style="width: 30%"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($about as $ab)
                     <tr>  <td>{{$ab->id}}</td>
                            <td ><pre style="white-space: pre-wrap">{{$ab->text}}</pre></td>
                            
                          <td class="project-actions text-right">
                             <a class="btn btn-info btn-sm" href="{{route('about.edit',$ab['id'])}}">
                                 <i class="fas fa-pencil-alt">
                                 </i>
                                Редактировать
                              </a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
            <!-- <a class="btn btn-info btn-sm" href="">
                                 <i class="fa fa-plus">
                                 </i>
                                Добавить
                              </a> -->
            <!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection