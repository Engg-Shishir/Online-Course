@extends('layouts.app')
@section('title','Contact')
@section('content')

    <div class="container-fluid jumbotron mt-5 ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6  text-center">
                <h1 class="page-top-title mt-3">- Reach Me  -</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7302.570962932958!2d90.35027497191162!3d23.772846356845026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0bcdf50fd59%3A0x9ab0a63bb3267107!2sAdabar%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1589072627333!5m2!1sen!2sbd" width="100%" height="370" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-md-6">
                <h3 class="service-card-title">Address</h3>
                <hr>
                <p class="footer-text"><i class="fas fa-map-marker-alt"></i> Narsingdi Sadar <i class="fas ml-2 fa-phone"></i> 01403487219<i class="fas ml-2 fa-envelope"></i>   Rabbil@Yahoo.com</p>
                <h3 class="service-card-title"> Send Message</h3>
                <div class="form-group ">
                    <input id="contactNameId" type="text" class="form-control w-100" placeholder="Your name">
                </div>
                <div class="form-group">
                    <input id="contactMobileId" type="text" class="form-control  w-100" placeholder="Mobile no">
                </div>
                <div class="form-group">
                    <input id="contactEmailId" type="text" class="form-control  w-100" placeholder="Email">
                </div>
                <div class="form-group">
                    <input id="contactMsgId" type="text" class="form-control  w-100" placeholder="Message">
                </div>
                <button id="contactSendBtnId"  class="btn btn-block normal-btn w-100">Send</button>
            </div>
        </div>
    </div>
@endsection

