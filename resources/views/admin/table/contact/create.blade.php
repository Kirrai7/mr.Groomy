@extends('layouts.admin_layout')
@section('title','Добавить запись')
<link rel="icon" href="/public/img/favicon.ico" type="image/x-icon">
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавить запись</h1>
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
                <form action="{{route('contact.store')}}" method="POST">
                    @method('POST')
                   @csrf
                
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">id</label>
                    <input type="text" name="id" class="form-control" id="exampleInputCategory" >
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Номер</label>
                    <input type="text" name="number" class="form-control" id="exampleInputCategory" >
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Почта</label>
                    <input type="text" name="email" class="form-control" id="exampleInputCategory" >
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Адрес</label>
                    <input type="text" name="adres" class="form-control" id="exampleInputCategory" >
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Время работы</label>
                    <input type="text" name="time_work" class="form-control" id="exampleInputCategory" >
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Добавить</button>
                </div>
              </form>
                </div>
            </div>
       </div>  <!-- .container-fluid -->
    </section>
    <!-- .content-Main FORM -->

@endsection