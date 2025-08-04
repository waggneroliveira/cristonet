<div class="mb-3">
    <label for="title" class="form-label">Título</label>
    <input type="text" name="title" class="form-control" id="title{{isset($planCategory->id)?$planCategory->id:''}}" value="{{isset($planCategory)?$planCategory->title:''}}" placeholder="Digite seu nome">
</div>
<div class="mb-3">
    <label for="title" class="form-label">Ícone </label>
    <input type="file" name="path_image" data-plugins="dropify" data-default-file="{{isset($planCategory)?$planCategory->path_image<>''?url('storage/'.$planCategory->path_image):'':''}}"  />
    <p class="text-muted text-center mt-2 mb-0">{{__('dashboard.text_img_size')}} <b class="text-danger">2 MB</b>.</p>
</div>
<div class="mb-3">
    <div class="form-check">
        <input name="active" {{ isset($planCategory->active) && $planCategory->active == 1 ? 'checked' : '' }} type="checkbox" class="form-check-input" id="invalidCheck{{isset($planCategory->id)?$planCategory->id:''}}" />
        <label class="form-check-label" for="invalidCheck">{{__('dashboard.active')}}?</label>
        <div class="invalid-feedback">
            You must agree before submitting.
        </div>
    </div>
</div>

