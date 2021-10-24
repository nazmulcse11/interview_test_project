@extends('frontend.layout.app')

@section('title','Booking')

@section('content')

<!-- Location Overview area starts -->
<section class="location-overview-area padding-top-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form id="msform" class="msform">

                    <ul class="overview-list step-list">
                        <li class="list active" id="account">
                            <a class="list-click" href="javascript:void(0)"> <span class="list-number">1</span> Location </a>
                        </li>
                        <li class="list">
                            <a class="list-click" href="javascript:void(0)"> <span class="list-number">2</span> Service </a>
                        </li>
                        <li class="list">
                            <a class="list-click" href="javascript:void(0)"> <span class="list-number">3</span> Date & Time </a>
                        </li>
                        <li class="list">
                            <a class="list-click" href="javascript:void(0)"> <span class="list-number">4</span> Information </a>
                        </li>
                        <li class="list">
                            <a class="list-click" href="javascript:void(0)"> <span class="list-number">5</span> Confirmation </a>
                        </li>
                    </ul>
                    <!-- Location -->
                    <fieldset class="padding-top-50 padding-bottom-100">
                        <div class="overview-list-all">
                            <div class="overview-location">
                                <div class="single-location active margin-top-30">
                                    <span class="location"> New York, </span>
                                    <span class="location"> New York </span>
                                </div>
                                <div class="single-location margin-top-30">
                                    <span class="location"> Los Angeles, </span>
                                    <span class="location"> California </span>
                                </div>
                                <div class="single-location margin-top-30">
                                    <span class="location"> Chicago, </span>
                                    <span class="location"> New York </span>
                                </div>
                                <div class="single-location margin-top-30">
                                    <span class="location"> Houston, </span>
                                    <span class="location"> Texas </span>
                                </div>
                                <div class="single-location margin-top-30">
                                    <span class="location"> Phoenix, </span>
                                    <span class="location"> Arizona </span>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Map Starts -->
                        <div class="contact-map-area padding-top-100">
                            <div class="container">
                                <div class="contact-map">
                                    <span class="select-location"> Select Current Location </span>
                                    <iframe src="https://maps.google.com/maps?q=23.8283,90.4115&hl=es;z=14&amp;output=embed"></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Map end -->
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <!-- Service -->
                    <fieldset class="padding-top-50 padding-bottom-100">
                        <div class="row">
                            <div class="col-lg-8 margin-top-30">
                                <div class="service-overview-wrapper padding-bottom-30">
                                    <div class="overview-author overview-author-border">
                                        <div class="overview-flex-author">
                                            <div class="overview-thumb">
                                                <img src="assets/img/service/overview1.jpg" alt="">
                                            </div>
                                            <div class="overview-contents">
                                                <h4 class="overview-title"> <a href="javascript:void(0)"> Lorem ipsum dolor sit amet, consectetur adipiscing about Aelit</a> </h4>
                                                <span class="overview-review"> <i class="las la-star"></i> 4.9 <b>(231)</b> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overview-single padding-top-40">
                                        <h4 class="title"> What's Included </h4>
                                        <div class="include-contents margin-top-30">
                                            <div class="single-include">
                                                <ul class="include-list">
                                                    <li class="lists">
                                                        <div class="list-single">
                                                            <span class="rooms"> 3 Bed Room </span>
                                                        </div>
                                                        <div class="list-single">
                                                            <span class="values"> $30 </span>
                                                            <span class="value-input"> <input type="text" value="3"> </span>
                                                        </div>
                                                    </li>
                                                    <li class="lists"> <a class="remove" href="javascript:void(0)">Remove</a> </li>
                                                </ul>
                                            </div>
                                            <div class="single-include">
                                                <ul class="include-list">
                                                    <li class="lists">
                                                        <div class="list-single">
                                                            <span class="rooms"> 2 Bed Room </span>
                                                        </div>
                                                        <div class="list-single">
                                                            <span class="values"> $20 </span>
                                                            <span class="value-input"> <input type="text" value="2"> </span>
                                                        </div>
                                                    </li>
                                                    <li class="lists"> <a class="remove" href="javascript:void(0)">Remove</a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overview-single padding-top-60">
                                        <h4 class="title"> Upgrade your order with extras </h4>
                                        <div class="row">
                                            <div class="col-lg-6 margin-top-30">
                                                <div class="overview-extra">
                                                    <div class="checkbox-inlines">
                                                        <input class="check-input" type="checkbox" id="check4">
                                                        <label class="checkbox-label" for="check4"> Kitchen Cleaning </label>
                                                    </div>
                                                    <div class="overview-extra-flex-content">
                                                        <div class="list-single">
                                                            <span class="values"> $25 </span>
                                                            <span class="value-input"> <input type="text" value="3"> </span>
                                                        </div>
                                                        <span class="price-value"> $50 </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 margin-top-30">
                                                <div class="overview-extra">
                                                    <div class="checkbox-inlines">
                                                        <input class="check-input" type="checkbox" id="check5">
                                                        <label class="checkbox-label" for="check5"> Kitchen Cleaning </label>
                                                    </div>
                                                    <div class="overview-extra-flex-content">
                                                        <div class="list-single">
                                                            <span class="values"> $25 </span>
                                                            <span class="value-input"> <input type="text" value="3"> </span>
                                                        </div>
                                                        <span class="price-value"> $50 </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 margin-top-30">
                                                <div class="overview-extra">
                                                    <div class="checkbox-inlines">
                                                        <input class="check-input" type="checkbox" id="check6">
                                                        <label class="checkbox-label" for="check6"> Kitchen Cleaning </label>
                                                    </div>
                                                    <div class="overview-extra-flex-content">
                                                        <div class="list-single">
                                                            <span class="values"> $25 </span>
                                                            <span class="value-input"> <input type="text" value="3"> </span>
                                                        </div>
                                                        <span class="price-value"> $50 </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 margin-top-30">
                                                <div class="overview-extra">
                                                    <div class="checkbox-inlines">
                                                        <input class="check-input" type="checkbox" id="check7">
                                                        <label class="checkbox-label" for="check7"> Kitchen Cleaning </label>
                                                    </div>
                                                    <div class="overview-extra-flex-content">
                                                        <div class="list-single">
                                                            <span class="values"> $25 </span>
                                                            <span class="value-input"> <input type="text" value="3"> </span>
                                                        </div>
                                                        <span class="price-value"> $50 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overview-single padding-top-60">
                                        <h4 class="title"> Benifits of the Package: </h4>
                                        <ul class="overview-benefits margin-top-30">
                                            <li class="list"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a egestas leo. </li>
                                            <li class="list"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a egestas leo. </li>
                                            <li class="list"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a egestas leo. </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 margin-top-30">
                                <div class="service-overview-summery">
                                    <h4 class="title"> Booking Summery </h4>
                                    <div class="overview-summery-contents">
                                        <div class="single-summery">
                                            <span class="summery-title"> Appointment Package Service </span>
                                            <div class="summery-list-all">
                                                <ul class="summery-list">
                                                    <li class="list">
                                                        <span class="rooms"> Bed Room</span>
                                                        <span class="room-count">3</span>
                                                        <span class="value-count">$90</span>
                                                    </li>
                                                    <li class="list">
                                                        <span class="rooms"> Bath Room</span>
                                                        <span class="room-count">2</span>
                                                        <span class="value-count">$60</span>
                                                    </li>
                                                </ul>
                                                <ul class="summery-result-list">
                                                    <li class="result-list">
                                                        <span class="rooms"> Pagckage Fee</span>
                                                        <span class="value-count">$150</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-summery">
                                            <span class="summery-title"> Extra Service </span>
                                            <div class="summery-list-all">
                                                <ul class="summery-list">
                                                    <li class="list">
                                                        <span class="rooms"> Kitchen</span>
                                                        <span class="room-count">1</span>
                                                        <span class="value-count">$50</span>
                                                    </li>
                                                    <li class="list">
                                                        <span class="rooms"> Fridge</span>
                                                        <span class="room-count">1</span>
                                                        <span class="value-count">$20</span>
                                                    </li>
                                                    <li class="list">
                                                        <span class="rooms"> Garden</span>
                                                        <span class="room-count">1</span>
                                                        <span class="value-count">$60</span>
                                                    </li>
                                                </ul>
                                                <ul class="summery-result-list result-border padding-bottom-20">
                                                    <li class="result-list">
                                                        <span class="rooms"> Subtotal</span>
                                                        <span class="value-count">$280</span>
                                                    </li>
                                                </ul>
                                                <ul class="summery-result-list result-border padding-bottom-20">
                                                    <li class="result-list">
                                                        <span class="rooms"> Tax(+)15%</span>
                                                        <span class="value-count">$42</span>
                                                    </li>
                                                </ul>
                                                <ul class="summery-result-list">
                                                    <li class="result-list">
                                                        <span class="rooms"> <strong>Total</strong></span>
                                                        <span class="value-count">$280</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="javascript:void(0)" class="cmn-btn btn-appoinment btn-bg-1"> Continue </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <!-- Date & Time -->
                    <fieldset class="padding-top-50 padding-bottom-100">
                        <div class="date-overview">
                            <div class="single-date-overview margin-top-30">
                                <h4 class="date-time-title"> Available on December 20201 </h4>
                                <ul class="date-time-list margin-top-20">
                                    <li class="list"> <a href="javascript:void(0)"> 05 dec,2021 - Sun </a> </li>
                                    <li class="list active"> <a href="javascript:void(0)"> 06 dec,2021 - Sun </a> </li>
                                    <li class="list"> <a href="javascript:void(0)"> 07 dec,2021 - Sun </a> </li>
                                    <li class="list"> <a href="javascript:void(0)"> 08 dec,2021 - Sun </a> </li>
                                    <li class="list"> <a href="javascript:void(0)"> 09 dec,2021 - Sun </a> </li>
                                </ul>
                            </div>
                            <div class="single-date-overview margin-top-30">
                                <h4 class="date-time-title"> Available schedule on 06 September, 2021 </h4>
                                <ul class="date-time-list margin-top-20">
                                    <li class="list"> <a href="javascript:void(0)"> 10.00AM-11.00AM </a> </li>
                                    <li class="list"> <a href="javascript:void(0)"> 12.00AM-01.00PM </a> </li>
                                    <li class="list"> <a href="javascript:void(0)"> 04.00AM-05.00AM </a> </li>
                                    <li class="list active"> <a href="javascript:void(0)"> 06.00AM-07.00AM </a> </li>
                                </ul>
                            </div>
                            <div class="btn-wrapper margin-top-30">
                                <a href="javascript:void(0)" class="cmn-btn btn-bg-1">Book Appoinmnent</a>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <!-- Information -->
                    <fieldset class="padding-top-50 padding-bottom-100">
                        <div class="Info-overview padding-top-30">
                            <h3 class="date-time-title"> Booking Information </h3>
                            <div class="single-info-overview margin-top-30">
                                <div class="single-info-input">
                                    <label class="info-title"> Your Name* </label>
                                    <input class="form--control" type="text" name="name" placeholder="Type Your Name">
                                </div>
                                <div class="single-info-input">
                                    <label class="info-title"> Your Email* </label>
                                    <input class="form--control" type="email" name="email" placeholder="Type Your Email">
                                </div>
                            </div>
                            <div class="single-info-overview margin-top-30">
                                <div class="single-info-input">
                                    <label class="info-title"> Phone Number* </label>
                                    <input class="form--control" type="tel" placeholder="Type Your Number">
                                </div>
                                <div class="single-info-input">
                                    <label class="info-title"> Your City* </label>
                                    <select>
                                        <option value="1">New York</option>
                                        <option value="2">London</option>
                                        <option value="2">Eden Garden</option>
                                        <option value="2">Paris</option>
                                        <option value="2">Barcelona</option>
                                    </select>
                                </div>
                            </div>
                            <div class="single-info-overview margin-top-30">
                                <div class="single-info-input">
                                    <label class="info-title"> Your Area* </label>
                                    <input class="form--control" type="text" placeholder="Type Your Area">
                                </div>
                                <div class="single-info-input">
                                    <label class="info-title"> Post Code* </label>
                                    <input class="form--control" type="tel" placeholder="Type Post Code">
                                </div>
                            </div>
                            <div class="single-info-overview margin-top-30">
                                <div class="single-info-input">
                                    <label class="info-title"> Your Address* </label>
                                    <input class="form--control" type="text" placeholder="Type Your Address">
                                </div>
                            </div>
                            <div class="single-info-overview margin-top-30">
                                <div class="single-info-input">
                                    <label class="info-title"> Order Note* </label>
                                    <textarea class="form--control textarea--form" name="message" placeholder="Type Order Note"></textarea>
                                </div>
                            </div>
                            <div class="btn-wrapper margin-top-35">
                                <a href="javascript:void(0)" class="cmn-btn btn-bg-1">Continue</a>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <!-- Confirmation -->
                    <fieldset class="padding-top-50 padding-bottom-100">
                        <div class="confirm-overview padding-top-30">
                            <div class="overview-author overview-author-border">
                                <div class="overview-flex-author">
                                    <div class="overview-thumb confirm-thumb">
                                        <img src="assets/img/service/overview1.jpg" alt="">
                                    </div>
                                    <div class="overview-contents">
                                        <h2 class="overview-title confirm-title"> <a href="javascript:void(0)">Lorem ipsum dolor sit amet, consectetur adipiscing about Aelit</a> </h2>
                                        <span class="overview-review"> <i class="las la-star"></i> 4.9 <b>(231)</b> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="confirm-overview-left margin-top-30">
                                    <div class="single-confirm-overview">
                                        <div class="single-confirm margin-top-30">
                                            <h3 class="titles"> Location </h3>
                                            <span class="details"> Los Angeles, </span>
                                            <span class="details"> California </span>
                                        </div>
                                        <div class="single-confirm margin-top-30">
                                            <h3 class="titles"> Date & Time </h3>
                                            <span class="details"> 06 Sep 2021 </span>
                                            <span class="details"> 6:00PM-7:00PM </span>
                                        </div>
                                    </div>
                                    <div class="booking-info padding-top-60">
                                        <h2 class="title"> Booking Information </h2>
                                        <div class="booking-details">
                                            <ul class="booking-list">
                                                <li class="lists">
                                                    <span class="list-span"> Name: </span>
                                                    <span class="list-strong"> Jhon Dhoe </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Email: </span>
                                                    <span class="list-strong"> Customer@mail.com </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Phone: </span>
                                                    <span class="list-strong"> 011-2234567890 </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> City: </span>
                                                    <span class="list-strong"> New york </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Area: </span>
                                                    <span class="list-strong"> New york </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Post Code: </span>
                                                    <span class="list-strong"> 1122 </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Address: </span>
                                                    <span class="list-strong"> 2608 Ritter Avenue Livonia, MI 48150 </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Order Note: </span>
                                                    <span class="list-strong"> it is a long established fact that a reader will be distra 
                                                        by the readable content of a page when looking at its 
                                                        layout. The point of using Lorem Ipsum is that. </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 margin-top-60">
                                <div class="service-overview-summery">
                                    <h4 class="title"> Booking Summery </h4>
                                    <div class="overview-summery-contents">
                                        <div class="single-summery">
                                            <span class="summery-title"> Appointment Service </span>
                                            <div class="summery-list-all">
                                                <ul class="summery-list">
                                                    <li class="list">
                                                        <span class="rooms"> Bed Room</span>
                                                        <span class="room-count">3</span>
                                                        <span class="value-count">$90</span>
                                                    </li>
                                                    <li class="list">
                                                        <span class="rooms"> Bath Room</span>
                                                        <span class="room-count">2</span>
                                                        <span class="value-count">$60</span>
                                                    </li>
                                                </ul>
                                                <ul class="summery-result-list">
                                                    <li class="result-list">
                                                        <span class="rooms"> Appoinment Fee</span>
                                                        <span class="value-count">$150</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-summery">
                                            <span class="summery-title"> Extra Service </span>
                                            <div class="summery-list-all">
                                                <ul class="summery-list">
                                                    <li class="list">
                                                        <span class="rooms"> Kitchen</span>
                                                        <span class="room-count">1</span>
                                                        <span class="value-count">$50</span>
                                                    </li>
                                                    <li class="list">
                                                        <span class="rooms"> Fridge</span>
                                                        <span class="room-count">1</span>
                                                        <span class="value-count">$20</span>
                                                    </li>
                                                    <li class="list">
                                                        <span class="rooms"> Garden</span>
                                                        <span class="room-count">1</span>
                                                        <span class="value-count">$60</span>
                                                    </li>
                                                </ul>
                                                <ul class="summery-result-list result-border padding-bottom-20">
                                                    <li class="result-list">
                                                        <span class="rooms"> Subtotal</span>
                                                        <span class="value-count">$280</span>
                                                    </li>
                                                </ul>
                                                <ul class="summery-result-list result-border padding-bottom-20">
                                                    <li class="result-list">
                                                        <span class="rooms"> Tax(+)15%</span>
                                                        <span class="value-count">$42</span>
                                                    </li>
                                                </ul>
                                                <ul class="summery-result-list">
                                                    <li class="result-list">
                                                        <span class="rooms"> <strong>Total</strong></span>
                                                        <span class="value-count">$280</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="confirm-bottom-content">
                                            <div class="confirm-payment payment-border">
                                                <div class="single-checkbox">
                                                    <div class="checkbox-inlines">
                                                        <input class="check-input" type="checkbox" id="check1">
                                                        <label class="checkbox-label" for="check1"> Cash Payment </label>
                                                    </div>
                                                </div>
                                                <div class="single-checkbox">
                                                    <div class="checkbox-inlines">
                                                        <input class="check-input" type="checkbox" id="check2">
                                                        <label class="checkbox-label" for="check2"> <img src="assets/img/service/payment.png" alt=""> </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="checkbox-inlines bottom-checkbox">
                                                <input class="check-input" type="checkbox" id="check3">
                                                <label class="checkbox-label" for="check3"> I have read and agree to the website <a href="javascript:void(0)"> terms and 
                                                    conditions * </a> </label>
                                            </div>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="javascript:void(0)" class="cmn-btn btn-appoinment btn-bg-1"> Pay & Confirm Your Order </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="button" name="submit" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <!-- Successful Complete -->
                    <fieldset class="padding-top-80 padding-bottom-100">
                        <div class="form-card successful-card">
                            <h2 class="title-step"> SUCCESS ! </h2>
                            <div class="succcess-icon">
                                <i class="las la-check"></i>
                            </div>
                            <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                            <div class="btn-wrapper text-center margin-top-35">
                                <a href="multistep_form.html" class="cmn-btn btn-bg-1"> Back To Home</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Location Overview area end -->
    
@endsection