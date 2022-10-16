@extends("layouts.master")

@section("title")
Speak First Course
@endsection

<!-- Sub Header -->
<div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>Website ini dipertunjukkan untuk memenuhi nilai UTS PBWL</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
            <div class="right-content">
                <p>Tasya Wamantassa - 2018130011</p>
              </div>
        </div>
      </div>
    </div>
  </div>

@section("content")



  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="{{asset('images/course-video.mp4')}}" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Hello Students</h6>
              <h2>Welcome to Speak First</h2>
              <p>This is a place where you can speak English more fluently and confidently!</p><br>
              <div class="featuresdetails__article__content">
                <h6>We help you gain confidence and improve your speaking, pronunciation and vocabulary.</h6>
                <div class="htmlcontent htmlcontent--3">
                    <ul class="listchecks">
                        <li class="listchecks">Practice in small group classes and private one-to-one classes</li>
                        <li class="listchecks">Customise your timetable, Choose classes based on your goals and interests.</li>
                        <li class="listchecks">Choose your level. From beginner to advanced.</li>
                    </ul>
                </div>
            </div>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">

            <div class="item">
              <div class="icon">
                <img src="{{asset('images/service-icon-01.png')}}" alt="">
              </div>
              <div class="down-content">
                <h4>Best Practice</h4>
                <p>We provide the best way and technique to learn</p>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="{{asset('images/service-icon-02.png')}}" alt="">
              </div>
              <div class="down-content">
                <h4>Best Teachers</h4>
                <p>Our teachers have years and professional experience</p>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="{{asset('images/service-icon-03.png')}}" alt="">
              </div>
              <div class="down-content">
                <h4>Best Students</h4>
                <p>Our students are passionate and willing to learn</p>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="{{asset('images/service-icon-02.png')}}" alt="">
              </div>
              <div class="down-content">
                <h4>Online Meeting</h4>
                <p>No time and no commute? No problem! We provide online classes anytime and anywhere</p>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="{{asset('images/service-icon-03.png')}}" alt="">
              </div>
              <div class="down-content">
                <h4>Best Networking</h4>
                <p>Meet people across ages with multiple backgrounds and improve together</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Our Classes</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="categories">
            <h4>Class Categories</h4>
            <ul class="class-categories">
              <li>Beginner Conversation</li>
              <li>Advanced Conversation</li>
              <li>Everyday Grammar</li>
              <li>Speaking for Business</li>

            </ul>
            <div class="main-button-red">
              <a href="/services">All Classes</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="info">
                    <span>50% Discount</span>
                  </div>
                  <img src="images/meeting-01.jpg" alt="Beginner Conversation">
                </div>
                <div class="down-content">
                  <h4>Beginner Conversation</h4>
                  <p>Everything you need to know first to speak English<br>Confident in speaking guaranteed</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="info">
                    <span>3 seats left</span>
                  </div>
                  <img src="images/meeting-02.jpg" alt="Speaking for Business">
                </div>
                <div class="down-content">
                  <h4>Speaking for Business</h4>
                  <p>Leverage more business profits with English<br>English for entrepreneurs</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="info">
                    <span>Free Trial Available</span>
                  </div>
                  <img src="images/meeting-03.jpg" alt="Advanced Conversation">
                </div>
                <div class="down-content">
                  <h4>Advanced Conversation</h4>
                  <p>Speak English well but even better!<br>All advanced grammar taught by the natives</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="info">
                    <span>Certificates Available</span>
                  </div>
                  <img src="images/meeting-04.jpg" alt="Everyday Grammar">
                </div>
                <div class="down-content">
                  <h4>Everyday Grammar</h4></a>
                  <p>Learn all the grammar you need for speaking<br>Get the certificate at the end of the course</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>APPLY FOR STUDENTS</h3>
                <p>Register to join our amazing classes taught by world-class teachers</p>
                <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h3>APPLY FOR TUTORS</h3>
                <p>Join our tutors full of young bright minds with years of teaching experience</p>
                <div class="main-button-yellow">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
                <div class="accordion-head">
                    <span>About Speak First</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>We are a private institution passionate in bringing world-class quality classes. We believe in a future where English has no boundaries. Founded in 1945, we have the best of the best when it comes to language acquisition.</p>
                    </div>
                </div>
            </article>

            <article class="accordion">
                <div class="accordion-head">
                    <span>Please tell your friends</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Invite your friends to your class and earn 1 free class package in Speak First</p>
                    </div>
                </div>
            </article>
            <article class="accordion last-accordion">
                <div class="accordion-head">
                    <span>Share this to your colleagues</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Share our services to your friends and colleagues and get referral code for discount</p>
                    </div>
                </div>
            </article>
        </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Our Popular Courses</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            <div class="item">
              <img src="images/course-01.jpg" alt="Course One">
              <div class="down-content">
                <h4>Beginner Conversation</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>Rp799,000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="images/course-02.jpg" alt="Course Two">
              <div class="down-content">
                <h4>IELTS Preparation</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>Rp3000,000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>English For Business</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>Rp999,000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>Advanced Conversation</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>Rp1200,000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="images/course-01.jpg" alt="">
              <div class="down-content">
                <h4>Everyday Grammar</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>Rp499,000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="images/course-02.jpg" alt="">
              <div class="down-content">
                <h4>English For Kids</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>Rp999,000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>TOEFL Preparation</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>Rp999,000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>Full Package Conversation</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>Rp4999,000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>A Few Facts About Us</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <div class="count-digit">99</div>
                    <div class="count-title">Students Speak More Confidently</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">100</div>
                    <div class="count-title">Current Teachers</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">2345</div>
                    <div class="count-title">New Students</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">5</div>
                    <div class="count-title">Best Course Awards</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="video">
            <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="images/play-icon.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>

