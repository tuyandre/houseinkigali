
{!! Theme::partial('header') !!}

<div id="app">
    <div id="ismain-homes">
{{--        {{ Theme::content() }}--}}
{{--        {!! Theme::content() !!}--}}

        <div class="container-fluid w90"> <div class="homehouse padtop30 projecthome">
                <property-component type="sale" url="http://127.0.0.1:8000/ajax/properties"></property-component>
        <property-component type="rent" url="http://127.0.0.1:8000/ajax/properties"> </property-component>
    </div>
</div>
<div class="padtop70"> <div class="box_shadow">
        <div class="container-fluid w90">
            <div class="homehouse projecthome">
                <div class="row"> <div class="col-12"> <h2>Featured Agents</h2>
                    </div>
                </div>
                <featured-agents-component url="http://127.0.0.1:8000/ajax/agents/featured" :limit="4"></featured-agents-component>
            </div>
        </div>
    </div>
</div>


    </div>
</div>

{!! Theme::partial('footer') !!}

