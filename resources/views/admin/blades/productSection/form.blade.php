<div class="col-12 col-lg-12">
    <div class="row">
        <div class="mb-3 col-12 col-lg-6">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" class="form-control" id="title{{isset($productSection->id)?$productSection->id:''}}" value="{{isset($productSection)?$productSection->title:''}}" placeholder="Digite o título">
        </div>

        <div class="mb-3 col-12 col-lg-6">
            <label for="subtitle" class="form-label">Subtítulo</label>
            <input type="text" name="subtitle" class="form-control" id="subtitle{{isset($productSection->id)?$productSection->id:''}}" value="{{isset($productSection)?$productSection->subtitle:''}}" placeholder="Digite o subtitulo">
        </div>
    </div>
    
    <div class="mb-3 col-12 d-flex align-items-start flex-column">
        <label for="{{ $textareaId }}" class="form-label">Texto</label>
        <textarea name="text" class="form-control col-12" id="{{ $textareaId }}" rows="5">
            {!!isset($productSection)?$productSection->text:''!!}
        </textarea>
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

