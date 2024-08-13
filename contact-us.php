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
       
         <?php include('common/header.php'); ?>   
   <!-- header close-->
        <section class="contact-us-warpper">
          <!-- page-banner -->
         <div class="contact-content pc-60">
            <div class="container">
               <div class="row">
                  <div class="col text-light">
                  <span class="common-border-line d-block mb-3"></span>
                     <h2>Contact Us</h2>
                     <p>Come meet us there!</p> 
                  </div> 
               </div>
            </div>
         </div>
         <!-- contact details -->
         <div class="container pc-60">
            <div class="row ">
               <div class="col-md-6 col-lg-3 offset-lg-3 ">
                   <div class="detail-box p-3 border-with-shadow">
                        <img src="./assets/images/phone-.svg" alt="">
                        <p class="py-2 mt-1-c"><strong>Call us</strong><br>
                        Mon-Fri from 8am to 5pm PST<br>
                           <a href="tel:+15100000000" class="h-link">+1 (510) 000-0000</a></p>
                  </div>

                   <div class="detail-box text-start p-3 border-with-shadow mt-3">
                        <img src="./assets/images/message-.svg" alt="">
                        <p class="py-2 mt-1-c"><strong>Chat to support</strong><br>
                           Speak to our friendly team.<br>
                           <a href="mailto:support@siddhatek.com" class="h-link">support@siddhatek.com</a></p>
                   </div> 
                  
               </div>
               
               <div class="col-md-6 col-lg-3 mt-3 mt-md-0">
                     <div class="get-int-touch-form border-with-shadow">
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
         <!-- location map -->
          <div class="container">
            <div class="common-heading-ui text-center lets-together-box">
                  <p class="mb-1"><img src="./assets/images/arrow-doul.svg" alt=""> <span class="text-uppercase color-primary">We love hiking</span></p>
                  <h2>Our Location</h2>
                  <p >We love hiking, and Mission Peak is one of our favorite spots.
                  Come meet us there!</p> 
            </div>
            <div class="row">
               <div class="col mt-2 mt-md-5">
                  <div class="border-with-shadow">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.348366888471!2d-121.98525252446113!3d37.52328452660771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fc0ad487dc6dd%3A0x8c84af253874dfde!2s40280%20Strawflower%20Way%2C%20Fremont%2C%20CA%2094538%2C%20USA!5e0!3m2!1sen!2sin!4v1722928498255!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
            </div>
          </div>
           <!-- Our Partners -->
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
        
        </section> 
      <!-- wrapper -->
      </div> 
      <!-- footer -->
      <?php include('common/footer.php'); ?>
      <script src="./assets/js/testimonial-slider.js"></script>
   </body>
</html>