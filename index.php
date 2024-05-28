<?php
wp_head();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width" />
    <title>7ESL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style type="text/css">
        .box {
        }
    </style>
</head>

<body>
  <div class="box">
    <header class="l-header header">
      <nav class="nav bd-grid">
        <div></div>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item"><a href="#" class="nav__link">HOME</a></li>
            <li class="nav__item"><a href="#home-it-work" class="nav__link">HOW IT WORKS</a></li>
            <li class="nav__item"><a href="#features" class="nav__link">FEATURES</a></li>
            <li class="nav__item"><a href="#download" class="nav__link">DOWNLOAD</a></li>
            <li class="nav__item"><a href="#faq" class="nav__link">FAQ</a></li>
          </ul>
          <div class="nav__close" id="nav-close">
            &#215;
          </div>
        </div>
        <div class="nav__button">

          <button
            onclick="window.location.href=`https://apps.apple.com/vn/app/7esl-ai-speak-learn-english/id6477322355`;"
            class="nav__btn">
            <img src="<?php bloginfo('template_url')?>./src/assets/icons/appe.svg" alt="image" />
            IOS
          </button>
          <button onclick="window.location.href=`https://play.google.com/store/apps/details?id=com.english7esl`;"
            class="nav__btn">
            <img src="<?php bloginfo('template_url')?>./src/assets/icons/android.svg" alt="image" />
            ANDROID
          </button>

        </div>
        <div class="nav__toggle" id="nav-toggle">
          <img src="<?php bloginfo('template_url')?>./src/assets/icons/list.svg" alt="image">
        </div>
      </nav>
    </header>
    <!--==================== HOME ====================-->
    <section class="home container" id="home">
      <div class="home__content ">
        <div class="home__group">
          <div style="display: flex; gap: 45px; flex-direction: column;">
            <div class="home__img">
              <img src="<?php bloginfo('template_url')?>./src/assets/img/logo.svg" alt="image" />
            </div>
            <div class="home__text">
              <h1 class="home__text-title">Your AI Partner for English Fluency</h1>
            </div>
          </div>
          <div class="home__img-detail mobile">
            <img src="<?php bloginfo('template_url')?>./src/assets/img/home.png" alt="image" />
          </div>
          <p class="home__text-description">Talk with AI characters, learn with AI tutors, take tests with AI
            examiners, receive instant
            feedback, and master English with the most advanced AI technology.</p>
          <div class="home__btn pc">
            <div class="home__btn-icon">
              <button style="background-color: transparent;"
                onclick="window.location.href=`https://play.google.com/store/apps/details?id=com.english7esl`;">

                <img src="<?php bloginfo('template_url')?>./src/assets/icons/android.svg" alt="image" />

              </button>
              <button style="background-color: transparent;"
                onclick="window.location.href=`https://apps.apple.com/vn/app/7esl-ai-speak-learn-english/id6477322355`;">
                <img src="<?php bloginfo('template_url')?>./src/assets/icons/appe.svg" alt="image" />
              </button>
            </div>
            <button class="nav__btn" onclick="location.href='#home-it-work'">
              > HOW IT WORKS
            </button>
          </div>
        </div>
        <div class="home__img-detail pc ">
          <img src="<?php bloginfo('template_url')?>./src/assets/img/home3x.png" alt="image">
        </div>
      </div>

    </section>
  </div>
  <section class="box__download-mobile">
    <div class="box7__download">
      <h3 class="box7__download-title">
        Download This App
      </h3>
      <div class="box7__download-btn">
        <a href="https://apps.apple.com/vn/app/7esl-ai-speak-learn-english/id6477322355">
          <img src="<?php bloginfo('template_url')?>./src/assets/img/apple.svg" alt="appStore">
        </a>
        <a href="https://play.google.com/store/apps/details?id=com.english7esl">
          <img src="<?php bloginfo('template_url')?>./src/assets/img/chplay.svg" alt="chplay">
        </a>

      </div>
    </div>
  </section>
  <!-- box2 -->
  <section class="box2">
    <div class="box2__gradient">
    </div>
    <section class="home container-box2" id="home-it-work">
      <div class="mobile">
        <h3 class="home__select-title ">
          The Fastest Way to Speak English Fluently
        </h3>
      </div>
      <div class="home__content grid">

        <div class="home__img-detail ">
          <!-- slide -->
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="<?php bloginfo('template_url')?>./src/assets/img/slide1.png" alt="image" />
              </div>
              <div class="swiper-slide">
                <img src="<?php bloginfo('template_url')?>./src/assets/img/slide2.png" alt="image" />
              </div>
              <div class="swiper-slide">
                <img src="<?php bloginfo('template_url')?>./src/assets/img/slide3.png" alt="image" />
              </div>
              <div class="swiper-slide">
                <img src="<?php bloginfo('template_url')?>./src/assets/img/slide4.png" alt="image" />
              </div>
              <div class="swiper-slide">
                <img src="<?php bloginfo('template_url')?>./src/assets/img/slide5.png" alt="image" />
              </div>

              <div class="swiper-slide">
                <img src="<?php bloginfo('template_url')?>./src/assets/img/slide6.png" alt="image" />
              </div>
              <div class="swiper-slide">
                <img src="<?php bloginfo('template_url')?>./src/assets/img/slide7.png" alt="image" />
              </div>
              <div class="swiper-slide">
                <img src="<?php bloginfo('template_url')?>./src/assets/img/slide8.png" alt="image" />
              </div>
              <div class="swiper-slide">
                <img src="<?php bloginfo('template_url')?>./src/assets/img/slide9.png" alt="image" />
              </div>
              <div class="swiper-slide">
                <img src="<?php bloginfo('template_url')?>./src/assets/img/slide10.png" alt="image" />
              </div>
              <div class="swiper-slide">
                <img src="<?php bloginfo('template_url')?>./src/assets/img/slide11.png" alt="image" />
              </div>
              <div class="swiper-slide">
                <img src="<?php bloginfo('template_url')?>./src/assets/img/slide12.png" alt="image" />
              </div>
              <div class="swiper-slide">
                <img src="<?php bloginfo('template_url')?>./src/assets/img/slide13.png" alt="image" />
              </div>
              <div class="swiper-slide">
                <img src="<?php bloginfo('template_url')?>./src/assets/img/slide14.png" alt="image" />
              </div>


            </div>
            <div class="swiper-pagination"></div>
          </div>


        </div>
        <div class="box2__right">
          <h2 class="home_select-btn pc">
            > HOW IT WORKS
          </h2>
          <div class="home__select">
            <h3 class="home__select-title pc">
              The Fastest Way to Speak English Fluently
            </h3>

            <p class="home__select-description">
              The 7ESL App combines cutting-edge AI technology with the chunking method, offering the quickest approach
              to learn and speak English fluently.
            </p>
            <div class="home__question">
              <button onclick="location.href='#learn'" class="home__question-item">
                <div class="home__question-img">
                  <img src="<?php bloginfo('template_url')?>./src/assets/icons/Vector.svg" alt="image">
                </div>
                <p> Step 1: Learn</p>
              </button>
              <button onclick="location.href='#practice'" class="home__question-item">
                <div class="home__question-img">
                  <img src="<?php bloginfo('template_url')?>./src/assets/icons/check.svg" alt="image">
                </div>
                <p>
                  Step 2: Practice
                </p>
              </button>
              <button onclick="location.href='#feedback'" class="home__question-item">
                <div class="home__question-img">
                  <img src="<?php bloginfo('template_url')?>./src/assets/icons/user.svg" alt="image">
                </div>
                <p>Step 3: Feedback</p>
              </button>
              <button onclick="location.href='#improve'" class="home__question-item">
                <div class="home__question-img">
                  <img src="<?php bloginfo('template_url')?>./src/assets/icons/return.svg" alt="image">
                </div>
                <p>Step 4: Improve</p>
              </button>
            </div>

            <div class="box2__user pc">
              <img src="<?php bloginfo('template_url')?>./src/assets/img/gril.png" alt="image">
            </div>
          </div>

        </div>

      </div>

    </section>

  </section>

  <!-- box3 -->
  <section style="position: relative;" id="features">
    <section class="box3" id="learn">
      <h2 class="box3__select-title container">
        Step 1: Learn
      </h2>
      <div class="box3__home container" id="home">

        <div class="box3__content ">

          <div class="box3__group">
            <p class="home__text-description">To learn a language, you need to practice speaking it aloud.</p>
            <div class="home__img-detail mobile">
              <img src="<?php bloginfo('template_url')?>./src/assets/img/learn.png" alt="learn">
            </div>
            <div class="home__text ">
              <h3 class="box3__text-title">The Chunking Method – Learn Phrases, Not Just Words</h3>
            </div>
            <p class="home__text-description">Chunking is a learning method where you focus on mastering phrases
              rather than just individual words. This approach helps you speak a new language more naturally and
              quickly.</p>
            <p class="home__text-description">For example, consider the phrase chunks "I am planning to," "go to the
              beach," and "this weekend."</p>
            <p class="home__text-description">By knowing these chunks, you can easily form the sentence, "I am
              planning
              to go to the beach this weekend."</p>
          </div>
          <div class="home__img-detail pc">
            <img src="<?php bloginfo('template_url')?>./src/assets/img/learn.png" alt="learn">
          </div>
        </div>
        <div style="padding:  0px 26px; display: flex; flex-direction: column ; gap:16px; ">
          <div class="home__text">
            <h3 class="box3__text-title pc">One-on-One Lessons with AI Tutors</h3>
          </div>
          <p class="home__text-description pc">Access thousands of lessons from AI English experts for various
            purposes
            such as test prep and casual conversation.</p>
        </div>


      </div>

    </section>
    <div style="max-width: 1920px; margin: 0 auto;" class="box__people">
      <img src="<?php bloginfo('template_url')?>./src/assets/img/manypeople.png" class="pc" style="width: 100%; height: 100%;" alt="image">
      <img src="<?php bloginfo('template_url')?>./src/assets/img/manypeoplemb.png" class="mobile" style="width: 100%; height: 100%;" alt="image">

    </div>
  </section>


  <!-- box4 -->

  <section class="box4" id="practice">
    <h2 class="box4__select-title container pc">
      Step 2: Practice and Test
    </h2>
    <h2 class="box4__select-title container mobile">
      Step 2: <br> Practice and Test
    </h2>
    <section class="box3__home container" id="home">

      <div class="box4__content ">
        <div class="home__img-detail">
          <img src="<?php bloginfo('template_url')?>./src/assets/img/mockupx2.png" alt="image" />
        </div>
        <div class="box3__group">
          <div class="home__text">
            <h3 class="box3__text-title ">Practice Speaking with Real-Life Scenarios</h3>
          </div>
          <span class="home__text-description">Explore the 7ESL city, visit different places, and meet people to
            practice your English.
            <br />
            Use the real-life phrases you learned in Step 1.</span>
          <div class="home__text title1">
            <h3 class="box3__text-title">Test with AI Examiners</h3>
          </div>
          <p class="home__text-description">Take English speaking tests on various topics and get immediate results
            with detailed feedback on your performance.
            <br />
            Use the speaking phrases you learned in Step 1.
          </p>
        </div>

      </div>



    </section>

  </section>
  <!-- box5  -->

  <section class="box5" id="feedback">
    <div class="box5__bg pc">
      <img src="<?php bloginfo('template_url')?>./src/assets/img/3dbox5.png" alt="image">
    </div>
    <h2 class="box3__select-title container pc">
      Step 3: Get Feedback and Suggestions
    </h2>
    <h2 class="box3__select-title container mobile">
      Step 3: <br> Get Feedback and Suggestions
    </h2>
    <div class="box3__home container" id="home">

      <div class="box4__content ">

        <div class="box3__group">
          <div class="home__text">
            <h3 class="box3__text-title">Sentence Suggestions</h3>
          </div>
          <div class="home__img-detail mobile">
            <img src="<?php bloginfo('template_url')?>./src/assets/img/sentence.png" alt="image" />
          </div>
          <p class="home__text-description">Receive immediate suggestions to improve your speaking while conversing
            with tutors, examiners, and others.</p>
          <div class="home__text">
            <h3 class="box3__text-title">Speaking Report</h3>
          </div>
          <div class="home__img-detail mobile">
            <img src="<?php bloginfo('template_url')?>./src/assets/img/report.png" alt="image" />
          </div>
          <p class="home__text-description">Get a detailed analysis of your speaking, including scores for
            pronunciation, fluency, vocabulary, grammar, and idea development.</p>
          <div class="home__text">
            <h3 class="box3__text-title">English Level Certificate</h3>
          </div>
          <div class="home__img-detail mobile">
            <img src="<?php bloginfo('template_url')?>./src/assets/img/level.png" alt="image" />
          </div>
          <p class="home__text-description">Our AI-powered English proficiency assessment will rate your skills
            according to the six CEFR levels (A1, A2, B1, B2, C1, C2).</p>
        </div>
        <div class="home__img-detail pc">
          <img src="<?php bloginfo('template_url')?>./src/assets/img/profilex2.png" alt="image" />
        </div>
      </div>



    </div>

  </section>

  <!-- box6 -->

  <section class="box6" id="improve">
    <div style="position: relative;">

      <h2 class="box6__select-title container mobile">
        Step 4: <br>Improve and Practice with Suggestions
      </h2>

      <div class="box3__home container-box2" id="home">
        <div class="box6__title pc">
          <h2 class="box6__select-title">
            Step 4: Improve and Practice with Suggestions
          </h2>
        </div>
        <div class="box4__content ">
          <div class="home__img-detail">
            <img src="<?php bloginfo('template_url')?>./src/assets/img/pronunciation.png" alt="image" />
          </div>
          <div class="box6__group">
            <div class="home__text">
              <h3 class="box3__text-title">Review and Replay</h3>
            </div>
            <p class="home__text-description">After each conversation, replay it with suggestions for improvement. This
              helps you learn and practice the way native speakers talk.</p>
            <div class="home__text">
              <h3 class="box3__text-title">Pronunciation Report</h3>
            </div>
            <p class="home__text-description">Get a detailed analysis of your pronunciation and focus on improving
              sounds that you find challenging, highlighted in red for low scores and yellow for medium scores.</p>

          </div>

        </div>
      </div>
    </div>

  </section>
  <!-- box7 -->
  <section class="box7" id="download">
    <div class="box7__bg"></div>
    <div class="box7__title">
      <h2 class="box7__select-title ">
        Learning is Fun with the Speaking App Designed for Everyone
      </h2>
    </div>
    <div class="box3__home container-box2" id="home">
      <div class="box7_img mobile">
        <div class="home__img-detail">
          <img src="<?php bloginfo('template_url')?>./src/assets/img/DailyMission.png" alt="image" />
        </div>
      </div>
      <p class=" screen-1024">Unlock the power of our unique four-step learning method with "Daily Missions" crafted for
        learners at every level. Improve your English by completing these daily tasks and earn exciting rewards like
        valuable diamonds. It's time to make learning a joyful adventure!</p>
      <div class="box4__content ">
        <p class="home__text-description">Unlock the power of our unique four-step learning method with "Daily Missions"
          crafted for learners at every level. Improve your English by completing these daily tasks and earn exciting
          rewards like valuable diamonds. It's time to make learning a joyful adventure!</p>
        <div class="box7__group">

          <div class="home__img-detail pc">
            <img src="<?php bloginfo('template_url')?>./src/assets/img/gril2.png" alt="image" />

          </div>


        </div>
        <div class="box7__download">
          <h3 class="box7__download-title">
            Download This App
          </h3>
          <div class="box7__download-btn">
            <a href="https://apps.apple.com/vn/app/7esl-ai-speak-learn-english/id6477322355">
              <img src="<?php bloginfo('template_url')?>./src/assets/img/apple.svg" alt="appStore">
            </a>
            <a href="https://play.google.com/store/apps/details?id=com.english7esl">
              <img src="<?php bloginfo('template_url')?>./src/assets/img/chplay.svg" alt="chplay">
            </a>

          </div>
        </div>
        <div class="box7_img pc">
          <div class="home__img-detail">
            <img src="<?php bloginfo('template_url')?>./src/assets/img/DailyMission.png" alt="image" />
          </div>
        </div>
      </div>
      <!-- test -->
      <div class="box7__download-screen">
        <h3 class="box7__download-title">
          Download This App
        </h3>
        <div class="box7__download-btn">
          <a href="https://apps.apple.com/vn/app/7esl-ai-speak-learn-english/id6477322355">
            <img src="<?php bloginfo('template_url')?>./src/assets/img/apple.svg" alt="appStore">
          </a>
          <a href="https://play.google.com/store/apps/details?id=com.english7esl">
            <img src="<?php bloginfo('template_url')?>./src/assets/img/chplay.svg" alt="chplay">
          </a>

        </div>
      </div>


    </div>

  </section>

  <!-- box8 -->

  <section class="box8" id="faq">
    <div style="display: flex; align-items: center; justify-content: center; padding-bottom: 2rem;">
      <h2 class="box8__title ">
        FAQs
      </h2>
    </div>
    <div class="box3__home container" id="home">
      <div class="box8__list" id="box8__list">
      </div>
    </div>
  </section>
  <footer>
    <div class="footer container ">
      <div class="footer__company">
        <img src="<?php bloginfo('template_url')?>./src/assets/img/logo.svg" width="162" height="42" alt="logo">
        <h2 class="footer__title">Company</h2>
        <div class="footer__list">
          <a href="">About</a>
          <a href="">Privacy Policy</a>
          <a href="">Terms</a>
          <a href="">Editorial Process</a>
          <a href="">Contact Us</a>

        </div>
      </div>
      <div class="footer__social">
        <div style="width: 100%; height: 44px;"></div>
        <h2 class="footer__title">Follow Us</h2>
        <div class="footer__link">
          <a href="https://www.facebook.com/7ESLEnglish/">
            <img src="<?php bloginfo('template_url')?>./src/assets/icons/Facebook.svg" alt="Facebook">
          </a>
          <a href="https://www.pinterest.com/7english/">
            <img src="<?php bloginfo('template_url')?>./src/assets/icons/princent.svg" alt="printers">
          </a>
          <a href="https://x.com/7eslenglish?mx=2">
            <img src="<?php bloginfo('template_url')?>./src/assets/icons/twitter.svg" alt="twitter">
          </a>
          <a href="https://www.youtube.com/channel/UCPDQgXju7hqEGBwzLIeI7Zw">
            <img src="<?php bloginfo('template_url')?>./src/assets/icons/youtube.svg" alt="youtube">
          </a>
        </div>



      </div>
    </div>
    <div style="padding: 20px 40px;" class="container ">
      <h2 class="copyright-bar">7ESL © 2024 </h2>
    </div>
  </footer>
  <script src="<?php bloginfo('template_url')?>./src/assets/js/swiper-bundle.min.js" defer></script>
  <script src="<?php bloginfo('template_url')?>./src/assets/js/index.js" type="module" defer></script>
</body>

</html>