$(document).ready(function () {

	$('.forgot_pass_btn').on('click', function() {
		$('.sign_up_div').addClass('hidden');
		$('.forgot_password_div').removeClass('hidden');
	});

	$('.go_back').on('click', function() {
		$('.sign_up_div').removeClass('hidden');
		$('.forgot_password_div').addClass('hidden');
	});

	$('#myCarousel').carousel({
		interval: 1000000
	});
	$('#myCarouse2').carousel({
		interval: 1000000
	});
	$('.oneway_daterange').daterangepicker({
		opens: 'left'
	}, function (start, end, label) {
		console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
		var locale = "en-us";
		var startDate = new Date(start);
		var startmonth = startDate.toLocaleString(locale, {
			month: 'long'
		});
		var startday = startDate.toLocaleString(locale, {
			weekday: 'long'
		});
		var endDate = new Date(end);
		var endmonth = endDate.toLocaleString(locale, {
			month: 'long'
		});
		var endday = endDate.toLocaleString(locale, {
			weekday: 'long'
		});
		$('.oneway_daterange').siblings('.start_date').find('.date').text(start.format('DD'));
		$('.oneway_daterange').siblings('.start_date').find('.month').text(startmonth);
		$('.oneway_daterange').siblings('.start_date').find('.day').text(startday);
		$('.oneway_daterange').siblings('.end_date').find('.date').text(end.format('DD'));
		$('.oneway_daterange').siblings('.end_date').find('.month').text(endmonth);
		$('.oneway_daterange').siblings('.end_date').find('.day').text(endday);
	});
	$('.roundtrip_daterange').daterangepicker({
		opens: 'left'
	}, function (start, end, label) {
		console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
		var locale = "en-us";
		var startDate = new Date(start);
		var startmonth = startDate.toLocaleString(locale, {
			month: 'long'
		});
		var startday = startDate.toLocaleString(locale, {
			weekday: 'long'
		});
		var endDate = new Date(end);
		var endmonth = endDate.toLocaleString(locale, {
			month: 'long'
		});
		var endday = endDate.toLocaleString(locale, {
			weekday: 'long'
		});
		$('.roundtrip_daterange').siblings('.start_date').find('.date').text(start.format('DD'));
		$('.roundtrip_daterange').siblings('.start_date').find('.month').text(startmonth);
		$('.roundtrip_daterange').siblings('.start_date').find('.day').text(startday);
		$('.roundtrip_daterange').siblings('.end_date').find('.date').text(end.format('DD'));
		$('.roundtrip_daterange').siblings('.end_date').find('.month').text(endmonth);
		$('.roundtrip_daterange').siblings('.end_date').find('.day').text(endday);
	});
	$('.multicity_daterange').daterangepicker({
		singleDatePicker: true,
		showDropdowns: true
	}, function (start, end, label) {
		var years = moment().diff(start, 'years');
		var locale = "en-us";
		var startDate = new Date(start);
		var startmonth = startDate.toLocaleString(locale, {
			month: 'long'
		});
		var startday = startDate.toLocaleString(locale, {
			weekday: 'long'
		});
		$('.multicity_daterange').siblings('.start_date').find('.date').text(start.format('DD'));
		$('.multicity_daterange').siblings('.start_date').find('.month').text(startmonth);
		$('.multicity_daterange').siblings('.start_date').find('.day').text(startday);
	});
	$('.multicity_daterange_2').daterangepicker({
		singleDatePicker: true,
		showDropdowns: true
		}, function (start, end, label) {
			var years = moment().diff(start, 'years');
			var locale = "en-us";
			var startDate = new Date(start);
			var startmonth = startDate.toLocaleString(locale, {
				month: 'long'
			});
			var startday = startDate.toLocaleString(locale, {
				weekday: 'long'
			});
			$('.multicity_daterange_2').siblings('.start_date').find('.date').text(start.format('DD'));
			$('.multicity_daterange_2').siblings('.start_date').find('.month').text(startmonth);
			$('.multicity_daterange_2').siblings('.start_date').find('.day').text(startday);
	});
	var locale = "en-us";
	var start_Date = new Date();
	var startdate = start_Date.toLocaleString(locale, {
		day: '2-digit'
	});
	var startmonth = start_Date.toLocaleString(locale, {
		month: 'long'
	});
	var startday = start_Date.toLocaleString(locale, {
		weekday: 'long'
	});
	$('.start_date').find('.date').text(startdate);
	$('.start_date').find('.month').text(startmonth);
	$('.start_date').find('.day').text(startday);
	var end_Date = new Date();
	end_Date.setDate(end_Date.getDate() + 10);
	var enddate = end_Date.toLocaleString(locale, {
		day: '2-digit'
	});
	var endmonth = end_Date.toLocaleString(locale, {
		month: 'long'
	});
	var endday = end_Date.toLocaleString(locale, {
		weekday: 'long'
	});
	$('.oneway_end_date').find('.date').text(enddate);
	$('.oneway_end_date').find('.month').text(endmonth);
	$('.oneway_end_date').find('.day').text(endday);
	$('.flight_radio_button').on('change', function () {
		if ($(this).prop('checked') == true) {
			if ($(this).data('message') == 'one-way') {
				$('#one-way').removeClass('hidden');
				$('#round-trip').addClass('hidden');
				$('#multi-city').addClass('hidden');
			} else if ($(this).data('message') == 'round-trip') {
				$('#one-way').addClass('hidden');
				$('#round-trip').removeClass('hidden');
				$('#multi-city').addClass('hidden');
			} else if ($(this).data('message') == 'multi-city') {
				$('#one-way').addClass('hidden');
				$('#round-trip').addClass('hidden');
				$('#multi-city').removeClass('hidden');
			}
		}
	});
	$('#multi-city-flight').on('click', '.add-multi-city-flight', function () {
		var length = $(this).closest('#multi-city-flight').find('.flights_multi').length;
		if (length == 1) {
			$(this).closest('#multi-city-flight').find('.flights_multi:nth-last-child(1)').before('<div class="col-md-8 flights_multi">' + '<h3 class="www-srchf__multi__ttl"><i class="fa fa-plane"></i> Flight ' + length + 1 + ' </h3>' + '<div class="row">' + '<div class="col-md-9">' + '<div class="row">' + '<div class="col-md-12">' + '<div class="custom-input-text top-radius">' + '<i class="fa fa-map-marker"></i>' + '<input type="text" class="flight-search-form-input multi-city-input" placeholder="Origin">' + '<label class="custom_container">Nearby Airports<input type="checkbox" checked="checked">' + '<span class="custom_checkmark"></span>' + '</label>' + '</div>' + '</div>' + '<div class="col-md-12">' + '<div class="custom-input-text bottom-radius">' + '<i class="fa fa-map-marker"></i>' + '<input type="text" class="flight-search-form-input multi-city-input" placeholder="Origin">' + '<label class="custom_container">Nearby Airports<input type="checkbox" checked="checked">' + '<span class="custom_checkmark"></span>' + '</label>' + '</div>' + '</div>' + '</div>' + '</div>' + '<div class="col-md-3">' + '<div class="row">' + '<div class="col-md-12">' + '<input type="text" class="daterange multicity_daterange_' + length + 1 + ' " name="daterange" />' + '<div class="custom-input-text s_calendar square-radius square-radius-m start_date">' + '<i class="fa fa-calendar-o"></i>' + '<span class="month">' + startmonth + '</span>' + '<span class="date">' + startdate + '</span>' + '<span class="day">' + startday + '</span>' + '</div>' + '</div>' + '<span class="close-icon">' + '<i class="fa fa-times-circle close"></i>' + '</span>' + '</div>' + '</div>' + '</div>' + '</div>');
			$('.multicity_daterange_' + length + 1).daterangepicker({
				singleDatePicker: true,
				showDropdowns: true
			}, function (start, end, label) {
				var years = moment().diff(start, 'years');
				var locale = "en-us";
				var startDate = new Date(start);
				var startmonth = startDate.toLocaleString(locale, {
					month: 'long'
				});
				var startday = startDate.toLocaleString(locale, {
					weekday: 'long'
				});
				$('.multicity_daterange_' + length + 1).siblings('.start_date').find('.date').text(start.format('DD'));
				$('.multicity_daterange_' + length + 1).siblings('.start_date').find('.month').text(startmonth);
				$('.multicity_daterange_' + length + 1).siblings('.start_date').find('.day').text(startday);
			});
		} else {
			$(this).closest('#multi-city-flight').find('.flights_multi:nth-last-child(2)').after('<div class="col-md-8 flights_multi">' + '<h3 class="www-srchf__multi__ttl"><i class="fa fa-plane"></i> Flight ' + ++length + ' </h3>' + '<div class="row">' + '<div class="col-md-9">' + '<div class="row">' + '<div class="col-md-12">' + '<div class="custom-input-text top-radius">' + '<i class="fa fa-map-marker"></i>' + '<input type="text" class="flight-search-form-input multi-city-input" placeholder="Origin">' + '<label class="custom_container">Nearby Airports<input type="checkbox" checked="checked">' + '<span class="custom_checkmark"></span>' + '</label>' + '</div>' + '</div>' + '<div class="col-md-12">' + '<div class="custom-input-text bottom-radius">' + '<i class="fa fa-map-marker"></i>' + '<input type="text" class="flight-search-form-input multi-city-input" placeholder="Origin">' + '<label class="custom_container">Nearby Airports<input type="checkbox" checked="checked">' + '<span class="custom_checkmark"></span>' + '</label>' + '</div>' + '</div>' + '</div>' + '</div>' + '<div class="col-md-3">' + '<div class="row">' + '<div class="col-md-12">' + '<input type="text" class="daterange multicity_daterange_' + length + ' " name="daterange" />' + '<div class="custom-input-text s_calendar square-radius square-radius-m start_date">' + '<i class="fa fa-calendar-o"></i>' + '<span class="month">' + startmonth + '</span>' + '<span class="date">' + startdate + '</span>' + '<span class="day">' + startday + '</span>' + '</div>' + '</div>' + '<span class="close-icon">' + '<i class="fa fa-times-circle close"></i>' + '</span>' + '</div>' + '</div>' + '</div>' + '</div>');
			$('.multicity_daterange_' + length).daterangepicker({
				singleDatePicker: true,
				showDropdowns: true
			}, function (start, end, label) {
				var years = moment().diff(start, 'years');
				var locale = "en-us";
				var startDate = new Date(start);
				var startmonth = startDate.toLocaleString(locale, {
					month: 'long'
				});
				var startday = startDate.toLocaleString(locale, {
					weekday: 'long'
				});
				$('.multicity_daterange_' + length).siblings('.start_date').find('.date').text(start.format('DD'));
				$('.multicity_daterange_' + length).siblings('.start_date').find('.month').text(startmonth);
				$('.multicity_daterange_' + length).siblings('.start_date').find('.day').text(startday);
			});
		}
		if (length >= 6) {
			$(this).closest('#multi-city-flight').find('.flights_multi .add_flights').hide();
		} else if (length < 6) {
			$(this).closest('#multi-city-flight').find('.flights_multi .add_flights').show();
		}
	});
	$('#multi-city-flight').on('click', '.close-icon', function () {
    var length = $('#multi-city-flight').find('.flights_multi').length;
    if (length > 2) {
      $(this).closest('.flights_multi').remove();
    }
    // for (var i = 1; i < --length; i++) {
    //   $('#multi-city-flight').find('.flights_multi:nth-last-child('+ i +')').find('h3.www-srchf__multi__ttl').html('<i class="fa fa-plane"></i> Flight ' + i);
    // }
		if (length >= 6) {
			$('#multi-city-flight').find('.flights_multi .add_flights').hide();
		} else if (length < 6) {
			$('#multi-city-flight').find('.flights_multi .add_flights').show();
		}
	});


	$('.checkin_date').daterangepicker({
		singleDatePicker: true,
		showDropdowns: true
	});


	$('.checkout_date').daterangepicker({
		singleDatePicker: true,
		showDropdowns: true
	});

	$('.dropdown-toggle').on('click', function() {
	  $(this).closest('.dropdown').toggleClass('open');
	});

	$('.fa_angle_toggle').on('click', function() {
		$(this).toggleClass('hidden');
		$(this).siblings('.fa_angle_toggle').toggleClass('hidden');
		$(this).closest('.row').find('.traveller_detail').toggleClass('hidden');
	});
	$('.add_adult').on('click', function() {

		var colCount = 0;
      	$('#adult_panel>.row').each(function () {
	        colCount++;
	    });

      	colCount = parseInt(colCount)+1;
	    console.log(colCount);

		$('#adult_panel').append('<div class="row padd_0">'+
              '<div class="col-md-12">'+
                '<div class="row header_border_bottom">'+
                  '<div class="col-md-9">'+
                    '<h3>Adult '+ colCount +'</h3>'+
                  '</div>'+
                  '<div class="col-md-3">'+
                    '<p>* REQUIRED FIELDS</p>'+
                  '</div>'+
                '</div>'+
                '<div class="row">'+
                  '<div class="col-md-12">'+
                    '<div class="s_form_padding">'+
                      '<div class="s_dashboard_form">'+
                       '<div class="row">'+
                        '<div class="col-md-3">'+
                          '<div class="form-group">'+
                            '<label class="width_50">Full Name *</label>'+
                            '<select class="form-control s_form_field width_50" name="title[]" required>'+
                              '<option value="Mr">Mr</option>'+
                              '<option value="Mrs">Mr.s</option>'+
                            '</select>'+
                          '</div>'+
                        '</div>'+
                        '<div class="col-md-3">'+
                          '<div class="form-group">'+
                            '<input type="text" class="form-control s_form_field" placeholder="First" name="firstname[]">'+
                          '</div>'+
                        '</div>'+
                        '<div class="col-md-3">'+
                          '<div class="form-group">'+
                            '<input type="text" class="form-control s_form_field" placeholder="Mid" name="middlename[]">'+
                          '</div>'+
                        '</div>'+
                        '<div class="col-md-3">'+
                          '<div class="form-group">'+
                            '<input type="text" class="form-control s_form_field" placeholder="Last" name="lastname[]">'+
                          '</div>'+
                        '</div>'+
                       '</div>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                '</div>'+
                '<div class="row">'+
                  '<div class="col-md-8">'+
                    '<div class="form-group">'+
                      '<select class="form-control s_form_field" name="passport_option[]" required>'+
                        '<option disable>Select</option>'+
                        '<option value="Passport">Passport</option>'+
                        '<option value="Saudi Muqeem ID">Saudi Muqeem ID</option>'+
                        '<option value="Saudi Citizen ID">Saudi Citizen ID</option>'+
                      '</select>'+
                    '</div>'+
                  '</div>'+
                  '<div class="col-md-4">'+
                    '<div class="form-group">'+
                      '<input type="text" class="form-control s_form_field" placeholder="Frequest flyer number" name="frequest_number[]">'+
                    '</div>'+
                  '</div>'+
                '</div>'+
                '<div class="row">'+
                  '<div class="s_sub_end_button_bg">'+
                    '<div class="col-md-12">'+
                      '<p class="s_botton_subheading">We share the frequent flyer details with airline, though we cant guarantee point awards.</p>'+
                    '</div>'+
                  '</div>'+
                '</div>'+
              '</div>'+
            '</div>');
	});

});


  $(function () {
  $("#datepicker").datepicker({
        autoclose: true,
        todayHighlight: true
  }).datepicker('update', new Date());
});

$(function () {
  $("#datepicker1").datepicker({
        autoclose: true,
        todayHighlight: true
  }).datepicker('update', new Date());
});
