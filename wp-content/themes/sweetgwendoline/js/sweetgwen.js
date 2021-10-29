(function($) {

  // Thirstie links open in new window
  $(document).on('click', 'a[href*="shop.sweetgwendolinefrenchgin.com"]', function(e) {
    window.open(this.href);
    e.preventDefault();
    return false;
  });

	// Modal close
	$(document).on('click', '.modal-close', function(e) {
    $('.overlay').addClass('overlay--disabled');
	  e.preventDefault();
  });

  // Modal submit
  $(document).on('click', '#age-gate-input--submit', function(e) {
  	let ageMonth = $('#age-gate-select--month').val();
    let ageDay = $('#age-gate-select--day').val();
    let ageYear = $('#age-gate-input--year').val();
		let dob = new Date(ageYear,ageMonth,ageDay);
    let month_diff = Date.now() - dob.getTime();
    let age_dt = new Date(month_diff); 
    let year = age_dt.getUTCFullYear();
    let age = Math.abs(year - 1970);

    if(age >= 21) {
    	$('.overlay').hide();
    } else {
    	$('.age-gate__notice').show();
    }

	  e.preventDefault();
  });

  // Drinks
  $(document).on('click','.drink-lineup .drink > a', function(e) {
    let selectedSlide = $(this).attr('data-slide') - 1;

    const swiper = new Swiper('.swiper', {
      //loop: true,
      navigation: {
        nextEl: '.button--next',
        prevEl: '.button--prev',
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
      },
    });

    swiper.slideTo(selectedSlide,0);
    swiper.update();

    $('.overlay.overlay--disabled').removeClass('overlay--disabled');

    e.preventDefault();
  });

  // Memoirs - General Adjustments
  if($('.listing-item .excerpt-more').length) {
    $('.listing-item .excerpt-more').html('<span class="read">Read</span> <span class="more">More</span>');
  }

  if($('.display-posts-pagination a.next').length) {
    $('.display-posts-pagination a.next').text('>');
  }

  if($('.display-posts-pagination a.prev').length) {
    $('.display-posts-pagination a.prev').text('<');
  }

}( jQuery ) );

/*
const swiper = new Swiper('.swiper', {
  loop: true,
  navigation: {
    nextEl: '.button--next',
    prevEl: '.button--prev',
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
  },
});
*/