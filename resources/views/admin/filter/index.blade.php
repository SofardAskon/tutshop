@extends('admin.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Фильтра</h1>
                    </div><!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                            <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">id</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Названия</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Действия</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($filters as $filter)
                                    <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">{{ $filter->id }}</td>
                                        <td>{{ $filter->name }}</td>
                                        <td> <a href="{{ route('filter.edit', $filter) }}" class="btn btn-sm btn-warning">Редактировать</a> </td>
                                        <td> <a href="{{ route('filter.values.index', $filter) }}" class="btn btn-sm btn-warning">Добавить значения</a> </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">id</th>
                                    <th rowspan="1" colspan="1">Названия</th>
                                    <th rowspan="1" colspan="1">Действия</th>
                                    <th rowspan="1" colspan="1">Действия</th>
                                </tr>
                            </tfoot>
                        </table>
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
