@extends('layouts.main-layout')
@section('title', 'Contact')
@section('content')
    <section class="section-wrap pt-0 pb-40">

        <img data-src="{{ asset('img/blog/contact_page_title.jpg') }}" src="{{ asset('img/blog/contact_page_title.jpg') }}" alt="" class="lazyload contact__img">

        <div class="container">

            <h1 class="page-title">Contact</h1>
            <div class="row justify-content-md-center">
                <div class="col-lg-8">

                    <h3>Drop Us a Message</h3>
                    <p>Don't hesitate to get in touch. We will reply you as soon as possible.</p>

                    <!-- Contact Form -->
                    <form id="contact-form" class="contact-form mt-30 mb-30" method="post" action="#">
                        <div class="contact-name">
                            <label for="name">Name <abbr title="required" class="required">*</abbr></label>
                            <input name="name" id="name" type="text">
                        </div>
                        <div class="contact-email">
                            <label for="email">Email <abbr title="required" class="required">*</abbr></label>
                            <input name="email" id="email" type="email">
                        </div>
                        <div class="contact-subject">
                            <label for="email">Subject</label>
                            <input name="subject" id="subject" type="text">
                        </div>
                        <div class="contact-message">
                            <label for="message">Message <abbr title="required" class="required">*</abbr></label>
                            <textarea id="message" name="message" rows="7" required="required"></textarea>
                        </div>

                        <input type="submit" class="btn btn-lg btn-color btn-button" value="Send Message" id="submit-message">
                        <div id="msg" class="message"></div>
                    </form>

                </div>
            </div>

        </div>
    </section>
@endsection