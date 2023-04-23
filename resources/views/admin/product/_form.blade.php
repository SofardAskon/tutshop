@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card card-primary card-tabs">
    <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Основное</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Характеристики</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-filters-tab" data-toggle="pill" href="#custom-tabs-one-filters" role="tab" aria-controls="custom-tabs-one-filters" aria-selected="false">Фильтра</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Картинки</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Названия (ru)</label>
                            <input type="text" class="form-control form-control-border" name="name_ru" value="{{ $product ? $product->getTranslation('name', 'ru') : '' }}" placeholder="Названия" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Названия (uz)</label>
                            <input type="text" class="form-control form-control-border" name="name_uz" value="{{ $product ? $product->getTranslation('name', 'uz') : '' }}" placeholder="Названия" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Описание (ru)</label>
                    <textarea name="description_ru" class="summernote" required>
                        {{ $product ? $product->getTranslation('description', 'ru') : '' }}
                      </textarea>
                </div>
                <div class="form-group">
                    <label>Описание (uz)</label>
                    <textarea name="description_uz" class="summernote" required>
                        {{ $product ? $product->getTranslation('description', 'uz') : '' }}
                      </textarea>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Цена</label>
                        <input type="text" class="form-control form-control-border" name="price" value="{{ $product ? $product->price : '' }}" placeholder="Цена" required>
                    </div>
                    <div class="form-group col-6">
                        <label>Старая цена</label>
                        <input type="text" class="form-control form-control-border" name="old_price" value="{{ $product ? $product->old_price : '' }}" placeholder="Старая цена">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Ссылка на YouTube</label>
                        <input type="text" class="form-control form-control-border" name="video" value="{{ $product ? $product->video : '' }}" placeholder="https://www.youtube.com/watch?v=D7SlK16o82o">
                    </div>
                </div>
                <div class="form-group">
                    <label>Цвета</label>
                    <div class="select2-purple">
                        <select class="select2" name="colors[]" multiple="multiple" data-placeholder="Выберите цвет" data-dropdown-css-class="select2-purple" style="width: 100%;">
                            @include('admin.product._colors')
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Размеры</label>
                    <div class="select2-purple">
                        <select class="select2" name="sizes[]" multiple="multiple" data-placeholder="Выберите размер" data-dropdown-css-class="select2-purple" style="width: 100%;">
                            @include('admin.product._sizes')
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Родительская категория</label>
                    <select class="custom-select rounded-0" name="categories[]" multiple>
                        @include('admin.product._categories')
                    </select>
                </div>
            </div>
            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                @if ($product)
                    <characteristic-component-product :data='@json($product->getTranslations('characteristics'))'>
                    </characteristic-component-product>
                @else
                    <characteristic-component-product :data='[]'>
                    </characteristic-component-product>
                @endif
            </div>
            <div class="tab-pane fade" id="custom-tabs-one-filters" role="tabpanel" aria-labelledby="custom-tabs-one-filters-tab">
                @foreach ($filters as $filter)
                    <div class="form-group">
                        <label for="filter_{{ $filter->id }}">{{ $filter->name }}</label>
                        <select class="select2" name="filter_{{ $filter->id }}" id="filter_{{ $filter->id }}" data-placeholder="Выберите {{ $filter->name }}" style="width: 100%;">
                            <option value=""></option>
                            @foreach ($filter->values as $value)
                                <option value="{{ $value->id }}" {{ $product->filters->contains($filter->id) && $product->filters->find($filter->id)->pivot->filter_value_id == $value->id ? 'selected' : '' }}>{{ $value->value }}</option>
                            @endforeach
                        </select>
                    </div>
                @endforeach
            </div>
            <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                <upload-file-component :files='{{ $product->downloads ?? '[]' }}'></upload-file-component>
            </div>
        </div>
    </div>
    <!-- /.card -->
</div>




<button type="submit" class="btn btn-primary">Сохранить</button>
