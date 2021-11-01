{{--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">--}}

<style>

    .Share-with-me #social-links ul li{
        display: inline;
         position: relative !important;
    }
    .Share-with-me #social-links ul li a{
        padding: 5px;
        border: 1px solid #ccc;
        margin: 10px;
        font-size: 15px;
        background: #e3e3ea;
    }

</style>


<div class="item" data-lat="{{ $property->latitude }}" data-long="{{ $property->longitude }}">
    <div class="blii">
        <div class="img">
            <img class="thumb"
                data-src="{{ RvMedia::getImageUrl($property->image, 'small', false, RvMedia::getDefaultImage()) }}"
                src="{{ RvMedia::getImageUrl($property->image, 'small', false, RvMedia::getDefaultImage()) }}"
                alt="{{ $property->name }}">
        </div>
        <a href="{{ $property->url }}" class="linkdetail"></a>
        <div class="media-count-wrapper">
            <div class="media-count">
                <img src="{{ Theme::asset()->url('images/media-count.svg') }}" alt="media">
                <span>{{ count($property->images) }}</span>
            </div>
        </div>
        <div class="status">{!! $property->status->toHtml() !!}</div>
        <ul class="item-price-wrap hide-on-list">
            <li class="h-type"><span>{{ $property->category->name }}</span></li>
            <li class="item-price">{{ format_price($property->price, $property->currency) }}</li>
        </ul>
    </div>

    <div class="description">
        <a href="#" class="text-orange heart add-to-wishlist" data-id="{{ $property->id }}"
            title="{{ __('I care about this property!!!') }}"><i class="far fa-heart"></i></a>
        <a href="{{ $property->url }}">
            <h5>{{ $property->name }}</h5>
            <p class="dia_chi"><i class="fas fa-map-marker-alt"></i> {{ $property->city->name }},
                {{ $property->city->state->name }}</p>
        </a>
        <p class="threemt bold500">
            @if ($property->number_bedroom)
            <span data-toggle="tooltip" data-placement="top" data-original-title="{{ __('Number of rooms') }}">
                <i><img src="{{ Theme::asset()->url('images/bed.svg') }}" alt="icon"></i> <i
                    class="vti">{{ $property->number_bedroom }}</i> </span>
            @endif
            @if ($property->number_bathroom)
            <span data-toggle="tooltip" data-placement="top"
                data-original-title="{{ __('Number of rest rooms') }}"> <i><img
                        src="{{ Theme::asset()->url('images/bath.svg') }}" alt="icon"></i> <i
                    class="vti">{{ $property->number_bathroom }}</i></span>
            @endif
            @if ($property->square)
            <span data-toggle="tooltip" data-placement="top" data-original-title="{{ __('Square') }}"> <i><img
                        src="{{ Theme::asset()->url('images/area.svg') }}" alt="icon"></i> <i
                    class="vti">{{ $property->square_text }}</i> </span>
            @endif
            <hr>
        <span class=" Share-with-me">
{!! Share::page(url($property->url,$property->description))->whatsapp()->facebook()->twitter()->telegram() !!}
        </span>
        </p>


    </div>
</div>
