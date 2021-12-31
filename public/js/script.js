(function() {
	var $;
	$ = this.jQuery || window.jQuery;
	win = $(window), body = $('body'), doc = $(document);

	$.fn.hc_accordion = function() {
		var acd = $(this);
		acd.find('ul>li').each(function(index, el) {
			var act = $(el).find('ul').is(':hidden') ? "" : 'active';
			if($(el).find('ul li').length > 0) $(el).prepend('<button type="button" class="acd-drop '+act+'"></button>');
		});
		acd.on('click','.acd-drop', function(e){
			e.preventDefault();
			var ul=$(this).nextAll("ul");
			if(ul.is(":hidden") === true){
				ul.parent('li').parent('ul').children('li').children('ul').slideUp(180);
				ul.parent('li').parent('ul').children('li').children('.acd-drop').removeClass("active");
				$(this).addClass("active");
				ul.slideDown(180);
			}
			else{
				$(this).removeClass("active");
				ul.slideUp(180);
			}
		});
	}

	// $.fn.hc_countdown = function(options){
	// 	var settings = $.extend({
	//         date: new Date().getTime() + 1000 * 60 * 60 * 24,
	//     }, options ), this_ = $(this);

	//     var countDownDate = new Date(settings.date).getTime();

	//     var count = setInterval(function() {
	//     	var now = new Date().getTime();
	//     	var distance = countDownDate - now;
	//     	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	//     	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	//     	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	//     	var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	//     	this_.html( '<div class="item"><span>'+ days +'</span> ngày</div>' 
	//     		+'<div class="item"><span>'+ hours + '</span> giờ</div>' 
	//     		+'<div class="item"><span>'+ minutes + '</span> phút </div>'
	//     		+'<div class="item"><span>'+ seconds + '</span> giây </div>'
	//     	);
	//     	if (distance < 0) {
	//     		clearInterval(count);
	//     	}
	//     }, 1000);
	// }

	// $.fn.hc_upload = function(options){
	// 	var settings = $.extend({
	//         multiple: false,
	//         result: '.hc-upload-pane',
	//     }, options ), this_ = $(this);

	// 	var input_name = this_.attr('name');
	// 	this_.removeAttr('name');

	//     this_.change(function(e){
	//     	if($(settings.result).length > 0){
	// 	    	var files = event.target.files;
	// 	    	if(settings.multiple){
	// 	    		for(var i = 0, files_len = files.length ; i<files_len; i++){
	// 		            var path = URL.createObjectURL(files[i]);
	// 			        var name = files[i].name;
	// 			        var size = Math.round(files[i].size/1024/1024 * 100) / 100;
	// 			        var type = files[i].type.slice(files[i].type.indexOf('/')+1);

	// 			        var img = $('<img src="'+path+'">');
	// 			        var input = $('<input type="hidden" name="'+input_name+'[]"'
	// 			        	+'" value="'+path
	// 			        	+'" data-name="'+name
	// 			        	+'" data-size="'+size
	// 			        	+'" data-type="'+type
	// 			        	+'" data-path="'+path
	// 			        	+'">');
	// 			        var elm = $('<div class="hc-upload"><button type="button" class="hc-del smooth">&times;</button></div>').append(img).append(input);
	// 			        $(settings.result).append(elm);
	// 		        }
	// 	    	}
	// 	    	else{
	// 	    		var path = URL.createObjectURL(files[0]);
	// 				var img = $('<img src="'+path+'">');
	// 				var elm = $('<div class="hc-upload"><button type="button" class="hc-del smooth">&times;</button></div>').append(img);
	// 				$(settings.result).html(elm);
	// 	    	}
	// 	    }
	//     });

	//     body.on('click', '.hc-upload .hc-del', function(e){
	// 		e.preventDefault();
	// 		this_.val('');
	// 		$(this).closest('.hc-upload').remove();
	// 	});
	// }

}).call(this);


