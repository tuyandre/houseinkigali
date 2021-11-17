<style>
    .img_item {
        display: block;
        width: 100%;
    }
    .image__overlay_item > * {
        transform: translateY(20px) !important;
        transition: transform 0.25s;
    }

    .image__overlay_item:hover {
        opacity: 1 !important;
    }

    .image__overlay:hover  image__overlay_item:hover> * {
        transform: translateY(0) !important;
    }
    .img_item:hover + image__overlay_item{
        display: block;
    }
    .image__overlay_item {
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

</style>



<div class="item" data-lat="{{ $property->latitude }}" data-long="{{ $property->longitude }}">

    <div class="image">
        <div class="blii">


            <div class="img img_item">

                <img class="thumb"
                     data-src="{{ RvMedia::getImageUrl($property->image, 'small', false, RvMedia::getDefaultImage()) }}"
                     src="{{ RvMedia::getImageUrl($property->image, 'small', false, RvMedia::getDefaultImage()) }}"
                     alt="{{ $property->name }}">
            </div>

            <a href="{{ $property->url }}" class="linkdetail"></a>

            <div class="media-count-wrapper">
                @if($property->status=="selling")
                    <span class="label-success status-label">FOR SALE </span>
                @else
                    <span class="label-info status-label">FOR RENT</span>
                @endif
            </div>


            <ul class="item-price-wrap hide-on-list">
                <li class="h-type"><span>{{ $property->category->name }}</span></li>
           </ul>
        </div>

        <div class="image__overlay_item">
            <p class="image__description" >
                {{ $property->name }}<br> It is featured with {{$property->number_bedroom}} bedrooms,
                {{ $property->number_bathroom }} bathroom,{{ $property->description }}
            </p>
        </div>
    </div>


    <div class="description">

        <div class="row">
            <div class="col-md-10"><a href="{{ $property->url }}">
                    <h5 style="margin: 0;padding: 0"> {{ $property->name }}</h5>
                </a></div>
            <div class="col-md-2">
                <a target="_blank" href="https://wa.me/+250786389554/?text={{$property->url}}" class="social-button" id="" title="" rel="">
                    <span class="fab fa-whatsapp"></span></a>
            </div>
        </div>


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
            <span  data-toggle="tooltip" data-placement="top" data-original-title="{{ __('Square') }}">
                    <i class="vti item-price">{{ format_price($property->price, $property->currency) }}</i> </span>


        </p>
    </div>
</div>
