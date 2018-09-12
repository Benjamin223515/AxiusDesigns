<? if($verification == 1){}else{Header("Location: https://axius.design/404"); die();} ?>

<header class="header valign bg-img" data-scroll-index="0" data-overlay-dark="6" data-background="static/images/assets/bg.png" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center caption mt-30">
                <h1 class="cd-headline">
                    <span><? echo $name; ?> </span>
                </h1>
                <p class="lead"><? echo $description; ?></p>
            </div>
        </div>
    </div>
</header>
<section id="section-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-img">
                    <img src="static/images/assets/logo.png" alt="" class="img-fluid ">
                </div>
            </div>

            <div class="col-lg-7">
                <div class="about-content">
                    <h2><? echo $name; ?> | About</h2>
                    <p class=" lead">AxiusDesigns is a company, originally a singular person, created by TECHNO Axius in 2016. TECHNO Axius scrapped the "TECHNO" prefix to his name, originally given as part of a call of duty clan. Taking up graphic design and video editing in 2012, Axius pathed the way for the company's main field of work - Graphic Design. The "Design" from graphic design and Axius's alias formed AxiusDesigns as a username for which he used personally up until 2016 when he changed his name to Fubbo and converted AxiusDesigns into a company AxiusDesigns now features an array of staff - mainly discord moderation staff - and two designers, whom work side by side to create all/most of the designs featured in the portfolio.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="section-portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="section-heading">
                    <h2><? echo $name; ?> | Portfolio</h2>
                </div>
            </div>
        </div>

        <div class="filtering text-center mb-30 col-sm-12">
            
            <span data-filter='*' class="active">All</span>
            <span data-filter='.Logo'>Logos</span>
            <span data-filter='.pfp'>Profile Pictures</span>
            <span data-filter='.YTBanner'>YouTube Banners</span>
            <span data-filter='.TBanner'>Twitter Banners</span>
            <span data-filter='.Website'>Websites</span>
            <span data-filter='.Video'>Videos</span>

        </div>

        <div class="clearfix"></div>

        <div class="gallery text-center full-width">

          <?



                  $str = file_get_contents('api/portfolio.json');



                  $portfolio = json_decode($str, true);



              if (is_array($portfolio)) {



                  foreach ($portfolio as $obj) {



                      $poname = $obj['name'];

                      $poexample = $obj['example'];

                      $posection = $obj['section'];

                      $pologo = $obj['logo'];

                      if($posection == "pfp") $posec = "Profile Picture";
                      else if($posection == "YTBanner") $posec = "YouTube Banner";
                      else if($posection == "TBanner") $posec = "Twitter Banner";
                      else $posec = $posection;

                      echo "<div class='col-md-6 col-lg-4 items " . $posection . "'>
                          <div class='item-img'>
                              <a href='" . $poexample ."'><img src='" . $pologo . "' alt='" . $poname . "'>
                                  <div class='item-img-overlay valign'>
                                      <div class='overlay-info full-width vertical-center'>
                                          <p>" . $posec. "</p>
                                          <h6>" . $poname . "</h6>
                                      </div>
                                  </div>
                              </a>
                          </div>
                      </div>";

                  }

              }else{

                  // Error

              }



              ?>


            <div class="clear-fix"></div>

        </div>
    </div>
</section>

<section id="section-partners" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="section-heading">
                    <h2><? echo $name; ?> | Partners</h2>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="gallery text-center full-width">

          <?



                  $str = file_get_contents('api/partners.json');



                  $partners = json_decode($str, true);



              if (is_array($partners)) {



                  foreach ($partners as $obj) {



                      $paname = $obj['name'];

                      $paurl = $obj['url'];

                      $palogo = $obj['logo'];



                      echo "<div class='col-md-6 col-lg-4 items'>
                          <div class='item-img'>
                              <a href='" . $paurl ."'><img src='" . $palogo . "' alt='" . $paname . "'>
                                  <div class='item-img-overlay valign'>
                                      <div class='overlay-info full-width vertical-center'>
                                          <h6>" . $paname . "</h6>
                                      </div>
                                  </div>
                              </a>
                          </div>
                      </div>";

                  }

              }else{

                  // Error

              }



              ?>


            <div class="clear-fix"></div>

        </div>
    </div>
</section>
