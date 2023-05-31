<div class="row">

    <div class="form-group col-md-6">
        <label for="first_name">First Name <span class="text-danger">*</span></label>
        <input type="text" id="first_name" class="form-control" placeholder="Ex: John" name="first_name"
               @if($url == 'user.edit') value="{{$data->first_name}}" @else value="{{old('first_name')}}" @endif required>
    </div>

    <div class="form-group col-md-6">
        <label for="last_name">Last Name <span class="text-danger">*</span></label>
        <input type="text" id="last_name" class="form-control" placeholder="Ex: Doe" name="last_name"
               @if($url == 'user.edit') value="{{$data->last_name}}" @else value="{{old('last_name')}}" @endif required>
    </div>

    <div class="form-group col-md-6">
        <label for="phone">Phone Number <span class="text-danger">*</span></label>
        <input type="text" id="phone" class="form-control" placeholder="Ex: 1234567890" name="phone"
               @if($url == 'user.edit') value="{{$data->phone}}" @else value="{{old('phone')}}" @endif required>
    </div>

    <div class="form-group col-md-6">
        <label for="email">Email <span class="text-danger">*</span></label>
        <input type="email" id="email" class="form-control" placeholder="Ex: john@example.com" name="email"
               @if($url == 'user.edit') value="{{$data->email}}" @else value="{{old('email')}}" @endif required>
    </div>

    <div class="form-group col-md-6">
        <label for="password">Password <span class="text-danger">*</span></label>
        <input type="password" id="password" class="form-control" placeholder="Enter password" name="password" required>
    </div>

    <div class="form-group col-md-6">
        <label for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
        <input type="password" id="confirm_password" class="form-control" placeholder="Confirm password" name="confirm_password" required>
    </div>

    <div class="form-group col-md-6">
        <label for="role">Role <span class="text-danger">*</span></label>
        <select name="role" id="role" class="form-control select2" required>
            <option value="admin" @if(($url == 'user.edit') && $data->role == 'admin') selected @endif>Admin</option>
            <option value="manager" @if(($url == 'user.edit') && $data->role == 'manager') selected @endif>Manager</option>
            <!-- Add more roles as needed -->
        </select>
    </div>

    <div class="form-group col-md-6">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" class="form-control" name="dob"
               @if($url == 'user.edit') value="{{$data->dob}}" @else value="{{old('dob')}}" @endif>
    </div>

    <div class="form-group col-md-6">
        <label for="address">Address</label>
        <input type="text" id="address" class="form-control" placeholder="Ex: 123 Street, City" name="address"
               @if($url == 'user.edit') value="{{$data->address}}" @else value="{{old('address')}}" @endif>
    </div>

    <div class="form-group col-md-6">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-control select2">
            <option value="male" @if(($url == 'user.edit') && $data->gender == 'male') selected @endif>Male</option>
            <option value="female" @if(($url == 'user.edit') && $data->gender == 'female') selected @endif>Female</option>
            <option value="other" @if(($url == 'user.edit') && $data->gender == 'other') selected @endif>Other</option>
        </select>
    </div>

    @if($url == 'user.edit')
    <div class="form-group col-md-12 mb-2 mx-auto">
        <img src="{{ asset ('/uploads/image/'.$data->image)}}" alt="users avatar" width="120px" height="120px"
             class="">
    </div>
    @endif

    <div class="form-group col-md-6">
        <label for="image">Profile Image</label>
        <input type="file" id="image" class="form-control" name="image">
    </div>

</div>
