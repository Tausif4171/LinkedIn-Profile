<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://static-exp1.licdn.com/sc/h/6pt0354ltxoiwiaugx9k0kd5l" rel="stylesheet">
<link href="https://static-exp1.licdn.com/sc/h/2zz1lwk9wr3w8wld1jhyz6xsc" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>login system!</title>
    
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#" style="font-size: 21px;">Login System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="font-size: 16px;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php" style="font-size: 16px;">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php" style="font-size: 16px;">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" style="font-size: 16px;">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active" style="font-size: 17px;">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png" > <?php echo "Welcome ". $_SESSION['username'] ?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr>

</div>

<div id="abc" style="background-color: lightblue;">
<div id="oc-background-section" class="pv-oc ember-view">
   <span class="background-details">
      <div id="ember241" class="ember-view">
         <section id="ember242" class="pv-profile-section pv-profile-section--reorder-enabled background-section artdeco-card mt4 ember-view">
            <!---->
            <div id="ember243" class="pv-profile-section-pager ember-view">
               <section id="education-section" class="pv-profile-section education-section ember-view">
                  <header class="pv-profile-section__card-header">
                     <h2 class="pv-profile-section__card-heading">
                        Education
                     </h2>
                     <a data-control-name="add_education" href="/in/tausif-khan-123703198/edit/forms/education/new/?profileFormEntryPoint=PROFILE_SECTION" id="ember245" class="pv-profile-section__header-add-action add-education artdeco-button artdeco-button--tertiary artdeco-button--circle artdeco-button--muted ember-view">
                        <li-icon type="plus-icon" role="img" aria-label="Add new education">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-supported-dps="24x24" fill="currentColor" class="mercado-match" width="24" height="24" focusable="false">
                              <path d="M21 13h-8v8h-2v-8H3v-2h8V3h2v8h8z"></path>
                           </svg>
                        </li-icon>
                     </a>
                  </header>
                  <ul class="pv-profile-section__section-info section-info
                     pv-profile-section__section-info--has-no-more">
                     <li id="645682046" class="pv-profile-section__list-item pv-education-entity pv-profile-section__card-item ember-view">
                        <div class="display-flex justify-space-between full-width">
                           <div class="display-flex flex-column full-width">
                              <a data-control-name="background_details_school" href="/school/216483/?legacySchoolId=216483" id="ember247" class="ember-view">
                                 <div class="pv-entity__logo">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" loading="lazy" alt="Aldel Education Trusts St John College of Engg Vevoor Palghar Tal Palghar Dist Thane" id="ember249" class="pv-entity__logo-img pv-entity__logo-img EntityPhoto-square-4 lazy-image ghost-school ember-view">
                                 </div>
                                 <div class="pv-entity__summary-info pv-entity__summary-info--background-section">
                                    <div class="pv-entity__degree-info">
                                       <h3 class="pv-entity__school-name t-16 t-black t-bold">Aldel Education Trusts St John College of Engg Vevoor Palghar Tal Palghar Dist Thane</h3>
                                       <p class="pv-entity__secondary-title pv-entity__degree-name t-14 t-black t-normal">
                                          <span class="visually-hidden">Degree Name</span>
                                          <span class="pv-entity__comma-item">Bachelor of Engineering - BE</span>
                                       </p>
                                       <p class="pv-entity__secondary-title pv-entity__fos t-14 t-black t-normal">
                                          <span class="visually-hidden">Field Of Study</span>
                                          <span class="pv-entity__comma-item">Computer Science</span>
                                       </p>
                                       <!---->  
                                    </div>
                                    <p class="pv-entity__dates t-14 t-black--light t-normal">
                                       <span class="visually-hidden">Dates attended or expected graduation</span>
                                       <span>
                                       <time>2019</time> � <time>2022</time>
                                       </span>
                                    </p>
                                    <!---->
                                 </div>
                              </a>
                              <!---->  
                           </div>
                           <div class="pv-entity__actions">
                              <a data-control-name="edit_education" href="/in/tausif-khan-123703198/edit/forms/education/645682046/?profileFormEntryPoint=PROFILE_SECTION" id="ember250" class="pv-profile-section__edit-action pv-profile-section__hoverable-action artdeco-button artdeco-button--tertiary artdeco-button--circle artdeco-button--muted ember-view">
                                 <li-icon type="pencil-icon" role="img" aria-label="Edit education Aldel Education Trusts St John College of Engg Vevoor Palghar Tal Palghar Dist Thane">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-supported-dps="24x24" fill="currentColor" class="mercado-match" width="24" height="24" focusable="false">
                                       <path d="M21.13 2.86a3 3 0 00-4.17 0l-13 13L2 22l6.19-2L21.13 7a3 3 0 000-4.16zM6.77 18.57l-1.35-1.34L16.64 6 18 7.35z"></path>
                                    </svg>
                                 </li-icon>
                              </a>
                              <!---->    
                           </div>
                        </div>
                     </li>
                  </ul>
                  <!---->
               </section>
            </div>
            <!---->
            <!---->
         </section>
      </div>
   </span>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
