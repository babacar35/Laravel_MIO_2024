<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $licence?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="section" class="form-label">{{ __('Section') }}</label>
            <input type="text" name="Section" class="form-control @error('Section') is-invalid @enderror" value="{{ old('Section', $licence?->Section) }}" id="section" placeholder="Section">
            {!! $errors->first('Section', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ufr" class="form-label">{{ __('Ufr') }}</label>
            <input type="text" name="ufr" class="form-control @error('ufr') is-invalid @enderror" value="{{ old('ufr', $licence?->ufr) }}" id="ufr" placeholder="Ufr">
            {!! $errors->first('ufr', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>