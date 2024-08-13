<!DOCTYPE html>
<html lang="en">
   <head>
      <title>
         Sidavi Tech
      </title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="format-detection" content="telephone=no">
      <?php include('common/head.php'); ?>
      <link rel="stylesheet" href="./assets/css/testimonial-slider.css">
   </head>
   <!-- <div class="container-fluid">
      <div class="row">
      	<div class="col"></div>
      	<div class="col"></div>
      </div>
      </div> -->
   <body>
      <div class="main-wrapper">
         <!-- header -->
         <?php include('common/header.php'); ?>  
         <!-- site-banner -->
         <div class="slide-banner position-relarive">
            <div id="carouselExampleDark" class="carousel carousel-dark slide site-banner-main">
               <!-- <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div> -->  
               <div class="container position-relative py-5 py-xl-0">
                  <div class="row banner-content align-items-center">
                     <div class="col text-light">
                        <span class="common-border-line d-block mb-3"></span>
                        <h1>Dedicated to<br class="d-none d-lg-block"> Your IT Success</h1>
                        <p>We are a Managed IT Services provider with a focus on helping businesses to exceed their goals with the help of technology.We help businesses to keep up with dynamic market conditions and fill in talent gaps at short notice.</p>
                        <button class="btn btn-common position-relative mt-3"><a class="position-relative text-decoration-none color-secondary" href="#">Find out more</a></button>
                     </div>
                     <div class="col d-none d-lg-inline-block">
                        <div class="get-int-touch-form">
                           <h4 class="mb-3">Get in touch!!</h4>
                           <form action="lead_form.php" method="POST">
                              <div class="row">
                                 <div class="col">
                                    <input type="text" class="form-control" placeholder="First name" name="fname">
                                 </div>
                                 <div class="col">
                                    <input type="text" class="form-control" placeholder="Last name" name="lname">
                                 </div>
                              </div>
                              <div class="mb-3 mt-3"> 
                                 <input type="email" class="form-control" placeholder="Email address" name="email">
                              </div>
                              <div class="mb-3"> 
                                 <input type="text" class="form-control"  placeholder="Subject" name="subject">
                              </div>
                              <div class="mb-3"> 
                                 <textarea class="form-control" rows="3" name="message" placeholder="Your message"></textarea>
                              </div>
                              <button type="submit" name="submit" class="btn btn-common position-relative w-100 mt-4"><span class="d-inline-block position-relative">Get a Quote</span></button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-inner d-none d-xl-inline-block">
                  <div class="carousel-item active" data-bs-interval="10000">
                     <img src="./assets/images/slide-1.jpg" class="d-block" alt="...">
                  </div>
                  <!-- <div class="carousel-item" data-bs-interval="2000">
                     <img src="./assets/images/slide-1.jpg" class="d-block w-100" alt="...">
                     
                     </div>
                     <div class="carousel-item">
                     <img src="./assets/images/slide-1.jpg" class="d-block w-100" alt="...">
                     
                     </div> -->
               </div>
               <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                  </button> -->
            </div>
            <div class="clearfix"></div>
            <div class="scroll-down-btn d-none d-lg-block">
               <a href="#"><span class="bounce circle-box"></span></a>
            </div>
         </div>
         <!-- banner close -->
         <div class="container pc-60">
            <div class="common-heading-ui text-center">
               <p class="mb-1"><img src="./assets/images/arrow-doul.svg" alt=""> <span class="text-uppercase color-primary">There are many variations of passages</span></p>
               <h2>Our Partners</h2>
               <p class="heading-sub-copy">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
            </div>
            <div class="row mt-3 mt-md-4">
               <div class="col">
                  <ul class="list-inline text-center client-logos">
                     <li class="list-inline-item"><img src="./assets/images/client-1.svg" alt=""></li>
                     <li class="list-inline-item"><img src="./assets/images/client-2.svg" alt=""></li>
                     <li class="list-inline-item"><img src="./assets/images/client-3.svg" alt=""></li>
                     <li class="list-inline-item"><img src="./assets/images/client-4.svg" alt=""></li>
                     <li class="list-inline-item"><img src="./assets/images/client-5.svg" alt=""></li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- Our Partners close -->
         <section class="about-us-wrapper pc-60">
            <div class="container">
               <div class="row align-items-lg-center">
                  <div class="col-md-4">
                     <div class="aboutUs-copy-1">
                        <div class="overlayer-copy">
                           <h4>Mission.</h4>
                           <p>Our mission is to empower businesses to keep up with dynamic market conditions and fill in talent gaps at short notice.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 mt-3 mt-md-0">
                     <div class="aboutUs-copy-2">
                        <div class="overlayer-copy">
                           <h4>Vision.</h4>
                           <p>Our vision is to become a global leader in providing the best and unique solution services to improve our client's productivity and business strength.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0 order-first order-md-last">
                     <div class="common-heading-ui">
                        <p class="mb-1"><img src="./assets/images/arrow-doul.svg" alt=""> <span class="text-uppercase color-primary">There are many variations</span></p>
                        <h2>About Us</h2>
                        <p>Sidavi tech, an IT software consulting services company, is trusted by Fortune 500 companies and top startups across the globe to build and manage scalable digital solutions for their customers using cutting-edge technologies and latest programming languages. We have specialist in cutting edge technologies driving digital transformation including cloud, big data, data science, AI and machine learning/deep learning.</p>
                        <button class="btn btn-common position-relative mt-3"><a class="position-relative text-decoration-none color-secondary" href="#">Read more</a></button>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- about us close -->
         <div class="container pc-60">
            <div class="common-heading-ui text-center lets-together-box">
               <p class="mb-1"><img src="./assets/images/arrow-doul.svg" alt=""> <span class="text-uppercase color-primary">transform our flourishing business</span></p>
               <h2>Let us together</h2>
               <p>Engage a proven IT leader, with experience in your industry, to guide your technology and to bring their expertise to your highest-leverage tech decision points.</p>
               <p>Whether you need a seasoned expert to assess your current platform, to lead your technology, or as a mentor to elevate your IT leadership team, here it is: a way to leverage a business-focused top-flight CIO consultant when & how you need them.</p>
             
               <form action="newsletter.php" method="POST" class="input-group mt-3 newsletter-form">
                  <input type="email" name="nl_email" class="form-control" placeholder="Enter Your Email">
                  <button class="btn btn-outline-custom" type="submit" name="submit" ><img src="./assets/images/send.svg" alt=""></button>
               </form>
            </div>
         </div>
         <!-- Let us together close -->
         <section class="hire-us-wrapper overlayer-copy">
            <div class="container pc-60">
               <div class="common-heading-ui text-center">
                  <p class="mb-1"><img src="./assets/images/arrow-doul-w.svg" alt=""> <span class="text-uppercase text-light">There are many variations of passages</span></p>
                  <h2>Hire Us For</h2>
                  <p class="heading-sub-copy">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
               </div>
               <div class="row align-items-lg-center pt-3 pt-md-5">
                  <div class="col-md-4">
                     <div class="hire-us-copy color-secondary">
                        <img src="./assets/images/hire-3.svg" alt="">
                        <h4 class="pt-3">IT Consulting</h4>
                        <p>Are you ready to turn your IT challenges into a competitive advantage? Let’s talk. Sidavi is a Managed Service Provider that helps organizations solve their most perplexing technology challenges.</p>
                        <button class="btn btn-common position-relative mt-3"><a class="position-relative text-decoration-none color-secondary" href="#">Read more</a></button>
                     </div>
                  </div>
                  <div class="col-md-4 mt-3 mt-md-0">
                     <div class="hire-us-copy color-secondary">
                        <img src="./assets/images/hire-2.svg" alt="">
                        <h4 class="pt-3">Software Development</h4>
                        <p>Are you ready to turn your IT challenges into a competitive advantage? Let’s talk. Sidavi is a Managed Service Provider that helps organizations solve their most perplexing technology challenges.</p>
                        <button class="btn btn-common position-relative mt-3"><a class="position-relative text-decoration-none color-secondary" href="#">Read more</a></button>
                     </div>
                  </div>
                  <div class="col-md-4 mt-3 mt-md-0">
                     <div class="hire-us-copy color-secondary">
                        <img src="./assets/images/hire-1.svg" alt=""> 
                        <h4 class="pt-3">Big Data, Data Science</h4>
                        <p>Are you ready to turn your IT challenges into a competitive advantage? Let’s talk. Sidavi is a Managed Service Provider that helps organizations solve their most perplexing technology challenges.</p>
                        <button class="btn btn-common position-relative mt-3"><a class="position-relative text-decoration-none color-secondary" href="#">Read more</a></button>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Hire us close -->
         <div class="container pc-60 why-choose-us-wrapper">
            <div class="common-heading-ui text-center">
               <p class="mb-1"><img src="./assets/images/arrow-doul.svg" alt=""> <span class="text-uppercase color-primary">transform our flourishing business</span></p>
               <h2>Why Choose Us?</h2>
               <p class="heading-sub-copy">We are a Managed IT Services provider with a focus on helping businesses to exceed their goals with the help of technology.</p>
            </div>
            <div class="row pc-60">
               <div class="col-md-6">
                  <div class="wc-us-copy">
                     <h5>We are a Managed IT Services provider.</h5>
                     <p>We are a Managed IT Services provider with a focus on helping businesses to exceed their goals with the help of technology. We have the expertise and knowledge to offer impartial advice and services.</p>
                     <p>With us you'll feel heard. We listen to our client requirements and then select the right solution that fits. We care for your business as our own. Our talented technical team becomes an extension of your team, saving you time and resources on recruiting and onboarding</p>
                     <p>We are a Managed IT Services provider with a focus on helping businesses to exceed their goals with the help of technology. We have the expertise and knowledge to offer impartial advice and services.</p>
                     <p>With us you'll feel heard. We listen to our client requirements and then select the right solution that fits. We care for your business as our own. Our talented technical team becomes an extension of your team, saving you time and resources on recruiting and onboarding</p>
                  </div>
               </div>
               <div class="col-md-6 order-first order-md-last mb-3 mb-md-0 ">
                  <div class="wc-us-right-img">
                     <img class="img-fluid" src="./assets/images/wc-us.jpg" alt="">
                  </div>
               </div>
            </div>
            <div class="common-heading-ui text-center ">
               <p class="mb-1"><img src="./assets/images/arrow-doul.svg" alt=""> <span class="text-uppercase color-primary">transform our flourishing business</span></p>
               <h2>Digital Transformation in mind?</h2>
               <p class="heading-sub-copy">We are a Managed IT Services provider with a focus on helping</p>
            </div>
            <!-- why choose us close -->
            <div class="row mt-3 mt-md-5">
               <div class="col-md-6">
                  <div class="wc-us-right-img text-md-center mb-3 mb-md-0">
                     <img class="img-fluid" src="./assets/images/dti-mind.jpg" alt="">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="wc-us-copy">
                     <h5>We are a Managed IT Services provider.</h5>
                     <p>We are a Managed IT Services provider with a focus on helping businesses to exceed their goals with the help of technology. We have the expertise and knowledge to offer impartial advice and services.</p>
                     <p>With us you'll feel heard. We listen to our client requirements and then select the right solution that fits. We care for your business as our own. Our talented technical team becomes an extension of your team, saving you time and resources on recruiting and onboarding</p>
                     <p>We are a Managed IT Services provider with a focus on helping businesses to exceed their goals with the help of technology. We have the expertise and knowledge to offer impartial advice and services.</p>
                     <p>With us you'll feel heard. We listen to our client requirements and then select the right solution that fits. We care for your business as our own. Our talented technical team becomes an extension of your team, saving you time and resources on recruiting and onboarding</p>
                  </div>
               </div>
            </div>
         </div>
         <!--Digital Transformation  close -->
         <section class="about-us-wrapper pc-60">
            <div class="container">
               <div class="common-heading-ui text-center ">
                  <p class="mb-1"><img src="./assets/images/arrow-doul.svg" alt=""> <span class="text-uppercase color-primary">Your Trusted Partners</span></p>
                  <h2>Highly Motivated Team with Innovative Ideas</h2>
                  <p class="heading-sub-copy">We love what we do and therefore come up with the best possible solutions to help you set and grow online quickly. We are your trusted partners you can count on.</p>
               </div>
               <div class="row align-items-lg-center mt-3 mt-md-5">
                  <div class="col-md-4 mt-3 mt-md-0">
                     <div class="innovative-ideas-copy-1">
                        <div class="overlayer-copy">
                           <h4>Idea 1.</h4>
                           <p>Our mission is to empower businesses to keep up with dynamic market conditions and fill in talent gaps at short notice.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 mt-3 mt-md-0">
                     <div class="innovative-ideas-copy-2">
                        <div class="overlayer-copy">
                           <h4>Idea 2.</h4>
                           <p>Our vision is to become a global leader in providing the best and unique solution services to improve our client's productivity and business strength.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 mt-3 mt-md-0">
                     <div class="innovative-ideas-copy-3">
                        <div class="overlayer-copy">
                           <h4>Idea 3.</h4>
                           <p>Our mission is to empower businesses to keep up with dynamic market conditions and fill in talent gaps at short notice.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </div>
      </section>
      <!-- Innovative Ideas close -->
      <div class="container pc-60">
         <div class="common-heading-ui text-center lets-together-box">
            <p class="mb-1"><img src="./assets/images/arrow-doul.svg" alt=""> <span class="text-uppercase color-primary">Testimonials</span></p>
            <h2>What Our Clients Say</h2>
            <p>We love what we do and therefore come up with the best possible solutions.</p>
         </div>
         <!-- testimonials silder --> 
         <div class="container-fluid bg-body-tertiary py-3">
            <div id="testimonialCarousel" class="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="card shadow-sm rounded-3">
                        <div class="quotes display-2 text-body-tertiary">
                           <i class="bi bi-quote"></i>
                        </div>
                        <div class="card-body text-center">
                           <div>
                              <h5 class="card-title fw-bold">Jane Doe</h5>  
                              <span class="common-border-line d-block my-1 mx-auto"></span>
                              <img src="./assets/images/star1.svg" alt="">
                              <img src="./assets/images/star1.svg" alt="">
                              <img src="./assets/images/star1.svg" alt="">
                              <img src="./assets/images/star1.svg" alt="">
                              <img src="./assets/images/star-half.svg" alt="">
                           </div>
                           <p class="card-text">"Some quick example text to build on the card title and make up the
                              bulk of
                              the card's content."
                           </p>
                           <div class="pt-2 client-pic">
                              <img src="https://codingyaar.com/wp-content/uploads/square-headshot-1.png" alt="2"> 
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="card shadow-sm rounded-3">
                        <div class="quotes display-2 text-body-tertiary">
                           <i class="bi bi-quote"></i>
                        </div>
                        <div class="card-body text-center">
                        <div>
                                 <h5 class="card-title fw-bold">John Doe</h5>  
                                 <span class="common-border-line d-block my-1 mx-auto"></span>
                                 <img src="./assets/images/star1.svg" alt="">
                                 <img src="./assets/images/star1.svg" alt="">
                                 <img src="./assets/images/star1.svg" alt="">
                                 <img src="./assets/images/star1.svg" alt="">
                                 <img src="./assets/images/star-half.svg" alt="">
                              </div>
                              <p class="card-text">"Some quick example text to build on the card title and make up the
                              bulk of
                              the card's content."
                           </p> 
                           <div class="pt-2 client-pic">
                              <img src="https://codingyaar.com/wp-content/uploads/bootstrap-profile-card-image.jpg" alt="2"> 
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="card shadow-sm rounded-3">
                        <div class="quotes display-2 text-body-tertiary">
                           <i class="bi bi-quote"></i>
                        </div>
                        <div class="card-body text-center">
                        <div>
                                 <h5 class="card-title fw-bold">John Doe</h5>  
                                 <span class="common-border-line d-block my-1 mx-auto"></span>
                                 <img src="./assets/images/star1.svg" alt="">
                              <img src="./assets/images/star1.svg" alt="">
                              <img src="./assets/images/star1.svg" alt="">
                              <img src="./assets/images/star1.svg" alt="">
                              <img src="./assets/images/star-half.svg" alt="">
                              </div>
                              <p class="card-text">"Some quick example text to build on the card title and make up the
                              bulk of
                              the card's content."
                           </p> 
                           <div class="pt-2 client-pic">
                              <img src="https://codingyaar.com/wp-content/uploads/bootstrap-profile-card-image.jpg" alt="2"> 
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="card shadow-sm rounded-3">
                        <div class="quotes display-2 text-body-tertiary">
                           <i class="bi bi-quote"></i>
                        </div>
                        <div class="card-body text-center">
                        <div>
                                 <h5 class="card-title fw-bold">John Doe</h5>  
                                 <span class="common-border-line d-block my-1 mx-auto"></span>
                                 <img src="./assets/images/star1.svg" alt="">
                              <img src="./assets/images/star1.svg" alt="">
                              <img src="./assets/images/star1.svg" alt="">
                              <img src="./assets/images/star1.svg" alt="">
                              <img src="./assets/images/star-half.svg" alt="">
                              </div>
                              <p class="card-text">"Some quick example text to build on the card title and make up the
                              bulk of
                              the card's content."
                           </p> 
                           <div class="pt-2 client-pic">
                              <img src="https://codingyaar.com/wp-content/uploads/bootstrap-profile-card-image.jpg" alt="2"> 
                           </div>
                        </div>
                     </div>
                  </div> 
                  <div class="carousel-item">
                     <div class="card shadow-sm rounded-3">
                        <div class="quotes display-2 text-body-tertiary">
                           <i class="bi bi-quote"></i>
                        </div>
                        <div class="card-body text-center">
                              <div>
                                 <h5 class="card-title fw-bold">John Doe</h5>  
                                 <span class="common-border-line d-block my-1 mx-auto"></span>
                                 <img src="./assets/images/star1.svg" alt="">
                              <img src="./assets/images/star1.svg" alt="">
                              <img src="./assets/images/star1.svg" alt="">
                              <img src="./assets/images/star1.svg" alt="">
                              <img src="./assets/images/star-half.svg" alt="">
                              </div>
                              <p class="card-text">"Some quick example text to build on the card title and make up the
                              bulk of
                              the card's content."
                           </p> 
                           <div class="pt-2 client-pic">
                              <img src="https://codingyaar.com/wp-content/uploads/bootstrap-profile-card-image.jpg" alt="2"> 
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev"> 
               <img class="hover-off" src="./assets/images/left-arrow.png" alt="">
               <img class="hover-on" src="./assets/images/left-arrow-w.png" alt="">
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
               <img class="hover-off" src="./assets/images/right-arrow.png" alt="">
               <img class="hover-on" src="./assets/images/right-arrow-w.png" alt="">
               </button>
            </div>
         </div>
         <!-- testimonials close -->
      </div>
      <!-- wrapper -->
      </div> 
      <!-- footer -->
      <?php include('common/footer.php'); ?>
      <script src="./assets/js/testimonial-slider.js"></script>
   </body>
</html>