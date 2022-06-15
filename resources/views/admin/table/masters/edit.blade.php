@extends('layouts.admin_layout')
@section('title','')
<link rel="icon" href="/public/img/favicon.ico" type="image/x-icon">
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Редактировать: №{{$master['id']}}</h1>
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

                    <form action="{{route('masters.update',$master['id'])}}" method="POST" enctype="multipart/form-data">


                        @method('PUT')
                        @csrf
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">id</label>
                                    <input type="text" name="id" class="form-control" id="exampleInputCategory" value="{{$master['id']}}">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Имя</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputCategory" value="{{$master['name']}}">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Время работы</label>
                                    <input type="text" name="time_work" class="form-control" id="exampleInputCategory" value="{{$master['time_work']}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="img">Измените изображение</label>
                                <img src="/{{$master['photo']}}" alt="картинка" srcset"" style="width:30%;">
                                <input type="file" name="imgRed" class="form-control mt-2">
                                <input type="hidden" name="imgHidden" value="{{$master['photo']}}">
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Обновить</button>
                            </div>
                    </form>
                </div>
            </div>
        </div> <!-- .container-fluid -->
</section>
<!-- .content-Main FORM -->

@endsection
