@php
    $value = config('sidebar.menu');
    $app = 0;
    $url = Route::currentRouteName();
    $prefix = explode('.' , $url);
@endphp

<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <ul class="menu accordion-menu">
        @foreach ($value as $element)
            @if (isset($element['type']))
                @if ($element['type'] == 'simple')
                    @php
                        $entity = explode('.' , $element['url']);
                    @endphp
                    <li class="@if ($prefix[0] == $entity[0]) active @endif"><a href="{{ route($element['url']) }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-{{ $element['ico'] }}"></span><p> {{ $element['text'] }} </p></a></li>
                @else
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-{{ $element['ico'] }}"></span><p> {{ $element['text'] }} </p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                        @foreach ($element['childs'] as $elem)
                            @php
                                $entity = explode('.' , $elem['url']);
                            @endphp
                            <li class="child @if ($prefix[0] == $entity[0]) active @endif"><a href="{{ route($elem['url']) }}">{{ $elem['text'] }}</a></li>
                        @endforeach 
                        </ul>
                    </li>
                @endif
            @endif
        @endforeach
        </ul>
    </div><!-- Page Sidebar Inner -->
</div>

<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('li.active').closest('.droplink').addClass('open')
    });
</script>