@extends('admin.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категории</h1>
                    </div><!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card-body">
                            <form action="{{ route('category.update', $category) }}" method="post">
                                @method('PUT')
                                @csrf
                                @include('admin.category._form')
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card-body">
                            <form id="delete-form-{{ $category->id }}" action="{{ route('category.destroy', $category) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $category->id }}').submit();">Удалить</a>

                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection
