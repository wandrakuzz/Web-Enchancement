@extends('layouts.home')

@section('title')
  <title>Contact Me</title>
@endsection

@section('content')
    <div class="bg">
        <div class="row">
            <br/>
            <div class="col-sm-offset-1 col-sm-7">
                <div class="contact-form">
                    <h2 class="title text-center">Get In Touch</h2><br/><br/><br/>
                    <div class="status alert alert-success" style="display: none"></div>
                                                            <form id="main-contact-form" class="contact-form row" action="http://megafurniture.imaginasiweb.com/contact" name="contact-form" method="post">
                        <input type="hidden" name="_token" value="v9mHyEjOv4piO5jU7EhhMzizwKvTVIf0TTZTVDG4"/>
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="contact-info">
                    <h2 class="title text-center">Contact Info</h2><br/><br/><br/>
                    <address>
                        <p><b>Pro Projector Sdn Bhd (603640-V)</b></p>
                        <p>19-2, Wisma Laxton, Jalan Desa,</p>
                        <p>Taman Desa, Off Jalan Klang Lama,</p>
                        <p>58100 Kuala Lumpur, Malaysia</p>
                        <p>Telephone: +(603) 7987 1191</p>
                        <p>Fax: +(603) 7987 2191</p>
                        <p>GST No: 000817143808</p>
                    </address>
                    <div class="social-networks">
                        <h2 class="title text-center">Social Networking</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--/#contact-page-->
@endsection
