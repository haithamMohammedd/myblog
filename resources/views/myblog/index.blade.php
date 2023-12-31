@extends('myblog.master')

@section('content')
<!-- Start Landing -->
<div class="landing">
    <div class="container">
      <div class="text">
        <h1>{{ $title_header }}</h1>
        <p>{{ $content_header }}</p>
      </div>
      <div class="image">
        <img src="{{ asset('myblogstyle/imgs/landing-image.png') }}" alt="" />
      </div>
    </div>
    <a href="#articles" class="go-down">
      <i class="fas fa-angle-double-down fa-2x"></i>
    </a>
  </div>
  <!-- End Landing -->
  <!-- Start Articles -->
  <div class="articles" id="articles">
    <h2 class="main-title">Articles</h2>
    <div class="container">
      <div class="box">
        <img src="{{ asset('myblogstyle/imgs/cat-01.jpg') }}" alt="" />
        <div class="content">
          <h3>Test Title</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
        </div>
        <div class="info">
          <a href="">Read More</a>
          <i class="fas fa-long-arrow-alt-right"></i>
        </div>
      </div>
      <div class="box">
        <img src="{{ asset('myblogstyle/imgs/cat-02.jpg') }}" alt="" />
        <div class="content">
          <h3>Test Title</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
        </div>
        <div class="info">
          <a href="">Read More</a>
          <i class="fas fa-long-arrow-alt-right"></i>
        </div>
      </div>
      <div class="box">
        <img src="{{ asset('myblogstyle/imgs/cat-03.jpg') }}" alt="" />
        <div class="content">
          <h3>Test Title</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
        </div>
        <div class="info">
          <a href="">Read More</a>
          <i class="fas fa-long-arrow-alt-right"></i>
        </div>
      </div>
      <div class="box">
        <img src="{{ asset('myblogstyle/imgs/cat-04.jpg') }}" alt="" />
        <div class="content">
          <h3>Test Title</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
        </div>
        <div class="info">
          <a href="">Read More</a>
          <i class="fas fa-long-arrow-alt-right"></i>
        </div>
      </div>
      <div class="box">
        <img src="{{ asset('myblogstyle/imgs/cat-05.jpg') }}" alt="" />
        <div class="content">
          <h3>Test Title</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
        </div>
        <div class="info">
          <a href="">Read More</a>
          <i class="fas fa-long-arrow-alt-right"></i>
        </div>
      </div>
      <div class="box">
        <img src="{{ asset('myblogstyle/imgs/cat-06.jpg') }}" alt="" />
        <div class="content">
          <h3>Test Title</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
        </div>
        <div class="info">
          <a href="">Read More</a>
          <i class="fas fa-long-arrow-alt-right"></i>
        </div>
      </div>
      <div class="box">
        <img src="{{ asset('myblogstyle/imgs/cat-07.jpg') }}" alt="" />
        <div class="content">
          <h3>Test Title</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
        </div>
        <div class="info">
          <a href="">Read More</a>
          <i class="fas fa-long-arrow-alt-right"></i>
        </div>
      </div>
      <div class="box">
        <img src="{{ asset('myblogstyle/imgs/cat-08.jpg') }}" alt="" />
        <div class="content">
          <h3>Test Title</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
        </div>
        <div class="info">
          <a href="">Read More</a>
          <i class="fas fa-long-arrow-alt-right"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="spikes"></div>
  <!-- End Articles -->
  <!-- Start Gallery -->
  <div class="gallery" id="gallery">
    <h2 class="main-title">Gallery</h2>
    <div class="container">
      <div class="box">
        <div class="image">
          <img src="{{ asset('myblogstyle/imgs/gallery-01.png') }}" alt="" />
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="{{ asset('myblogstyle/imgs/gallery-02.png') }}" alt="" />
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="{{ asset('myblogstyle/imgs/gallery-03.jpg') }}" alt="" />
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="{{ asset('myblogstyle/imgs/gallery-04.png') }}" alt="" />
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="{{ asset('myblogstyle/imgs/gallery-05.jpg') }}" alt="" />
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="{{ asset('myblogstyle/imgs/gallery-06.png') }}" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- End Gallery -->
  <!-- Start Features -->
  <div class="features" id="features">
    <h2 class="main-title">Features</h2>
    <div class="container">
      <div class="box quality">
        <div class="img-holder"><img src="{{ asset('myblogstyle/imgs/features-01.jpg') }}" alt="" /></div>
        <h2>Quality</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit harum hic veniam eligendi minima</p>
        <a href="#">More</a>
      </div>
      <div class="box time">
        <div class="img-holder"><img src="{{ asset('myblogstyle/imgs/features-02.jpg') }}" alt="" /></div>
        <h2>Time</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit harum hic veniam eligendi minima</p>
        <a href="#">More</a>
      </div>
      <div class="box passion">
        <div class="img-holder"><img src="{{ asset('myblogstyle/imgs/features-03.jpg') }}" alt="" /></div>
        <h2>Passion</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit harum hic veniam eligendi minima</p>
        <a href="#">More</a>
      </div>
    </div>
  </div>
  <!-- End Features -->
  <!-- Start Testimonials -->
  <div class="testimonials" id="testimonials">
    <h2 class="main-title">Testimonials</h2>
    <div class="container">
      <div class="box">
        <img src="{{ asset('myblogstyle/imgs/avatar-01.png') }}" alt="" />
        <h3>Mohamed Farag</h3>
        <span class="title">Full Stack Developer</span>
        <div class="rate">
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
          quaerat ducimus
        </p>
      </div>
      <div class="box">
        <img src="{{ asset('myblogstyle/imgs/avatar-02.png') }}" alt="" />
        <h3>Mohamed Ibrahim</h3>
        <span class="title">Full Stack Developer</span>
        <div class="rate">
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
          quaerat ducimus
        </p>
      </div>
      <div class="box">
        <img src="{{ asset('myblogstyle/imgs/avatar-03.png') }}" alt="" />
        <h3>Shady Nabil</h3>
        <span class="title">Full Stack Developer</span>
        <div class="rate">
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
          quaerat ducimus
        </p>
      </div>
      <div class="box">
        <img src="{{ asset('myblogstyle/imgs/avatar-04.png') }}" alt="" />
        <h3>Amr Hendawy</h3>
        <span class="title">Full Stack Developer</span>
        <div class="rate">
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
          quaerat ducimus
        </p>
      </div>
      <div class="box">
        <img src="{{ asset('myblogstyle/imgs/avatar-05.png') }}" alt="" />
        <h3>Sherief Ashraf</h3>
        <span class="title">Full Stack Developer</span>
        <div class="rate">
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
          quaerat ducimus
        </p>
      </div>
      <div class="box">
        <img src="{{ asset('myblogstyle/imgs/avatar-06.png') }}" alt="" />
        <h3>Osama Mohamed</h3>
        <span class="title">Full Stack Developer</span>
        <div class="rate">
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
          quaerat ducimus
        </p>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->
  <!-- Start Team -->
  <div class="team" id="team">
    <h2 class="main-title">Team Members</h2>
    <div class="container">
      <div class="box">
        <div class="data">
          <img src="{{ asset('myblogstyle/imgs/team-01.jpg') }}" alt="" />
          <div class="social">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
        <div class="info">
          <h3>Name</h3>
          <p>Simple Short Description</p>
        </div>
      </div>
      <div class="box">
        <div class="data">
          <img src="{{ asset('myblogstyle/imgs/team-02.jpg') }}" alt="" />
          <div class="social">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
        <div class="info">
          <h3>Name</h3>
          <p>Simple Short Description</p>
        </div>
      </div>
      <div class="box">
        <div class="data">
          <img src="{{ asset('myblogstyle/imgs/team-03.jpg') }}" alt="" />
          <div class="social">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
        <div class="info">
          <h3>Name</h3>
          <p>Simple Short Description</p>
        </div>
      </div>
      <div class="box">
        <div class="data">
          <img src="{{ asset('myblogstyle/imgs/team-04.jpg') }}" alt="" />
          <div class="social">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
        <div class="info">
          <h3>Name</h3>
          <p>Simple Short Description</p>
        </div>
      </div>
      <div class="box">
        <div class="data">
          <img src="{{ asset('myblogstyle/imgs/team-05.png') }}" alt="" />
          <div class="social">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
        <div class="info">
          <h3>Name</h3>
          <p>Simple Short Description</p>
        </div>
      </div>
      <div class="box">
        <div class="data">
          <img src="{{ asset('myblogstyle/imgs/team-06.png') }}" alt="" />
          <div class="social">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
        <div class="info">
          <h3>Name</h3>
          <p>Simple Short Description</p>
        </div>
      </div>
      <div class="box">
        <div class="data">
          <img src="{{ asset('myblogstyle/imgs/team-07.jpg') }}" alt="" />
          <div class="social">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
        <div class="info">
          <h3>Name</h3>
          <p>Simple Short Description</p>
        </div>
      </div>
      <div class="box">
        <div class="data">
          <img src="{{ asset('myblogstyle/imgs/team-08.jpg') }}" alt="" />
          <div class="social">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
        <div class="info">
          <h3>Name</h3>
          <p>Simple Short Description</p>
        </div>
      </div>
    </div>
  </div>
  <div class="spikes"></div>
  <!-- End Team -->
  <!-- Start Services -->
  <div class="services" id="services">
    <h2 class="main-title">Services</h2>
    <div class="container">
      <div class="box">
        <i class="fas fa-user-shield fa-4x"></i>
        <h3>Security</h3>
        <div class="info">
          <a href="#">Details</a>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-tools fa-4x"></i>
        <h3>Fixing Issues</h3>
        <div class="info">
          <a href="#">Details</a>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-map-marked-alt fa-4x"></i>
        <h3>Location</h3>
        <div class="info">
          <a href="#">Details</a>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-laptop-code fa-4x"></i>
        <h3>Coding</h3>
        <div class="info">
          <a href="#">Details</a>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-palette fa-4x"></i>
        <h3>Security</h3>
        <div class="info">
          <a href="#">Design</a>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-bullhorn fa-4x"></i>
        <h3>Marketing</h3>
        <div class="info">
          <a href="#">Details</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Services -->
  <!-- Start Skills -->
  <div class="our-skills" id="our-skills">
    <h2 class="main-title">Our Skills</h2>
    <div class="container">
      <img src="{{ asset('myblogstyle/imgs/skills.png') }}" alt="" />
      <div class="skills">
        <div class="skill">
          <h3>HTML <span>80%</span></h3>
          <div class="the-progress">
            <span style="width: 0" data-width="80%"></span>
          </div>
        </div>
        <div class="skill">
          <h3>CSS <span>85%</span></h3>
          <div class="the-progress">
            <span style="width: 0" data-width="85%"></span>
          </div>
        </div>
        <div class="skill">
          <h3>JavaScript <span>70%</span></h3>
          <div class="the-progress">
            <span style="width: 0" data-width="70%"></span>
          </div>
        </div>
        <div class="skill">
          <h3>Python <span>80%</span></h3>
          <div class="the-progress">
            <span style="width: 0" data-width="80%"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Skills -->
  <!-- Start Work Steps -->
  <div class="work-steps" id="work-steps">
    <h2 class="main-title">How It Works ?</h2>
    <div class="container">
      <img src="{{ asset('myblogstyle/imgs/work-steps.png') }}" alt="" class="image" />
      <div class="info">
        <div class="box">
          <img src="{{ asset('myblogstyle/imgs/work-steps-1.png') }}" alt="" />
          <div class="text">
            <h3>Business Analysis</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt obcaecati quisquam quis laborum
              recusandae debitis vel
            </p>
          </div>
        </div>
        <div class="box">
          <img src="{{ asset('myblogstyle/imgs/work-steps-2.png') }}" alt="" />
          <div class="text">
            <h3>Architecture</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt obcaecati quisquam quis laborum
              recusandae debitis vel
            </p>
          </div>
        </div>
        <div class="box">
          <img src="{{ asset('myblogstyle/imgs/work-steps-3.png') }}" alt="" />
          <div class="text">
            <h3>Developement</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt obcaecati quisquam quis laborum
              recusandae debitis vel
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Work Steps -->
  <!-- Start Events -->
  <div class="events" id="events">
    <div class="dots dots-up"></div>
    <div class="dots dots-down"></div>
    <h2 class="main-title">Latest Events</h2>
    <div class="container">
      <img src="{{ asset('myblogstyle/imgs/events.png') }}" alt="" />
      <div class="info">
        <div class="time">
          <div class="unit">
            <span class="days">15</span>
            <span>Days</span>
          </div>
          <div class="unit">
            <span class="hours">08</span>
            <span>Hours</span>
          </div>
          <div class="unit">
            <span class="minutes">45</span>
            <span>Minutes</span>
          </div>
          <div class="unit">
            <span class="seconds">55</span>
            <span>Seconds</span>
          </div>
        </div>
        <h2 class="title">Tech Masters Event 2021</h2>
        <p class="description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero tenetur doloremque iusto ut adipisci quam
          ratione aliquam excepturi nulla in harum, veritatis porro
        </p>
      </div>
      <div class="subscribe">
        <form action="">
          <input type="email" placeholder="Enter Your Email" />
          <input type="submit" value="Subscribe" />
        </form>
      </div>
    </div>
  </div>
  <!-- End Events -->
  <!-- Start Pricing -->
  <div class="pricing" id="pricing">
    <div class="dots dots-up"></div>
    <div class="dots dots-down"></div>
    <h2 class="main-title">Pricing Plans</h2>
    <div class="container">
      <div class="box">
        <div class="title">Basic</div>
        <img src="{{ asset('myblogstyle/imgs/hosting-basic.png') }}" alt="" />
        <div class="price">
          <span class="amount">$15</span>
          <span class="time">Per Month</span>
        </div>
        <ul>
          <li>10GB HDD Space</li>
          <li>5 Email Addresses</li>
          <li>2 Subdomains</li>
          <li>4 Databases</li>
          <li>Basic Support</li>
        </ul>
        <a href="#">Choose Plan</a>
      </div>
      <div class="box popular">
        <div class="label">Most Popular</div>
        <div class="title">Advanced</div>
        <img src="{{ asset('myblogstyle/imgs/hosting-advanced.png') }}" alt="" />
        <div class="price">
          <span class="amount">$25</span>
          <span class="time">Per Month</span>
        </div>
        <ul>
          <li>20GB HDD Space</li>
          <li>10 Email Addresses</li>
          <li>5 Subdomains</li>
          <li>8 Databases</li>
          <li>Advanced Support</li>
        </ul>
        <a href="#">Choose Plan</a>
      </div>
      <div class="box">
        <div class="title">Professional</div>
        <img src="{{ asset('myblogstyle/imgs/hosting-professional.png') }}" alt="" />
        <div class="price">
          <span class="amount">$45</span>
          <span class="time">Per Month</span>
        </div>
        <ul>
          <li>50GB HDD Space</li>
          <li>20 Email Addresses</li>
          <li>10 Subdomains</li>
          <li>20 Databases</li>
          <li>Professional Support</li>
        </ul>
        <a href="#">Choose Plan</a>
      </div>
    </div>
  </div>
  <!-- End Pricing -->
  <!-- Start Videos -->
  <div class="videos" id="videos">
    <h2 class="main-title">Top Videos</h2>
    <div class="container">
      <div class="holder">
        <div class="list">
          <div class="name">
            Top Videos
            <i class="fas fa-random"></i>
          </div>
          <ul>
            <li>How To Create Sub Domain<span>05:18</span></li>
            <li>Playing With The DNS <span>03:18</span></li>
            <li>Everything About The Virtual Hosts <span>05:25</span></li>
            <li>How To Monitor Your Website <span>04:16</span></li>
            <li>Uncharted Beating The Last Boss <span>07:48</span></li>
            <li>Ys Oath In Felghana Overview <span>03:12</span></li>
            <li>Ys Series All Games Ending <span>08:10</span></li>
          </ul>
        </div>
        <div class="preview">
          <img src="{{ asset('myblogstyle/imgs/video-preview.jpg') }}" alt="" />
          <div class="info">Everything About The Virtual Hosts</div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Videos -->
  <!-- Start Stats -->
  <div class="stats" id="stats">
    <h2>Our Awesome Stats</h2>
    <div class="container">
      <div class="box">
        <i class="far fa-user fa-2x fa-fw"></i>
        <span class="number" data-goal="150">0</span>
        <span class="text">Clients</span>
      </div>
      <div class="box">
        <i class="fas fa-code fa-2x fa-fw"></i>
        <span class="number" data-goal="135">0</span>
        <span class="text">Projects</span>
      </div>
      <div class="box">
        <i class="fas fa-globe-asia fa-2x fa-fw"></i>
        <span class="number" data-goal="50">0</span>
        <span class="text">Countries</span>
      </div>
      <div class="box">
        <i class="far fa-money-bill-alt fa-2x fa-fw"></i>
        <span class="number" data-goal="500">0</span>
        <span class="text">Money</span>
      </div>
    </div>
  </div>
  <!-- End Stats -->
  <!-- Start Discount -->
  <div class="discount" id="discount">
    <div class="image">
      <div class="content">
        <h2>We Have A Discount</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi asperiores consectetur, recusandae
          ratione provident necessitatibus, cumque delectus commodi fuga praesentium beatae. Totam vel similique
          laborum dicta aperiam odit doloribus corporis.
        </p>
        <img src="{{ asset('myblogstyle/imgs/discount.png') }}" alt="" />
      </div>
    </div>
    <div class="form">
      <div class="content">
        <h2>Request A Discount</h2>
        <form action="">
          <input class="input" type="text" placeholder="Your Name" name="name" />
          <input class="input" type="email" placeholder="Your Email" name="email" />
          <input class="input" type="text" placeholder="Your Phone" name="mobile" />
          <textarea class="input" placeholder="Tell Us About Your Needs" name="message"></textarea>
          <input type="submit" value="Send" />
        </form>
      </div>
    </div>
  </div>
  <!-- End Discount -->
  @stop
