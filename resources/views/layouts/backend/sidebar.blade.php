<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li @if($url == 'dashboard') class="active" @else class="nav-item" @endif>
                <a  href="{{route('dashboard')}}">
                    <i class="feather icon-home"></i><span class="menu-title">Home</span>
                </a>
            </li>

            <li @if($url == 'setting') class="active" @else class="nav-item" @endif>
                <a  href="{{route('setting')}}">
                    <i class="feather icon-settings"></i><span class="menu-title">General Setting</span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="">
                    <i class="feather icon-list"></i><span class="menu-title">Manage Course</span>
                </a>
                <ul class="menu-content">

{{--                    <li @if($url == 'category.index') class="active"  @endif>--}}
{{--                        <a href="{{route('category.index')}}">Course Category</a>--}}
{{--                    </li>--}}
                    <li @if($url == 'course.index') class="active"  @endif>
                        <a href="{{route('course.index')}}">Courses</a>
                    </li>


                </ul>
            </li>

        </ul>
    </div>
</div>
