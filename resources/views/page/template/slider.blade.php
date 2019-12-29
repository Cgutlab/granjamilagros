<div class="slider">
    <ul class="slides">
        @foreach($sliders as $slider)
            <li>
                <img src="{{ asset('images/sliders/'.$slider->image) }}">
                @if($slider->title)
	                <div class="caption center-align">
	                    <div class="fs52 no-margin" style="line-height: 1; text-shadow: 2px 2px 2px black">{!! $slider->title !!}</div>
	                    <div class="fs52 semibold no-margin" style="line-height: 1; text-shadow: 2px 2px 2px black; letter-spacing: 2.5px;">{!! $slider->subtitle !!}</div>
	                </div>
                @endif
            </li>
        @endforeach
    </ul>
</div>