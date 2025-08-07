<div class="col-12 col-lg-12">
    <div class="row">
        <div class="mb-3 col-12 col-lg-6">
            <label for="title" class="form-label">Nome</label>
            <input type="text" name="title" class="form-control" id="title{{isset($depoiment->id)?$depoiment->id:''}}" value="{{isset($depoiment)?$depoiment->title:''}}" placeholder="Digite o nome">
        </div>

        <div class="mb-3 col-12 col-lg-6">
            <label for="time" class="form-label">Tempo como cliente</label>
            <input type="text" name="time" class="form-control" id="time{{isset($depoiment->id)?$depoiment->id:''}}" value="{{isset($depoiment)?$depoiment->time:''}}" placeholder="Ex: Cliente há 3 anos">
        </div>
    </div>
    
    <div class="mb-3 col-12 d-flex align-items-start flex-column">
        <label for="{{ $textareaId }}" class="form-label">Texto</label>
        <textarea name="text" class="form-control col-12" id="{{ $textareaId }}" rows="5">
            {!!isset($depoiment)?$depoiment->text:''!!}
        </textarea>
    </div>

    <div class="form-check mb-3">
        <input name="active" {{ isset($depoiment->active) && $depoiment->active == 1 ? 'checked' : '' }} type="checkbox" class="form-check-input" id="invalidCheck{{isset($depoiment->id)?$depoiment->id:''}}" />
        <label class="form-check-label" for="invalidCheck">{{__('dashboard.active')}}?</label>
        <div class="invalid-feedback">
            You must agree before submitting.
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

