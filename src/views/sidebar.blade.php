@php
    $value = config('sidebar.menu');
    // $url = Route::currentRouteName();
    // $prefix = explode('.' , $url);
@endphp

<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
       {{--  <div class="sidebar-header">
            <div class="sidebar-profile">
                <a href="javascript:void(0);" id="profile-menu-link">
                    <div class="sidebar-profile-image">
                        <img src="assets/images/avatar1.png" class="img-circle img-responsive" alt="">
                    </div>
                    <div class="sidebar-profile-details">
                        <span>David Green<br><small>Art Director</small></span>
                    </div>
                </a>
            </div>
        </div> --}}
        <ul class="menu accordion-menu">
        @foreach ($value as $element)
            @if ($element['type'] == 'simple')
                <li class="active"><a href="index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-{{ $element['ico'] }}"></span><p> {{ $element['text'] }} </p></a></li>
            @else
                <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-{{ $element['ico'] }}"></span><p> {{ $element['text'] }} </p><span class="arrow"></span></a>
                    <ul class="sub-menu">
                    @foreach ($element['childs'] as $elem)
                        <li><a href="table-static.html">{{ $elem['text'] }}</a></li>
                    @endforeach 
                    </ul>
                </li>
            @endif
        @endforeach
        </ul>
    </div><!-- Page Sidebar Inner -->
</div>