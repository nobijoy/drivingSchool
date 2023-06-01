<div class="row">

    <div class="form-group col-md-6">
        <label for="first_name">First Name <span class="text-danger">*</span></label>
        <input type="text" id="first_name" class="form-control" placeholder="Ex: John" name="first_name" value="{{old('first_name')}}"  required>
    </div>

    <div class="form-group col-md-6">
        <label for="last_name">Last Name <span class="text-danger">*</span></label>
        <input type="text" id="last_name" class="form-control" placeholder="Ex: Doe" name="last_name" value="{{old('last_name')}}"  required>
    </div>

    <div class="form-group col-md-6">
        <label for="phone">Phone Number <span class="text-danger">*</span></label>
        <input type="text" id="phone" class="form-control" placeholder="Ex: 1234567890" name="phone" value="{{old('phone')}}"  required>
    </div>

    <div class="form-group col-md-6">
        <label for="email">Email <span class="text-danger">*</span></label>
        <input type="email" id="email" class="form-control" placeholder="Ex: john@example.com" name="email" value="{{old('email')}}"  required>
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
            <option value="" selected >Select</option>
            <option value="admin" >Admin</option>
            <option value="manager">Manager</option>
            <!-- Add more roles as needed -->
        </select>
    </div>

    <div class="form-group col-md-6">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" class="form-control" name="dob" value="{{old('dob')}}" >
    </div>

    <div class="form-group col-md-6">
        <label for="address">Address</label>
        <input type="text" id="address" class="form-control" placeholder="Ex: 123 Street, City" name="address" value="{{old('address')}}" >
    </div>

    <div class="form-group col-md-6">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-control select2">
            <option value="male" selected >Male</option>
            <option value="female" selected >Female</option>
            <option value="other" selected >Other</option>
        </select>
    </div>


    <div class="form-group col-md-12 mb-2 mx-auto">
        <img src="" alt="users avatar" width="120px" height="120px" class="">
    </div>


    <div class="form-group col-md-6">
        <label for="image">Profile Image</label>
        <input type="file" id="image" class="form-control" name="image">
    </div>

    <div class="form-group col-md-6">
        <label for="description">Description</label>
        <textarea id="description" class="form-control" name="bio" cols="30" rows="5" placeholder="Enter escription..."></textarea>
    </div>

</div>
