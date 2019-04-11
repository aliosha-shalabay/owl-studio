<!-- Start Contact Sectoion -->
<section id="contact" class="section-padding">
    <div class="container">
        <div class="section-title">
            <h6 class="heading-small">GET IN TOUCH</h6>
            <h2>SAY HELLO</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-info">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-details">
                                <h5>Phone</h5>
                                <p>{{$setting->phone}}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="contact-details">
                                <h5>Email</h5>
                                <p>{{$setting->email}}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="contact-details">
                                <h5>Address</h5>
                                <p>{{$setting->{'address_' . app()->getLocale()} }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="contact-details">
                                <div class="socials-media">
                                    <ul>
                                        <li><a href="{{$setting->telegram}}"><i class="fa fa-telegram"></i></a></li>
                                        <li><a href="{{$setting->facebook}}"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="{{$setting->instagram}}"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="alert alert-success alert-dismissible fade show alert-success-request no-visible"
                     role="alert">
                </div>
                <form class="contactform" method="post" action="{{route('create-request')}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                       required>
                                <ul data-input-name="name" class="js-errors text-danger">

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email" required>
                                <ul data-input-name="email" class="js-errors text-danger">

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="Subject" required>
                                <ul data-input-name="subject" class="js-errors text-danger">

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                          required></textarea>
                                <ul data-input-name="message" class="js-errors text-danger">

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="js-btn-send-request btn-hover btn">Submit Now<i
                                        class="fa fa-long-arrow-right"></i><span></span></button><span class="js-loader"></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Sectoion -->