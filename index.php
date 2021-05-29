<?php
function Redirect_to($New_Location)
{header("Location:" . $New_Location);
    exit;
}

// call the contact() function if contact_btn is clicked
if (isset($_POST['contact_btn'])) {
    contact();
}

function contact()
{
    if (isset($_POST["contact_btn"])) {

      $to="zanzerdawadi123@gmail.com";
      $name = $_POST["name"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $getdrop = $_POST["drop"];
      
      $getchoosebaby = $_POST["choosebaby"];
      $getchoosekilo = $_POST["choosekilo"];
      // Email Functionality
      
      
    
      $subject = "Received the message from SIMRAN BUNGUR FARM";
    
      $body = "Client has order following thing:";
      $body .="\r\n";
      $body.="\r\nCustomer Name: ".  $name; 
      $body .="\r\n";
      $body.="\r\nCustomer Email: ". $email;
      $body .="\r\n";
      $body.="\r\nCustomer phone: ". $phone;
      $body .="\r\n";
      $body.="\r\nCustomer Choose: ". $getdrop;
      $body .="\r\n";
      $body.="\r\nCustomer Small pig: ". $getchoosebaby;
      $body .="\r\n";
      $body.="\r\nCustomer Fish: ". $getchoosekilo;

        
      $headers = "From: zanzerdawadi123@gmail.com";
      if(mail($to, $subject, $body ,$headers)){
            Redirect_to("thanks.html");
        } else {
            Redirect_to("index.php");
        }
      }
    } //Ending of Submit Button If-Condition



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
       name="author" content="http://www.simranbangurfarm.com"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link rel="icon" type="image/x-icon" href="logo.ico"/>
    <title>
      Simran Bangur Farm
    </title>
    
    
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="Logo" href="img/logo.jpg"   />
  </head>
  <body id="home">
    <!--Header-->
    <header>
      <!-- Navbar -->
      <nav
        class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar"
      >
        <div class="container">
          <a class="logotext navbar-brand font-weight-bolder title" href="/"
            >SIMRAN BANGUR FARM</a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="list-unstyled navbar-nav mr-auto navleft">
              <li class="nav-item ml-4 mb-0">
                <a class="nav-link textcolor font-weight-normal" href="#home">
                  Home
                </a>
              </li>
              <li class="nav-item ml-4">
                <a class="nav-link textcolor font-weight-normal" href="#about">
                  About
                </a>
              </li>
              <li class="nav-item ml-4">
                <a
                  class="nav-link textcolor font-weight-normal"
                  href="#services"
                >
                  Services
                </a>
              </li>
              <li class="nav-item ml-4">
                <a class="nav-link textcolor font-weight-normal" href="#price">
                  Price
                </a>
              </li>
              <li class="nav-item ml-4">
                <a
                  class="nav-link textcolor font-weight-normal"
                  href="#testimonials"
                >
                  Proprietor
                </a>
              </li>
              <li class="nav-item ml-4">
                <a class="nav-link textcolor font-weight-normal" href="#home">
                  Contact
                </a>
              </li>
            </ul>
            <!-- Social Icon  -->
            <ul class="navbar-nav nav-flex-icons">
              <li class="nav-item">
                <a class="nav-link text-info" href="https://www.facebook.com/namitaa.dawadi">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-primary">
                  <i class="fab fa-twitter title"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger">
                  <i class="fab fa-instagram title"></i>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a
                  class="btn bookhover btn-outline-success btn-rounded waves-effect font-weight-bold btn-sm"
                  href="tel:+9779844947424"
                  data-offset="90"
                  >9844947424</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->

      <!-- Full Page Intro -->
      <div
        class="view"
        style="
          background-image: url('img/body1.JPG');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        "
      >
        <!-- Mask & flexbox options-->
        <div
          class="mask rgba-black-light d-flex justify-content-center align-items-center"
        >
          <!-- Content -->
          <div class="container">
            <!--Grid row-->
            <div class="row mt-5">
              <!--Grid column-->
              <div
                class="col-md-7 mb-5 mt-md-0 mt-5 white-text text-center text-md-left"
              >
                <h1
                  class="h1-responsive font-weight-bold wow fadeInLeft"
                  style="padding-top: 18%;"
                  data-wow-delay="0.3s"
                >
                  SIMRAN BUNGUR FARM <br />
                  Available 
                </h1>

                <h4 class="mb-3 pt-4 pb-4 wow fadeInLeft" data-wow-delay="0.3s">
                  Our product known for quality
                </h4>
                <a
                  class="btn bookhover2 btn-outline-white btn-rounded wow fadeInLeft"
                  data-wow-delay="0.3s"
                  href="#about"
                  >About Us</a
                >
              </div>
              <!--Grid column-->
              <!--Grid column-->
              <div class="col-md-5 col-xl-5 mb-4">
                <!--Form-->
                <div class="card wow fadeInRight" data-wow-delay="0.3s">
                  <form name="Contact Form" method="post" action="index.php" >
                    <div
                      class="card-body z-depth-2"
                      style="background-color: white;"
                    >
                      <!--Header-->
                      <div class="text-center">
                        <h3 class="dark-grey-text">
                          <strong>Order Now</strong>
                        </h3>
                        <hr />
                      </div>
                      <!--Body-->
                      <div class="md-form">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input
                          type="text"
                          id="form3"
                          class="form-control"
                          name="name"
                          required
                        />
                        <label class="dark-grey-text" for="form3">Name</label>
                      </div>
                      <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input
                          type="email"
                          id="form2"
                          class="form-control"
                          name="email"
                          required
                        />
                        <label class="dark-grey-text" for="form2">Email</label>
                      </div>
                      <div class="md-form">
                        <i class="fas fa-phone prefix grey-text"></i>
                        <input
                          type="number"
                          id="form6"
                          class="form-control"
                          name="phone"
                          required
                        />
                        <label class="dark-grey-text" for="form6">Enter you phone number</label>
                      </div>
                      <!-- drop -->
                      <div style="margin-right:18px;" class="md-form">
                      <select 
                      style="margin: 25px; padding:8px;"
                          id="form6"
                          name="drop"
                          class="form-control" 
                          
                          required>
                          <option selected disabled> Select our Product</Option>
                      <option value = "Piglets">Piglets</Option>
                      <option value = "Cat-Fish"> Cat-Fish</Option>
                      <option value = "Small-Fish"> Small-Fish</Option>
                      <option value = "Cat-Fish and Piglets"> Cat-Fish and Piglets</Option>
                      </select>
                      <i class = "fas fa-caret-down prefix grey-text"> </i>
                        </div>
                        <!-- choose baby  -->
                        <div style="margin-right:18px;" class="md-form">
                      <select 
                      style="margin: 25px; padding:8px;"
                          id="form6"
                          name="choosebaby"
                          class="form-control" 
                          >
                      <option selected disabled> Select Baby of Pig</Option>
                      
                      <option value = "1 baby"> 1 baby</Option>
                      <option value = "2baby"> 2 baby</Option>
                      <option value = "3baby"> 3 baby</Option>
                      <option value = "4baby"> 4 baby</Option>
                      <option value = "5baby"> 5 baby</Option>
                      <option value = "6baby"> 6 baby</Option>
                      <option value = "7baby"> 7 baby</Option>
                      <option value = "8baby"> 8 baby</Option>
                      <option value = "9baby"> 9 baby</Option>
                      <option value = "10-15baby"> 10-15 baby</Option>
                      <option value = "15-20baby"> 15-20 baby</Option>
                      <option value = "20-25baby"> 20-25 baby</Option>
                      <option value = "25-30baby"> 25-30 baby</Option>
                      <option value = "30-40 baby"> 30-40 baby</Option>
                      <option value = "40-50 baby"> 40-50 baby</Option>
                      <option value = "50-60 baby"> 50-60 baby</Option>
                      <option value = "60-70 baby"> 60-70 baby</Option>
                      <option value = "70-90 baby"> 70-90 baby</Option>
                      <option value = "90-100 baby"> 90-100 baby</Option>
                      <option value = "above 100 baby"> above 100 baby</Option>
                      <option value = "above 150 baby"> above 150 baby</Option>
                      <option value = "above 200 baby"> above 200 baby</Option>
                      

                      </select>
                      <i class = "fas fa-caret-down prefix grey-text"></i>
                        
                        </div>
                      <!-- choose kilo  -->
                      
                      <div style="margin-right:18px;" class="md-form">
                      <select 
                      style="margin: 25px; padding:8px;"
                          id="form6"
                          name="choosekilo"
                          class="form-control" 
                          >
                      <option selected disabled> Select Kilo-Gram for Fish</Option>
                      
                      <option value = "1kg"> 1kg</Option>
                      <option value = "2kg"> 2kg</Option>
                      <option value = "3kg"> 3kg</Option>
                      <option value = "4kg"> 4kg</Option>
                      <option value = "5kg"> 5kg</Option>
                      <option value = "6kg"> 6kg</Option>
                      <option value = "7kg"> 7kg</Option>
                      <option value = "8kg"> 8kg</Option>
                      <option value = "9kg"> 9kg</Option>
                      <option value = "10-15kg"> 10-15kg</Option>
                      <option value = "15-20kg"> 15-20kg</Option>
                      <option value = "20-25kg"> 20-25kg</Option>
                      <option value = "25-30kg"> 25-30kg</Option>
                      <option value = "30-40kg"> 30-40kg</Option>
                      <option value = "40-50kg"> 40-50kg</Option>
                      <option value = "50-60kg"> 50-60kg</Option>
                      <option value = "60-70kg"> 60-70kg</Option>
                      <option value = "70-90kg"> 70-90kg</Option>
                      <option value = "90-100kg"> 90-100kg</Option>
                      <option value = "above 100kg"> above 100kg</Option>
                      <option value = "above 150kg"> above 150kg</Option>
                      <option value = "above 200kg"> above 200kg</Option>                      
                      </select>
                      <i class = "fas fa-caret-down prefix grey-text"></i>
                        </div>
                        
                      <!--Textarea with icon prefix-->
                  
                      <div class="text-center mt-3">
                        <button
                          type="submit"
                          class="btn bookhover btn-outline-success btn-rounded waves-effect"
                          name="contact_btn"
                        >
                          Order Pig and Fish
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
                <!--/.Form-->
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </div>
          <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
      </div>
      <!-- Full Page Intro -->
    </header>
    <!--Header-->

    <!-- Main -->
    <main>
      <!-- Our $249 cleaning package -->
      <div style="background-color: #ffffff;">
        <div class="container pt-5 pb-5 px-5">
          <!-- Section -->
          <section>
            <style>
              /* Steps */
              .step {
                list-style: none;
                margin: 0;
              }

              .step-element {
                display: flex;
                padding: 1rem 0;
              }

              .step-number {
                position: relative;
                width: 7rem;
                flex-shrink: 0;
                text-align: center;
              }

              .step-number .number {
                color: #fff;
                background-color: #00c851;
                font-size: 1.5rem;
              }

              .step-number .number {
                width: 30px;
                height: 30px;
                line-height: 30px;
              }

              .number {
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: 38px;
                border-radius: 10rem;
              }

              .step-number::before {
                content: '';
                position: absolute;
                left: 50%;
                top: 48px;
                bottom: -2rem;
                margin-left: -1px;
                border-left: 2px dashed #eaeff4;
              }

              .step .step-element:last-child .step-number::before {
                bottom: 1rem;
              }
            </style>

            <h3
              class="font-weight-bold text-center dark-grey-text pb-2 wow fadeInUp slow"
            >
           <p style="text-decoration: line-through;">Rs.6500</p> Pig Baby is now just Rs.6200
            </h3>
            <hr class="w-header my-4" />

            <div class="row align-items-center">
              <div class="col-lg-6 col-md-6 mb-4 mb-md-0 wow fadeInLeft slow">
                <!--Image-->
                <div class="z-depth-1-half">
                  <img
                    src="https://dam.farmjournal.com/m/7f39169276f4f02d/original/Pigs-facing-camera-1-.JPG"
                    class="img-fluid"
                    alt=""
                  />
                  <a href="#">
                    <div class="mask rgba-white-light"></div>
                  </a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 mb-4 wow fadeInRight slow">
                <p class="lead pl-5 text-muted pt-2 mb-5">
                  A healty and vaccinated baby from Simran Bangur Farm:
                </p>
                <ol class="step pl-0">
                  <li class="step-element pb-0">
                    <div class="step-number">
                      <span class="number">1</span>
                    </div>
                    <div class="step-excerpt">
                      <h6 class="font-weight-bold dark-grey-text mb-3">
                        Healthy
                      </h6>
                    </div>
                  </li>
                  <li class="step-element pb-0">
                    <div class="step-number">
                      <span class="number">2</span>
                    </div>
                    <div class="step-excerpt">
                      <h6 class="font-weight-bold dark-grey-text mb-3">
                        High bread
                      </h6>
                    </div>
                  </li>

                  <li class="step-element pb-0">
                    <div class="step-number">
                      <span class="number">3</span>
                    </div>
                    <div class="step-excerpt">
                      <h6 class="font-weight-bold dark-grey-text mb-3">
                        Fully vaccinated
                      </h6>
                    </div>
                  </li>
                  <li class="step-element pb-0">
                    <div class="step-number">
                      <span class="number">4</span>
                    </div>
                    <div class="step-excerpt">
                      <h6 class="font-weight-bold dark-grey-text mb-3">
                        Reasonal price (Sweet-baby)
                      </h6>
                    </div>
                  </li>
                </ol>
              </div>
            </div>
          </section>
          <!-- Section -->
        </div>
      </div>
      <!-- Our $249 cleaning package -->

      <!-- Why should you do it -->
      <div
        
        style="background-color: #eeeeee;"
      >
      <div class="pt-5 pb-5 mt-5 wow fadeInUp " style="isolation: isolate;">
        <!--Section: Content-->
        <section class="dark-grey-text text-center" >
          <!-- Section heading -->
          <h3 class="font-weight-bold mb-4 pb-2">Why our product ?</h3>
          <!-- Section description -->
          <p class="grey-text font-weight-bolder w-responsive mx-auto mb-3">
            Simran Farm = An investment for healthy, fully vaccinated baby
          </p>

          <a
            type="button"
            class="btn bookhover mb-2 btn-outline-success btn-rounded waves-effect"
            href="#home"
          >
            Order Now
          </a>

          <!-- Grid row -->

          <!-- Grid row -->
        </section>
        <!--Section: Content-->
      </div>
      </div>
      <!-- Why should you do it-->

      <!-- ABOUT US -->
      <div id="about" style="background-color: #ffffff;">
        <div class="container pt-5 mt-5 pb-5">
          <!-- Section -->
          <section>
            <h3
              class="font-weight-bold text-center dark-grey-text pt-5 pb-2 wow fadeInDown slow"
            >
              About us
            </h3>
            <hr class="w-header my-4" />
            <p class="lead text-center font-weight-bolder text-muted pt-2 mb-5">
              Why choose us for pig baby/ fish?
            </p>

            <div class="row">
              <div class="col-md-6 col-xl-3 mb-4 wow fadeInLeft slow">
                <div class="card text-center bg-success text-white">
                  <div class="card-body">
                    <p class="mt-4 pt-2">
                      <i class="fas fa-hand-holding-heart fa-4x"></i>
                    </p>
                    <h5 class="font-weight-normal my-4 py-2">
                      <a class="text-white">Trust</a>
                    </h5>
                    <p class="mb-4">
                      12-year legacy of building trust and relationships in Nepal
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-xl-3 mb-4 wow fadeInUp slow">
                <div class="card text-center">
                  <div class="card-body">
                    <p class="mt-4 pt-2">
                      <i class="fas fa-ribbon fa-4x grey-text"></i>
                    </p>
                    <h5 class="font-weight-normal my-4 py-2">
                      <a class="dark-grey-text">Best</a>
                    </h5>
                    <p class="text-muted pt-2 pb-3 mb-4">
                      We only produce nutritious piglet and fishes 
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-xl-3 mb-4 wow fadeInUp slow">
                <div class="card text-center deep-purple lighten-1 text-white">
                  <div class="card-body">
                    <p class="mt-4 pt-2">
                      <i class="fas fa-history fa-4x"></i>
                    </p>
                    <h5 class="font-weight-normal my-4 py-2">
                      <a class="text-white">On Time</a>
                    </h5>
                    <p class="pt-2 pb-3 mb-4">
                      You can count on us: we’re on time, every time.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-xl-3 wow fadeInRight slow">
                <div class="card text-center">
                  <div class="card-body">
                    <p class="mt-4 pt-2">
                      <i class="fas fa-city fa-4x grey-text"></i>
                    </p>
                    <h5 class="font-weight-normal my-4 py-2">
                      <a class="dark-grey-text">Business</a>
                    </h5>
                    <p class="text-muted pt-2 pb-3 mb-4">
                      We’re a locally owned and operated business
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Section -->
        </div>
      </div>
      <!-- ABOUT US -->

      <!-- Don’t take our word for it -->
      <div class="pt-5 pb-5 mt-5" style="background-color: #eeeeee;">
        <!--Section 3: Content-->
        <section class="dark-grey-text text-center">
          <!-- Section heading -->
          <h3 class="font-weight-bold mb-4 pb-2 wow fadeInDown slow">
            Don’t take our word for it, see for yourself
          </h3>

          <div class="container">
            <div class="row pt-2">
              <div
                class="col-lg-4 col-md-4 mb-4 wow fadeInLeft slow"
                style="visibility: visible; animation-name: fadeInLeft;"
              >
                <!-- Card -->
                <div
                  class="card card-image cardfixing"
                  style="
                    background-image: url(https://pbs.twimg.com/media/E1ZWqE-UUAEb-Gj?format=jpg&name=small);
                  "
                >
                  <!-- Content -->
                  <div
                    class="text-white cardmask text-center rgba-black-light py-5 px-4"
                  >
                    <div>
                      <h3
                        class="card-title cardh pt-5 pb-5 font-weight-normal"
                      ></h3>
                    </div>
                  </div>
                  <!-- Content -->
                </div>
                <!-- Card -->
              </div>
              <div
                class="col-lg-4 col-md-4 mb-4 wow fadeInUp slow"
                style="visibility: visible;"
              >
                <!-- Card -->
                <div
                  class="card card-image cardfixing"
                  style="background-image: url(https://scontent.fktm6-1.fna.fbcdn.net/v/t1.6435-9/96683580_2289205708041862_6754726935076536320_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=VhH48u0a1scAX_XJHHk&_nc_ht=scontent.fktm6-1.fna&oh=048ffb650b0887bea34f4f695150f246&oe=60C68AE2);"
                >
                  <!-- Content -->
                  <div
                    class="text-white cardmask text-center rgba-black-light py-5 px-4"
                  >
                    <div>
                      <h3
                        class="card-title cardh pt-5 pb-5 font-weight-normal"
                      ></h3>
                    </div>
                  </div>
                  <!-- Content -->
                </div>
                <!-- Card -->
              </div>
              <div
                class="col-lg-4 col-md-4 mb-4 wow fadeInRight slow"
                style="visibility: visible;"
              >
                <!-- Card -->
                <div
                  class="card card-image cardfixing"
                  style="background-image: url(https://pbs.twimg.com/media/E1ZXcNZVgAQnEIx?format=jpg&name=small);"
                >
                  <!-- Content -->
                  <div
                    class="text-white cardmask text-center rgba-black-light py-5 px-4"
                  >
                    <div>
                      <h3
                        class="card-title cardh pt-5 pb-5 font-weight-normal"
                      ></h3>
                    </div>
                  </div>
                  <!-- Content -->
                </div>
                <!-- Card -->
              </div>
            </div>

            <a
              type="button"
              class="btn bookhover mb-2 btn-outline-success btn-rounded waves-effect"
              href="#home"
            >
              Order Now 
            </a>
          </div>

          <!-- Grid row -->

          <!-- Grid row -->
        </section>
        <!--Section: Content-->
      </div>
      <!-- Don’t take our word for it -->

      <!-- Additional Services -->
      <div
        id="services"
        class="mt-5 pt-5 pb-5"
        style="background-color: #ffffff;"
      >
        <div class="container mt-5">
          <!--Section: Content-->
          <section class="dark-grey-text text-center">
            <!-- Section heading -->
            <h2 class="font-weight-bold mb-4 pb-2 wow fadeInDown slow">
              Additional Services
            </h2>
            <!-- Section description -->
            <p
              class="text-center font-weight-bolder mx-auto w-responsive mb-5 wow fadeInLeft slow"
            >
              If you’re looking  for a healty and vaccinated baby <br />
              From Simran Bangur Farm you can find as your needs with better services.
            </p>

            <!-- Grid row -->
            <div class="row">
              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-4 wow fadeInLeft slow">
                <!-- Featured image -->
                <div class="rounded z-depth-2 mb-4">
                  <img
                    class="img-fluid"
                    src="https://pbs.twimg.com/media/E1ZWqE-UUAEb-Gj?format=jpg&name=small"
                    alt="Sample image"
                    style="height: 200px; width:100%;"
                  />
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Category -->

                <!-- Post title -->
                <h6 class="font-weight-bold mb-3">
                  <strong>hygienic pigs</strong>
                </h6>
              </div>
              <!-- Grid column -->

              <div class="col-lg-4 col-md-6 mb-4 wow fadeInDown slow">
                <!-- Featured image -->
                <div class="rounded z-depth-2 mb-4">
                  <img
                    class="img-fluid"
                    src="https://scontent.fktm6-1.fna.fbcdn.net/v/t1.6435-9/102396794_2305705086391924_1242842773866938368_n.jpg?_nc_cat=107&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=pc-rEgCTm1YAX8Oy_Wd&_nc_ht=scontent.fktm6-1.fna&oh=9cc79b2a8c6a7493b23794f9e9720105&oe=60C6B2A3"
                    alt="Sample image"
                    style="width: 100%; height: 200px;"
                  />
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Category -->

                <!-- Post title -->
                <h6 class="font-weight-bold mb-3">
                  <strong>Piglets shelter</strong>
                </h6>
              </div>

              <div class="col-lg-4 col-md-6 mb-4 wow fadeInRight slow">
                <!-- Featured image -->
                <div class="rounded z-depth-2 mb-4">
                  <img
                    class="img-fluid"
                    src="https://scontent.fktm6-1.fna.fbcdn.net/v/t1.6435-9/96683580_2289205708041862_6754726935076536320_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=VhH48u0a1scAX_XJHHk&_nc_ht=scontent.fktm6-1.fna&oh=048ffb650b0887bea34f4f695150f246&oe=60C68AE2"
                    alt="Sample image"
                    style="height: 200px; width: 100%;"
                  />
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Category -->

                <!-- Post title -->
                <h6 class="font-weight-bold mb-3">
                  <strong>Cleaning the farm</strong>
                </h6>
              </div>

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-4 wow fadeInLeft slow">
                <!-- Featured image -->
                <div class="rounded z-depth-2 mb-4">
                  <img
                    class="img-fluid"
                    src="https://pbs.twimg.com/media/E1ZXW6RVgAQVLzc?format=jpg&name=small"
                    alt="Sample image"
                    style="height: 200px; width: 100%;"
                  />
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Category -->

                <!-- Post title -->
                <h6 class="font-weight-bold mb-3">
                  <strong>Feeding the piglets </strong>
                </h6>
              </div>
              <!-- Grid column -->

              <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp slow">
                <!-- Featured image -->
                <div class="rounded z-depth-2 mb-4">
                  <img
                    class="img-fluid"
                    src="https://pbs.twimg.com/media/E1ZXiZsVEAAWWbJ?format=jpg&name=medium"
                    alt="Sample image"
                    style="height: 200px; width: 100%;"
                  />
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Category -->

                <!-- Post title -->
                <h6 class="font-weight-bold mb-3">
                  <strong>Sleeping pig and piglets </strong>
                </h6>
              </div>

              <div class="col-lg-4 col-md-6 mb-4 wow fadeInRight slow">
                <!-- Featured image -->
                <div class="rounded z-depth-2 mb-4">
                  <img
                    class="img-fluid"
                    src="https://scontent.fktm6-1.fna.fbcdn.net/v/t1.6435-9/97559206_2289205884708511_2555684456572649472_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=YQ94DpjNCBQAX8VbXHd&_nc_ht=scontent.fktm6-1.fna&oh=61d0899020b4c0dc1de9b99e95bdf1a2&oe=60C6A70D"
                    alt="Feeding image"
                    style="width: 100%; height: 200px;"
                  />
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Category -->

                <!-- Post title -->
                <h6 class="font-weight-bold mb-3">
                  <strong>Caring the Pigs </strong>
                </h6>
              </div>
            </div>
            <!-- Grid row -->
          </section>
          <!--Section: Content-->
        </div>
      </div>
      <!-- Additional Services -->

      <!-- THE CLEAN AIR DUCT DIFFERENCE -->
      <div style="background-color: #eeeeee;">
        <div class="container mt-5 pt-5 pb-5" >
          <style>
            .card-body {
              border-bottom-left-radius: inherit !important;
              border-bottom-right-radius: inherit !important;
            }
          </style>
          <section class="dark-grey-text text-center">
            <!-- Section heading -->
            <h3 class="font-weight-bold pt-5 mb-4 pb-4 wow fadeInDown slow">
              Our Simran Bangur Farm Attributes
            </h3>
            <div class="row">
              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-4 wow fadeInLeft slow">
                <!-- Card -->
                <div class="card card-cascade wider card-ecommerce">
                  <!-- Card image -->
                  <div class="view-cascade">
                    <img
                      src="https://scontent.fktm6-1.fna.fbcdn.net/v/t1.6435-9/96683580_2289205708041862_6754726935076536320_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=VhH48u0a1scAX_XJHHk&_nc_ht=scontent.fktm6-1.fna&oh=048ffb650b0887bea34f4f695150f246&oe=60C68AE2"
                      class="card-img-top"
                      alt="sample photo"
                      style="height: 245px;"
                    />
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card image -->
                  <!-- Card content -->
                  <div
                  
                    class="card-body card-body-cascade text-center pb-0"
                    style="height: 330px;"
                    
                  >
                    <!-- Title -->
                    <h5 class="card-title">
                      <strong class="logotext">
                        A Cleaner Shelter
                      </strong>
                    </h5>
                    <!-- Description -->
                    <p class="card-text pb-3 pt-4">
                    Our farm is very much active in hygiene. Our daily routine of cleaning is two time per-day. Beside this we specially take care of our pig, fish every hour and also provide all vaciness required for pig until we sell it.
                    </p>
                    <!-- Card footer -->
                    <div class="mt-4 mb-4">
                      <a
                        type="button"
                        class="btn bookhover mb-2 btn-outline-success btn-rounded waves-effect"
                        href="#home"
                      >
                        Buy Piglets
                      </a>
                    </div>
                  </div>
                  <!-- Card content -->
                </div>
                <!-- Card -->
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp slow">
                <!-- Card -->
                <div class="card card-cascade wider card-ecommerce">
                  <!-- Card image -->
                  <div class="view-cascade">
                    <img
                      src="https://pbs.twimg.com/media/E1ZXW6RVgAQVLzc?format=jpg&name=small"
                      style="height: 245px;"
                      class="card-img-top"
                      alt="sample photo"
                    />
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card image -->
                  <!-- Card content -->
                  <div
                    class="card-body card-body-cascade text-center pb-0"
                    style="height: 330px;"
                  >
                    <!-- Title -->
                    <h5 class="card-title">
                      <strong class="logotext">
                        Feeding Piglets
                      </strong>
                    </h5>
                    <!-- Description -->
                    <p class="card-text pt-2 pb-2">
                    Main  reason  for  success  of  our<br> simran bangur farm is due to the proper feeding.<br> Meal for the pig contain proper protine, carbohydrate and fully calcuim grain which is gain form different seasons.
                    </p>
                    <!-- Card footer -->
                    <div class="mt-4 mb-4">
                      <a
                        type="button"
                        class="btn bookhover mb-2 btn-outline-success btn-rounded waves-effect"
                        href="#home"
                      >
                        Buy Piglets
                      </a>
                    </div>
                  </div>
                  <!-- Card content -->
                </div>
                <!-- Card -->
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-4 col-md-12 mb-4 wow fadeInRight slow">
                <!-- Card -->
                <div class="card card-cascade wider card-ecommerce">
                  <!-- Card image -->
                  <div class="view-cascade">
                    <img
                      src="https://pbs.twimg.com/media/E1ZXcNZVgAQnEIx?format=jpg&name=small"
                      style="height: 245px;"
                      class="card-img-top"
                      alt="sample photo"
                    />
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card image -->
                  <!-- Card content -->
                  <div
                    class="card-body card-body-cascade text-center pb-0"
                    style="height: 330px;"
                  >
                    <!-- Title -->
                    <h5 class="card-title">
                      <strong class="logotext">
                        Low price Piglets
                      </strong>
                    </h5>
                    <!-- Description -->
                    <p class="card-text">
                    <br>Basically, in our farm we sell the pig babies after a month in which full Vaccination is  provided <br> until we sell it. The price of new-born baby after the month is rupee Rs.6500. We also sell cat-fish at Rs.250/per kg.
                    </p>
                    <!-- Card footer -->
                    <div class="mb-4">
                      <a
                        type="button"
                        class="btn bookhover mb-2 btn-outline-success btn-rounded waves-effect"
                        href="#home"
                      >
                        Buy Piglets
                      </a>
                    </div>
                  </div>
                  <!-- Card content -->
                </div>
                <!-- Card -->
              </div>
              <!-- Grid column -->
            </div>
          </section>
        </div>
      </div>
      <!-- THE CLEAN AIR DUCT DIFFERENCE -->

      <!-- Our pricing plans -->
      <div id="price" style="background-color: #ffffff;">
        <div class="container pt-5 mt-5 pb-5">
          <section class="text-center">
            <!-- Section heading -->
            <h3
              class="font-weight-bold dark-grey-text pt-5 pb-2 mb-4 wow fadeInDown slow"
            >
              Our pricing plans
            </h3>
            <!-- Section description -->
            <p
              class="text-muted font-weight-bolder w-responsive mx-auto mb-5 wow fadeInLeft"
            >
            Our Rs.6500 Pig Baby is now just Rs.6200
            </p>

            <!-- Grid row -->
            <div class="row">
              <!-- Grid column -->
              <div class="col-lg-4 col-md-12 mb-4 wow fadeInLeft slow">
                <!-- Card -->
                <div
                  class="card card-image"
                  style="
                    background-image: url('https://dam.farmjournal.com/m/7f39169276f4f02d/original/Pigs-facing-camera-1-.JPG');
                  "
                >
                  <!-- Pricing card -->
                  <div
                    class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded"
                  >
                    <!-- Content -->
                    <div class="card-body">
                      <h5>Piglets</h5>

                      <!-- Price -->
                      <div class="price pt-4">
                        <h2 class="mb-0" style="font-size: 60px;">Rs.6500/<span style= "font-size:20px;">baby</span></h2>
                      </div>

                      <ul class="striped mb-0">
                        <li>
                          <p><strong>Talk about a hot deal</strong></p>
                        </li>
                      </ul>
                      <a class="btn bookhover2 btn-outline-success" href="#home"
                        >Order Now</a
                      >
                    </div>
                    <!-- Content -->
                  </div>
                  <!-- Pricing card -->
                </div>
                <!-- Card -->
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp slow">
                <!-- Card -->
                <div
                  class="card card-image"
                  style="
                    background-image: url('https://pbs.twimg.com/media/E1uPdURVgAETKm2?format=jpg&name=small');
                  "
                >
                  <!-- Pricing card -->
                  <div
                    class="text-white text-center pricing-card d-flex align-items-center rgba-teal-strong py-3 px-3 rounded"
                  >
                    <!-- Content -->
                    <div class="card-body">
                      <h5>Cat-Fish</h5>

                      <!-- Price -->
                      <div class="price pt-4">
                        <h2 class="mb-0" style="font-size: 60px;">Rs.250/<span style= "font-size:20px;">kg</span></h2>
                      </div>

                      <ul class="striped mb-0">
                        <li>
                          <p><strong>Talk about a hot deal</strong></p>
                        </li>
                      </ul>
                      <a class="btn bookhover2 btn-outline-success" href="#home"
                        >Order Now</a
                      >
                    </div>
                    <!-- Content -->
                  </div>
                  <!-- Pricing card -->
                </div>
                <!-- Card -->
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-4 wow fadeInRight slow">
                <!-- Card -->
                <div
                  class="card card-image"
                  style="
                    background-image: url('https://pbs.twimg.com/media/E1uPdUUUcAM73-F?format=jpg&name=small');
                  "
                >
                  <!-- Pricing card -->
                  <div
                    class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded"
                  >
                    <!-- Content -->
                    <div class="card-body">
                      <h5>Small-Fish</h5>

                      <!-- Price -->
                      <div class="price pt-4">
                        <h2 class="mb-0" style="font-size: 65px;">12/<span style= "font-size:20px;">10g fish</span></h2>
                      </div>

                      <ul class="striped mb-0">
                        <li>
                          <p><strong>Talk about a hot deal</strong></p>
                        </li>
                      </ul>
                      <a class="btn bookhover2 btn-outline-success" href="#home"
                        >Order Now</a
                      >
                    </div>
                    <!-- Content -->
                  </div>
                  <!-- Pricing card -->
                </div>
                <!-- Card -->
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </section>
        </div>
      </div>
      <!-- Our pricing plans -->

      <!-- Testimonials -->
      <div  style="background-color: #eeeeee;">
      <div
        id="testimonials"
        class="mt-5 pt-5 pb-5 wow fadeInUp slow"
        
        
        style="isolation: isolate;"
      >
        <section class="text-center pt-5 dark-grey-text"  >
          <!-- Section heading -->
          <h3 class="font-weight-bold mb-4 pb-2" >Our Proprietor</h3>

          <div class="wrapper-carousel-fix" >
            <!-- Carousel Wrapper -->
            <div
              id="carousel-example-1"
              class="carousel no-flex testimonial-carousel slide carousel-fade"
              data-ride="carousel"
              data-interval="false"
              
            >
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img
                        src="https://pbs.twimg.com/media/E1ZoSLqVUAM-stq?format=jpg&name=small"
                        
                        class="rounded-circle img-fluid"
                        alt="First sample avatar image"
                      />
                    </div>
                    <!--Content-->
                    <div class="star">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                    </div>

                    <p>
                      <i class="fas fa-quote-left" ></i> OWNER OF SIMRAN BANGUR FARM <br>    <a
                  class="btn bookhover btn-outline-success btn-rounded waves-effect font-weight-bold btn-sm"
                  href="tel:+9779845563955"
                  data-offset="90"
                  >CALL: 98455...</a>
                    </p>
                    <h4 class="font-weight-bold my-3">Mrs.Namita Adhikari</h4>
                    <br />
                  </div>
                </div>
                <!--First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img
                        src="https://scontent.fktm6-1.fna.fbcdn.net/v/t1.6435-9/172031448_1274912302903498_2774214019787456859_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=67jrsNQTdaEAX_V_caF&_nc_ht=scontent.fktm6-1.fna&oh=1a69f7c0a65e85d309efba1c84e72b8d&oe=60C6A860"
                        class="rounded-circle img-fluid"
                        alt="Second sample avatar image"
                      />
                    </div>
                    <!--Content-->
                    <div class="star">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                    </div>

                    <p>
                      <i class="fas fa-quote-left"></i> Manage all the finance<br> <a
                  class="btn bookhover btn-outline-success btn-rounded waves-effect font-weight-bold btn-sm"
                  href="tel:+9779844947424"
                  data-offset="90"
                  >CALL: 9844...</a>
                    </p>
                    <h4 class="font-weight-bold my-3">Mr.Uzzwal dawadi</h4>
                    <br />
                  </div>
                </div>
                <!--Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img
                        src="https://scontent.fktm6-1.fna.fbcdn.net/v/t1.6435-9/88169065_983730045355060_7626151803452653568_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=Bs_Q1dgaQA8AX_mQ5gB&_nc_ht=scontent.fktm6-1.fna&oh=ab39632767e9176f178bc277c111acda&oe=60C4FCFB"
                        class="rounded-circle img-fluid"
                        alt="Third sample avatar image"
                      />
                    </div>
                    <!--Content-->
                    <!--Review-->
                    <div class="star">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                    </div>

                    <p>
                      <i class="fas fa-quote-left"></i> Provide the facilty for Pig and Fish <br>  <a
                  class="btn bookhover btn-outline-success btn-rounded waves-effect font-weight-bold btn-sm"
                  href="tel:+9779845054641"
                  data-offset="90"
                  >Phone: 9845...</a>
                    </p>
                    <h4 class="font-weight-bold my-3">Mr.Hari Parsad Dawadi</h4>
                    <br />
                  </div>
                </div>
                <!--Third slide-->
              </div>
              <!--Slides-->
              <!--Controls-->
              <a
                class="carousel-control-prev left carousel-control"
                href="#carousel-example-1"
                role="button"
                data-slide="prev"
              >
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a
                class="carousel-control-next right carousel-control"
                href="#carousel-example-1"
                role="button"
                data-slide="next"
              >
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!--Controls-->
            </div>
            <!-- Carousel Wrapper -->
          </div>
        </section>
      </div>
      </div>
      <!-- Testimonials -->
      <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.5841481098123!2d84.41937351456457!3d27.668335033813282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fadec39f4d43%3A0x2da52f8c8b02a9f3!2sBharatpur%2044207!5e0!3m2!1sen!2snp!4v1621224603345!5m2!1sen!2snp"
       width=100% height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
      <!-- OUR CLIENTS -->
      <div class="container my-5">
        <section class="text-center py-4">
          <!-- Logo carousel -->
          <div
            id="carouselExampleSlidesOnly"
            class="carousel slide"
            data-ride="carousel"
            data-interval="1800"
          >
            <div class="carousel-inner">
              <!-- First slide -->
              <div class="carousel-item active">
                <!--Grid row-->
                <div class="row">
                  <!--First column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/5.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/First column-->

                  <!--Second column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/7.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Second column-->

                  <!--Third column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/6.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Third column-->

                  <!--Fourth column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/9.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Fourth column-->
                </div>
                <!--/Grid row-->
              </div>
              <!-- First slide -->

              <!-- Second slide -->
              <div class="carousel-item">
                <!--Grid row-->
                <div class="row">
                  <!--First column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/11.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/First column-->

                  <!--Second column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/10.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Second column-->

                  <!--Third column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/12.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Third column-->

                  <!--Fourth column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/13.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Fourth column-->
                </div>
                <!--/Grid row-->
              </div>
              <!-- Second slide -->

              <!-- Third slide -->
              <div class="carousel-item">
                <!--Grid row-->
                <div class="row">
                  <!--First column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/1a.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/First column-->

                  <!--Second column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/2a.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Second column-->

                  <!--Third column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/3a.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Third column-->

                  <!--Fourth column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/4a.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Fourth column-->
                </div>
                <!--/Grid row-->
              </div>
              <!-- Third slide -->
            </div>
          </div>
          <!-- Logo carousel -->
        </section>
      </div>
      <!-- OUR CLIENYS -->
    </main>

   

    <footer class="page-footer pt-5 unique-color-dark" style="isolation: isolate;">
      <!-- Footer Links -->
      <div class="container text-center">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-6 mx-auto text-md-left">
            <!-- Links -->
            <h5
              class="font-weight-bolder text-uppercase mt-3 mb-4"
              style="color: #00c851;"
            >
              Simran bangur farm
            </h5>
            <p class="font-weight-bolder">
              Our product known for quality
            </p>
          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none" />

          <hr class="clearfix w-100 d-md-none" />

          <!-- Grid column -->
          <div class="col-md-6 mx-auto">
            <!-- Links -->
            <h5 class="font-weight-bolder text-uppercase mt-3 mb-4">Links</h5>

            <ul class="list-unstyled">
              <li class="pb-2">
                <a class="font-weight-bolder fotterhover" href="#home">Home</a>
              </li>
              <li class="pb-2">
                <a class="font-weight-bolder fotterhover" href="#about"
                  >About</a
                >
              </li>
              <li class="pb-2">
                <a class="font-weight-bolder fotterhover" href="#services"
                  >Services</a
                >
              </li>
              <li class="pb-2">
                <a class="font-weight-bolder fotterhover" href="#price"
                  >Price</a
                >
              </li>
            </ul>
          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none" />

          <!-- Grid column  -->
           <div class="col-md-4 col-sm-12 mx-auto">


            <div class="px-5">
              <form action="https://bit.ly/3fx83B0" method="POST" class="input-group">
                <ul class="list-unstyled newsletter">
                  <li class="">
                    <div class="md-form md-outline form-lg mb-0">
                      <input
                        type="email"
                        required=""
                        class="white form-control form-control-lg"
                        name="signupemail"
                        placeholder="Email address"
                        aria-label="Your email"
                      />
                    </div>
                    <button
                      name="signup_btn"
                      type="submit"
                      class="sbbtn btn btn-block btn-lg waves-effect waves-light"

                    >
                      <a>SUBSCRIBE</a>
                    </button>
                  </li>
                </ul>
              </form>
            </div>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-12 pt-5">
            <div class="flex-center">
              <!-- Facebook -->
              <a class="fb-ic" href="https://www.facebook.com/namitaa.dawadi">
                <i
                  class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x" 
                >
                </i>
              </a>
              <!-- Twitter -->
              <a class="tw-ic">
                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x">
                </i>
              </a>
              <!-- Google +-->
              <a class="gplus-ic">
                <i
                  class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"
                >
                </i>
              </a>
              <!--Linkedin -->
              <a class="li-ic">
                <i
                  class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"
                >
                </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic">
                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x">
                </i>
              </a>
              <!--Pinterest-->
              <a class="pin-ic">
                <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
              </a>
            </div>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
        <!-- Grid row -->
      </div>
      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center pb-5 py-3 unique-color-dark">
        <hr class="site-footer__hr" />

        <div class="row">
          <div class="col-lg-12 pt-4 text-white">
            © 2021, 
            <a href="#" class="fotterhover"> Simran Bangur Farm</a>
            <a href="#" class="fotterhover">Powered by DD</a>
          </div>
        </div>
      </div>
      <!-- Copyright -->
    </footer>


    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript">
      $(function () {
        new WOW().init();
        // Add smooth scrolling to all links
        $('a').on('click', function (event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== '') {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate(
              {
                scrollTop: $(hash).offset().top,
              },
              800,
              function () {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              }
            );
          } // End if
        });
      });
    </script>
        <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script src="./script.js"></script>
  </body>
</html>
