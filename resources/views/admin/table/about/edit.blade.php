@extends('layouts.admin_layout')
@section('title','Добавить запись')
<link rel="icon" href="/public/img/favicon.ico" type="image/x-icon">
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактировать: №{{$about['id']}} <i>{{$about['title']}}</i></h1>
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

    <!-- Main FORM -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                     <!-- form start -->
               
                <form action="{{route('about.update',$about['id'])}}" method="POST" enctype="multipart/form-data">
               
                
                   @method('PUT')
                   @csrf
                <div class="card-body">
                  <div class="form-group">
                  
                  <input type="hidden" name="id" class="form-control" id="exampleInputCategory" value="{{$about['id']}}">
                    <label for="exampleInputEmail1">Текст</label>
                    <textarea name="text" class="form-control" id="exampleInputCategory" value="{{$about['text']}}" rows="10">{{$about['text']}}</textarea>
                  </div>
                </div>
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Обновить</button>
                </div>
              </form>
                </div>
            </div>
       </div>  <!-- .container-fluid -->
    </section>
    <!-- .content-Main FORM -->

@endsection