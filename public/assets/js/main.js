/**
* Template Name: Bootslander
* Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
* Updated: Aug 07 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

})();



          /**materi SD */


          const questions = [
  {
      title: "Kuis IPA 1",
      question: "Apa bagian terkecil dari makhluk hidup?",
      answers: [
          { text: "Sel", correct: true },
          { text: "Jaringan", correct: false },
          { text: "Organ", correct: false },
          { text: "Sistem", correct: false }
      ]
  },
  {
      title: "Kuis IPA 2",
      question: "Apa yang dimaksud dengan ekosistem?",
      answers: [
          { text: "Komunitas makhluk hidup", correct: false },
          { text: "Interaksi antara makhluk hidup dan lingkungan", correct: true },
          { text: "Proses fotosintesis", correct: false },
          { text: "Kumpulan sel", correct: false }
      ]
  },
  {
    title: "Kuis IPA 3",
    question: "Apa fungsi utama dari membran sel?",
    answers: [
        { text: "Menghasilkan energi", correct: false },
        { text: "Menghasilkan protein", correct: false },
        { text: "Menyimpan informasi genetik", correct: false },
        { text: "Mengatur masuk dan keluarnya zat", correct: true}
    ]
},{
  title: "Kuis IPA 4",
  question: "Apa yang dimaksud dengan produsen dalam ekosistem??",
  answers: [
      { text: "Organisme yang memecah bahan organik", correct: false },
      { text: "Organisme yang menghasilkan makanan melalui fotosintesis", correct: true },
      { text: "Organisme yang memakan produsen", correct: false },
      { text: "Organisme yang tidak dapat hidup tanpa air", correct: false }
  ]
},{
  title: "Kuis IPA 5",
  question: "Sel mana yang memiliki dinding sel?",
  answers: [
      { text: "sel bakteri", correct: true },
      { text: "sel darah merah", correct: false},
      { text: "sel otot", correct: false },
      { text: "sel hewan", correct: false }
  ]
},
  // tempat nambahin pertanyaan lebih banyak di sini
];

const quizContainer = document.querySelector('.quiz-container');

questions.forEach(q => {
  const quizItem = document.createElement('div');
  quizItem.classList.add('quiz-item');

  quizItem.innerHTML = `
      <h2>${q.title}</h2>
      <p>${q.question}</p>
      ${q.answers.map(answer => `
          <button class="answer-button" data-correct="${answer.correct}">${answer.text}</button>
      `).join('')}
  `;

  quizContainer.appendChild(quizItem);
});

// Menambahkan event listener untuk tombol jawaban
quizContainer.addEventListener('click', (event) => {
  if (event.target.classList.contains('answer-button')) {
      const isCorrect = event.target.dataset.correct === 'true';
      if (isCorrect) {
          alert("Jawaban Benar!");
      } else {
          alert("Jawaban Salah!");
      }
  }
});

       





