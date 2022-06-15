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
                <form action="{{route('servicesCat.store')}}" method="POST">
                    @method('POST')
                   @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Название</label>
                    <input type="text" name="title" class="form-control" id="exampleInputCategory" placeholder="Введите название услуги">
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Цена для короткошёрстных</label>
                    <input type="text" name="price_short" class="form-control" id="exampleInputCategory" placeholder="Введите цену для короткошёрстных">
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Цена для длинношёрстных</label>
                    <input type="text" name="price_long" class="form-control" id="exampleInputCategory" placeholder="Введите цену для длинношёрстных">
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