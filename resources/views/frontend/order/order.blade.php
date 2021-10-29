@extends('frontend.layout.app')

@section('title','Order')

@section('content')

<!-- Location Overview area starts -->
<section class="location-overview-area padding-top-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form id="msform" class="msform ms-order-form" method="post" name="msOrderForm" novalidate>
                    @csrf

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
                                    <span class="location my-location"> New York <br>USA </span>
                                </div>
                                <div class="single-location margin-top-30">
                                    <span class="location"> Dhaka <br>Bangladesh</span>
                                </div>
                                <div class="single-location margin-top-30">
                                    <span class="location"> Chicago <br>New York </span>
                                </div>
                                <div class="single-location margin-top-30">
                                    <span class="location"> Paris <br>France </span>
                                </div>
                                <div class="single-location margin-top-30">
                                    <span class="location"> Phoenix <br>Arizona </span>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Map Starts -->
                        <div class="contact-map-area padding-top-100">
                            <div class="container">
                                <div class="contact-map">
                                    <span class="select-location btn" id="find_btn"> Select Current Location (Find Me)</span>
                                    <div style="height: 400px;width: 100%;" id="map"></div>
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
                                                <img src="{{ asset('frontend/assets/img/service/overview1.jpg') }}" alt="">
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
                                                            <span class="rooms"><span class="bed-rooms-count">1</span> Bed Room </span>
                                                        </div>
                                                        <div class="list-single">
                                                            <span class="values bed-rooms-price"> $30 </span>
                                                            <span class="value-input"> <input type="text" value="1" id="inc_dec_rooms"> </span>
                                                        </div>
                                                    </li>
                                                    <li class="lists"> <a class="remove" href="javascript:void(0)">Remove</a> </li>
                                                </ul>
                                            </div>
                                            <div class="single-include">
                                                <ul class="include-list">
                                                    <li class="lists">
                                                        <div class="list-single">
                                                            <span class="rooms"><span class="bath-rooms-count">1</span> Bath Room </span>
                                                        </div>
                                                        <div class="list-single">
                                                            <span class="values bath-rooms-price"> $20 </span>
                                                            <span class="value-input"> <input type="text" value="1" id="inc_dec_bath_rooms"> </span>
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
                                            @if(!empty($extraservices))
                                            @foreach($extraservices as $service)
                                            <div class="col-lg-6 margin-top-30">
                                                <div class="overview-extra">
                                                    <div class="checkbox-inlines">
                                                        <input class="check-input" type="checkbox" id="{{ $service->id }}">
                                                        <label class="checkbox-label" for="{{ $service->id }}"> {{ $service->title }} </label>
                                                    </div>
                                                    <div class="overview-extra-flex-content">
                                                        <div class="list-single">
                                                            <span class="values unit-price" price="{{ $service->id }}"> ${{ $service->price }} </span>
                                                            <span class="value-input"> <input type="text" value="1" class="extra-service" id="{{ $service->id }}_service_count"> </span>
                                                        </div>
                                                        <span class="price-value"> ${{ $service->price }} </span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
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
                                                        <span class="room-count bed-rooms-count">1</span>
                                                        <span class="value-count bed-rooms-total-price">$30</span>
                                                    </li>
                                                    <li class="list">
                                                        <span class="rooms"> Bath Room</span>
                                                        <span class="room-count bath-rooms-count">1</span>
                                                        <span class="value-count bath-rooms-total-price">$20</span>
                                                    </li>
                                                </ul>
                                                <ul class="summery-result-list">
                                                    <li class="result-list">
                                                        <span class="rooms"> Pagckage Fee</span>
                                                        <span class="value-count package-fee">$150</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-summery">
                                            <span class="summery-title"> Extra Service </span>
                                            <div class="summery-list-all">
                                                <ul class="summery-list append-extra-service" id="append-extra-service">

                                                </ul>
                                                <ul class="summery-result-list result-border padding-bottom-20">
                                                    <li class="result-list">
                                                        <span class="rooms"> Subtotal</span>
                                                        <span class="value-count sub-total">$00</span>
                                                    </li>
                                                </ul>
                                                <ul class="summery-result-list result-border padding-bottom-20">
                                                    <li class="result-list">
                                                        <span class="rooms"> Tax(+)15%</span>
                                                        <span class="value-count vat-tax">$42</span>
                                                    </li>
                                                </ul>
                                                <ul class="summery-result-list">
                                                    <li class="result-list">
                                                        <span class="rooms"> <strong>Total</strong></span>
                                                        <span class="value-count final-total">$280</span>
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
                                <h4 class="date-time-title"> Available on <span class="month-year"></span></h4>
                                <ul class="date-time-list margin-top-20 show-date">
                                    
                                </ul>
                            </div>
                            <div class="single-date-overview margin-top-30">
                                <h4 class="date-time-title"> Available schedule on <span class="available-schedule-date"></span> </h4>
                                <ul class="date-time-list margin-top-20">
                                    <li class="list"> <a href="javascript:void(0)" class="available-schedule"> 10.00AM-11.00AM </a> </li>
                                    <li class="list"> <a href="javascript:void(0)" class="available-schedule"> 12.00AM-01.00PM </a> </li>
                                    <li class="list"> <a href="javascript:void(0)" class="available-schedule"> 04.00AM-05.00AM </a> </li>
                                    <li class="list"> <a href="javascript:void(0)" class="available-schedule"> 06.00AM-07.00AM </a> </li>
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
                                    <input class="form--control" type="text" name="name" id="name" placeholder="Type Your Name">
                                </div>
                                <div class="single-info-input">
                                    <label class="info-title"> Your Email* </label>
                                    <input class="form--control" type="email" name="email" id="email" placeholder="Type Your Email">
                                </div>
                            </div>
                            <div class="single-info-overview margin-top-30">
                                <div class="single-info-input">
                                    <label class="info-title"> Phone Number* </label>
                                    <input class="form--control" type="tel" name="phone" id="phone" placeholder="Type Your Number">
                                </div>
                                <div class="single-info-input">
                                    <label class="info-title"> Your City* </label>
                                    <select name="city" id="city">
                                        <option value="New York">New York</option>
                                        <option value="London">London</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Paris">Paris</option>
                                        <option value="Barcelona">Barcelona</option>
                                    </select>
                                </div>
                            </div>
                            <div class="single-info-overview margin-top-30">
                                <div class="single-info-input">
                                    <label class="info-title"> Your Area* </label>
                                    <input class="form--control" type="text" name="area" id="area" placeholder="Type Your Area">
                                </div>
                                <div class="single-info-input">
                                    <label class="info-title"> Post Code* </label>
                                    <input class="form--control" type="tel" name="post_code" id="post_code" placeholder="Type Post Code">
                                </div>
                            </div>
                            <div class="single-info-overview margin-top-30">
                                <div class="single-info-input">
                                    <label class="info-title"> Your Address* </label>
                                    <input class="form--control" type="text" name="address" id="address" placeholder="Type Your Address" required>
                                </div>
                            </div>
                            <div class="single-info-overview margin-top-30">
                                <div class="single-info-input">
                                    <label class="info-title"> Order Note* </label>
                                    <textarea class="form--control textarea--form" name="order_note" id="order_note" placeholder="Type Order Note"></textarea>
                                </div>
                            </div>
                            <div class="btn-wrapper margin-top-35">
                                <a href="javascript:void(0)" class="cmn-btn btn-bg-1 booking-info-continue">Continue</a>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button booking-info-continue" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <!-- Confirmation -->
                    <fieldset class="padding-top-50 padding-bottom-100">
                        <div class="confirm-overview padding-top-30">
                            <div class="overview-author overview-author-border">
                                <div class="overview-flex-author">
                                    <div class="overview-thumb confirm-thumb">
                                        <img src="{{ asset('frontend/assets/img/service/overview1.jpg') }}" alt="">
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
                                            <span class="details my-location" id="my_location">New York <br>USA</span>
                                        </div>
                                        <div class="single-confirm margin-top-30">
                                            <h3 class="titles"> Date & Time </h3>
                                            <span class="details" id="available_date"></span>
                                            <span class="details" id="available_schedule"></span>
                                        </div>
                                    </div>
                                    <div class="booking-info padding-top-60">
                                        <h2 class="title"> Booking Information </h2>
                                        <div class="booking-details">
                                            <ul class="booking-list">
                                                <li class="lists">
                                                    <span class="list-span"> Name: </span>
                                                    <span class="list-strong" id="get_name"> </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Email: </span>
                                                    <span class="list-strong" id="get_email"> </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Phone: </span>
                                                    <span class="list-strong" id="get_phone"> </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> City: </span>
                                                    <span class="list-strong" id="get_city"> </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Area: </span>
                                                    <span class="list-strong" id="get_area"> </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Post Code: </span>
                                                    <span class="list-strong" id="get_post_code"> </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Address: </span>
                                                    <span class="list-strong" id="get_address"> </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Order Note: </span>
                                                    <span class="list-strong" id="get_order_note"> </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 margin-top-60">
                                <div class="service-overview-summery confirm-service-overview-summery ">
                                    <h4 class="title"> Booking Summery </h4>
                                    <div class="overview-summery-contents">
                                        <div class="single-summery">
                                            <span class="summery-title"> Appointment Service </span>
                                            <div class="summery-list-all">
                                                <ul class="summery-list">
                                                    <li class="list">
                                                        <span class="rooms"> Bed Room</span>
                                                        <span class="room-count bed-rooms-count">1</span>
                                                        <span class="value-count bed-rooms-total-price">$30</span>
                                                    </li>
                                                    <li class="list">
                                                        <span class="rooms"> Bath Room</span>
                                                        <span class="room-count bath-rooms-count">1</span>
                                                        <span class="value-count bath-rooms-total-price">$20</span>
                                                    </li>
                                                </ul>
                                                <ul class="summery-result-list">
                                                    <li class="result-list">
                                                        <span class="rooms"> Pagckage Fee</span>
                                                        <span class="value-count package-fee"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-summery">
                                            <span class="summery-title"> Extra Service </span>
                                            <div class="summery-list-all">
                                                <ul class="summery-list append-extra-service2">

                                                </ul>
                                                <ul class="summery-result-list result-border padding-bottom-20">
                                                    <li class="result-list">
                                                        <span class="rooms"> Subtotal</span>
                                                        <span class="value-count sub-total">$00</span>
                                                    </li>
                                                </ul>
                                                <ul class="summery-result-list result-border padding-bottom-20">
                                                    <li class="result-list">
                                                        <span class="rooms"> Tax(+)15%</span>
                                                        <span class="value-count vat-tax">$00</span>
                                                    </li>
                                                </ul>
                                                <ul class="summery-result-list">
                                                    <li class="result-list">
                                                        <span class="rooms"> <strong>Total</strong></span>
                                                        <span class="value-count final-total">$00</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="confirm-bottom-content">
                                            <div class="confirm-payment payment-border">
                                                <div class="single-checkbox">
                                                    <div class="checkbox-inlines">
                                                        <input class="check-input cash" type="checkbox" id="check1">
                                                        <label class="checkbox-label" for="check1"> Cash Payment </label>
                                                    </div>
                                                </div>
                                                <div class="single-checkbox">
                                                    <div class="checkbox-inlines">
                                                        <input class="check-input paypal" type="checkbox" id="check2">
                                                        <label class="checkbox-label" for="check2"> <img src="{{ asset('frontend/assets/img/service/payment.png') }}" alt=""> </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="checkbox-inlines bottom-checkbox terms-and-conditions">
                                                <input class="check-input" type="checkbox" id="check3">
                                                <label class="checkbox-label" for="check3"> I have read and agree to the website <a href="javascript:void(0)"> terms and 
                                                    conditions * </a> </label>
                                            </div>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a class="cmn-btn btn-appoinment btn-bg-1 pay-and-confirm-order"> Pay & Confirm Your Order </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <input type="submit" name="submit" class="action-button" value="Submit" />
                        {{-- <input type="button" name="submit" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> --}}
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