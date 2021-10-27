$(document).ready(function(){
    //increment decrement bed rooms
    $('#inc_dec_rooms').keyup(function(){
        var bed_rooms_count = $('#inc_dec_rooms').val();
        var bed_rooms_unit_price = $('.bed-rooms-price').text().replace('$', '');
        var bed_rooms_total_price = (bed_rooms_count * bed_rooms_unit_price);
        $('.bed-rooms-count').text(bed_rooms_count);
        $('.bed-rooms-total-price').text('$'+bed_rooms_total_price);
        packageFee(sub_total);
        // console.log(bed_rooms_total_price);
    })
    
     //increment decrement bath rooms
    $('#inc_dec_bath_rooms').keyup(function(){
        var bath_rooms_count = $('#inc_dec_bath_rooms').val();
        var bath_rooms_unit_price = $('.bath-rooms-price').text().replace('$', '');
        var bath_rooms_total_price = (bath_rooms_count * bath_rooms_unit_price);
        $('.bath-rooms-count').text(bath_rooms_count);
        $('.bath-rooms-total-price').text('$'+bath_rooms_total_price);
        packageFee(sub_total);
        // console.log(bath_rooms_total_price);
    })

    //add remove extra service
    var sub_total = 0;
    // var package_fee = parseInt($('.package-fee').text().replace('$', ''));
    $('.overview-extra .check-input').click(function(){
        var service_id = $(this).attr('id');
        var service_name = $('label[for=' + service_id + ']').text();
        var extra_service_unit_price = $('span[price=' + service_id + ']').text().replace('$', '');

        //add extra service if checked
        if($(this).is(":checked")) {
        $('.append-extra-service').append('<li class="list" service-id="'+service_id+'"><span class="rooms">' +service_name+'</span>' + '<span class="room-count service-count">'+1+'</span>'+ '<span class="value-count total-price">$'+extra_service_unit_price+'</span>' +'</li>');
                var service_count = $('.append-extra-service li[service-id=' + service_id + '] .service-count').text();
                var total_price = (extra_service_unit_price*service_count);
                sub_total = (sub_total+total_price);
                $('.single-summery .sub-total').text('$'+sub_total);
                packageFee(sub_total);
                
                // increment decrement extra service
                $(document).on('focusin','.extra-service', function(){
                    //get old value
                    $(this).val();
                    $(this).data('val', $(this).val());
                }).on('change','.extra-service', function(){
                    var prev = $(this).data('val');
                    // var current = $(this).val();
                    // console.log("Prev value " + prev);
                    // console.log("New value " + current);

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
                });
                

            //increment decrement extra service
            // $('.extra-service').keyup(function(){
                // var get_service_id = $(this).attr('id');
                // var service_count = $('#'+get_service_id).val();
                // var total_price = (extra_service_unit_price*service_count);

                // //get old value
                // var saving_value = $(this).val();
                // var get_saving_value = $(this).data('val', saving_value);
                // console.log('saving old value= '+get_saving_value);

                // var abc = service_id+'_service_count';
            
                // if(abc==get_service_id){
                //     $('.append-extra-service li[service-id=' + service_id + '] .service-count').text(service_count);
                //     $('.append-extra-service li[service-id=' + service_id + '] .total-price').text('$'+total_price);
                //     var total= parseInt($('.append-extra-service li[service-id=' + service_id + '] .total-price').text().replace('$', ''));
                //     sub_total=(sub_total+total);
                //     $('.single-summery .sub-total').text('$'+sub_total);
                // }
                // console.log(sub_total);
            // })
        }else{
            var service_count = $('.append-extra-service li[service-id=' + service_id + '] .service-count').text();
            var total_price = (extra_service_unit_price*service_count);
            sub_total = (sub_total-total_price)*1;
            // sub_total = (sub_total)-(prev*extra_service_unit_price);
            $('.single-summery .sub-total').text('$'+sub_total);
            $('.append-extra-service li[service-id=' + service_id + ']').remove();   
            packageFee(sub_total); 
        }
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

})