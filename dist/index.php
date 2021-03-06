<?php
include './_header.php';
// flash message
if (filter_input(INPUT_GET, 'success')) {
    echo '<p class="flash text-white bg-success">Success</p>';
}
?>
<div class="wrapper">
  <section class="topview" id="top">
    <div class="topview--overlay">
      <header class="header">
        <div class="header__content">
          <a href="#"> <h1 class="header__logo">Rejuvin8</h1></a>
          <nav class="menu-pc">
            <ul>
              <li><a href="#features">Services</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="#testimonial">Testimonial</a></li>
              <li>
                <a href="555-5555-5555"
                  ><i class="fas fa-phone-volume"> </i>555-5555-5555</a
                >
              </li>
            </ul>
          </nav>
          <div id="sp-nav">
            <div id="nav-toggle">
              <input type="checkbox" /><span></span><span></span
              ><span></span>
              <ul id="nav-content">
                <li><a href="#features">Services</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#testimonial">Testimonial</a></li>
                <li>
                  <a href="555-5555-5555"
                    ><i class="fas fa-phone-volume"> </i>555-5555-5555</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <div class="topview__content container">
        <div class="topview__text u-text-center">
          <h2 class="heading-primary">Your Body Shapes Who You Are</h2>
          <p>
            We're offering a wide range of cosmetic surgical procedures that
            meet all your needs.
          </p>
          <a class="btn btn--primary" href="#ebook">Get E-Book For Free</a>
        </div>
      </div>
    </div>
  </section>
  <section class="features section" id="features">
    <div class="container">
      <div class="row no-gutter">
        <div class="col-lg-4 col-md-6 col-sm-12 text-center">
          <div class="feature">
            <i class="feature__icon fas fa-notes-medical"></i>
            <div class="feature__content">
              <h4>Reservaton</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Atque, asperiores porro quibusdam sit ab, nostrum
                perspiciatis laudantium non nemo at voluptatem cumque
                deleniti fuga dolores. Est quam at repellendus blanditiis.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 text-center">
          <div class="feature">
            <i class="feature__icon fas fa-hospital"></i>
            <div class="feature__content">
              <h4>About Us</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Atque, asperiores porro quibusdam sit ab, nostrum
                perspiciatis laudantium non nemo at voluptatem cumque
                deleniti fuga dolores. Est quam at repellendus blanditiis.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 text-center">
          <div class="feature">
            <i class="feature__icon fas fa-user-md"></i>
            <div class="feature__content">
              <h4>Meet Our Doctors</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Atque, asperiores porro quibusdam sit ab, nostrum
                perspiciatis laudantium non nemo at voluptatem cumque
                deleniti fuga dolores. Est quam at repellendus blanditiis.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 text-center">
          <div class="feature">
            <i class="feature__icon fas fa-stethoscope"></i>
            <div class="feature__content">
              <h4>Consulting</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Atque, asperiores porro quibusdam sit ab, nostrum
                perspiciatis laudantium non nemo at voluptatem cumque
                deleniti fuga dolores. Est quam at repellendus blanditiis.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 text-center">
          <div class="feature">
            <i class="feature__icon fas fa-syringe"></i>
            <div class="feature__content">
              <h4>Operation</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Atque, asperiores porro quibusdam sit ab, nostrum
                perspiciatis laudantium non nemo at voluptatem cumque
                deleniti fuga dolores. Est quam at repellendus blanditiis.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 text-center">
          <div class="feature">
            <i class="feature__icon fas fa-capsules"></i>
            <div class="feature__content">
              <h4>After Care</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Atque, asperiores porro quibusdam sit ab, nostrum
                perspiciatis laudantium non nemo at voluptatem cumque
                deleniti fuga dolores. Est quam at repellendus blanditiis.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="operations section no-padding" id="services">
    <div class="container-fluid">
      <div class="row no-gutter">
        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 imagePanel--outer">
          <div class="imagePanel">
            <a class="imagePanel__box" href="#services"
              ><img src="./img/service1.jpg" alt="Face" />
              <div class="imagePanel__box__overlay">
                <div class="imagePanel__caption">
                  <h5>Face</h5>
                  <p>Face Lift / Neck Lift</p>
                </div>
              </div></a
            >
          </div>
        </div>
        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 imagePanel--outer">
          <div class="imagePanel">
            <a class="imagePanel__box" href="#services"
              ><img src="./img/service5.jpg" alt="Lip" />
              <div class="imagePanel__box__overlay">
                <div class="imagePanel__caption">
                  <h5>Lip</h5>
                  <p>Botox Lips</p>
                </div>
              </div></a
            >
          </div>
        </div>
        <div
          class="col-xl-2 col-lg-6 col-md-6 col-ssm-12 imagePanel--outer"
        >
          <div class="imagePanel">
            <a class="imagePanel__box" href="#services"
              ><img src="./img/service2.jpg" alt="Breast" />
              <div class="imagePanel__box__overlay">
                <div class="imagePanel__caption">
                  <h5>Breast</h5>
                  <p>Breast Augmentation</p>
                </div>
              </div></a
            >
          </div>
        </div>
        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 imagePanel--outer">
          <div class="imagePanel">
            <a class="imagePanel__box" href="#services"
              ><img src="./img/service3.jpg" alt="Abdomen" />
              <div class="imagePanel__box__overlay">
                <div class="imagePanel__caption">
                  <h5>Abdomen</h5>
                  <p>Tummy Tuck</p>
                </div>
              </div></a
            >
          </div>
        </div>
        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 imagePanel--outer">
          <div class="imagePanel">
            <a class="imagePanel__box" href="#services"
              ><img src="./img/service4.jpg" alt="Hip" />
              <div class="imagePanel__box__overlay">
                <div class="imagePanel__caption">
                  <h5>Hip</h5>
                  <p>Butt Lift</p>
                </div>
              </div></a
            >
          </div>
        </div>
        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 imagePanel--outer">
          <div class="imagePanel">
            <a class="imagePanel__box" href="#services"
              ><img src="./img/service6.jpg" alt="Legs" />
              <div class="imagePanel__box__overlay">
                <div class="imagePanel__caption">
                  <h5>Legs</h5>
                  <p>Thigh Lift</p>
                </div>
              </div></a
            >
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="section teams" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="person">
            <img
              src="https://pixelbuddha.net/livepreview/activebox/images/team-4.jpg"
              alt="team-4"
            />
            <div class="person__content">
              <h4>Dr. Sheila Ree</h4>
              <h5 class="role">Surgeon</h5>
              <p>
                Dr. Ree’s philosophy is that plastic surgery is as much art
                as it is medicine, and the seamless blending of the two to
                achieve a beautiful and natural result is the ultimate goal
                for her patients.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="person">
            <img
              src="https://pixelbuddha.net/livepreview/activebox/images/team-1.jpg"
              alt="team-1"
            />
            <div class="person__content">
              <h4>Dr. Ruth Wood</h4>
              <h5 class="role">Manager</h5>
              <p>
                Dr. Wood attention to detail is designed to provide
                superlative care and results. She listens attentively to
                each patient’s needs and aligns their desires with realistic
                expectations.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="person">
            <img
              src="https://pixelbuddha.net/livepreview/activebox/images/team-2.jpg"
              alt="team-2"
            />
            <div class="person__content">
              <h4>Dr. Timothy Reed</h4>
              <h5 class="role">Surgeon</h5>
              <p>
                Dr. Reed is skilled in all facets of aesthetic surgery, with
                a particular emphasis on facial rejuvenation, breast
                aesthetics, body contouring, and liposuction.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="person">
            <img
              src="https://pixelbuddha.net/livepreview/activebox/images/team-3.jpg"
              alt="team-3"
            />
            <div class="person__content">
              <h4>Dr. Victoria Veldze</h4>
              <h5 class="role">Surgeon</h5>
              <p>
                Dr. Veldez is a Member of the American Society of Plastic
                Surgeons (ASPS), and is a board certified Diplomate of the
                American Board of Plastic Surgery.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="testimonials no-padding" id="testimonial">
    <div class="container-fluid">
      <div class="row no-gutter testimonial">
        <div
          class="col-lg-6 col-md-12 col-sm-12 testimonial__image text-center"
        >
          <img
            src="https://i.pinimg.com/originals/9a/ac/b2/9aacb249774273dc5565ee9e45c1469d.jpg"
            alt="testimonial 1"
          />
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 testimonial__content">
          <blockquote>
            <p>
              “There are no words to describe how grateful I am. My family
              and I are thrilled with the results”
            </p>
            <cite class="author"
              >Susan Sims, Interaction Designer at XYZ</cite
            >
          </blockquote>
        </div>
      </div>
    </div>
  </section>
  <section class="section download cta" id="ebook">
    <div class="container">
      <div class="col-md-8 text-center cta--center mb-3">
        <h3 class="mb-4">Are You Ready to Change?</h3>
        <p>Get e-Book For Free!</p>
        <form class="front-form" action="admin/insert.php" method="post">
          <div class="form-group">
            <input
              type="name"
              name="name"
              id="inputName"
              placeholder="Your Name"
              pattern="[a-zA-Zs]{4,}"
              required
            />
            <input
              type="email"
              name="email"
              id="inputEmail"
              placeholder="Email Address"
              pattern="[a-zA-Z0-9.-_]{3,}@{1}[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}.{0,}"
              required
            />
          </div>
          <button class="btn btn--primary" type="submit" value="Submit">
            Get e-Book Now
          </button>
        </form>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="footer__top">
      <div class="container">
        <div class="row">
          <div class="footer__col col-md-6">
            <h5><i class="fas fa-map-marker-alt"></i>Location</h5>
            <p>
              12331 W 1st St <br />
              North Vancouver, BC
            </p>
          </div>
          <div class="footer__col col-md-6">
            <h5><i class="fas fa-plane"> </i>Out of Town Patients</h5>
            <p>
              Patients from all over can benefit from the services offered
              at our Vancouver practice. We are happy to contribute to a
              relaxing and enjoyable stay in our vibrant city.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="container">
        <div class="col-md-12">
          <p>
            <small
              >Copyright &copy; 2019 Rejuvin8. All Rights Reserved.</small
            >
          </p>
          <p>Made by Yasushi Ikeda</p>
        </div>
      </div>
    </div>
  </footer>
</div>

<?php

include './_footer.php';
