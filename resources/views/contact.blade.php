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
                        <h3 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">Contact Us</h3>
                    </div>
                    <h2 class="text-color-dark font-weight-bold text-8 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Feel free to ask for details, don't save any questions!</h2>
                </div>
            </div>
        </div>
        <div class="container py-4">
            <div class="row mb-2">
                <div class="col">              
                    <form class="contact-form-recaptcha-v3" action="/contact" method="post">
                        @csrf
                        <div>
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Full Name</label>
                                <input type="text" value="{{ old('fullname') }}" class="form-control text-3 h-auto py-2" name="fullname">
                                @error('fullname')
                                <small class="text-danger">{{ $errors->first('fullname') }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Email Address</label>
                                <input type="text" value="{{ old('email') }}" class="form-control text-3 h-auto py-2" name="email">
                                @error('email')
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Subject</label>
                                <input type="text" value="{{ old('subject') }}" class="form-control text-3 h-auto py-2" name="subject">
                            </div>
                            @error('subject')
                            <small class="text-danger">{{ $errors->first('subject') }}</small>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Message</label>
                                <textarea rows="5" class="form-control text-3 h-auto py-2" name="message">{{ old('message') }}</textarea>
                                @error('message')
                                <small class="text-danger">{{ $errors->first('message') }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>    
@endsection