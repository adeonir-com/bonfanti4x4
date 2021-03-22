/* eslint-disable no-undef */
const $ = jQuery;

function toggleCollapse() {
  const desktop = $(document).width();
  if (desktop >= '992') {
    $('.data-toggle').removeAttr('data-toggle');
    $('.data-toggle').removeAttr('href');
  } else {
    $('.data-toggle').attr('data-toggle', 'collapse');
    $('.data-toggle.data-brands').attr('href', '#collapseBrands');
    $('.data-toggle.data-categories').attr('href', '#collapseCategories');
  }
}

$(document).ready(function () {
  $('.main-carousel .carousel-item:first-child').addClass('active');
  $('.pagination a').addClass('page-link');
  $('.pagination span').addClass('page-link');
  $('.pagination .current').parent().addClass('active');

  toggleCollapse();
  $(window).on('resize', function () {
    toggleCollapse();
  });

  $('.masked-phone').inputmask({
    mask: ['(99) 9999-9999', '(99) 99999-9999'],
    keepStatic: true,
  });
  $('.masked-cnpj').inputmask('99.999.999/9999-99');

  $('.thumbnails div:first-child a')
    .addClass('active')
    .attr('data-fancybox', '');

  $('.thumbnails a').on('click', function (e) {
    e.preventDefault();
    $('.easyzoom img').attr(
      'src',
      $(this).children('img').attr('src').replace('-150x150', '-500x500')
    );

    $('.easyzoom a').attr(
      'href',
      $(this).children('img').attr('src').replace('-150x150', '')
    );

    $('.thumbnails a').removeClass('active');
    $(this).addClass('active');

    $('.thumbnails a').attr('data-fancybox', 'gallery');
    $(this).removeAttr('data-fancybox');
  });

  $('.rated-carousel').slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          infinite: true,
          autoplay: true,
          autoplaySpeed: 5000,
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 576,
        settings: {
          infinite: true,
          autoplay: true,
          autoplaySpeed: 5000,
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $('#searchModal').on('shown.bs.modal', function () {
    $('#s').focus();
  });
});
