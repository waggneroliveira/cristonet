<div class="col-12 col-lg-6">
    <div class="row">
        <div class="mb-3 col-12 col-lg-6 d-flex align-items-start flex-column">
            <label for="category-select" class="form-label">Categoria(s) <span class="text-danger">*</span></label>
            @php
                $currentCategory = isset($plan) ? $plan->plan_category : null;
            @endphp
        
            <select name="plan_category" class="form-select" id="category-select" required>
                <option value="" disabled selected>Selecione o Cliente</option>
                @foreach ($planCategory as $categoryValue => $categoryLabel)
                    <option value="{{ $categoryValue }}" {{ $categoryValue == $currentCategory ? 'selected' : '' }}>
                        {{ $categoryLabel }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <div class="mb-3 col-12">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" class="form-control" id="title{{isset($plan->id)?$plan->id:''}}" value="{{isset($plan)?$plan->title:''}}" placeholder="Digite seu nome">
        </div>
    </div>
    
    <div class="mb-3 col-12">
        <label for="title" class="form-label">Título</label>
        <input type="text" name="title" class="form-control" id="title{{isset($plan->id)?$plan->id:''}}" value="{{isset($plan)?$plan->title:''}}" placeholder="Digite seu nome">
    </div>
    
    <div class="mb-3 col-12 d-flex align-items-start flex-column">
        <label for="textarea-edit" class="form-label">Texto</label>
        <textarea name="text" class="form-control col-12" id="textarea-edit" rows="5">
            {!!isset($plan)?$plan->text:''!!}
        </textarea>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input name="active" {{ isset($plan->active) && $plan->active == 1 ? 'checked' : '' }} type="checkbox" class="form-check-input" id="invalidCheck{{isset($plan->id)?$plan->id:''}}" />
            <label class="form-check-label" for="invalidCheck">{{__('dashboard.active')}}?</label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
        </div>
    </div>
</div>

