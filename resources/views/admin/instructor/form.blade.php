<div class="row">

    <div class="form-group col-md-6">
        <label for="name">Name <span class="text-danger">*</span></label>
        <input type="text" id="name" class="form-control" placeholder="Ex: John Doe" name="name"
               @if($url == 'instructor.edit') value="{{$data->name}}" @else value="{{old('name')}}" @endif required>
    </div>

    <div class="form-group col-md-6">
        <label for="email">Email <span class="text-danger">*</span></label>
        <input type="email" id="email" class="form-control" placeholder="Ex: john@example.com" name="email"
               @if($url == 'instructor.edit') value="{{$data->email}}" @else value="{{old('email')}}" @endif required>
    </div>

    <div class="form-group col-md-6">
        <label for="phone">Phone <span class="text-danger">*</span></label>
        <input type="text" id="phone" class="form-control phone" placeholder="Ex: 1234567890" name="phone"
               @if($url == 'instructor.edit') value="{{$data->phone}}" @else value="{{old('phone')}}" @endif required>
    </div>

    <div class="form-group col-md-6">
        <label for="specialization">Specialization <span class="text-danger">*</span></label>
        <input type="text" id="specialization" class="form-control" placeholder="Ex: Driving Techniques" name="specialization"
               @if($url == 'instructor.edit') value="{{$data->specialization}}" @else value="{{old('specialization')}}" @endif required>
    </div>

    <div class="form-group col-md-6">
        <label for="experience">Experience (Years) <span class="text-danger">*</span></label>
        <input type="text" id="experience" class="form-control" placeholder="Ex: 5" name="experience"
               @if($url == 'instructor.edit') value="{{$data->experience}}" @else value="{{old('experience')}}" @endif required>
    </div>

    <div class="form-group col-md-6">
        <label for="certifications">Certifications</label>
        <textarea id="certifications" class="form-control" name="certifications" cols="30" rows="3"
                  placeholder="Certification 1, Certification 2, ...">@if($url == 'instructor.edit'){{$data->certifications}}@else{{old('certifications')}}@endif</textarea>
    </div>

    <div class="form-group col-md-6">
        <label for="bio">Bio</label>
        <textarea id="bio" class="form-control" name="bio" cols="30" rows="5"
                  placeholder="Enter instructor bio...">@if($url == 'instructor.edit'){{$data->bio}}@else{{old('bio')}}@endif</textarea>
    </div>

</div>
