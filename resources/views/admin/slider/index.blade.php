@extends('admin.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Слайды</h1>
                    </div><!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                            <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">id
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Названия</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Тип</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Изображения
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                        Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                    <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">{{ $slider->id }}</td>
                                        <td>{{ $slider->getTranslation('title', 'ru') }}</td>
                                        <td>{{ $slider->type == 'slider' ? 'Слайд' : 'Банер' }}</td>
                                        @foreach ($slider->downloads as $index => $downloadItem)
                                            @if ($index == 0)
                                                <td style="background: url({{ asset('storage') . '/' . $downloadItem->path }}) no-repeat; background-size: cover; height: 150px;">
                                                </td>
                                            @endif
                                        @endforeach
                                        <td> <a href="{{ route('slider.edit', $slider) }}">Редактировать</a> </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">id</th>
                                    <th rowspan="1" colspan="1">Названия</th>
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
