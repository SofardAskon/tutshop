@extends('admin.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Товар</h1>
                    </div><!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card-body">
                            <form action="{{ route('product.update', $product) }}" method="post">
                                @method('PUT')
                                @csrf
                                @include('admin.product._form')
                            </form>
                            <div class="row mt-3">

                                @foreach ($product->downloads as $downloadItem)
                                    <img src="{{ asset('storage') . '/' . $downloadItem->path }}" alt=""
                                        width="150" height="150" style="object-fit:cover;">
                                @endforeach
                            </div>
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