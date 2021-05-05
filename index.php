<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yog Sewa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/all.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
      integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
      integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
      crossorigin="anonymous"
    />
  </head>

  <body>
    <!-- Header  -->
    <div class="black-layer"></div>

    <!-- Header  -->

    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Register</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body register-body">
            <form>
              <div class="form-wrap">
                <label for="name" class="form-label">Name</label>
                <input id="name" class="form-control" type="name" name="" />
              </div>

              <div class="form-wrap">
                <label for="email" class="form-label">Email address</label>
                <input id="email" class="form-control" type="email" name="" />
              </div>

              <div class="form-wrap">
                <label for="password" class="form-label">Password</label>
                <input
                  id="password"
                  class="form-control"
                  type="passwprd"
                  name=""
                />
              </div>

              <div class="form-wrap">
                <button type="submit" class="btns btn-primary button-rounded">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade"
      id="loginModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body register-body">
            <form>
              <div class="form-wrap">
                <label for="email" class="form-label">Email address</label>
                <input id="email" class="form-control" type="email" name="" />
              </div>

              <div class="form-wrap">
                <label for="password" class="form-label">Password</label>
                <input
                  id="password"
                  class="form-control"
                  type="passwprd"
                  name=""
                />
              </div>

              <div class="form-wrap">
                <button type="submit" class="btns btn-primary button-rounded">
                  Login
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->

    <!-- Banner -->
    <section class="hero-banner position-relative">
      <header id="header" class="site-header">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center">
            <div class="logo">
              <a href="#">
                <img
                  id="navbar-logo"
                  src="assets/img/yogsewa-logo-rect.png"
                  alt=""
                />
              </a>
            </div>
            <nav class="site-nav">
              <div class="main-menu">
                <ul>
                  <li>
                    <a href="#"> Home </a>
                  </li>
                  <li>
                    <a href="#"> About </a>
                  </li>
                  <li>
                    <a href="#"> What We Offer </a>
                  </li>
                  <li>
                    <a href="#">Specialities</a>
                  </li>
                  <li>
                    <a href="#"> Pricing </a>
                  </li>
                  <li>
                    <a href="#"> Contact </a>
                  </li>
                </ul>
              </div>
            </nav>

            <span class="hamburger fas fa-bars"></span>
            <div class="cta-buttons">
              <a
                href="javascript(void:0)"
                data-bs-toggle="modal"
                data-bs-target="#loginModal"
                id="login-btn"
                >Login</a
              >
              <a
                href="javascript(void:0)"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                class="btns button"
                id="get-appoint-btn"
                >Get An Appointment</a
              >
            </div>
          </div>
        </div>
      </header>
      <picture class="bg-img">
        <img src="assets/img/banner.jpg" alt=" Banner" />
      </picture>

      <div class="banner-content">
        <div class="container">
          <div class="banner-slick">
            <div class="banner-wrap">
              <h3 class="banner-title">
                Your free trial awaits. Cancel online anytime.
              </h3>
              <p>
                Not for the faint-hearted, this video platform from Sadhguru
                offers content released for the very first time
              </p>
            </div>
            <div class="banner-wrap">
              <h3 class="banner-title">
                Your free trial awaits. Cancel online anytime.
              </h3>
              <p>
                Not for the faint-hearted, this video platform from Sadhguru
                offers content released for the very first time
              </p>
            </div>
          </div>
          <form action="#" class="form-group banner-form">
            <input
              type="email"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Your Email Address"
            />
            <button type="submit" class="btns btn-primary button-rounded">
              Consult with us
            </button>
          </form>
        </div>
      </div>
    </section>
    <!-- Banner -->

    <!-- What We Offer -->
    <section class="what-we-offer bg-black home-spacing">
      <div class="container">
        <div class="main-title">
          <span> What We OFfer </span>
          <h3>Find What moves you</h3>
        </div>

        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="offers">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="55"
                height="55"
                viewBox="0 0 55 55"
              >
                <image
                  width="55"
                  height="55"
                  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADcAAAA3CAYAAACo29JGAAAFcUlEQVRoge2aa4iWRRTHf7traqndKUm7aVq5abFlbdmmlpUF2U00c7XoQ7cvQUU38ktFJrKRRVCfulnZfUlQK9EwCsluViAVtuEttzRWM60sN4783zg7PfvuO887L+2Cf3hgZt6Z857/88yZOefMVG1rHEGFcCswA6jvRPwXwMtAE/B3JVSoroDMUcDnwJNFiBlOA+YA3wLjKqBHcnJjgdVS3GML8BHwAfBj8NsQYDkwJbEuSckNBd4P2t4BJgHHAmOA81S+EHgt6PsKcHZCfZKSWxTU7wAmAguBna59N7BUX+q6YMzilDqlEnQtMNzVjdijJYx7Hpjq6gcB9ybSiVSr5VfAKSqvAs6MHP8mcKXKW4HDUyiV4ssNdMQM9+WQ4b/WYcAZCfRKQm6MK/8OfJhDxjfABlcfm0CvJOQGuXILsCunnK9d+cgyddqL1Ptc1f80NhMpyK135eOB/XPK8Xa7uUyd9iIFOW9jfXLaS20wvZcn0CsJuZ+0FRTwUA4ZD7vyFvmmZSOVzc1x5dOB2yPGTpGLVsDjiXRKRu5FefcFNJVIsFE+ZQFtwOxEOiVdLU8EfnD1JvmKlwC9XXuVHGgj9YJr36oI4a9UCvVKJOd8oE5OscdEPZu1SbfLozk6Q4aNvVkh03sZsqJRrm9pXv09wEnlKhLAtpe5wBPlCMk7LW3c68CzFSCGvqwtLMsUKeRCnmlZA3ySEW2v1p5ndvdnxIvbIz0GK1g9y/02HvgMGA38EqtoHnKLAmLmE96pqDsF6jUlz5WsIYrwR8XKjp2W1wAXufoSYGRCYoaVQIOmfAEj84RSsQtKK3CEyi16q5XESjdNbaXtH6QsiiLmy41zxAzXV5iYYZor2/44OWZwDLkrXPl7YEXMH+VES+BEV4ycX0TeqgSTTtDsmofGDIwh18+V1xfplxptTl6fGNkxW0F7F79bHHeMymu0F5aCWrluKNxZHIypidCxA/KSy/ris13GeL4OQUrBTOAu9dsUBK0EqYuuXnAHpIwKWl05xpvw025TQn2SktvTSbkrtOcc1yUqcYTVbbCPXE/FPnI9FTHk/ugGHKOSR1mbuG2al2lDPhj4TVH2ANcn72FHHvj/6qWDzlOBA4EdOg98WydMRclZ9ulu4LgulOiX0Zb8IEPo68onKEcawrJr84BHfLsntyA4wi2GWcAIeewL1a+txLHF4APRCcDlJeo0UO7fBD0dyD2dIeRTYK1OOhuCxKplpG7QY5nmp4JcZIx9+r5mBrfJ36wrMmaFrnzYf57j2i9QjufSAjnLMN3oOlggepNuHBQwSPn8aSLqMTzjcD8mNPEvzWLGxzrpZ1HGS7Kvta69XmnA0apbhnu6TV/Lofg8RavS4tuKKFOriHhycKbm8atyjs8B72pR8qjRXRT7QhcDh3Yi5ztdBnhVKb5iWONyqBuNh5HzjutUCSoVDcqITVLeMQs/y54XKJ85WSteVkodRRTNuoSzJEIX+3Ifu/oMT267rkjkydHvpxzLVcDVqsfCptsbIrY9x3hk/8NUnutXy41lHD7s1pu25yjtk9Mz7DPEKt3ca1YyqFysceQO8OQG642Xe7qySauvPSeLZKPufCG7nq/FoSs7ikWt67/Tu18DIlIDpcLe5P2ytwKWKv2emtj4IDu2ujo4sJ8Xmz4rEf6GQ++yJGXjEM2GAtbZKlsdHO/21w3WmeVknTKwwzX9xwcsE3Zn7EvZegHmCOwqnBU8IJfKY50c5pJz80VQ5wx9Q84rVCH6ygUcFrQ/I8+pw0HIg7KPngxzA28p6O8XlFnyGpb1QHLmZZlz8C8xQxjy2Epmj23Idi3QvO3uGq2b82EXfMx0bPPvuIUB/wCXEgzrNv/HYwAAAABJRU5ErkJggg=="
                />
              </svg>

              <h3>30+ Instructors</h3>
              <p>World’s greatest yoga minds</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="offers">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="44.592"
                height="54.997"
                viewBox="0 0 60 74"
              >
                <image
                  width="60"
                  height="74"
                  xlink:href="data:img/png;base64,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"
                />
              </svg>

              <h3>15+ Years Experience</h3>
              <p>average per instructor</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="offers">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="59.68"
                height="54.999"
                viewBox="0 0 51 47"
              >
                <image
                  width="51"
                  height="47"
                  xlink:href="data:img/png;base64,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"
                />
              </svg>

              <h3>150+ Programs</h3>
              <p>from the yoga masters</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- What We Offer -->

    <!-- Right Choice -->
    <div class="section right-choice home-spacing">
      <div class="container">
        <div class="main-title">
          <h3>
            Find your right Choice. <br />
            What are you up to Today?
          </h3>
        </div>

        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="choices">
              <div class="img-wrap">
                <a href="#">
                  <img src="assets/img/img-1.png" alt="" />
                </a>
              </div>

              <div class="text-wrap">
                <h4 class="main-title-small title">
                  <a href="#"
                    >Classes
                    <i class="fa fa-chevron-right"></i>
                  </a>
                </h4>
                <p>For your daily practice and to boost of some energy.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="choices">
              <div class="img-wrap">
                <a href="#">
                  <img src="assets/img/img-2.png" alt="" />
                </a>
              </div>

              <div class="text-wrap">
                <h4 class="main-title-small title">
                  <a href="#"
                    >Workshop
                    <i class="fa fa-chevron-right"></i>
                  </a>
                </h4>
                <p>For your daily practice and to boost of some energy.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="choices">
              <div class="img-wrap">
                <a href="#">
                  <img src="assets/img/img-3.png" alt="" />
                </a>
              </div>

              <div class="text-wrap">
                <h4 class="main-title-small title">
                  <a href="#"
                    >Fitness

                    <i class="fa fa-chevron-right"></i>
                  </a>
                </h4>
                <p>For your daily practice and to boost of some energy.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="choices">
              <div class="img-wrap">
                <a href="#">
                  <img src="assets/img/img-2.png" alt="" />
                </a>
              </div>

              <div class="text-wrap">
                <h4 class="main-title-small title">
                  <a href="#"
                    >Mindfullness

                    <i class="fa fa-chevron-right"></i>
                  </a>
                </h4>
                <p>For your daily practice and to boost of some energy.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Right Choice -->

    <!-- Connect With Us -->
    <section class="hero-banner connect-with-us position-relative">
      <picture class="bg-img">
        <img src="assets/img/banner-2.jpg" alt=" Banner" />
      </picture>

      <div class="banner-content">
        <div class="container">
          <div class="connect">
            <div class="main-title">
              <h3>
                Connect With Us <br />
                If You:
              </h3>
            </div>

            <ul>
              <li>For your daily practice and to boost of some energy.</li>
              <li>
                You want to explore what only an Enlightened Master can show
                you.
              </li>

              <li>
                You want to understand the science behind Yoga, Tantra, Occult,
                Kundalini & more.
              </li>
              <li>For your daily practice and to boost of some energy.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Connect With Us -->

    <!-- Reviews -->
    <section class="reviews home-spacing">
      <div class="container">
        <div class="main-title">
          <h3>What viewers are saying</h3>
        </div>

        <div class="owl-carousel owl-theme">
          <div class="review">
            <p>
              Sadhguru Exclusive delves beneath the surface, uncovers what might
              not be appropriate socially, but well, life isn't appropriate
              either! The videos leave me astounded, more open, more receptive
              and intensify my longing to know.
            </p>

            <div class="review-author">
              <span class="author-name">Mrigank</span>
              <span class="author-loc">Gujarat</span>
            </div>
          </div>
          <div class="review">
            <p>
              Sadhguru Exclusive delves beneath the surface, uncovers what might
              not be appropriate socially, but well, life isn't appropriate
              either! The videos leave me astounded, more open, more receptive
              and intensify my longing to know.
            </p>

            <div class="review-author">
              <span class="author-name">Mrigank</span>
              <span class="author-loc">Gujarat</span>
            </div>
          </div>
          <div class="review">
            <p>
              Sadhguru Exclusive delves beneath the surface, uncovers what might
              not be
            </p>

            <div class="review-author">
              <span class="author-name">Mrigank</span>
              <span class="author-loc">Gujarat</span>
            </div>
          </div>
          <div class="review">
            <p>
              Sadhguru Exclusive delves beneath the surface, uncovers what might
              not be appropriate socially, but well, life isn't appropriate
              either! The videos leave me astounded, more open, more receptive
              and intensify my longing to know.
            </p>

            <div class="review-author">
              <span class="author-name">Mrigank</span>
              <span class="author-loc">Gujarat</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Reviews -->

    <!-- Specialities -->

    <section class="speciality">
      <div class="container">
        <div class="title">
          <h3>Specialities</h3>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Gastritis</h5>
              <p>
                Gastritis is inflammation of the lining of the stomach. It may
                occur as a short episode or may be of a long duration. There may
                be no symptoms but, when symptoms are present, the most common
                is upper abdominal pain. Other possible symptoms include nausea
                and vomiting, bloating, loss of appetite and heartburn.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Diabetes</h5>
              <p>
                Diabetes is a disease that occurs when your blood glucose, also
                called blood sugar, is too high.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Backpain</h5>
              <p>
                Back pain can range from a muscle aching to a shooting, burning
                or stabbing sensation. In addition, the pain may radiate down
                your leg or worsen with bending, twisting, lifting, standing or
                walking.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Sinusitis</h5>
              <p>
                Sinusitis is an inflammation or swelling of the tissue lining
                the sinuses. Healthy sinuses are filled with air. But when they
                become blocked and filled with fluid, germs can grow and cause
                an infection.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Migraine</h5>
              <p>
                Migraine is a neurological condition that can cause multiple
                symptoms. It's frequently characterized by intense, debilitating
                headaches.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Allergy, Asthma</h5>
              <p>
                Allergic asthma is the most common type of asthma. About 90% of
                kids with childhood asthma have allergies, compared with about
                50% of adults with asthma. The symptoms that go along with
                allergic asthma show up after you breathe things called
                allergens (or allergy triggers) like pollen, dust mites, or
                mold.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Hemiplegia</h5>
              <p>
                Hemiplegia is a condition caused by brain damage or spinal cord
                injury that leads to paralysis on one side of the body. It
                causes weakness, problems with muscle control, and muscle
                stiffness.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Viral Fevers</h5>
              <p>
                A viral fever is any fever that's caused by an underlying viral
                illness. A variety of viral infections can affect humans, from
                the common cold to the flu. A low-grade fever is a symptom of
                many viral infections.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Piles, Fissure, Fistula</h5>
              <p>
                Piles are enlarged veins that form in a range of sizes. Piles
                can either form internal or external. They usually come out of
                the anal area due to the swollen tissues, fistulas are an
                opening of a cavity. Piles are mostly painless and unnoticeable.
                Fissures cause a lot of pain. In the case of fistulas, pus is
                discharged out of the anal area.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Piles, Fissure, Fistula</h5>
              <p>
                Piles are enlarged veins that form in a range of sizes. Piles
                can either form internal or external. They usually come out of
                the anal area due to the swollen tissues, fistulas are an
                opening of a cavity. Piles are mostly painless and unnoticeable.
                Fissures cause a lot of pain. In the case of fistulas, pus is
                discharged out of the anal area.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Psoriasis</h5>
              <p>
                Psoriasis is a skin disorder that causes skin cells to multiply
                up to 10 times faster than normal. This makes the skin build up
                into bumpy red patches covered with white scales. They can grow
                anywhere, but most appear on the scalp, elbows, knees, and lower
                back. Psoriasis can't be passed from person to person.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Hepatitis B</h5>
              <p>
                Hepatitis B is an infectious disease caused by the hepatitis B
                virus (HBV) that affects the liver; it is a type of viral
                hepatitis. It can cause both acute and chronic infection. Many
                people have no symptoms during the initial infection.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Skin disease</h5>
              <p>
                Skin disease, any of the diseases or disorders that affect the
                human skin. They have a wide range of causes. Visible
                alterations in the texture of the skin, such as rashes and
                hives, can be indicative of serious disease.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Insomnia</h5>
              <p>
                Insomnia is a sleep disorder in which you have trouble falling
                and/or staying asleep. The condition can be short-term (acute)
                or can last a long time (chronic). It may also come and go.
                Acute insomnia lasts from 1 night to a few weeks. Insomnia is
                chronic when it happens at least 3 nights a week for 3 months or
                more.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Mental stress</h5>
              <p>
                Mental stress in the pressure brought to bear on the existing
                mental balance or emotional equilibrium of any person; the
                symptoms of mental stress will most commonly be exhibited when
                the demands of a situation are seen as exceeding the personal
                resources that the individual can bring to bear on them at that
                moment.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Pediatrics</h5>
              <p>
                Pediatrics is the branch of medicine that involves the medical
                care of infants, children, and adolescents. Some of the
                pediatric diseases include anemia, asthma, chickenpox,
                diphtheria, leukemia, measles, mumps, pneumonia, polio,
                tuberculosis, whooping cough, lyme disease, fever, down's
                syndrome, dental caries, cystic fibrosis, chagas disease,
                candidiasis, cancer, bronchiolitis, etc.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Obesity</h5>
              <p>
                Obesity is a complex disease involving an excessive amount of
                body fat. Obesity isn't just a cosmetic concern. It is a medical
                problem that increases your risk of other diseases and health
                problems, such as heart disease, diabetes, high blood pressure
                and certain cancers.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Arthritis</h5>
              <p>
                Arthritis (Osteo Arthritis, Rheumatic Fever, Gouty arthritis,
                Rheumatoid arthritis) is the swelling and tenderness of one or
                more of your joints. The main symptoms of arthritis are joint
                pain and stiffness, which typically worsen with age. The most
                common types of arthritis are osteoarthritis and rheumatoid
                arthritis.
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="speciality-element">
              <h5>Infertility</h5>
              <p>
                Infertility is defined as not being able to get pregnant despite
                having frequent, unprotected sex for at least a year for most
                couples. Infertility may result from an issue with either you or
                your partner, or a combination of factors that prevent
                pregnancy.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Specialities -->

    <!-- FAQs -->
    <section class="faqs home-spacing">
      <div class="container">
        <div class="main-title">
          <h3>Frequently Asked Questions</h3>
        </div>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              >
                General
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse show"
              aria-labelledby="headingOne"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. quisquam est, qui dolorem ipsum quia dolor sit
                amet, consectetur, adipisci velit, sed quia non numquam eius
                modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                voluptatem.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              >
                Getting Started
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is
                hidden by default, until the collapse plugin adds the
                appropriate classes that we use to style each element. These
                classes control the overall appearance, as well as the showing
                and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth
                noting that just about any HTML can go within the
                <code>.accordion-body</code>, though the transition does limit
                overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              >
                Troubleshooting
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is
                hidden by default, until the collapse plugin adds the
                appropriate classes that we use to style each element. These
                classes control the overall appearance, as well as the showing
                and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth
                noting that just about any HTML can go within the
                <code>.accordion-body</code>, though the transition does limit
                overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFour"
                aria-expanded="false"
                aria-controls="collapseFour"
              >
                Login
              </button>
            </h2>
            <div
              id="collapseFour"
              class="accordion-collapse collapse"
              aria-labelledby="headingFour"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is
                hidden by default, until the collapse plugin adds the
                appropriate classes that we use to style each element. These
                classes control the overall appearance, as well as the showing
                and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth
                noting that just about any HTML can go within the
                <code>.accordion-body</code>, though the transition does limit
                overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FAQs -->

    <!-- Subscriptions -->
    <section class="subscriptions bg-black home-spacing">
      <div class="container">
        <div class="main-title">
          <span>Pricing</span>
          <h3>Subscription Plans</h3>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="subs-plans">
              <div class="main-title-med">
                <h3>Annual Plan</h3>
                <span>recommended</span>
              </div>
              <div class="pricing">
                <span>10 USD</span>
                Per Year
              </div>

              <ul class="pricing-req">
                <li>For your daily practice and to boost of some energy.</li>
                <li>
                  You want to explore what only an Enlightened Master can show
                  you.
                </li>
              </ul>

              <a href="#" class="btns button button-rounded">Consult with us</a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="subs-plans">
              <div class="main-title-med">
                <h3>6 months Plan</h3>
                <span>recommended</span>
              </div>
              <div class="pricing">
                <span>103 USD</span>
                Per Year
              </div>

              <ul class="pricing-req">
                <li>For your daily practice and to boost of some energy.</li>
                <li>
                  You want to explore what only an Enlightened Master can show
                  you.
                </li>
              </ul>

              <a href="#" class="btns button button-rounded">Consult with us</a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="subs-plans">
              <div class="main-title-med">
                <h3>On time Plan</h3>
                <span>recommended</span>
              </div>
              <div class="pricing">
                <span>10 USD</span>
                Per Year
              </div>

              <ul class="pricing-req">
                <li>For your daily practice and to boost of some energy.</li>
              </ul>

              <a href="#" class="btns button button-rounded">Consult with us</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Subscriptions -->

    <!-- Footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="footer-logo text-center">
              <a href="#">
                <img src="assets/img/logo.png" alt="" />
              </a>
            </div>
          </div>
          <div class="col-md-2 col-sm-6">
            <div class="footer-links">
              <h4 class="footer-heading">Company</h4>
              <ul>
                <li>
                  <a href="#">Privacy Policy</a>
                </li>
                <li>
                  <a href="#">Terms of Service</a>
                </li>
                <li>
                  <a href="#">Help</a>
                </li>

                <li>
                  <a href="#">About</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="footer-links">
              <h4 class="footer-heading">Contact Us</h4>
              <ul class="company-contact-info">
                <li>
                  <i class="fa fa-map-marker"></i>
                  Shakhamul, Kathmandu
                </li>
                <li>
                  <i class="fa fa-phone"></i>
                  +977-1-12341/12341
                </li>
                <li>
                  <i class="fa fa-envelope"></i>
                  yogsewa.com@gmail.com
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="copyrights">
              <div class="social">
                <a target="_blank" class="fab fa-facebook-f" href="#"></a>
                <a target="_blank" class="fab fa-twitter" href="#"></a>
                <a target="_blank" class="fab fa-youtube" href="#"></a>
                <a target="_blank" class="fab fa-linkedin" href="#"></a>
              </div>
              <p>Copyright © 2021 yogsewa.com Ltd. All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer -->

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
      integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
      crossorigin="anonymous"
    ></script>
    <script src="assets/js/main.js"></script>
    <!-- <script>
            $(".banner-slick").slick({
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: true,
              infinite: true,
              
            });
    </script> -->
  </body>
</html>
