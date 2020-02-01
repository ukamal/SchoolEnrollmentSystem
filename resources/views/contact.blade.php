@extends('welcome')
@section('content')

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>Get in touch</h2>
                </div>
            </div>
            <div class="span8">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

    <div class="container">
        <div class="row">
            <div class="span12">
                <h4>Get in touch with us by filling <strong>contact form below</strong></h4>
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">X</button>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                @endif

                @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">X</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                <form action="{{ url('/sendmail/send') }}" method="post" role="form" class="contactForm">
                    @csrf
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>

                    <div class="row">
                        <div class="span4 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="span4 form-group">
                            <input type="email" class="form-control{{ $errors->has('email') ? 'is-invalid' : "" }}" name="email" id="email" placeholder="Your Email"
                                   data-rule="email" data-msg="Please enter a valid email" value="{{ old('email') }}"/>
                            <div class="validation"></div>
                        </div>
                        <div class="span4 form-group">
                            <input type="text" class="form-control{{ $errors->has('subject') ? 'is-invalid' : "" }}" name="subject" id="subject" placeholder="Subject"
                                   data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="span12 margintop10 form-group">
                            <textarea class="form-control{{ $errors->has('message') ? 'is-invalid' : "" }}" name="message" rows="12"
                                      data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                            <p class="text-center">
                                <button class="btn btn-large btn-theme margintop10" type="submit">Submit message</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection