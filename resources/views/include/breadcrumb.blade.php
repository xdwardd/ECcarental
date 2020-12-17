<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{ request()->is('user_detail') ? 'active' : '' }}"><a
                href="{{route('user_detail.index')}}">Heading</a></li>
        <li class="breadcrumb-item {{ request()->is('education') ? 'active' : '' }}"><a
                href="{{route('education.index')}}">Education</a></li>
        <li class="breadcrumb-item {{ request()->is('experience') ? 'active' : '' }}"><a
                href="{{route('experience.index')}}">Work Experience</a></li>
        <li class="breadcrumb-item {{ request()->is('skill') ? 'active' : '' }}"><a
                href="{{route('skill.index')}}">Skills</a></li>

    </ol>
</nav>