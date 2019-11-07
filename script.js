$('.projects_slides').slick({
  dots: true,
  infinite: true,
  speed: 650,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$('.skills_slide').slick({
  dots: true,
  infinite: true,
  speed: 650,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

const sections = document.querySelectorAll('.js-scroll');
function initAnimacaoScroll() {
  if (sections.length) {
    const windowMetade = window.innerHeight * 0.7;
    function animaScroll() {
      sections.forEach((section) => {
        const sectionTop = section.getBoundingClientRect().top;
        const isSectionVisible = (sectionTop - windowMetade) < 0;
        if (isSectionVisible) {
          section.classList.add('ativo');
        } /*else {
          section.classList.remove('ativo');
        }*/
      });
    }

    animaScroll();

    window.addEventListener('scroll', animaScroll);
  }
}

initAnimacaoScroll();

// Scroll suave links internos
function initScrollSuave() {
  const linksInternos = document.querySelectorAll('a[href^="#"]');

  function scrollToSection(event) {
    event.preventDefault();
    const href = event.currentTarget.getAttribute('href');
    const section = document.querySelector(href);

    section.scrollIntoView({
      behavior: 'smooth',
      block: 'start',
    });

    // Forma alternativa
    /*const topo = section.offsetTop;
    window.scrollTo({
      top: topo,
      behavior: 'smooth',
    });*/

  }

  linksInternos.forEach((link) => {
    link.addEventListener('click', scrollToSection);
  });
}
initScrollSuave();

function menuMobile() {
  const btnMenuMobile = document.querySelector('.header_navigation_menu-mobile');
  const navMenuEl = document.querySelector('.header_navigation nav ul');
  const show = 'show';

  btnMenuMobile.addEventListener('click', function () {
    navMenuEl.classList.toggle(show);
  })
}
menuMobile()

//Add background after scroll
$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 150) {
      $('.header').addClass('bg-white');
    }
    if ($(this).scrollTop() < 150) {
      $('.header').removeClass('bg-white')
    }
  });
});