jQuery(function($) {
	var win = $(window), body = $('body'), doc = $(document);

	var FU = {
		// get_Ytid: function(url){
		// 	var rx = /^.*(?:(?:youtu\.be\/|v\/|vi\/|u\/\w\/|embed\/)|(?:(?:watch)?\?v(?:i)?=|\&v(?:i)?=))([^#\&\?]*).*/;
		//     if(url) var arr = url.match(rx);
		//     if(arr) return arr[1];
		// },
		// get_currency: function(str){
		// 	if(str) return str.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
		// },
		animate: function(elems){
	        var animEndEv = 'webkitAnimationEnd animationend';
	        elems.each(function () {
	            var $this = $(this),
	            $animationType = $this.data('animation');
	            $this.addClass($animationType).one(animEndEv, function() {
	                $this.removeClass($animationType);
	            });
	        });
		},
	};

	var UI = {
		mMenu: function(){
			var main_nav = $('.main-nav');
			var m_nav = $('<div class="m-nav psy-pane"><button class="m-nav-close">&times;</button><div class="nav-ct"></div></div>');
			body.append(m_nav);

			m_nav.find('.m-nav-close').click(function(e) {
				e.preventDefault();
				mnav_close();
			});

			m_nav.find('.nav-ct').append(main_nav.children().clone());

			var mnav_open = function(){
				m_nav.addClass('active');
				body.append('<div class="m-nav-over"></div>').css('overflow', 'hidden');
			}
			var mnav_close = function(){
				m_nav.removeClass('active');
				body.children('.m-nav-over').remove();
				body.css('overflow', '');
			}

			doc.on('click', '.m-nav-open', function(e) {
				e.preventDefault();
				if(win.width() <=1199) mnav_open();
			}).on('click', '.m-nav-over', function(e) {
				e.preventDefault();
				mnav_close();
			});

			m_nav.hc_accordion();
		},

		header: function(){
			var elm = $('header'), h = elm.innerHeight(), offset = 0;
			var fixed = function(){
				elm.addClass('fixed');
				// body.css('margin-top', h);
			}
			var unfixed = function(){
				elm.removeClass('fixed');
				// body.css('margin-top', '');
			}
			win.scrollTop()> offset ? fixed() : unfixed();
			win.scroll(function(e) {
				win.scrollTop()> offset ? fixed() : unfixed();
			});

			
		},
		backTop: function(){
			var back_top = $('.back-to-top'), offset = 800;

			back_top.click(function(){
				$("html, body").animate({ scrollTop: 0 }, 800 );
				return false;
			});

			if(win.scrollTop() > offset){ 
				back_top.fadeIn(200);
			}

			win.scroll(function() {
				if(win.scrollTop() > offset ) back_top.fadeIn(200); 
				else back_top.fadeOut(200);
			});
		},
		slider: function(){
			$('.partner-cas').slick({
				slidesToShow: 5,
				slidesToScroll: 1,
				arrows: false,
				autoplay: true,
			    // asNavFor: '',
			    // focusOnSelect: true,
			    swipeToSlide: true,
			    autoplaySpeed: 3000,
			    responsive: [
			    {
			    	breakpoint: 1199,
			    	settings: {
			    		slidesToShow: 4,
			    	}
			    },
			    {
			    	breakpoint: 767,
			    	settings: {
			    		slidesToShow: 3,
			    	}
			    },
			    {
			    	breakpoint: 575,
			    	settings: {
			    		slidesToShow: 2,
			    	}
			    },
			    ],
			})
			// $('.slider-cas').slick({
			// 	nextArrow: '<img src="images/next.png" class="next" alt="Next">',
			// 	prevArrow: '<img src="images/prev.png" class="prev" alt="Prev">',
			// 	autoplay: true,
   //          	speed: 800,
   //          	autoplaySpeed: 3000,
   //          	pauseOnHover: false,
   //          	arrows: false,
			// 	// nextArrow: '<i class="fa fa-angle-right smooth next"></i>',
   //          	// prevArrow: '<i class="fa fa-angle-left smooth prev"></i>',
   //          	// arrows: false,
   //          	// dots: true,
			// })
			// FU.animate($(".slider-cas .slick-current [data-animation ^= 'animated']"));
			// $('.slider-cas').on('beforeChange', function(event, slick, currentSlide, nextSlide){
			// 	if(currentSlide!=nextSlide){
			// 		var aniElm = $(this).find('.slick-slide').find("[data-animation ^= 'animated']");
			// 		FU.animate(aniElm);
			// 	}
			// });
			
		},
		input_number: function(){
			doc.on('keydown', '.numberic', function(event) {
				if (!(!event.shiftKey
					&& !(event.keyCode < 48 || event.keyCode > 57)
					|| !(event.keyCode < 96 || event.keyCode > 105)
					|| event.keyCode == 46
					|| event.keyCode == 8
					|| event.keyCode == 190
					|| event.keyCode == 9
					|| event.keyCode == 116
					|| (event.keyCode >= 35 && event.keyCode <= 39)
					)) {
					event.preventDefault();
			}
		});
			// doc.on('click', '.i-number .up', function(e) {
			//     e.preventDefault();
			//     var input = $(this).parents('.i-number').children('input');
			//     var max = Number(input.attr('max')), val = Number(input.val());
			//     if(!isNaN(val)) {      
			//         if(!isNaN(max) && input.attr('max').trim()!='') { 
			//             if(val >= max){
			//                 return false;
			//             }
			//         }
			//         input.val(val + 1);
			//         input.trigger('number.up');
			//     }
			// });
			// doc.on('click', '.i-number .down', function(e) {
			//     e.preventDefault();
			//     var input = $(this).parents('.i-number').children('input');
			//     var min = Number(input.attr('min')), val = Number(input.val());
			//     if(!isNaN(val)){
			//         if(!isNaN(min) && input.attr('max').trim()!=''){ 
			//             if(val <= min){
			//                 return false;
			//             }
			//         }
			//         input.val(val - 1);
			//         input.trigger('number.down');
			//     }
			// });
		},
		yt_play: function(){
			// doc.on('click', '.yt-box .play', function(e) {
		 //        var id = FU.get_Ytid($(this).closest('.yt-box').attr('data-url'));
		 //        $(this).closest('.yt-box iframe').remove();
		 //        $(this).closest('.yt-box').append('<iframe src="https://www.youtube.com/embed/'+id+'?rel=0&amp;autoplay=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>');
		 //    });
		},
		psy: function(){
			var btn = '.psy-btn', sec = $('.psy-section'), pane = '.psy-pane';
			doc.on('click', btn, function(e) {
				e.preventDefault();
				$(this).closest(pane).find(btn).removeClass('active');
				$(this).addClass('active');
				$("html, body").animate({ scrollTop: $($(this).attr('href')).offset().top - 100 }, 600 );
			});

			var section_act = function(){
				sec.each(function(index, el) {
					if(win.scrollTop() + (win.height()/2) >= $(el).offset().top){
						var id = $(el).attr('id');
						$(pane).find(btn).removeClass('active');
						$(pane).find(btn+'[href="#'+id+'"]').addClass('active');
					}
				});
			}
			section_act();
			win.scroll(function(){
				section_act();
			});
		},
		toggle: function(){
			// var ani = 100;
	  //       $('[data-show]').each(function(index, el) {
	  //           var ct = $($(el).attr('data-show'));
	  //           $(el).click(function(e) {
	  //               e.preventDefault();
	  //               ct.fadeToggle(ani);
	  //           });
	  //       });
	  //       win.click(function(e){
   //              $('[data-show]').each(function(index, el){
   //                  var ct = $($(el).attr('data-show'));
   //                  if(ct.has(e.target).length == 0 && !ct.is(e.target) && $(el).has(e.target).length == 0 && !$(el).is(e.target)){
   //                      ct.fadeOut(ani);
   //                  }
   //              });
	  //       });
	},
	uiCounterup: function(){
	        // var item = $('.hc-couter'), flag = true;
	        // if(item.length > 0){
	        //     run(item);
	        //     win.scroll(function() {
	        //         if(flag == true){
	        //             run(item);
	        //         }
	        //     });

	        //     function run(item){
	        //     	if(win.scrollTop() + 70 < item.offset().top && item.offset().top + item.innerHeight() < win.scrollTop() + win.height()){
		       //          count(item);
		       //          flag = false;
		       //      }
	        //     }

	        //     function count(item){
	        //         item.each(function(){
	        //             var this_ = $(this);
	        //             var num = Number(this_.text().replace(".", ""));
	        //             var incre = num/80;
	        //             function start(counter){
	        //                 if(counter <= num){
	        //                     setTimeout(function(){
	        //                         this_.text(FU.get_currency(Math.ceil(counter)));
	        //                         counter = counter + incre;
	        //                         start(counter);
	        //                     }, 20);
	        //                 }
	        //                 else{
	        //                 	this_.text(FU.get_currency(num));
	        //                 }
	        //             }
	        //             start(0);
	        //         });
	        //     }

	        // }
	    },

	    drop: function(){
			// $('.drop').each(function() {
	  //           var this_ = $(this);
	  //           var label = this_.children('a');
	  //           var ct = this_.children('ul');
	  //           var item = ct.children('li').children('a');

	  //           this_.click(function() {
	  //               ct.slideToggle(150);
	  //           });

	  //           item.click(function(e) {
	  //               e.preventDefault();
	  //               label.html($(this).html());
	  //           });

	  //           win.click(function(e) {
	  //               if(this_.has(e.target).length == 0 && !this_.is(e.target)){
	  //                   this_.children('ul').slideUp(150);
	  //               }
	  //           })
	  //       });
	},

	uicollapse: function(){
		$('.hc-collapse .head').click(function(event) {
			var ct=$(this).nextAll(".ct");
			if(ct.is(":hidden") === true){
		            // ct.parent('.item').parent('.hc-collapse').children('.item').children('.ct').slideUp(180);
		            // ct.parent('.item').parent('.hc-collapse').children('.item').children('.head').removeClass("active");
		            $(this).addClass("active");
		            ct.slideDown(180);
		        }
		        else{
		        	$(this).removeClass("active");
		        	ct.slideUp(180);
		        }
		    });
	},

	init: function(){
		UI.mMenu();
		UI.header();
		UI.slider();
		UI.backTop();
			// UI.toggle();
			UI.input_number();
			// UI.yt_play();
			UI.psy();
			UI.uicollapse();
		},
	}


	UI.init();

	var wow = new WOW({offset:50,mobile:false}); 
	wow.init();

	$('.sale-off button').click(function(e) {
		e.preventDefault();
		$(this).parents('.sale-off').toggleClass('active');
	});


	var $animation_elements = $('.scroll_animation');
	function check_if_in_view() {
		var window_height = $(window).height();
		var window_top_position = $(window).scrollTop();
		var window_bottom_position = (window_top_position + window_height);

		$.each($animation_elements, function() {
			var $element = $(this);
			var element_height = $element.outerHeight();
			var element_top_position = $element.offset().top;
			var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
        	(element_top_position <= window_bottom_position)) {
        	$element.addClass('in-view');
    } else {
    	$element.removeClass('in-view');
    }
});
	}


	if($(window).width() > 576){
		$(window).on('scroll resize', check_if_in_view);
		$(window).trigger('scroll');
	}

	function loader(){
		$(window).on('load', function() {
			$('#ctn-preloader').addClass('loaded');
            // Una vez haya terminado el preloader aparezca el scroll

            if ($('#ctn-preloader').hasClass('loaded')) {
                // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
                $('#preloader').delay(900).queue(function () {
                	$(this).remove();
                });
            }
        });
	}
	loader();

	if ($('.tab-act').length > 0) {
		function tab_act(){
			$('.tab-act').css({
				top: $('.price-tab a.active').offset().top,
				left: $('.price-tab a.active').offset().left,
				width: $('.price-tab a.active').innerWidth(),
				height: $('.price-tab a.active').innerHeight(),
			});
		}
		win.load(function() {
			tab_act();
		});
		win.resize(function() {
			setTimeout(function(){
				tab_act();
			},50)
		});
	}
	$('.price-tab a').on('shown.bs.tab', function (e) {
    	// if (win.width() > 991) {
    		let top = $(e.target).offset().top;
    		let left = $(e.target).offset().left;
    		let h = $(e.target).innerHeight();
    		let w = $(e.target).innerWidth();

    		$('.tab-act').css({
    			top: top,
    			left: left,
    			width: w,
    			height: h,
    		});
	  	// }
	  })

	$('.c-category a').click(function(e) {
		let ul = $(this).nextAll('ul');
		if(ul.length > 0){
			e.preventDefault();
			if(ul.is(':hidden')) $(this).closest('ul').children('li').children('ul').slideUp(200);
			ul.slideToggle(200);
		}
	});

	$('.app-slide').slick({
		arrows: false,
		dots: true,
		autoplay: true,
		swipeToSlide: true,
		autoplaySpeed: 4000,
		pauseOnHover: false,
		pauseOnFocus: false,
		infinite: true,
	})

	$('.m-tab a').click(function(e) {
		if($(window).width() < 992){
			$(this).closest('.m-tab').prev('.m-tab-btn').html($(this).html());
			$(this).closest('.m-tab').children('ul').slideUp(200);
		}
	});
	$('.m-tab-btn').click(function(e) {
		e.preventDefault();
		if($(window).width() < 992){
			$(this).next('.m-tab').children('ul').slideToggle(200);
		}
	});
	$(window).resize(function(e) {
		if($(window).width() >= 992){
			$('.m-tab > ul').css('display', '');
		}
	});

	$(window).click(function(e) {
		if($(this).width() <= 991){
			$('.m-tab-btn').each(function() {
				var this_ = $(this);
				var ct = this_.next('.m-tab');
				if(ct.has(e.target).length == 0 && !ct.is(e.target) && this_.has(e.target).length == 0 && !this_.is(e.target)){
					ct.children('ul').slideUp(200);
				}
			})
		}
	});

	if ($('.search-check').length > 0) {
		function check_act(){
			let checked = $('.search-check input:checked + span');
			$('.check-act').css({
				left: checked.offset().left - $('.search-check').offset().left - $('.check-act').innerWidth()/2 + checked.innerWidth()/2 ,
			});
		}
		win.load(function() {
			check_act();
		});
		win.resize(function() {
			setTimeout(function(){
				check_act();
			},50)
		});

		$('.search-check input').change(function(e) {
			if($(this).prop('checked')){
				let checked = $(this).next('span');
				$('.check-act').css({
					left: checked.offset().left - $('.search-check').offset().left - $('.check-act').innerWidth()/2 + checked.innerWidth()/2 ,
				});
			}
		});
	}


	$('.customer-cas').slick({
		nextArrow: '<i class="fa fa-angle-right smooth next"></i>',
		prevArrow: '<i class="fa fa-angle-left smooth prev"></i>',
		autoplay: false,
        swipeToSlide: true,
        autoplaySpeed: 4000,
        pauseOnHover: false,
        pauseOnFocus: false,
        focusOnSelect: true,
        infinite: true,
        asNavFor: '.bg-cas',
    })
	FU.animate($(".customer-cas .slick-current [data-animation ^= 'animated']"));
	$('.customer-cas').on('beforeChange', function(event, slick, currentSlide, nextSlide){
		if(currentSlide!=nextSlide){
			var aniElm = $(this).find('.slick-slide[data-slick-index="'+nextSlide+'"]').find("[data-animation ^= 'animated']");
			FU.animate(aniElm);
		}
	});
	$('.bg-cas').slick({
	    dots: false,
	   	arrows: false,
	    asNavFor: '.customer-cas',
	    focusOnSelect: true,
	    swipeToSlide: true,
	    autoplaySpeed: 4000,
	    // pauseOnHover: false,
	    // pauseOnFocus: false,
	})
	$('.testi-cas').slick({
	    slidesToShow: 2,
	    slidesToScroll: 1,
	    nextArrow: '<i class="fa fa-angle-right smooth next"></i>',
	    prevArrow: '<i class="fa fa-angle-left smooth prev"></i>',
	    dots: true,
	    autoplay: true,
	    // asNavFor: '',
	    // focusOnSelect: true,
	    swipeToSlide: true,
	    autoplaySpeed: 4000,
	    pauseOnHover: false,
	    pauseOnFocus: false,
	    infinite: true,
	    responsive: [
	    {
	        breakpoint: 991,
	        settings: {
	            slidesToShow: 1,
	        }
	    }
	    ],
	});

	$('.scrollToAbout').click(function (e) {
		e.preventDefault();
		$("html, body").animate({ scrollTop: $('#gioi-thieu').offset().top}, 600);
	});

	$('.scrollToFormContact').click(function (e) {
		e.preventDefault();
		$("html, body").animate({ scrollTop: $('.md-form').offset().top}, 600);
	});
})