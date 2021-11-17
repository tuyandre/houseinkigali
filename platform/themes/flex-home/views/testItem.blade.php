{{--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">--}}

<style>

    #social-links ul li{
        display: inline !important;
        /*position: relative !important;*/
    }
    #social-links  a{
        padding: 2px !important;
        border: 1px solid #ccc !important;
        margin: 2px !important;
        font-size: 15px !important;
        background: #e3e3ea !important;
    }

    /* hovering text */

    .image {
        position: relative !important;
        width: 400px !important;
    }

    .image__img {
        display: block;
        width: 100%;
    }

    .image__overlay {
        position: absolute !important;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        color: #ffffff;
        font-family: 'Quicksand', sans-serif;
        display: flex;
        flex-direction: column;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.25s;
    }

    .image__overlay--blur {
        backdrop-filter: blur(5px);
    }

    .image__overlay--primary {
        background: #009578;
    }

    .image__overlay > * {
        transform: translateY(20px) !important;
        transition: transform 0.25s;
    }

    .image__overlay:hover {
        opacity: 1 !important;
    }

    .image__overlay:hover > * {
        transform: translateY(0) !important;
    }

    .image__title {
        font-size: 2em;
        font-weight: bold;
    }

    /*#social-links ul {*/
    /*    list-style-type: none;*/
    /*    color: #075E54 !important;*/
    /*    padding: 0;*/
    /*    margin: 0;*/
    /*    background-color: whitesmoke;*/
    /*}*/
    /*#social-links ul li a{*/
    /*    color: #075E54 !important;*/
    /*    border-color: white;*/
    /*    */
    /*}*/
    .image__description {
        font-size: 0.76em;
        margin-top: 0.5em;
    }

</style>

<div class="item" data-lat="{{ $property->latitude }}" data-long="{{ $property->longitude }}">

    <div class="image">
        <div class="blii">


            <div class="img">

                <img class="thumb"
                     data-src="{{ RvMedia::getImageUrl($property->image, 'small', false, RvMedia::getDefaultImage()) }}"
                     src="{{ RvMedia::getImageUrl($property->image, 'small', false, RvMedia::getDefaultImage()) }}"
                     alt="{{ $property->name }}">
            </div>





            <a href="{{ $property->url }}" class="linkdetail"></a>


            {{--            <div class="media-count-wrapper">--}}
            {{--                <div class="media-count">--}}
            {{--                    <img src="{{ Theme::asset()->url('images/media-count.svg') }}" alt="media">--}}
            {{--                    <span>{{ count($property->images) }}</span>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <div class="media-count-wrapper">
                @if($property->status=="selling")
                    <span class="label-success status-label">FOR SELL </span>
                @else
                    <span class="label-info status-label">FOR RENT</span>
                @endif
                {{--                {{ $property->status->toHtml() }}--}}
                {{--                {{$property->status}}--}}
            </div>


            {{--            <div class="status">{!! $property->status->toHtml() !!}</div>--}}
            <ul class="item-price-wrap hide-on-list">
                <li class="h-type"><span>{{ $property->category->name }}</span></li>
                {{--                <li class="item-price">{{ format_price($property->price, $property->currency) }}</li>--}}
            </ul>
        </div>

        <div class="image__overlay image__overlay">
            <div class="image__title">{{ $property->category->name }}</div>
            <p class="image__description">
                {{ $property->name }}<br> It is featured with {{$property->number_bedroom}} bedroom,
                {{ $property->number_bathroom }} bathroom,<br>{{ $property->description }}
            </p>
        </div>
    </div>


    <div class="description">
        {{-- <a href="#" class="text-orange heart add-to-wishlist" data-id="{{ $property->id }}"
            title="{{ __('I care about this property!!!') }}"><i class="far fa-heart"></i></a>--}}
        {{--        {!! Share::page(url($property->url,$property->description))->whatsapp()!!}--}}

        {{--        <p class="threemt bold500" >--}}
        <div class="row">
            <div class="col-md-10"><a href="{{ $property->url }}">
                    <h5 style="margin: 0;padding: 0"> {{ $property->name }}</h5>
                </a></div>
            <div class="col-md-2">
                <a target="_blank" href="https://wa.me/+250786389554/?text={{$property->url}}" class="social-button" id="" title="" rel="">
                    <span class="fab fa-whatsapp"></span></a>
            </div>
        </div>


        {{--        </p>--}}
        {{--        {{ Share::page(url($property->url,$property->description))->whatsapp()}}--}}
        <hr>
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
            {{--            @if($property->square)--}}
            <span  data-toggle="tooltip" data-placement="top" data-original-title="{{ __('Square') }}">
{{--                    <i><img src="{{ Theme::asset()->url('images/area.svg') }}" alt="icon"></i> --}}
                    <i class="vti item-price">{{ format_price($property->price, $property->currency) }}</i> </span>
            {{--        @endif--}}

        </p>
    </div>
</div>
