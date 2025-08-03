<div class="d-flex justify-content-between">
    <div class="row col-lg-12">
        <div class="mb-3">
            <label for="title" class="form-label">Título </label>
            <input type="text" name="title" class="form-control" id="title" value="{{isset($topic)?$topic->title:''}}" placeholder="Título">
        </div>       
 
        <div class="mb-3 col-12">
            <label for="description" class="form-label text-white">Descrição</label>
            <input type="text" name="description" class="form-control bg-white" id="description" value="{{isset($topic)?$topic->description:''}}">
        </div>
        
        <div class="mb-3">
            <div class="form-check">
                <input name="active" {{ isset($topic->active) && $topic->active == 1 ? 'checked' : '' }} type="checkbox" class="form-check-input" id="invalidCheck{{isset($topic->id)?$topic->id:''}}" />
                <label class="form-check-label" for="invalidCheck">{{__('dashboard.active')}}?</label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Ícone </label>
            <input type="file" name="path_image" data-plugins="dropify" data-default-file="{{isset($topic)?$topic->path_image<>''?url('storage/'.$topic->path_image):'':''}}"  />
            <p class="text-muted text-center mt-2 mb-0">{{__('dashboard.text_img_size')}} <b class="text-danger">2 MB</b>.</p>
        </div>
    </div>
</div>
