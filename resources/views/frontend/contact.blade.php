@extends('layout.frontend')

@section('content')
<section class="inner-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="inner-breadcrumb-title">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <div class="col-lg-6 ibt">
                <div class="inner-breadcrumb-text">
                    <ul>
                        <li class="bread-link"><a href="index.php"><i class="fa fa-home"></i></a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="inner-contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-us-info">
                    <h3>Find Us here.</h3>
                    <ul class="con-info">
                        <li><i class="fas fa-map-marker-alt"></i> Gairigaon-09, Kathmandu, Nepal</li>
                        <li><i class="fas fa-headphones-alt"></i> 9860238587, 9841374259</li>
                        <li><a href="mailto:info@nirmantools.com"><i class="far fa-envelope"></i>
                                info@nirmantools.com</a></li>
                        <li><i class="fas fa-history"></i>Sun-Fri / 9:00 AM - 8:00 PM</li>
                    </ul>
                    <ul class="fsc-social">
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="message-form">
                    <h2>How can we help you ?</h2>
                    <p>Fill Out The Form And We'll Get Back Soon!</p>
                    <form action="/action_page.php">
                        <input type="text" id="fname" name="firstname" placeholder="Your Name (Required)"
                            style="width: 100%;">
                        <input type="text" id="email" name="E-mail" placeholder="Your E-mail  (Required)"
                            style="width: 100%;">
                        <input type="text" id="subject" name="subject" placeholder="Subject" style="width: 100%;">
                        <textarea id="message" name="message" placeholder="Your Message"
                            style="height:120px; width:100%;"></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>

        </div>

    </div>
    <div class="inner-contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3532.863190171812!2d85.351217!3d27.690623!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198915ae2eb5%3A0x9d29256ef14b92b1!2sMulmi%20Galli%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1598781670904!5m2!1sen!2snp"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>
</section>
@endsection