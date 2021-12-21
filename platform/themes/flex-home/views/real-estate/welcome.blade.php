@php
    if (theme_option('show_map_on_properties_page', 'yes') == 'yes') {
        Theme::asset()->usePath()->add('leaflet-css', 'libraries/leaflet.css');
        Theme::asset()->container('footer')->usePath()->add('leaflet-js', 'libraries/leaflet.js');
        Theme::asset()->container('footer')->usePath()->add('leaflet.markercluster-src-js', 'libraries/leaflet.markercluster-src.js');
    }
@endphp

<section class="main-homes pb-3">
    <div class="bgheadproject hidden-xs" style="background: url('{{ theme_option('breadcrumb_background') ? RvMedia::url(theme_option('breadcrumb_background')) : Theme::asset()->url('images/banner-du-an.jpg') }}')">
        <div class="description">
            <div class="container-fluid w90">
                <h1 class="text-center">{{ SeoHelper::getTitle() }}</h1>
                <p class="text-center">{{ theme_option('properties_description') }}</p>
                {!! Theme::partial('breadcrumb') !!}
            </div>
        </div>
    </div>
    <div class="container-fluid w90 padtop30">
        <div class="projecthome">
            <form action="{{ route('public.properties') }}" method="get" id="ajax-filters-form">
                @include(Theme::getThemeNamespace() . '::views.real-estate.includes.search-box', ['type' => 'property', 'categories' => $categories])
                <div class="row rowm10">
                    <div class="col-lg-12 full-page-content"

                         id="properties-list">
                        @include(Theme::getThemeNamespace() . '::views.real-estate.includes.filters', ['isChangeView' => theme_option('show_map_on_properties_page', 'yes') == 'yes'])
                        <div class="data-listing mt-2">
                            {!! Theme::partial('real-estate.properties.items', compact('properties')) !!}
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>
