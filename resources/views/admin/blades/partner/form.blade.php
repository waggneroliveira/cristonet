<div class="d-flex justify-content-between">
    <div class="row col-lg-12">     
        <div class="mb-3">
            <label for="link" class="form-label">Link </label>
            <input type="text" name="link" class="form-control" id="link" value="{{isset($partner)?$partner->link:''}}" placeholder="Link">
        </div>       

        <div class="mb-3">
            <label for="title" class="form-label">Imagem </label>
            <input type="file" name="path_image" data-plugins="dropify" data-default-file="{{isset($partner)?$partner->path_image<>''?url('storage/'.$partner->path_image):'':''}}"  />
            <p class="text-muted text-center mt-2 mb-0">{{__('dashboard.text_img_size')}} <b class="text-danger">2 MB</b>.</p>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input name="active" {{ isset($partner->active) && $partner->active == 1 ? 'checked' : '' }} type="checkbox" class="form-check-input" id="invalidCheck{{isset($partner->id)?$partner->id:''}}" />
                <label class="form-check-label" for="invalidCheck">{{__('dashboard.active')}}?</label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
    </div>
</div>
