<div class="card card-primary card-tabs">
    <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home"
                    role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Основное</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile"
                    role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Характеристики</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                    href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages"
                    aria-selected="false">Картинки</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                aria-labelledby="custom-tabs-one-home-tab">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Названия (ru)</label>
                            <input type="text" class="form-control form-control-border" name="name_ru"
                                value="{{ $product ? $product->getTranslation('name', 'ru') : '' }}"
                                placeholder="Названия">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Названия (uz)</label>
                            <input type="text" class="form-control form-control-border" name="name_uz"
                                value="{{ $product ? $product->getTranslation('name', 'uz') : '' }}"
                                placeholder="Названия">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Описание (ru)</label>
                    <textarea name="description_ru" class="summernote">
                        {{ $product ? $product->getTranslation('description', 'ru') : '' }}
                      </textarea>
                </div>
                <div class="form-group">
                    <label>Описание (uz)</label>
                    <textarea name="description_uz" class="summernote">
                        {{ $product ? $product->getTranslation('description', 'uz') : '' }}
                      </textarea>
                </div>
                <div class="form-group">
                    <label>Цена</label>
                    <input type="text" class="form-control form-control-border" name="price"
                        value="{{ $product ? $product->price : '' }}" placeholder="Цена">
                </div>
                <div class="form-group">
                    <label>Старая цена</label>
                    <input type="text" class="form-control form-control-border" name="old_price"
                        value="{{ $product ? $product->old_price : '' }}" placeholder="Старая цена">
                </div>
                <div class="form-group">
                    <label>Цвета</label>
                    <div class="select2-purple">
                        <select class="select2" name="colors[]" multiple="multiple" data-placeholder="Выберите цвет"
                            data-dropdown-css-class="select2-purple" style="width: 100%;">
                            @include('admin.product._colors')
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Размеры</label>
                    <div class="select2-purple">
                        <select class="select2" name="sizes[]" multiple="multiple" data-placeholder="Выберите размер"
                            data-dropdown-css-class="select2-purple" style="width: 100%;">
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
            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                aria-labelledby="custom-tabs-one-profile-tab">
                {{-- <characteristic-component-product :files={{ $product->downloads ?? '[]' }}>
                </characteristic-component-product> --}}
                <characteristic-component-product :data='@json($product->getTranslations('characteristics'))'>
                </characteristic-component-product>
                {{-- <characteristic-component-product :data='@json({{ $product->getTranslations('characteristics') }})'>
                </characteristic-component-product> --}}
                {{-- <characteristic-component-product data='true'>
                    asf
                </characteristic-component-product> --}}

            </div>
            <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                aria-labelledby="custom-tabs-one-messages-tab">
                <upload-file-component :files={{ $product->downloads ?? '[]' }}></upload-file-component>
            </div>
        </div>
    </div>
    <!-- /.card -->
</div>




<button type="submit" class="btn btn-primary">Сохранить</button>
