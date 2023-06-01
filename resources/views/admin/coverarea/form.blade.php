<div class="row">

    <div class="form-group col-md-6">
        <label for="area_name">Area Name <span class="text-danger">*</span></label>
        <input type="text" id="area_name" class="form-control" placeholder="Ex: City Center" name="area_name"
               value="{{old('area_name')}}"  required>
    </div>

    <div class="form-group col-md-6">
        <label for="zip_code">Zip Code <span class="text-danger">*</span></label>
        <input type="text" id="zip_code" class="form-control" placeholder="Ex: 12345" name="zip_code"
               value="{{old('zip_code')}}" required>
    </div>

    <div class="form-group col-md-6">
        <label for="description">Description</label>
        <textarea id="description" class="form-control" name="description" cols="30" rows="3"
                  placeholder="Enter area description..."></textarea>
    </div>

    <div class="form-group col-md-6">
        <div class="form-group col-md-6">
            <label for="is_covered">Is Covered <span class="text-danger">*</span></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="is_covered1" name="is_covered" value="1" required>
                <label class="form-check-label" for="is_covered1">Yes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="is_covered2" name="is_covered" value="0" required checked>
                <label class="form-check-label" for="is_covered2">No</label>
            </div>
        </div>
    </div>

</div>
