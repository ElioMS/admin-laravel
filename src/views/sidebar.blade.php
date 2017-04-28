@php
    $value = config('sidebar.menu');
    $url = Route::currentRouteName();
    $prefix = explode('.' , $url);
@endphp

<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <ul class="menu accordion-menu">
        @foreach ($value as $element)
            @if ($element['type'] == 'simple')
                @php
                    $entity = explode('.' , $element['url']);
                @endphp
                <li class="@if ($prefix[0] == $entity[0]) active @endif"><a href="{{ route($element['url']) }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-{{ $element['ico'] }}"></span><p> {{ $element['text'] }} </p></a></li>
            @else
                <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-{{ $element['ico'] }}"></span><p> {{ $element['text'] }} </p><span class="arrow"></span></a>
                    <ul class="sub-menu">
                    @foreach ($element['childs'] as $elem)
                        <li><a href="{{ route($elem['url']) }}">{{ $elem['text'] }}</a></li>
                    @endforeach 
                    </ul>
                </li>
            @endif
        @endforeach
        </ul>
    </div><!-- Page Sidebar Inner -->
</div>