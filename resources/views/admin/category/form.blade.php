<div class="row">

    <div class="form-group col-md-12 ">
        <label for="name">Category Name <span class="text-danger">*</span></label>
        <input type="text" id="name" class="form-control" placeholder="Ex:Bus Driving Professional" name="name"
        @if($url == 'category.edit') value="{{$data->name}}" @else value="{{old('name')}}" @endif required>
    </div>


{{--    <div class="form-group col-md-6 ">--}}
{{--        <label for="ingredient_consumption">Ingredient Consumption <span class="text-danger">*</span></label>--}}
{{--        <select id="ingredient_consumption" class="form-control select2">--}}
{{--            <option value="">Select</option>--}}
{{--            @foreach ($ingredients as $type)--}}
{{--                <option value="{{$type->id . '|' .$type->name . '|' .$type->unit->name}}" >{{$type->name}}</option>--}}
{{--            @endforeach--}}
{{--        </select>--}}
{{--    </div>--}}

{{--    <div class="form-group col-md-6 ">--}}
{{--        <label for="price">Sales Price<span class="text-danger">*</span></label>--}}
{{--        <input type="number" id="price" class="form-control phone" placeholder="Ex: 100" name="price"--}}
{{--        @if($url == 'category.edit') value="{{$data->price}}" @else value="{{old('price')}}" @endif required>--}}
{{--    </div>--}}

    @if($url == 'category.edit')
        <div class="form-group col-md-12 mb-2 mx-auto">
            <img src="{{ asset ('/uploads/image/'.$data->image)}}" alt="users avatar" width="120px" height="120px"
                 class="">
        </div>
    @endif
{{--    <div class="form-group col-md-6 mb-2 mx-auto">--}}
{{--        <label for="user_img">Select User Image (Image Size Should Be 64 x 64 <span class="danger">*</span>): </label>--}}
{{--        <input type="file" name="user_img" id="user_img" class="form-control">--}}
{{--    </div>--}}

    <div class="form-group col-md-12 ">
        <label for="image">@if($url == 'category.edit') Change Image @else Image @endif</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>


    <div class="form-group col-md-12 ">
        <label for="description">Description</label>
        <textarea id="description" class="form-control" name="desc" cols="30" rows="5"
        placeholder="">@if($url == 'category.edit'){{$data->desc}}@else{{old('description')}}@endif</textarea>
    </div>


</div>
