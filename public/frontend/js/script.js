$(document).ready(function(){

    // Get Current Locatio---------------------------------------------------------
    var map;
    function initMap() {
    var mapCenter = new google.maps.LatLng(47.6145, -122.3418); //Google map Coordinates
    map = new google.maps.Map($("#map")[0], {
        center: mapCenter,
        zoom: 8
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
        position: mapCenter,
        map: map,
        });
    }
    initMap();
    var my_location='';
    $("#find_btn").click(function (){
    if ("geolocation" in navigator){
        navigator.geolocation.getCurrentPosition(function(position){ 
            infoWindow = new google.maps.InfoWindow({map: map});
            var pos = {lat: position.coords.latitude, lng: position.coords.longitude};
            infoWindow.setPosition(pos);
            infoWindow.setContent("Found your location <br />Lat : "+position.coords.latitude+" </br>Lang :"+ position.coords.longitude);
            my_location = $('.my-location').html('Lat :'+position.coords.latitude+'</br>Lang :'+ position.coords.longitude);
            map.panTo(pos);
            });
        }else{
        console.log("Browser doesn't support geolocation!");
    }
    });

    //confirm-location
    $('.confirm-location .next').on('click',function(){
        if(my_location==''){
            alert('Please Select Current Location');
        }else{
            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $(".step-list li, .step-list-two li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({ opacity: 0 }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({ 'opacity': opacity });
                },
                duration: 500
            });
        }
    })

    //Increment Decrement bed rooms---------------------------------------------------------
    function incDecBedRooms(){
        $('#inc_dec_rooms').keyup(function(){
            var bed_rooms_count = $('#inc_dec_rooms').val();
            if(isNaN(bed_rooms_count)){
                alert('Please Enter Numbers Only');
            }else{
                var bed_rooms_unit_price = $('.bed-rooms-price').text().replace('$', '');
                var bed_rooms_total_price = (bed_rooms_count * bed_rooms_unit_price);
                $('.bed-rooms-count').text(bed_rooms_count);
                $('.bed-rooms-total-price').text('$'+bed_rooms_total_price);
                packageFee(sub_total);
                // console.log(bed_rooms_total_price);
            } 
        })
    }
    incDecBedRooms();

        
    //Increment Decrement bath rooms
    function incDecBathRooms(){
        $('#inc_dec_bath_rooms').keyup(function(){
            var bath_rooms_count = $('#inc_dec_bath_rooms').val();
            if(isNaN(bath_rooms_count)){
                alert('Please Enter Numbers Only');
            }else{
            var bath_rooms_unit_price = $('.bath-rooms-price').text().replace('$', '');
            var bath_rooms_total_price = (bath_rooms_count * bath_rooms_unit_price);
            $('.bath-rooms-count').text(bath_rooms_count);
            $('.bath-rooms-total-price').text('$'+bath_rooms_total_price);
            packageFee(sub_total);
            // console.log(bath_rooms_total_price);
            }
        })
    }
    incDecBathRooms();

    //add remove extra service---------------------------------------------------------
    var sub_total = 0;
    $('.overview-extra .check-input').click(function(){
        var service_id = $(this).attr('id');
        var service_name = $('label[for=' + service_id + ']').text();
        var extra_service_unit_price = $('span[price=' + service_id + ']').text().replace('$', '');
        
        //add extra service if checked
        if($(this).is(":checked")) {
        $('.append-extra-service').append('<li class="list" service-id="'+service_id+'"><span class="rooms">' +service_name+'</span>' + '<span class="room-count service-count">'+1+'</span>'+ '<span class="value-count total-price">$'+extra_service_unit_price+'</span>' +'</li>');
        $('.append-extra-service2').append('<li class="list" service-id2="'+service_id+'"><span class="rooms">' +service_name+'</span>' + '<span class="room-count service-count">'+1+'</span>'+ '<span class="value-count total-price">$'+extra_service_unit_price+'</span>' +'</li>');
            var service_count = $('.append-extra-service li[service-id=' + service_id + '] .service-count').text();
            var total_price = (extra_service_unit_price*service_count);
            sub_total = (sub_total+total_price);
            $('.single-summery .sub-total').text('$'+sub_total);
            packageFee(sub_total);
            
            // increment decrement extra service
            $(document).on('focusin','.extra-service', function(){
                //get old value
                $(this).val();
                $(this).data('val', $(this).val()).replace(/\D/g,'');
            }).on('change','.extra-service', function(){
                var prev = $(this).data('val').replace(/\D/g,'');
                var current = $(this).val();
                // console.log( prev+' '+current);
                if(isNaN(current||prev)){
                    alert('Please Enter Numbers Only');
                }else{
                    var get_service_id = $(this).attr('id');
                    var service_count = $('#'+get_service_id).val();
                    var total_price = (extra_service_unit_price*service_count);
                    var is_match = service_id+'_service_count';
                
                    if(is_match==get_service_id){
                        $('.append-extra-service li[service-id=' + service_id + '] .service-count').text(service_count);
                        $('.append-extra-service li[service-id=' + service_id + '] .total-price').text('$'+total_price);
                        var total= parseInt($('.append-extra-service li[service-id=' + service_id + '] .total-price').text().replace('$', ''));
                        sub_total=(sub_total+total)-(prev*extra_service_unit_price);
                        $('.single-summery .sub-total').text('$'+sub_total);
                        packageFee(sub_total);
                    }
                }
            });
                
            //increment decrement extra service
            // $('.extra-service').keyup(function(){
            //     var get_service_id = $(this).attr('id');
            //     var service_count = $('#'+get_service_id).val();
            //     var total_price = (extra_service_unit_price*service_count);

            //     var is_match = service_id+'_service_count';
            //     if(is_match==get_service_id){
            //         $('.append-extra-service li[service-id=' + service_id + '] .service-count').text(service_count);
            //         $('.append-extra-service li[service-id=' + service_id + '] .total-price').text('$'+total_price);
            //         var total= parseInt($('.append-extra-service li[service-id=' + service_id + '] .total-price').text().replace('$', ''));
            //         sub_total=(sub_total+total);
            //         $('.single-summery .sub-total').text('$'+sub_total);
            //     }
            //     console.log(sub_total);
            // })
        }else{
            // remove extra service if not checked
            var service_count = $('.append-extra-service li[service-id=' + service_id + '] .service-count').text();
            var total_price = (extra_service_unit_price*service_count);
            sub_total = (sub_total-total_price)*1;
            $('.single-summery .sub-total').text('$'+sub_total);
            $('.append-extra-service li[service-id=' + service_id + ']').remove();   
            $('.append-extra-service2 li[service-id2=' + service_id + ']').remove();   
            packageFee(sub_total); 
        }
    })


    //confirm-service
    $('.confirm-service .next').on('click',function(){
        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $(".step-list li, .step-list-two li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({ 'opacity': opacity });
            },
            duration: 500
        });
    })
   
    //package fee calculate
    function packageFee(extra_service_fee){
        let bed_rooms_total_price = parseInt($('.bed-rooms-total-price').text().replace("$", ""));
        // console.log(bed_rooms_total_price);
        let bath_rooms_total_price = parseInt($('.bath-rooms-total-price').text().replace("$", ""));
        // console.log(bath_rooms_total_price);
        let package_fee = (bed_rooms_total_price + bath_rooms_total_price);
        $('.package-fee').text('$'+package_fee);
        let service_fee=0;
        let sub_total=0;
        let tax=0;
        let final_total=0;
        service_fee = extra_service_fee;
        sub_total = service_fee+package_fee;
        tax = parseInt((sub_total*15)/100);
        final_total=sub_total+tax;
        $('.single-summery .sub-total').text('$'+sub_total);
        $('.result-list .vat-tax').text('$'+tax);
        $('.result-list .final-total').text('$'+final_total);

    }
    packageFee(sub_total);

    //Date and time
    function GetDates(startDate, daysToAdd) {
        var aryDates = [];
        for (var i = 0; i <= daysToAdd; i++) {
            var currentDate = new Date();
            currentDate.setDate(startDate.getDate() + i);
            aryDates.push(DayAsString(currentDate.getDay()) + ", " + currentDate.getDate() + " " + MonthAsString(currentDate.getMonth()) + " " + currentDate.getFullYear());
        }
        return aryDates;
    }

    function MonthAsString(monthIndex) {
        var d = new Date();
        var month = new Array();
        month[0] = "January";month[1] = "February";month[2] = "March";month[3] = "April";month[4] = "May";month[5] = "June";month[6] = "July";month[7] = "August";month[8] = "September";month[9] = "October";month[10] = "November";month[11] = "December";
        return month[monthIndex];
    }

    function DayAsString(dayIndex) {
        var weekdays = new Array(7);
        weekdays[0] = "Sunday";weekdays[1] = "Monday";weekdays[2] = "Tuesday";weekdays[3] = "Wednesday";weekdays[4] = "Thursday";weekdays[5] = "Friday";weekdays[6] = "Saturday";
        return weekdays[dayIndex];
    }

    var startDate = new Date();
    var aryDates = GetDates(startDate, 7);
    //show next seven days
    for(var i=0; i<7; i++){
        $('.date-overview .show-date').append('<li class="list"> <a href="javascript:void(0)" class="get-date">'+aryDates[i]+'</a> </li>');
    }
    //show available month year
    $('.date-overview .month-year').text(startDate.toLocaleString("default", { month: "long" })+', '+startDate.getFullYear());

    //get available date
    var available_date='';
    $('.date-overview .show-date .get-date').on('click',function(){
        available_date = $(this).text();
        $('.date-overview .single-date-overview .available-schedule-date').text(available_date);
        //set value in confirmation fieldset
        $('.confirmation .confirm-overview-left #available_date').text(available_date);     
    })

    //get available schedule
    var available_schedule ='';
    $('.date-overview .single-date-overview .available-schedule').on('click',function(){
        available_schedule = $(this).text();
        //set value in confirmation fieldset
        $('.confirmation .confirm-overview-left #available_schedule').text(available_schedule);
    })

    //confirm-date-time
    $('.confirm-date-time .next').on('click',function(){
        if(available_date=='' || available_schedule==''){
            alert('Please Select Date and Time');
        }else{
            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $(".step-list li, .step-list-two li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({ opacity: 0 }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({ 'opacity': opacity });
                },
                duration: 500
            });
        }  
    })

    //confirm-information
    $('.confirm-information .next').on('click',function(){
        var name=$('#name').val();
        var email=$('#email').val();
        var phone=$('#phone').val();
        var city=$('#city').val();
        var area=$('#area').val();
        var post_code=$('#post_code').val();
        var address=$('#address').val();
        var order_note=$('#order_note').val();
        // console.log(name+' '+email+' '+phone+' '+city+' '+area+' '+post_code+' '+address+' '+order_note);
        
        //set value in confirmation fieldset
        $('.confirmation .booking-details #get_name').text(name);
        $('.confirmation .booking-details #get_email').text(email);
        $('.confirmation .booking-details #get_phone').text(phone);
        $('.confirmation .booking-details #get_city').text(city);
        $('.confirmation .booking-details #get_area').text(area);
        $('.confirmation .booking-details #get_post_code').text(post_code);
        $('.confirmation .booking-details #get_address').text(address);
        $('.confirmation .booking-details #get_order_note').text(order_note);
        if(name=='' || email=='' || phone=='' || city=='' || area=='' || post_code=='' || address=='' || order_note==''){
            alert('Please Fill All Fields');
        }else{
            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $(".step-list li, .step-list-two li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({ opacity: 0 }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({ 'opacity': opacity });
                },
                duration: 500
            });
        }  
    })

    //Order Confirm
    $('.ms-order-form').on('submit',function(e){
        e.preventDefault();
        if($('.confirm-payment .check-input').is(":checked")){           
            if($('.terms-and-conditions .check-input').is(":checked")){
                var my_location = $('#my_location').text();
                var available_date = $('#available_date').text();
                var available_schedule = $('#available_schedule').text();
                var name = $('.booking-details #get_name').text();
                var email = $('.booking-details #get_email').text();
                var phone = $('.booking-details #get_phone').text();
                var city = $('.booking-details #get_city').text();
                var area = $('.booking-details #get_area').text();
                var post_code = $('.booking-details #get_post_code').text();
                var address = $('.booking-details #get_address').text();
                var order_note = $('.booking-details #get_order_note').text();
                //service overview
                var bed_rooms = $('.confirm-service-overview-summery .bed-rooms-count').text();
                var bed_rooms_total_price = $('.confirm-service-overview-summery .bed-rooms-total-price').text().replace("$", "");
                var bed_room_unit_price = parseInt(bed_rooms_total_price/bed_rooms);
                var bath_rooms = $('.confirm-service-overview-summery .bath-rooms-count').text();
                var bath_rooms_total_price = $('.confirm-service-overview-summery .bath-rooms-total-price').text().replace("$", "");
                var bath_room_unit_price = parseInt(bath_rooms_total_price/bath_rooms);
                var confirm_sub_total = $('.confirm-service-overview-summery .sub-total').text().replace("$", "");
                var confirm_vat_tax = $('.confirm-service-overview-summery .vat-tax').text().replace("$", "");
                var confirm_final_total = $('.confirm-service-overview-summery .final-total').text().replace("$", "");
                // console.log(my_location,available_date,available_schedule,name,email,phone,city,area,post_code,address,order_note,bed_rooms,bed_rooms_total_price,bed_room_unit_price,bath_rooms,bath_rooms_total_price,bath_room_unit_price,confirm_sub_total,confirm_vat_tax,confirm_final_total);
                
                //extra services

                //payment
                if($('.confirm-payment .cash').is(":checked")){
                    var payment_method = 'Cash Payment';
                    // alert(payment_method);
                }
                if($('.confirm-payment .paypal').is(":checked")){
                    var payment_method = 'Paypal';
                    // alert(payment_method);
                } 

                //ajax request
                $.ajax({
                    url:'/place-order',
                    method:'post',
                    data:{
                        location:my_location,available_date:available_date,available_schedule:available_schedule,
                        name:name,email:email,phone:phone,city:city,area:area,post_code:post_code,
                        address:address,order_note:order_note,bed_rooms:bed_rooms,
                        bed_rooms_total_price:bed_rooms_total_price,bed_room_unit_price:bed_room_unit_price,
                        bath_rooms:bath_rooms,bath_rooms_total_price:bath_rooms_total_price,
                        bath_room_unit_price:bath_room_unit_price,sub_total:confirm_sub_total,
                        vat_tax:confirm_vat_tax,final_total:confirm_final_total,payment_method:payment_method
                    },
                    success:function(data){ 
                      console.log(data);
                      if(data.status =='true'){
                        //   alert('Your Order Successfully Placed. Thanks');
                          $('.ms-order-form').html(`
                          <fieldset class="padding-top-80 padding-bottom-100">
                            <div class="form-card successful-card">
                                <h2 class="title-step"> SUCCESS ! </h2>
                                <div class="succcess-icon">
                                    <i class="las la-check"></i>
                                </div>
                                <h5 class="purple-text text-center">Your Oeder Successfully Compleated</h5>
                                <div class="btn-wrapper text-center margin-top-35">
                                    <a href="javascript:void(0)" class="cmn-btn btn-bg-1">Thanks To Choose Us</a>
                                </div>
                            </div>
                          </fieldset>
                          `)
                        // $('#enroll_form')['0'].reset();
                      }
                    },error:function(data){
                        alert('Please Fill All Information');
                     }
                  });

                
            } else{
                alert('Please Confirm Terms and Conditions');
            }
        }else{
            alert('Please Confirm payment methods');
        }
    });
});