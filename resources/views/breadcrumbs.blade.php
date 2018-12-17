@if (count($breadcrumbs))

    <ul class="breadcrumb">

        @foreach ($breadcrumbs as $breadcrumb)

            @if ($loop->first)
                <li><a href="/"><i class="fa fa-home"></i></a></li>
            @else
                <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @endif

        @endforeach
    </ul>

@endif
