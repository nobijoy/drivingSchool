<div class="row">

    <div class="form-group col-md-6 ">
        <label for="title">Title <span class="text-danger">*</span></label>
        <input type="text" id="title" class="form-control" placeholder="Ex: Driving Basics" name="title"
               @if($url == 'course.edit') value="{{$data->title}}" @else value="{{old('title')}}" @endif required>
    </div>


    <div class="form-group col-md-6 ">
        <label for="category">Select Category <span class="text-danger">*</span></label>
        <select name="category" id="category" class="form-control select2" required>
            <option value="">Select</option>
            @foreach ($categories as $type)
                <option value="{{$type->id}}" @if(($url == 'course.edit') && $data->category == $type->id) selected @endif>{{$type->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-md-6 ">
        <label for="duration">Course Duration (Days) <span class="text-danger">*</span></label>
        <input type="text" id="duration" class="form-control phone" placeholder="Ex: 30" name="duration"
               @if($url == 'course.edit') value="{{$data->duration}}" @else value="{{old('duration')}}" @endif required>
    </div>

    <div class="form-group col-md-6 ">
        <label for="fee">Course Fee <span class="text-danger">*</span></label>
        <input type="number" id="fee" class="form-control phone" placeholder="Ex: 100" name="fee"
               @if($url == 'course.edit') value="{{$data->fee}}" @else value="{{old('fee')}}" @endif required>
    </div>

    <div class="form-group col-md-6 ">
        <label for="min_deposit">Minimum Deposit Amount <span class="text-danger">*</span></label>
        <input type="number" id="min_deposit" class="form-control phone" placeholder="Ex: 100" name="min_deposit"
               @if($url == 'course.edit') value="{{$data->min_deposit}}" @else value="{{old('min_deposit')}}" @endif required>
    </div>

    <div class="form-group col-md-6 ">
        <label for="transmission_type">Transmission Type <span class="text-danger">*</span></label>
        <select name="transmission_type" id="transmission_type" class="form-control select2" required>
            <option value="auto" @if(($url == 'course.edit') && $data->transmission_type == 'auto') selected @endif>Auto</option>
            <option value="manual" @if(($url == 'course.edit') && $data->transmission_type == 'manual') selected @endif>Manual</option>
        </select>
    </div>

    <div class="form-group col-md-6 ">
        <label for="is_featured">Featured <span class="text-danger">*</span></label>
        <select name="is_featured" id="is_featured" class="form-control select2" required>
            <option value="0" @if(($url == 'course.edit') && $data->is_featured == '0') selected @endif>No</option>
            <option value="1" @if(($url == 'course.edit') && $data->is_featured == '1') selected @endif>Yes</option>
        </select>
    </div>

    <div class="form-group col-md-6 ">
        <label for="video">Video Link</label>
        <input type="text" id="video" class="form-control" placeholder="Video link Url" name="video"
               @if($url == 'course.edit') value="{{$data->video}}" @else value="{{old('video')}}" @endif>
    </div>

    @if($url == 'course.edit')
        <div class="form-group col-md-12 mb-2 mx-auto">
            <img src="{{ asset ('/uploads/image/'.$data->image)}}" alt="users avatar" width="120px" height="120px"
                 class="">
        </div>
    @endif

    <div class="form-group col-md-6 ">
        <label for="image">@if($url == 'course.edit') Change Image @else Image @endif</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>

    <div class="form-group col-md-6 ">
        <label for="utility">Utilities</label>
        <textarea id="utility" class="form-control" name="utility" cols="30" rows="3"
                  placeholder="Free Lunch, wifi">@if($url == 'course.edit'){{$data->utility}}@else{{old('utility')}}@endif</textarea>
    </div>

    <div class="form-group col-md-6 ">
        <label for="short_desc">Short Description</label>
        <textarea id="short_desc" class="form-control" name="short_desc" cols="30" rows="3"
                  placeholder="lorem ipsum">@if($url == 'course.edit'){{$data->short_desc}}@else{{old('short_desc')}}@endif</textarea>
    </div>

    <div class="form-group col-md-6 ">
        <label for="desc">Description</label>
        <textarea id="desc" class="form-control" name="desc" cols="30" rows="5"
                  placeholder="lorem ipsum">@if($url == 'course.edit'){{$data->desc}}@else{{old('desc')}}@endif</textarea>
    </div>


</div>
