<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li @if($url == 'home') class="active" @else class="nav-item" @endif>
                <a  href="{{route('home')}}">
                    <i class="feather icon-home"></i><span class="menu-title">Home</span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="">
                    <i class="feather icon-settings"></i><span class="menu-title">General Setting</span>
                </a>
                <ul class="menu-content">
                    <li @if($url == 'setting') class="active"  @endif>
                        <a href="{{route('setting')}}">Settings</a>
                    </li>
                    <li @if($url == 'emailSetup') class="active"  @endif>
                        <a href="{{route('emailSetup')}}">Mail Settings</a>
                    </li>
                </ul>
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
{{--                    <li @if($url == 'enroll.index') class="active"  @endif>--}}
{{--                        <a href="{{route('enroll.index')}}">Enrolls</a>--}}
{{--                    </li>--}}
                </ul>
            </li>

            <li class=" nav-item">
                <a href="">
                    <i class="feather icon-user"></i><span class="menu-title">Manage Instructor</span>
                </a>
                <ul class="menu-content">
                    <li @if($url == 'instructor.index') class="active"  @endif>
                        <a href="{{route('instructor.index')}}">Instructors</a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a href="">
                    <i class="feather icon-users"></i><span class="menu-title">Manage User</span>
                </a>
                <ul class="menu-content">
                    <li @if($url == 'user.index') class="active"  @endif>
                        <a href="{{route('user.index')}}">Users</a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a href="">
                    <i class="feather icon-users"></i><span class="menu-title">Manage Website</span>
                </a>
                <ul class="menu-content">
                    <li @if($url == 'coverarea.index') class="active"  @endif>
                        <a href="{{route('coverarea.index')}}">Cover Area</a>
                    </li>
                </ul>
                <ul class="menu-content">
                    <li @if($url == 'showpage.index') class="active"  @endif>
                        <a href="{{route('showpage.index')}}">FAQ Section</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
