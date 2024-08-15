<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php require('links.php'); ?>


</head>

<body class="bg-light">

  <?php require('header.php'); ?>

  <!-- body images -->
  <div class="container-fluid">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <?php
        $res = selectALL('carousel');
        while ($row = mysqli_fetch_assoc($res)) {
          $path = CAROUSEL_IMG_PATH;
          echo <<<data
                     
              <div class="swiper-slide">
               <img src=" $path$row[image]" class="w-100 d-block" />
              </div>
              
          data;
        }

        ?>
      </div>
    </div>
  </div>

  <!-- availability status -->
  <div class="container availability-form ">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded avail">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label for=class="form-label" style="font-weight: 500;">Check-in</label>
              <input type="date" class="form-control shadow-none" aria-describedby="emailHelp">
            </div>
            <div class="col-lg-3 mb-3">
              <label for=class="form-label" style="font-weight: 500;">Check-out</label>
              <input type="date" class="form-control shadow-none" aria-describedby="emailHelp">
            </div>
            <div class="col-lg-3 mb-3">
              <label for=class="form-label" style="font-weight: 500;">Adult</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label for=class="form-label" style="font-weight: 500;">Children</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn btn-outline-dark shadow-none ">Submit</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>

  <!-- 0ur Rooms -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold ">OUR ROOMS</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3 ">
        <div class="card border-0 shadow rooms" style="max-width:350px; margin:auto;">
          <img src="images/room1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">₹200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                1 Bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                Room Heater
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                4 Children
              </span>
            </div>
            <div class="ratings mb-4">
              <h6 class="mb-1">Ratings</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-info shadow-none">Book Now</a>
              <a href="#" class="btn btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card bprder-0 shadow rooms" style="max-width:350px; margin:auto;">
          <img src="images/room2.png" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">₹200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                1 Bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                Room Heater
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                4 Children
              </span>
            </div>
            <div class="ratings mb-4">
              <h6 class="mb-1">Ratings</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-info shadow-none">Book Now</a>
              <a href="#" class="btn btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card bprder-0 shadow rooms" style="max-width:350px; margin:auto;">
          <img src="images/room3.png" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">₹200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                1 Bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                Room Heater
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-rap">
                4 Children
              </span>
            </div>
            <div class="ratings mb-4">
              <h6 class="mb-1">Ratings</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-info shadow-none">Book Now</a>
              <a href="#" class="btn btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
    </div>
  </div>

  <!-- Our Facilities -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold ">OUR FACILITIES</h2>
  <div class="container">
    <div class="row justify-content-evenly">
      <div class="col-lg-2 col-md-2 shadow bg-white text-center rounded py-4 my-3 facil">
        <img src="images/wifi.svg" alt="">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 shadow bg-white text-center rounded py-4 my-3 facil">
        <img src="images/heater.svg" alt="">
        <h5 class="mt-3">Heater</h5>
      </div>
      <div class="col-lg-2 col-md-2 shadow bg-white text-center rounded py-4 my-3 facil">
        <img id="tv" src="images/tv.svg" alt="">
        <h5 class="mt-3">Television</h5>
      </div>
      <div class="col-lg-2 col-md-2 shadow bg-white text-center rounded py-4 my-3 facil">
        <img src="images/ac.svg" alt="">
        <h5 class="mt-3">AC</h5>
      </div>
      <div class="col-lg-2 col-md-2 shadow bg-white text-center rounded py-4 my-3 facil">
        <img src="images/treat.svg" alt="">
        <h5 class="mt-3">Treatment</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
      </div>
    </div>
  </div>

  <!-- Testimonials -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold ">TESTIMONIALS</h2>
  <div class="container mt-5">
    <div class="swiper swiper-testimonial">
      <div class="swiper-wrapper">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="images/wifi.svg" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Odio laudantium repudiandae consectetur culpa accusamus sed fugiat
            ex perferendis sequi minus!
          </p>
          <div class="ratings">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="images/wifi.svg" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Odio laudantium repudiandae consectetur culpa accusamus sed fugiat
            ex perferendis sequi minus!
          </p>
          <div class="ratings">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="images/wifi.svg" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Odio laudantium repudiandae consectetur culpa accusamus sed fugiat
            ex perferendis sequi minus!
          </p>
          <div class="ratings">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More>>></a>
    </div>

  </div>

  <!-- Reach us -->

  <?php
  $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
  $values = [1];
  $contact_r = mysqli_fetch_assoc(select($contact_q, $values, 'i'));

  ?>


  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold ">REACH US</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="<?php echo $contact_r['iframe'] ?>" loading="lazy"></iframe>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call us</h5>
          <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block  text-decoration-none text-dark  ">
            <i class="bi bi-telephone-fill"></i>+<?php echo $contact_r['pn1'] ?>
          </a><br>
          <?php
          if ($contact_r['pn2'] != '') {
            echo <<<data
                   <a href="tel: +$contact_r[pn2]" class="d-inline-block  text-decoration-none text-dark  ">
                     <i class="bi bi-telephone-fill"></i>+$contact_r[pn2]
                   </a>
            data;
          }
          ?>
        </div>
        <div class="bg-white p-4 rounded mb-3">
          <h5>Follow us</h5>
          <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block  text-decoration-none text-dark mt-1">
            <span class="badge bg-light text-dark fs-6 ">
              <i class="bi bi-instagram "></i> Instagram
            </span><br>
          </a><br>
          <?php
          if ($contact_r['tw'] != '') {
            echo <<<data
                   <a href="$contact_r[tw]" class="d-inline-block  text-decoration-none text-dark mt-1 ">
                      <span class="badge bg-light text-dark fs-6 mt-3">
                      <i class="bi bi-twitter-x"></i> Twitter
                      </span><br>
                   </a><br>
            data;
          }
          ?>
          <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block  text-decoration-none text-dark mt-1 ">
            <span class="badge bg-light text-dark fs-6 mt-3">
              <i class="bi bi-facebook"></i> Facebook
            </span><br>
          </a>
        </div>
      </div>
    </div>
  </div>

  <?php require('footer.php'); ?>



  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false
      }
    });
    var swiper = new Swiper(".swiper-testimonial", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1
        },
        640: {
          slidesPerView: 1
        },
        768: {
          slidesPerView: 2
        },
        1028: {
          slidesPerView: 3
        }
      }
    });
  </script>
</body>

</html>