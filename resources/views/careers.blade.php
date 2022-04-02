@extends("templates.base")

@section("content")
<div role="main" class="main">
    <section class="section border-0 m-0 bg-transparent" id="start">
        <div class="container py-5 mt-5">
            <div class="row">
                <div class="col text-center mt-5">
                    <div class="divider divider-small divider-small-lg mt-0 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                        <hr class="bg-primary border-radius m-auto">
                    </div>
                    <div class="overflow-hidden mb-1">
                        <h3 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">CAREERS</h3>
                    </div>
                    <h2 class="text-color-dark font-weight-bold text-8 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Find Your Oportunity</h2>
                </div>
            </div>
            <div class="row">
                <div class="toggle toggle-primary toggle-simple" data-plugin-toggle>
                    <section class="toggle active">
                        <a class="toggle-title">We don't have any openings at the moment. Please keep visit this page for the updates.</a>
                        <div class="toggle-content">
                            <p></p>
                        </div>
                    </section>
                    <!--<section class="toggle">
                        <a class="toggle-title">Engineer</a>
                        <div class="toggle-content">
                            <p></p>
                        </div>
                    </section>
                    <section class="toggle">
                        <a class="toggle-title">QA</a>
                        <div class="toggle-content">
                            <p></p>
                        </div>
                    </section>-->
                </div>
            </div>
        </div>
    </section>
</div>    
@endsection