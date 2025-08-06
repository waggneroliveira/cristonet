<div class="d-flex justify-content-between">
    <div class="row col-lg-12">
        <div class="mb-3">
            <label for="title" class="form-label">Título </label>
            <input type="text" name="title" class="form-control" id="title" value="{{isset($product)?$product->title:''}}" placeholder="Título">
        </div>       

        <div class="mb-3 col-12">
            <label for="price" class="form-label">Preço</label>
            <input type="text" name="price" class="form-control price-mask" id="price{{isset($product->id)?$product->id:''}}" value="{{ isset($product) ? number_format($product->price, 2, ',', '.') : '' }}" placeholder="Preço">
        </div>

        <div class="mb-3 col-12 d-flex align-items-start flex-column">
            <label for="{{ $textareaId }}" class="form-label">Texto</label>
            <textarea name="text" class="form-control col-12" id="{{ $textareaId }}" rows="5">
                {!!isset($product)?$product->text:''!!}
            </textarea>
        </div>
        
        <div class="mb-3">
            <label for="title" class="form-label">Imagem </label>
            <input type="file" name="path_image" data-plugins="dropify" data-default-file="{{isset($product)?$product->path_image<>''?url('storage/'.$product->path_image):'':''}}"  />
            <p class="text-muted text-center mt-2 mb-0">{{__('dashboard.text_img_size')}} <b class="text-danger">2 MB</b>.</p>
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input name="active" {{ isset($product->active) && $product->active == 1 ? 'checked' : '' }} type="checkbox" class="form-check-input" id="invalidCheck{{isset($product->id)?$product->id:''}}" />
                <label class="form-check-label" for="invalidCheck">{{__('dashboard.active')}}?</label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('{{ $textareaId }}', {
        allowedContent: false,
        toolbar: [
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'] },
            { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
            { name: 'tools', items: ['Maximize'] }
        ],
        height: 260
    });
</script>