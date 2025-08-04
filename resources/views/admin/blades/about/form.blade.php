<div class="d-flex justify-content-between">
    <div class="row col-lg-12">
        <div class="mb-3">
            <label for="title" class="form-label">Título da sessão </label>
            <input type="text" name="title" class="form-control" id="title" value="{{isset($about)?$about->title:''}}" placeholder="Título da sessão">
        </div>      

        <div class="mb-3">
            <label for="title_button" class="form-label">Título do botão </label>
            <input type="text" name="title_button" class="form-control" id="title_button" value="{{isset($about)?$about->title_button:''}}" placeholder="Título do botão">
        </div>       
        <div class="mb-3">
            <label for="link" class="form-label">Link </label>
            <input type="text" name="link" class="form-control" id="link" value="{{isset($about)?$about->link:''}}" placeholder="Link">
        </div>       

        <div class="mb-3 col-12 d-flex align-items-start flex-column">
            <label for="{{$textareaId}}" class="form-label">Descrição</label>
            <textarea name="description" class="form-control col-12" id="{{$textareaId}}" rows="5">
                {!!isset($about)?$about->description:''!!}
            </textarea>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Ícone </label>
            <input type="file" name="path_image" data-plugins="dropify" data-default-file="{{isset($about)?$about->path_image<>''?url('storage/'.$about->path_image):'':''}}"  />
            <p class="text-muted text-center mt-2 mb-0">{{__('dashboard.text_img_size')}} <b class="text-danger">2 MB</b>.</p>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input name="active" {{ isset($about->active) && $about->active == 1 ? 'checked' : '' }} type="checkbox" class="form-check-input" id="invalidCheck{{isset($about->id)?$about->id:''}}" />
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
            { name: 'tools', items: ['Maximize'] }
        ],
        height: 260
    });
</script>
