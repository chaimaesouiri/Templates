<?php include_once ('website.php'); ?>
<!DOCTYPE html>
<html>
  <head lang="en_US">
  <script src="https://cdn.optimizely.com/js/8259217286.js"></script>
  <meta charset="utf-8">
  <title><?=$namehost?>: The only social media manager you’ll ever need</title>

  <meta name="description" content="<?=$namehost?> is a powerful Social Media Management tool for brands, businesses, agencies and individuals all around the world. Level-up your game with Social Media CRM, Advanced analytics, post scheduler, content curator and more!">
  <meta name="keywords" content="social media engagement, publish, schedule, queue posts, social analytics, marketing, social media management, social media strategy, schedule instagram, schedule twitter, marketing tools, social media analytics, social tools, youtube, facebook, etsy, shopify, medium, tumblr"/>
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  
  <!-- Open Graph Start -->
  <meta property="og:title" content="<?=$namehost?>: The only social media manager you’ll ever need"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="<?=$host?>"/>
  <meta property="og:image" content="<?=$host?>/assets/images/favicon.png?t=13092017-1"/>
  <meta property="og:site_name" content="<?=$namehost?>: The only social media manager you’ll ever need"/>
  <meta property="og:description" content="<?=$namehost?> helps you curate content, schedule posts, check analytics and manage all your social accounts from one place"/>
  <!-- Open Graph End -->
  
  <!-- Twitter Card Start -->
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:site" content="@<?=$namehost?>"/>
  <meta name="twitter:title" content="<?=$namehost?>: The only social media manager you’ll ever need"/>
  <meta name="twitter:description" content="<?=$namehost?> helps you curate content, schedule posts, check analytics and manage all your social accounts from one place"/>
  <meta name="twitter:image" content="<?=$host?>/assets/images/favicon.png?t=13092017-1"/>
  <!-- Twitter Card End -->

  <!--canonical-->
  <link rel="canonical" href="<?=$host?>/"/>
  <!--canonical end-->
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,200,100,300,500,600,700" rel="stylesheet">
  
  <link rel="shortcut icon" href="<?=$host?>/assets/favicon.ico">
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="/assets/styles/pricing-v3.44c40456.css">
  <link rel="stylesheet" href="/assets/styles/vendor/vendor-landing.c2e56916.css">

  <link rel="stylesheet" href="/assets/styles/landing.e9279425.css">

    <link rel="stylesheet" href="/assets/styles/landing-fonts.ed5ddebf.css">
  <script src="//js.honeybadger.io/v0.4/honeybadger.min.js" type="text/javascript" data-api_key="2ff5e00a"></script>
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>

</head>

<body lang="en_US" class="lang-en_US" dir="ltr">
    <header class="nav-header" id="header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid nav-header-container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="zmdi zmdi-menu bar-set"></span> <span class="zmdi zmdi-close times"></span> </button> <a class="btn btn-primary btn-sm pull-right get-started-btn text-uppercase js-mixpanel-signup-trigger" data-btn-context="Header Nav" data-toggle="modal" data-target="#signupModal">
                Get Started
              </a>
                            <a class="navbar-brand" href="/"> <img class="img-responsive logo--full" src="<?= $media['HomePage'][0]?>" alt="<?=$namehost?>"> <img class="img-responsive logo--symbol visible-xs" src="<?= $media['HomePage'][1]?>" alt="<?=$namehost?>"> </a>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-9 no-padding ">
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right header-nav ">
                                <li class="hidden-xs  menu-item " name="menu-item"> <a href="/#features">
                    Features
                  </a> </li>
                                <li class="hidden-xs  menu-item " name="menu-item"> <a href="/#pricing">
                    Pricing
                  </a> </li>
                                <li class="visible-xs font-size-h6  menu-item " name="menu-item"> <a href="/#features">
                    Features
                  </a> </li>
                                <li class="visible-xs font-size-h6  menu-item " name="menu-item"> <a href="/#pricing">
                    Pricing
                  </a> </li>
                                <li class="hidden-xs">
                                    <a href="/contact" class="btn btn-primary-outline btn-sm p-v-1x js-mixpanel-signup-trigger" style="height: 40px;padding: 15px;padding-top: 5px;"> <span class="font-size-base">Contact Us</span> </a>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
        </nav>
    </header>
  <div class="container xs-full-width">
    <div class="row">
      <div class="col-xs-12">
        <div class="jumbotron">
          <section class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
              <div class="content flex-vertical">
                <div class="block">
                  <header>
                      <h1 class="m-b-none m-t-none fw-bold title">
                        <span><?= $content['HomePage'][0]?></span>
                      </h1>
                    <p class="m-b-5x hidden-xs"><?=$namehost?> <?= $content['HomePage'][1]?></p>
                    <p class="m-b-5x visible-xs sub-title"><?= $content['HomePage'][2]?></p>
                  </header>
                  <div class="row hidden-xs">
                    <div class="col-xs-12">
                      <button class="btn btn-primary btn-block hero-cta text-uppercase btn-cta js-mixpanel-signup-trigger" data-btn-context="First Fold"
                              data-toggle="modal" data-target="#signupModal">
                              <?= $content['HomePage'][3]?>
                      </button>
                    </div>
                  </div>
                  <div class="p-h-2x visible-xs">
                    <a class="btn btn-primary btn-block hero-cta js-mixpanel-signup-trigger" data-btn-context="First Fold" data-toggle="modal"
                       data-target="#signupModal" id="headroomOffsetTrigger">
                       <?= $content['HomePage'][4]?>
                    </a>
                  </div>
                  <div class="font-size-base m-t-3x text-secondary fw-normal visible-xs text-center">
                  <?= $content['HomePage'][5]?> &nbsp;
                    <i class="zmdi zmdi-apple font-size-h5"></i> &nbsp;
                    <i class="zmdi zmdi-android font-size-h5"></i> &nbsp;
                    <i class="zmdi zmdi-desktop-mac font-size-h5"></i> &nbsp;
                  </div>
                  <p class="font-size-base m-t-3x text-secondary fw-normal hidden-xs">
                  <?= $content['HomePage'][6]?> &nbsp;
                    <a class="v-align-m js-send-event js-download-btn" data-action="App Download" data-label="iOS" href=""
                       target="_blank" rel="noopener">
                      <i class="zmdi zmdi-apple font-size-h5"></i>
                    </a> &nbsp;
                    <a class="v-align-m js-send-event js-download-btn" data-action="App Download" data-label="Android" href=""
                       target="_blank" rel="noopener">
                      <i class="zmdi zmdi-android font-size-h5"></i>
                    </a> &nbsp;
                    <a class="v-align-m js-mixpanel-signup-trigger js-download-btn" href="#" data-btn-context="Available on Web Icon" data-toggle="modal" data-target="#signupModal">
                      <i class="zmdi zmdi-desktop-mac font-size-h5"></i>
                    </a>
                  </p>
                </div>
                <div class="block">
                  <div class="font-size-h4 ff-fancy text-electric-purple section-title js-how-it-works cursor-pointer">
                    <div><?= $content['HomePage'][7]?></div>
                    <div><i class="zmdi zmdi-chevron-down font-size-h5 block-center"></i></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>  <div class="container real-time-container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6
           col-sm-push-6 col-md-push-6"
      >
        <div class="content flex ov-hidden text-center">
          <img class="content-img img-responsive align-self-c wow fadeIn" src="<?= $media['HomePage'][2]?>"
               alt="How It Works 2">
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6
          col-sm-pull-6 col-md-pull-6"
      >
        <div class="content flex ov-hidden p-l-1x">
          <div class="text-wrapper wow fadeIn">
            <h2 class="title fw-sbold">
            <?= $content['HomePage'][8]?>
            </h2>
            <p class="description text-secondary">
            <?= $content['HomePage'][9]?>
            </p>
            <div class="howitworks-link-container row">
              <a href="#contentRecoVideoModal" class="howitworksLink" data-toggle="modal">
                <span class="pulse text-center"><i class="zmdi zmdi-play"></i></span><span class="howitworks-link"><?= $content['HomePage'][10]?></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container user-requirements-container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 text-center
          "
      >
        <div class="content flex ov-hidden">
          <img class="content-img img-responsive wow fadeIn" src="<?= $media['HomePage'][3]?>"
               alt="How It Works 3">
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6
          "
      >
        <div class="content flex ov-hidden p-l-1x">
          <div class="text-wrapper wow fadeIn">
            <h2 class="title fw-sbold">
            <?= $content['HomePage'][11]?>
            </h2>
            <p class="description text-secondary">
            <?= $content['HomePage'][12]?>
            </p>
            <div class="howitworks-link-container row">
              <a href="#yourPostVideoModal" class="howitworksLink" data-toggle="modal">
                <span class="pulse text-center"><i class="zmdi zmdi-play"></i></span><span class="howitworks-link"><?= $content['HomePage'][13]?></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container real-time-container">
    <div class="row">
      <div class="col-xs-12 col-sm-6
           col-sm-push-6 col-md-push-6"
      >
        <div class="content flex ov-hidden text-center">
          <img class="content-img img-responsive align-self-c wow fadeIn" src="<?= $media['HomePage'][4]?>"
               alt="How It Works 4">
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6
          col-sm-pull-6 col-md-pull-6"
      >
        <div class="content flex ov-hidden p-l-1x">
          <div class="text-wrapper wow fadeIn">
            <h2 class="title fw-sbold">
            <?= $content['HomePage'][14]?>
            </h2>
            <p class="description text-secondary">
            <?= $content['HomePage'][15]?>
            </p>
            <div class="howitworks-link-container row">
              <a href="#scheduleVideoModal" class="howitworksLink" data-toggle="modal">
                <span class="pulse text-center"><i class="zmdi zmdi-play"></i></span><span class="howitworks-link"><?= $content['HomePage'][16]?></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container user-requirements-container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 text-center
          "
      >
        <div class="content flex ov-hidden">
          <img class="content-img img-responsive wow fadeIn" src="<?= $media['HomePage'][5]?>"
               alt="How It Works 5">
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6
          "
      >
        <div class="content flex ov-hidden p-l-1x">
          <div class="text-wrapper wow fadeIn">
            <h2 class="title fw-sbold">
            <?= $content['HomePage'][17]?>
            </h2>
            <p class="description text-secondary">
            <?= $content['HomePage'][18]?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>  <div class="modal fade" id="contentRecoVideoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-full-screen-video" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
        </button>
        <div class="modal-body flex">
          <iframe id="contentRecoVideoUrl" width="100%" height="100%" src= "https://www.youtube.com/embed/INtvJxitiLI?showinfo=0&version=3&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="yourPostVideoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-full-screen-video" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
        </button>
        <div class="modal-body flex">
          <iframe id="yourPostVideoUrl" width="100%" height="100%" src= "https://www.youtube.com/embed/4rL37ViVxP8?showinfo=0&version=3&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="scheduleVideoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-full-screen-video" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
        </button>
        <div class="modal-body flex">
          <iframe id="scheduleVideoUrl" width="100%" height="100%" src= "https://www.youtube.com/embed/dcy0a7qEhpI?showinfo=0&version=3&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="rssVideoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-full-screen-video" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
        </button>
        <div class="modal-body flex">
          <iframe id="rssVideoUrl" width="100%" height="100%" src= "https://www.youtube.com/embed/D8Zzx_YZXXY?showinfo=0&version=3&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="customBestTimeVideoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-full-screen-video" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
        </button>
        <div class="modal-body flex">
          <iframe id="customBestTimeUrl" width="100%" height="100%" src= "https://www.youtube.com/embed/dg2fdt8fFy0?showinfo=0&version=3&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="bulkPostsVideoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-full-screen-video" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
        </button>
        <div class="modal-body flex">
          <iframe id="bulkPostsUrl" width="100%" height="100%" src= "https://www.youtube.com/embed/Moy21TddbnQ?showinfo=0&version=3&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-warning tabs-container-wrapper wrapper-h-offset m-t-2x">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-sm-push-6">
                  <div class="content flex">
                      <div class="fake-div">
                          <h3 class="m-t-none font-size-h4 title fw-sbold">
                          <?= $content['HomePage'][19]?>
                          </h3>
                          <ul class="tabs hidden-xs" role="tablist" id="howItWorksTabs">
                              <li role="presentation" class="tab-each active">
                                  <a href="#favouriteTopics" aria-controls="favouriteTopics" role="tab" data-toggle="tab">
                                      <i class="zmdi v-align-t zmdi-chevron-left"></i>
                                    <span class="tab-text v-align-t"><?= $content['HomePage'][20]?></span>
                                  </a>
                              </li>
                              <li role="presentation" class="tab-each">
                                  <a href="#chromeExtension" aria-controls="chromeExtension" role="tab" data-toggle="tab">
                                      <i class="zmdi v-align-t zmdi-chevron-left"></i>
                                    <span class="tab-text v-align-t"><?= $content['HomePage'][21]?></span>
                                  </a>
                              </li>
                              <li role="presentation" class="tab-each">
                                  <a href="#RSSFeeds" aria-controls="RSSFeeds" role="tab" data-toggle="tab">
                                      <i class="zmdi v-align-t zmdi-chevron-left"></i>
                                    <span class="tab-text v-align-t last"><?= $content['HomePage'][22]?></span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                  <div class="tab-content" id="howItWorksTabContent">
                      <div role="tabpanel" class="tab-pane fade in active" id="favouriteTopics">
                          <img class="img-responsive"
                              src="<?= $media['HomePage'][6]?>"
                              alt="Amazing Features 1"
                          >
                          <div class="visible-xs text-center"><?= $content['HomePage'][23]?></div>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="chromeExtension">
                          <img class="img-responsive"
                              src="<?= $media['HomePage'][7]?>"
                              alt="Amazing Features 2"
                          >
                          <div class="visible-xs text-center"><?= $content['HomePage'][24]?></div>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="RSSFeeds">
                         <img class="img-responsive"
                              src="<?= $media['HomePage'][8]?>"
                              alt="Amazing Features 3"
                          >
                          <div class="visible-xs text-center"><?= $content['HomePage'][25]?></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>  <div class="container users-counter">
      <div class="row">
          <div class="col-xs-12">
              <div class="text-center">
                  <p class="text-electric-purple number ff-headings fw-bold m-b-none wow fadeIn">
                  <?= $content['HomePage'][26]?>
                  </p>
                  <p class="font-size-h5 content">
                  <?= $content['HomePage'][27]?> <?=$namehost?><?= $content['HomePage'][28]?>
                  </p>
                  <div class="section-underline electric-purple"></div>
              </div>
          </div>
      </div>
  </div>  <div class="container xs-full-width">
    <div class="row">
      <section class="col-xs-12">
        <div class="cd-testimonials-all-wrapper">
          <div class="cd-testimonials-item wow fadeIn">
            <div class="content bg-nina text-light-primary">
              <div class="inner">
                <p><?= $content['HomePage'][29]?> <?=$namehost?> <?= $content['HomePage'][30]?> <?=$namehost?> <?= $content['HomePage'][31]?></p>
  
                  <div class="cd-author">
                      <span class="user-img">
                          <img class="img-responsive" src="assets/images/landing/testimonials/eddie.c1fd4a26.png" alt="Author image">
                      </span>
                   <div class="cd-author-info">
                     <p class="name"><?= $content['HomePage'][32]?></p>
                     <p class="desc"><?= $content['HomePage'][33]?></p>
                   </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="cd-testimonials-item wow fadeIn">
            <div class="content bg-alexandre text-light-primary">
              <div class="inner">
                <p><?= $content['HomePage'][34]?> <?=$namehost?> <?= $content['HomePage'][35]?> <?=$namehost?> <?= $content['HomePage'][36]?></p>
  
                  <div class="cd-author">
                                  <span class="user-img">
                                      <img class="img-responsive" src="<?= $media['HomePage'][9]?>" alt="Author image">
                                  </span>
                   <div class="cd-author-info">
                     <p class="name"><?= $content['HomePage'][37]?></p>
                     <p class="desc"><?= $content['HomePage'][38]?></p>
                   </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="cd-testimonials-item wow fadeIn">
            <div class="content bg-lisa text-light-primary">
              <div class="inner">
                <p><?= $content['HomePage'][39]?> <?=$namehost?> <?= $content['HomePage'][40]?></p>
  
                  <div class="cd-author">
                                  <span class="user-img">
                                      <img class="img-responsive" src="<?= $media['HomePage'][10]?>" alt="Author image">
                                  </span>
                   <div class="cd-author-info">
                     <p class="name"><?= $content['HomePage'][41]?></p>
                     <p class="desc"><?= $content['HomePage'][42]?></p>
                   </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="cd-testimonials-item wow fadeIn">
            <div class="content bg-jay">
              <div class="inner">
                <p><?= $content['HomePage'][43]?> <?=$namehost?> <?= $content['HomePage'][44]?> <?=$namehost?><?= $content['HomePage'][45]?> <?=$namehost?> <?= $content['HomePage'][46]?></p>
  
                  <div class="cd-author">
                                  <span class="user-img">
                                      <img class="img-responsive" src="<?= $media['HomePage'][11]?>" alt="Author image">
                                  </span>
                   <div class="cd-author-info">
                     <p class="name"><?= $content['HomePage'][47]?></p>
                     <p class="desc"><?= $content['HomePage'][48]?></p>
                   </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="cd-testimonials-item wow fadeIn">
            <div class="content bg-patric text-light-primary">
              <div class="inner">
                <p><?= $content['HomePage'][49]?> <?=$namehost?> <?= $content['HomePage'][50]?> <?=$namehost?> <?= $content['HomePage'][51]?></p>
  
                  <div class="cd-author">
                                  <span class="user-img">
                                      <img class="img-responsive" src="<?= $media['HomePage'][12]?>" alt="Author image">
                                  </span>
                   <div class="cd-author-info">
                     <p class="name"><?= $content['HomePage'][52]?></p>
                     <p class="desc"><?= $content['HomePage'][53]?></p>
                   </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="cd-testimonials-item wow fadeIn">
            <div class="content bg-kyle text-light-primary">
              <div class="inner">
                <p> <?= $content['HomePage'][54]?><?=$namehost?> <?= $content['HomePage'][55]?></p>
  
                  <div class="cd-author">
                                  <span class="user-img">
                                      <img class="img-responsive  custom-height-v2" src="<?= $media['HomePage'][13]?>" alt="Author image">
                                  </span>
                   <div class="cd-author-info">
                     <p class="name"><?= $content['HomePage'][56]?></p>
                     <p class="desc"><?= $content['HomePage'][57]?></p>
                   </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="cd-testimonials-item wow fadeIn">
            <div class="content bg-patric text-light-primary">
              <div class="inner">
                <p><?=$namehost?> <?= $content['HomePage'][58]?></p>
  
                <div class="cd-author">
                                  <span class="user-img">
                                      <img class="img-responsive custom-height" src="<?= $media['HomePage'][14]?>" alt="Author image">
                                  </span>
                  <div class="cd-author-info">
                    <p class="name"><?= $content['HomePage'][59]?></p>
                    <p class="desc"><?= $content['HomePage'][60]?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cd-testimonials-item wow fadeIn">
            <div class="content bg-alexandre text-light-primary">
              <div class="inner">
                <p>
                  <?=$namehost?> <?= $content['HomePage'][61]?>
                </p>
  
                <div class="cd-author">
                                  <span class="user-img">
                                      <img class="img-responsive" src="<?= $media['HomePage'][15]?>" alt="Author image">
                                  </span>
                  <div class="cd-author-info">
                    <p class="name"><?= $content['HomePage'][62]?></p>
                    <p class="desc"><?= $content['HomePage'][63]?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cd-testimonials-item wow fadeIn">
            <div class="content bg-jay">
              <div class="inner">
                <p><?= $content['HomePage'][64]?> <?=$namehost?> <?= $content['HomePage'][65]?> <?=$namehost?> <?= $content['HomePage'][66]?></p>
  
                <div class="cd-author">
                                  <span class="user-img">
                                      <img class="img-responsive" src="<?= $media['HomePage'][16]?>" alt="Author image">
                                  </span>
                  <div class="cd-author-info">
                    <p class="name"><?= $content['HomePage'][67]?></p>
                    <p class="desc"><?= $content['HomePage'][68]?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cd-testimonials-item wow fadeIn">
            <div class="content bg-kyle text-light-primary">
              <div class="inner">
                <p class="custom-text-content"><?= $content['HomePage'][69]?> <?=$namehost?> <?= $content['HomePage'][70]?> <?=$namehost?> <?= $content['HomePage'][71]?></p>
  
                <div class="cd-author">
                                  <span class="user-img">
                                      <img class="img-responsive" src="<?= $media['HomePage'][17]?>" alt="Author image">
                                  </span>
                  <div class="cd-author-info">
                    <p class="name"><?= $content['HomePage'][72]?></p>
                    <p class="desc"><?= $content['HomePage'][73]?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cd-testimonials-item wow fadeIn">
            <div class="content bg-lisa text-light-primary">
              <div class="inner">
                <p><?= $content['HomePage'][74]?> <?=$namehost?> <?= $content['HomePage'][75]?> <?=$namehost?> <?= $content['HomePage'][76]?></p>
  
                <div class="cd-author">
                                  <span class="user-img">
                                      <img class="img-responsive" src="<?= $media['HomePage'][18]?>" alt="Author image">
                                  </span>
                  <div class="cd-author-info">
                    <p class="name"><?= $content['HomePage'][77]?></p>
                    <p class="desc"><?= $content['HomePage'][78]?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cd-testimonials-item wow fadeIn">
            <div class="content bg-nina text-light-primary">
              <div class="inner">
                <p class="custom-text-content"><?= $content['HomePage'][79]?> <?=$namehost?> <?= $content['HomePage'][80]?>
                <?=$namehost?> <?= $content['HomePage'][81]?> <?=$namehost?><?= $content['HomePage'][82]?> <?=$namehost?> <?= $content['HomePage'][83]?></p>
                <div class="cd-author">
                                  <span class="user-img">
                                      <img class="img-responsive" src="<?= $media['HomePage'][19]?>" alt="Author image">
                                  </span>
                  <div class="cd-author-info">
                    <p class="name"><?= $content['HomePage'][84]?></p>
                    <p class="desc"><?= $content['HomePage'][85]?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cd-testimonials-item wow fadeIn">
            <div class="content bg-patric text-light-primary">
              <div class="inner">
                <p><?= $content['HomePage'][86]?> <?=$namehost?> <?= $content['HomePage'][87]?></p>
                <div class="cd-author">
                                  <span class="user-img">
                                      <img class="img-responsive" src="<?= $media['HomePage'][20]?>" alt="Author image">
                                  </span>
                  <div class="cd-author-info">
                    <p class="name"><?= $content['HomePage'][88]?></p>
                    <p class="desc"><?= $content['HomePage'][89]?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cd-testimonials-item wow fadeIn">
            <div class="content bg-alexandre text-light-primary">
              <div class="inner">
                <p class="custom-text-content"><?= $content['HomePage'][90]?> <?=$namehost?> <?= $content['HomePage'][91]?> </p>
                <div class="cd-author">
                                  <span class="user-img">
                                      <img class="img-responsive" src="<?= $media['HomePage'][21]?>" alt="Author image">
                                  </span>
                  <div class="cd-author-info">
                    <p class="name"><?= $content['HomePage'][92]?></p>
                    <p class="desc"><?= $content['HomePage'][93]?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cd-testimonials-item wow fadeIn">
            <div class="content bg-jay">
              <div class="inner">
                <p><?= $content['HomePage'][94]?> <?=$namehost?> <?= $content['HomePage'][95]?></p>
                <div class="cd-author">
                                  <span class="user-img">
                                      <img class="img-responsive" src="<?= $media['HomePage'][22]?>" alt="Author image">
                                  </span>
                  <div class="cd-author-info">
                    <p class="name"><?= $content['HomePage'][96]?></p>
                    <p class="desc"><?= $content['HomePage'][97]?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cd-testimonials-item wow fadeIn">
            <div class="content bg-lisa text-light-primary">
              <div class="inner">
                <p><?= $content['HomePage'][98]?> <?=$namehost?> <?= $content['HomePage'][99]?></p>
  
                <div class="cd-author">
                                  <span class="user-img">
                                      <img class="img-responsive" src="<?= $media['HomePage'][23]?>" alt="Author image">
                                  </span>
                  <div class="cd-author-info">
                    <p class="name"><?= $content['HomePage'][100]?></p>
                    <p class="desc"><?= $content['HomePage'][101]?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cd-testimonials-item wow fadeIn">
            <div class="content bg-kyle text-light-primary">
              <div class="inner">
                <p class="custom-text-content"><?= $content['HomePage'][102]?> <?=$namehost?> <?= $content['HomePage'][103]?> <?=$namehost?> <?= $content['HomePage'][104]?></p>
  
                <div class="cd-author">
                                  <span class="user-img">
                                      <img class="img-responsive custom-height" src="<?= $media['HomePage'][24]?>" alt="Author image">
                                  </span>
                  <div class="cd-author-info">
                    <p class="name"><?= $content['HomePage'][105]?></p>
                    <p class="desc"><?= $content['HomePage'][106]?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  
  
  
  
  
  
  <main id="pricing">

  <!-- section -->
  <section class="section mini-space">
    <div class="container">

      <div class="row">

        <div class="col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
          <h1 class="heading bold"><?= $content['HomePage'][107]?></h1>
        </div>

      </div>

    </div>
  </section>
  <!-- /.section -->

  <!-- pricing-section -->
  <section>
    <div class="container">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#pricing-annually" class="semi-bold" aria-controls="pricing-annually" role="tab" data-toggle="tab"><?= $content['HomePage'][108]?></a></li>
        <li role="presentation"><a href="#pricing-monthly" class="semi-bold" aria-controls="pricing-monthly" role="tab" data-toggle="tab"><?= $content['HomePage'][109]?></a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">

        <!-- tab-panel -->
        <div role="tabpanel" class="tab-pane active" id="pricing-annually">

          <!-- mobile-content -->
          <div class="pricing-section-mobile hidden-lg">

            <ul class="list-inline mobile-tab clearfix">
              <li class="active"><a href="#" class="semi-bold" data-content="free-content"><?= $content['HomePage'][110]?></a></li>
              <li><a href="#" class="semi-bold" data-content="plus-content"><?= $content['HomePage'][111]?></a></li>
              <li><a href="#" class="semi-bold" data-content="premium-content"><?= $content['HomePage'][112]?></a></li>
              <li><a href="#" class="semi-bold" data-content="vip-content"><?= $content['HomePage'][113]?></a></li>
            </ul>

            <div class="content">
              <div class="free-content data-toggle">
                <p class="pricing-price"><span class="bold"><?= $content['HomePage'][114]?></span></p>
                <!--<p class="pricing-old-price"></p>-->
                <p class="pricing-sub-title"><?= $content['HomePage'][115]?></p>
              </div>
              <div class="plus-content data-toggle">
                <p class="pricing-price"><span class="bold"><sup><?= $content['HomePage'][116]?></sup><?= $content['HomePage'][117]?></span> <?= $content['HomePage'][118]?></p>
                <!--<p class="pricing-old-price"><sup>$</sup><strike>7.48</span> /mo</strike></p>-->
                <p class="pricing-sub-title"><?= $content['HomePage'][119]?></p>
              </div>
              <div class="premium-content data-toggle">
                <p class="pricing-price bold"><span class="bold"><sup><?= $content['HomePage'][120]?></sup><?= $content['HomePage'][121]?></span> <?= $content['HomePage'][122]?></p>
                <!--<p class="pricing-old-price"><sup>$</sup><strike>37.48</span> /mo</strike></p>-->
                <p class="pricing-sub-title"><?= $content['HomePage'][123]?></p>
              </div>
              <div class="vip-content data-toggle">
                <p class="pricing-price bold"><span class="bold"><sup><?= $content['HomePage'][124]?></sup><?= $content['HomePage'][125]?></span> <?= $content['HomePage'][126]?></p>
                <!--<p class="pricing-old-price"><sup>$</sup><strike>74.98</span> /mo</strike></p>-->
                <p class="pricing-sub-title"><?= $content['HomePage'][127]?></p>
              </div>
            </div>

          </div>
          <!-- /.mobile-content -->

          <div class="pricing-section">
            <ul class="list-unstyled">

              <!-- background pattern -->
              <li class="row background-pattern">
                <div class="col-xs-6 col-sm-6 col-lg-4 bg-pattern-title"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 bg-pattern-content first"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 bg-pattern-content second"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 bg-pattern-content third"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 bg-pattern-content fouth"></div>
              </li>
              <!-- /.background pattern -->

              <li class="row visible-lg">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2"><p class="pricing-title bold purple"><?= $content['HomePage'][128]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2"><p class="pricing-title bold sky-blue"><?= $content['HomePage'][129]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2"><p class="pricing-title bold orange"><?= $content['HomePage'][130]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2"><p class="pricing-title bold green"><?= $content['HomePage'][131]?></p></div>
              </li>

              <li class="row visible-lg">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle">
                  <p class="pricing-price"><span class="bold"><?= $content['HomePage'][132]?></span></p>
                  <!--<p class="pricing-old-price"></p>-->
                  <p class="pricing-sub-title"><?= $content['HomePage'][133]?></p>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle">
                  <p class="pricing-price"><span class="bold"><sup><?= $content['HomePage'][134]?></sup><?= $content['HomePage'][135]?></span> <?= $content['HomePage'][136]?></p>
                  <!--<p class="pricing-old-price"><sup>$</sup><strike>7.48</span> /mo</strike></p>-->
                  <p class="pricing-sub-title"><?= $content['HomePage'][137]?></p>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle">
                  <p class="pricing-price bold"><span class="bold"><sup><?= $content['HomePage'][138]?></sup><?= $content['HomePage'][139]?></span> <?= $content['HomePage'][140]?></p>
                  <!--<p class="pricing-old-price"><sup>$</sup><strike>37.48</span> /mo</strike></p>-->
                  <p class="pricing-sub-title"><?= $content['HomePage'][141]?></p>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle">
                  <p class="pricing-price bold"><span class="bold"><sup><?= $content['HomePage'][142]?></sup><?= $content['HomePage'][143]?></span> <?= $content['HomePage'][144]?></p>
                  <!--<p class="pricing-old-price"><sup>$</sup><strike>74.98</span> /mo</strike></p>-->
                  <p class="pricing-sub-title"><?= $content['HomePage'][145]?></p>
                </div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][146]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><?= $content['HomePage'][147]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><?= $content['HomePage'][148]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][149]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][150]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][151]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle">
                  <ul class="list-inline social-links">
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle">
                  <ul class="list-inline social-links">
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle">
                  <ul class="list-inline social-links">
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle">
                  <ul class="list-inline social-links">
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><hr></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><span class="pricing-heading-text bold"><?= $content['HomePage'][152]?></span></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][153]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><?= $content['HomePage'][154]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><?= $content['HomePage'][155]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][156]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][157]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][158]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][25]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][26]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][27]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][28]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][159]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][29]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][30]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][31]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][32]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][160]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][33]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][34]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][35]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][36]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][161]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][37]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][38]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][39]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][40]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][162]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][41]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][42]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][43]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][44]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><hr></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><span class="pricing-heading-text bold"><?= $content['HomePage'][163]?></span></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][164]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><?= $content['HomePage'][165]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><?= $content['HomePage'][166]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][167]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][168]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][169]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><?= $content['HomePage'][170]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><?= $content['HomePage'][171]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][172]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][173]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][174]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle">
                  <ul class="list-inline social-links">
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][45]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][46]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][47]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][48]?>"></a></li>
                    <li class="separator"></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][49]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][50]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][51]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][52]?>"></a></li>
                  </ul>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle">
                  <ul class="list-inline social-links">
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][53]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][54]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][55]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][56]?>"></a></li>
                    <li class="separator"></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][57]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][58]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][59]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][60]?>"></a></li>
                  </ul>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle">
                  <ul class="list-inline social-links">
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][61]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][62]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][63]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][64]?>"></a></li>
                    <li class="separator"></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][65]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][66]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][67]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][68]?>"></a></li>
                  </ul>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle">
                  <ul class="list-inline social-links">
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][69]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][70]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][71]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][72]?>"></a></li>
                    <li class="separator"></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][73]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][74]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][75]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][76]?>"></a></li>
                  </ul>
                </div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][175]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][77]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><?= $content['HomePage'][176]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][177]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][178]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][179]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][78]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][79]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][80]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][81]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][180]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][82]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][83]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][84]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][85]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][181]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][86]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][87]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][88]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][89]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><hr></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><span class="pricing-heading-text bold"><?= $content['HomePage'][182]?></span></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][183]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][90]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][91]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][92]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][93]?>"></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][184]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][94]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][95]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][96]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][97]?>"></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><span class="pricing-heading-text bold"><?= $content['HomePage'][185]?></span></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][186]?><br><?= $content['HomePage'][187]?><br></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><?= $content['HomePage'][188]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><?= $content['HomePage'][189]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][190]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][191]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][192]?><br><?= $content['HomePage'][193]?><br></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><?= $content['HomePage'][194]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><?= $content['HomePage'][195]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][196]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][197]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][198]?><br><?= $content['HomePage'][199]?><br></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][98]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][99]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][100]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][101]?>"></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][200]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][102]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][103]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][201]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][202]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><span class="pricing-heading-text bold"><?= $content['HomePage'][203]?></span></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][204]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][104]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][105]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][205]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][206]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][207]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][106]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][107]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][208]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][209]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><span class="pricing-heading-text bold"><?= $content['HomePage'][210]?></span></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][211]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][108]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][109]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][110]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p class="green"><?= $content['HomePage'][212]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][213]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][111]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][112]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][113]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][114]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle">
                    <a href="#" class="hidden-xs btn btn-primary-outline-varient1 js-mixpanel-signup-trigger" data-btn-context="Menu Sign In" data-toggle="modal" data-target="#signinModal" name="pricingPageSignInModal"><?= $content['HomePage'][214]?></a>
                    <a href="#" class="visible-xs btn btn-primary-outline-varient1 js-mixpanel-signup-trigger" data-btn-context="Menu Sign In" data-toggle="modal" data-target="#mobileSigninModal" name="pricingPageSignInModal"><?= $content['HomePage'][215]?></a>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle">
                    <a href="#" class="hidden-xs btn btn-primary-outline-varient1 js-mixpanel-signup-trigger" data-btn-context="Menu Sign In" data-toggle="modal" data-target="#signinModal" name="pricingPageSignInModal"><?= $content['HomePage'][216]?></a>
                    <a href="#" class="visible-xs btn btn-primary-outline-varient1 js-mixpanel-signup-trigger" data-btn-context="Menu Sign In" data-toggle="modal" data-target="#mobileSigninModal" name="pricingPageSignInModal"><?= $content['HomePage'][217]?></a>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle">
                    <a href="#" class="hidden-xs btn btn-primary-outline-varient1 js-mixpanel-signup-trigger" data-btn-context="Menu Sign In" data-toggle="modal" data-target="#signinModal" name="pricingPageSignInModal"><?= $content['HomePage'][218]?></a>
                    <a href="#" class="visible-xs btn btn-primary-outline-varient1 js-mixpanel-signup-trigger" data-btn-context="Menu Sign In" data-toggle="modal" data-target="#mobileSigninModal" name="pricingPageSignInModal"><?= $content['HomePage'][219]?></a>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle">
                    <a href="#" class="hidden-xs btn btn-primary-outline-varient1 js-mixpanel-signup-trigger" data-btn-context="Menu Sign In" data-toggle="modal" data-target="#signinModal" name="pricingPageSignInModal"><?= $content['HomePage'][220]?></a>
                    <a href="#" class="visible-xs btn btn-primary-outline-varient1 js-mixpanel-signup-trigger" data-btn-context="Menu Sign In" data-toggle="modal" data-target="#mobileSigninModal" name="pricingPageSignInModal"><?= $content['HomePage'][221]?></a>
                </div>
              </li>

            </ul>
          </div>

        </div>
        <!-- /.tab-panel -->

        <!-- tab-panel -->
        <div role="tabpanel" class="tab-pane" id="pricing-monthly">

          <!-- mobile-content -->
          <div class="pricing-section-mobile hidden-lg">

            <ul class="list-inline mobile-tab clearfix">
              <li class="active"><a href="#" class="semi-bold" data-content="free-content"><?= $content['HomePage'][222]?></a></li>
              <li><a href="#" class="semi-bold" data-content="plus-content"><?= $content['HomePage'][223]?></a></li>
              <li><a href="#" class="semi-bold" data-content="premium-content"><?= $content['HomePage'][224]?></a></li>
              <li><a href="#" class="semi-bold" data-content="vip-content"><?= $content['HomePage'][225]?></a></li>
            </ul>

            <div class="content">
              <div class="free-content data-toggle">
                <p class="pricing-price"><span class="bold"><?= $content['HomePage'][226]?></span></p>
                <!--<p class="pricing-old-price"></p>-->
                <p class="pricing-sub-title"><?= $content['HomePage'][227]?></p>
              </div>
              <div class="plus-content data-toggle">
                <p class="pricing-price"><span class="bold"><sup><?= $content['HomePage'][228]?></sup><?= $content['HomePage'][229]?></span> <?= $content['HomePage'][230]?></p>
                <!--<p class="pricing-old-price"><sup>$</sup><strike>9.99</span> /mo</strike></p>-->
                <p class="pricing-sub-title"><?= $content['HomePage'][231]?></p>
              </div>
              <div class="premium-content data-toggle">
                <p class="pricing-price bold"><span class="bold"><sup><?= $content['HomePage'][232]?></sup><?= $content['HomePage'][233]?></span> <?= $content['HomePage'][234]?></p>
                <!--<p class="pricing-old-price"><sup>$</sup><strike>49.99</span> /mo</strike></p>-->
                <p class="pricing-sub-title"><?= $content['HomePage'][235]?></p>
              </div>
              <div class="vip-content data-toggle">
                <p class="pricing-price bold"><span class="bold"><sup><?= $content['HomePage'][236]?></sup><?= $content['HomePage'][237]?></span> <?= $content['HomePage'][238]?></p>
                <!--<p class="pricing-old-price"><sup>$</sup><strike>99.99</span> /mo</strike></p>-->
                <p class="pricing-sub-title"><?= $content['HomePage'][239]?></p>
              </div>
            </div>

          </div>
          <!-- /.mobile-content -->

          <div class="pricing-section">
            <ul class="list-unstyled">

              <!-- background pattern -->
              <li class="row background-pattern">
                <div class="col-xs-6 col-sm-6 col-lg-4 bg-pattern-title"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 bg-pattern-content first"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 bg-pattern-content second"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 bg-pattern-content third"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 bg-pattern-content fouth"></div>
              </li>
              <!-- /.background pattern -->

              <li class="row visible-lg">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2"><p class="pricing-title bold purple"><?= $content['HomePage'][240]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2"><p class="pricing-title bold sky-blue"><?= $content['HomePage'][241]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2"><p class="pricing-title bold orange"><?= $content['HomePage'][242]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2"><p class="pricing-title bold green"><?= $content['HomePage'][243]?></p></div>
              </li>

              <li class="row visible-lg">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle">
                  <p class="pricing-price"><span class="bold"><?= $content['HomePage'][244]?></span></p>
                  <!--<p class="pricing-old-price"></p>-->
                  <p class="pricing-sub-title"><?= $content['HomePage'][245]?></p>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle">
                  <p class="pricing-price"><span class="bold"><sup><?= $content['HomePage'][246]?></sup><?= $content['HomePage'][247]?></span> <?= $content['HomePage'][248]?></p>
                  <!--<p class="pricing-old-price"><sup>$</sup><strike>9.99</span> /mo</strike></p>-->
                  <p class="pricing-sub-title"><?= $content['HomePage'][249]?></p>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle">
                  <p class="pricing-price bold"><span class="bold"><sup><?= $content['HomePage'][250]?></sup><?= $content['HomePage'][251]?></span> <?= $content['HomePage'][252]?></p>
                  <!--<p class="pricing-old-price"><sup>$</sup><strike>49.99</span> /mo</strike></p>-->
                  <p class="pricing-sub-title"><?= $content['HomePage'][253]?></p>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle">
                  <p class="pricing-price bold"><span class="bold"><sup><?= $content['HomePage'][254]?></sup><?= $content['HomePage'][255]?></span> <?= $content['HomePage'][256]?></p>
                  <!--<p class="pricing-old-price"><sup>$</sup><strike>99.99</span> /mo</strike></p>-->
                  <p class="pricing-sub-title"><?= $content['HomePage'][257]?></p>
                </div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][258]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><?= $content['HomePage'][259]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><?= $content['HomePage'][260]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][261]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][262]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][263]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle">
                  <ul class="list-inline social-links">
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle">
                  <ul class="list-inline social-links">
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle">
                  <ul class="list-inline social-links">
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle">
                  <ul class="list-inline social-links">
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><hr></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><span class="pricing-heading-text bold"><?= $content['HomePage'][264]?></span></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][265]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><?= $content['HomePage'][266]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><?= $content['HomePage'][267]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][268]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][269]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][270]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][115]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][116]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][117]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][118]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][271]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][119]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][120]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][121]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][122]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][272]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][123]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][124]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][125]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][126]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][273]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][127]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][128]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][129]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][130]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][274]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][131]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][132]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][133]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][134]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><hr></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><span class="pricing-heading-text bold"><?= $content['HomePage'][275]?></span></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][276]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><?= $content['HomePage'][277]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><?= $content['HomePage'][278]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][279]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][280]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][281]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><?= $content['HomePage'][282]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><?= $content['HomePage'][283]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][284]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][285]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][286]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle">
                  <ul class="list-inline social-links">
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][135]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][136]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][137]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][138]?>"></a></li>
                    <li class="separator"></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][139]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][140]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][141]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][142]?>"></a></li>
                  </ul>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle">
                  <ul class="list-inline social-links">
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][143]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][144]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][145]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][146]?>"></a></li>
                    <li class="separator"></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][147]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][148]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][149]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][150]?>"></a></li>
                  </ul>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle">
                  <ul class="list-inline social-links">
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][151]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][152]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][153]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][154]?>"></a></li>
                    <li class="separator"></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][155]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][156]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][157]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][158]?>"></a></li>
                  </ul>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle">
                  <ul class="list-inline social-links">
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][159]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][160]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][161]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][162]?>"></a></li>
                    <li class="separator"></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][163]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][164]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][165]?>"></a></li>
                    <li><a href="javascript:void(0)"><img src="<?= $media['HomePage'][166]?>"></a></li>
                  </ul>
                </div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][287]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][167]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><?= $content['HomePage'][288]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][289]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][290]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][291]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][168]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][169]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][170]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][171]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][292]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][172]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][173]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][174]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][175]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][293]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][176]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][177]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][178]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][179]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><hr></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><hr></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><span class="pricing-heading-text bold"><?= $content['HomePage'][294]?></span></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][295]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][180]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][181]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][182]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][183]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][296]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][184]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][185]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][186]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][187]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><span class="pricing-heading-text bold"><?= $content['HomePage'][297]?></span></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][298]?> <br><?= $content['HomePage'][299]?><br></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><?= $content['HomePage'][300]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><?= $content['HomePage'][301]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][302]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][303]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][304]?><br><?= $content['HomePage'][305]?><br></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><?= $content['HomePage'][306]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><?= $content['HomePage'][307]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][308]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][309]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][310]?><br><?= $content['HomePage'][311]?><br></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][188]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][189]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][190]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][191]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][312]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][192]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][193]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][313]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][314]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><span class="pricing-heading-text bold"><?= $content['HomePage'][315]?></span></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][316]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][194]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][195]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][317]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][318]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][319]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][196]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][197]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><?= $content['HomePage'][320]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><?= $content['HomePage'][321]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><span class="pricing-heading-text bold"><?= $content['HomePage'][322]?></span></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][323]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][198]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][199]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][200]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p class="green"><?= $content['HomePage'][324]?></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"><p><?= $content['HomePage'][325]?></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle"><p><img src="<?= $media['HomePage'][201]?>"></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle"><p><img src="<?= $media['HomePage'][202]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle"><p><img src="<?= $media['HomePage'][203]?>" alt=""></p></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle"><p><img src="<?= $media['HomePage'][204]?>" alt=""></p></div>
              </li>

              <li class="row">
                <div class="col-xs-6 col-sm-6 col-lg-4 pricing-heading"></div>
                <div class="col-xs-6 col-sm-6 col-lg-2 free-content data-toggle">
                    <a href="#" class="hidden-xs btn btn-primary-outline-varient1 js-mixpanel-signup-trigger" data-btn-context="Menu Sign In" data-toggle="modal" data-target="#signinModal" name="pricingPageSignInModal"><?= $content['HomePage'][326]?></a>
                    <a href="#" class="visible-xs btn btn-primary-outline-varient1 js-mixpanel-signup-trigger" data-btn-context="Menu Sign In" data-toggle="modal" data-target="#mobileSigninModal" name="pricingPageSignInModal"><?= $content['HomePage'][327]?></a>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 plus-content data-toggle">
                    <a href="#" class="hidden-xs btn btn-primary-outline-varient1 js-mixpanel-signup-trigger" data-btn-context="Menu Sign In" data-toggle="modal" data-target="#signinModal" name="pricingPageSignInModal"><?= $content['HomePage'][328]?></a>
                    <a href="#" class="visible-xs btn btn-primary-outline-varient1 js-mixpanel-signup-trigger" data-btn-context="Menu Sign In" data-toggle="modal" data-target="#mobileSigninModal" name="pricingPageSignInModal"><?= $content['HomePage'][329]?></a>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 premium-content data-toggle">
                    <a href="#" class="hidden-xs btn btn-primary-outline-varient1 js-mixpanel-signup-trigger" data-btn-context="Menu Sign In" data-toggle="modal" data-target="#signinModal" name="pricingPageSignInModal"><?= $content['HomePage'][330]?></a>
                    <a href="#" class="visible-xs btn btn-primary-outline-varient1 js-mixpanel-signup-trigger" data-btn-context="Menu Sign In" data-toggle="modal" data-target="#mobileSigninModal" name="pricingPageSignInModal"><?= $content['HomePage'][331]?></a>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 vip-content data-toggle">
                    <a href="#" class="hidden-xs btn btn-primary-outline-varient1 js-mixpanel-signup-trigger" data-btn-context="Menu Sign In" data-toggle="modal" data-target="#signinModal" name="pricingPageSignInModal"><?= $content['HomePage'][332]?></a>
                    <a href="#" class="visible-xs btn btn-primary-outline-varient1 js-mixpanel-signup-trigger" data-btn-context="Menu Sign In" data-toggle="modal" data-target="#mobileSigninModal" name="pricingPageSignInModal"><?= $content['HomePage'][333]?></a>
                </div>
              </li>

            </ul>
          </div>

        </div>
        <!-- /.tab-panel -->

      </div>

    </div>
  </section>
  <!-- pricing-section -->

</main>
  
  
  
  
  
  
  <div class="ov-hidden bottom-cta pos-rlt">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-5 col-md-3">
          <div class="content wow fadeIn flex" data-wow-delay="0.6s">
            <div class="w-full">
              <h2 class="fw-bold m-t-none"><?= $content['HomePage'][334]?></h2>
              <button class="btn btn-primary text-uppercase hidden-xs btn-block btn-cta js-mixpanel-signup-trigger"
                      data-btn-context="Lets Go Fold" data-toggle="modal" data-target="#signupModal">
                      <?= $content['HomePage'][335]?>
              </button>
              <div class="row visible-xs">
                <div class="col-xs-12">
                  <div class="p-h-1x">
                    <a class="btn btn-primary btn-block text-uppercase js-mixpanel-signup-trigger"
                       data-btn-context="Lets Go Fold"
                       data-toggle="modal" data-target="#signupModal">
                       <?= $content['HomePage'][336]?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-8 hidden-xs col-sm-7 col-md-offset-1">
          <img class="img-responsive wow fadeIn" data-wow-delay="0.6s"
               src="<?= $media['HomePage'][205]?>"
               alt="Devices-Lets Go"
          >
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade ov-y-hidden text-center" id="mobileSigninModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-full-screen" role="document">
      <div class="modal-content">
        <button type="button" class="close js-mobile-signin-modal-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
        </button>
        <div class="modal-body p-h-2x flex">
          <div class="text-center full-w">
            <img class="img-responsive logo--full m-l-auto m-r-auto m-b-4x"
                 src="<?= $media['HomePage'][206]?>" alt="<?=$namehost?>">
            <p class="m-b-2x font-size-h6"><?= $content['HomePage'][337]?>
              <a href="#" id="mobileSignupModalTrigger" class="text-link">
              <?= $content['HomePage'][338]?>
              </a>
            </p>
            <a class="btn cf-btn-facebook btn-block text-uppercase m-b-1x font-size-sm js-login js-login-facebook flex">
              <i class="zmdi zmdi-facebook-box p-r-1x font-size-h5"></i> <?= $content['HomePage'][339]?>
            </a>
            <a class="btn cf-btn-twitter btn-block text-uppercase m-b-1x font-size-sm js-login js-login-twitter flex">
              <i class="zmdi zmdi-twitter p-r-1x font-size-h5"></i> <?= $content['HomePage'][340]?>
            </a>
            <a class="m-t-2x flex pointer font-size-sm" id="instagramMobileLoginDeprecatedModalTrigger">
              <i class="zmdi zmdi-info-outline m-r-1x"></i> <?= $content['HomePage'][341]?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade ov-y-hidden text-center" id="mobileSignupModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-full-screen" role="document">
      <div class="modal-content">
        <button type="button" class="close js-mobile-signin-modal-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
        </button>
        <div class="modal-body p-h-2x flex">
          <div class="text-center full-w">
            <img class="img-responsive logo--full m-l-auto m-r-auto m-b-4x"
                 src="<?= $media['HomePage'][207]?>" alt="<?=$namehost?>">
            <p class="m-b-2x font-size-h6"><?= $content['HomePage'][342]?>
              <a href="#" id="mobileSigninModalTrigger" class="text-link">
              <?= $content['HomePage'][343]?></a>.
            </p>
            <a class="btn cf-btn-facebook btn-block text-uppercase m-b-1x font-size-sm js-login js-login-facebook flex">
              <i class="zmdi zmdi-facebook-box p-r-1x font-size-h5"></i> <?= $content['HomePage'][344]?>
            </a>
            <a class="btn cf-btn-twitter btn-block text-uppercase m-b-1x font-size-sm js-login js-login-twitter flex">
              <i class="zmdi zmdi-twitter p-r-1x font-size-h5"></i> <?= $content['HomePage'][345]?>
            </a>
            <p class="font-size-sm m-t-3x">
            <?= $content['HomePage'][346]?> <?=$namehost?><?= $content['HomePage'][347]?></a>.
              <a href="/tos" target="_blank" class="text-link"><?= $content['HomePage'][348]?></a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade text-center" id="emailSigninModal" tabindex="1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content" id="email-signin-form">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
        </button>
        <div class="modal-body with-padding input-with-submit">
          <h3 class="modal-title fw-bold"><?= $content['HomePage'][349]?></a>.</h3>
          <p class="font-size-h6 text-left"><?= $content['HomePage'][350]?></a>.
          </p>
          <input placeholder="Enter email address" type="email" class="form-control" id="login-email-input"/>
          <p id="login-email-input-validation" class="input-validation-text m-t-2x"></p>
          <p class="m-t-2x font-size-h6 text-left"><?= $content['HomePage'][351]?></a>.
          </p>
          <input placeholder="Enter password" type="password" class="form-control" id="login-password-input"/>
          <p id="signIn-error-response-placeholder" class="m-t-2x input-validation-text"></p>
          <button type="button" class="m-t-3x btn btn-primary btn-block btn-md btn-cta" id="email-login-button">
            <span class="h6"><?= $content['HomePage'][352]?></a>.</span>
          </button>
          <div class="m-t-2x m-b-2x font-size-h6 flex sp-btwn">
            <div class="float-left text-left">
              <a href="#" id="emailSignupModalTrigger" class="text-link"><?= $content['HomePage'][353]?></a>
            </div>
            <div class="float-right text-right">
             <a href="#" id="emailPasswordResetModalTrigger" class="text-link float-right text-right"><?= $content['HomePage'][354]?></a>.</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade text-center" id="emailPasswordResetModal" tabindex="1" role="dialog">
    <div class="modal-dialog modal-sm" role="document" id="primary-password-reset-initiate-form">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
        </button>
        <div class="modal-body with-padding">
          <h3 class="modal-title fw-bold"><?= $content['HomePage'][355]?></h3>
          <p class="font-size-h7 text-left"><?= $content['HomePage'][356]?> <?=$namehost?> <?= $content['HomePage'][357]?>
          </p>
          <p class="font-size-h6 text-left"><?= $content['HomePage'][358]?></a>.
          </p>
          <input placeholder="Enter email address" type="email" class="form-control" id="reset-email-input" aria-describedby="emailHelp"/>
          <p class="input-validation-text m-t-2x" id="reset-password-response-placeholder"></p>
          <button type="button" class="m-t-3x btn btn-primary btn-block btn-md btn-cta" id="reset-password-button">
            <span class="h7"><?= $content['HomePage'][359]?></span>
          </button>
          <div class="m-t-2x m-b-2x font-size-h6 flex sp-btwn">
            <div class="float-left text-left">
              <a href="#" id="emailPasswordResetSignInModalTrigger" class="text-link"><?= $content['HomePage'][360]?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade text-center" id="emailResetPasswordLinkSentModal" tabindex="1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
        </button>
        <div class="modal-body with-padding">
          <h3 class="modal-title fw-bold"><?= $content['HomePage'][361]?></h3>
          <p class="font-size-h7 text-left"><?= $content['HomePage'][362]?>
          </p>
          <p class="font-size-h7 text-left"><?= $content['HomePage'][363]?> <?=$namehost?> <?= $content['HomePage'][364]?>
          </p>
          <div class="m-t-2x m-b-2x font-size-h6 flex sp-btwn">
            <div class="float-left text-left">
              <a href="#" id="emailPasswordResetLinkSentSignInModalTrigger" class="text-link"><?= $content['HomePage'][365]?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="modal fade text-center" id="signinModal" tabindex="1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
        </button>
        <div class="modal-body with-padding">
          <h3 class="modal-title fw-bold"><?= $content['HomePage'][366]?></h3>
          <a class="btn cf-btn-facebook btn-block text-uppercase m-b-1x font-size-sm js-login js-login-facebook flex">
            <i class="zmdi zmdi-facebook-box p-r-1x font-size-h5"></i> <?= $content['HomePage'][367]?>
          </a>
          <a class="btn cf-btn-twitter btn-block text-uppercase m-b-1x font-size-sm js-login js-login-twitter flex">
            <i class="zmdi zmdi-twitter p-r-1x font-size-h5"></i> <?= $content['HomePage'][368]?>
          </a>
          <a class="btn cf-btn-email btn-block text-uppercase m-b-1x font-size-sm flex" id="socialEmailSigninModalTrigger">
            <i class="mdi mdi-email p-r-1x font-size-h5"></i> <?= $content['HomePage'][369]?>
          </a>
          <p class="m-t-2x flex font-size-sm text-nowrap">
          <?= $content['HomePage'][370]?> <u class="pointer" id="instagramLoginDeprecatedModalTrigger"><?= $content['HomePage'][371]?></u>
          </p>
          <p class="m-t-2x font-size-h6 nowrap-text"><?= $content['HomePage'][372]?>
            <a href="#" id="signupModalTrigger" class="text-link"><?= $content['HomePage'][373]?></a>.
          </p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade text-center" id="emailSignupModal" tabindex="-1" role="dialog">
    <div class="modal-signup-dialog modal-sm" role="document">
      <div class="modal-content">
        <button type="button" class="close email-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
        </button>
        <div class="modal-body with-min-padding" id="email-signup-form">
          <h5 class="modal-title fw-bold"><?= $content['HomePage'][374]?></h5>
  
          <p class="m-t-2x font-size-h6 text-left"><?= $content['HomePage'][375]?>
          </p>
          <input placeholder="Enter fullname" type="text" class="form-control required name" id="signup-username-input" aria-describedby="emailHelp"/>
          <span id="signup-username-input-validation" class="input-validation-text"></span>
  
          <p class="m-t-2x font-size-h6 text-left"><?= $content['HomePage'][376]?>
          </p>
          <input placeholder="Enter email address" type="email" class="form-control" id="signup-email-input" aria-describedby="emailHelp"/>
          <p id="signup-email-input-validation" class="input-validation-text m-t-2x"></p>
  
          <p class="m-t-2x font-size-h6 text-left"><?= $content['HomePage'][377]?>
          </p>
          <input placeholder="Enter password" type="password" class="form-control required pass" id="signup-password-input" aria-describedby="emailHelp"/>
          <span id="signup-password-input-validation" class="input-validation-text"></span>
  
          <p class="m-t-2x font-size-h6 text-left"><?= $content['HomePage'][378]?>
          </p>
          <input placeholder="Re-enter password" type="password" class="form-control" id="signup-confirm-password-input" aria-describedby="emailHelp"/>
          <p id="signup-confirm-password-input-validation" class="input-validation-text m-t-2x"></p>
  
          <button type="button" class="m-t-3x btn btn-primary btn-block btn-md btn-cta" id="email-signup-submit">
            <span class="h6"><?= $content['HomePage'][379]?></span>
          </button>
  
          <p class="font-size-xs m-t-2x">
          <?= $content['HomePage'][380]?> <?=$namehost?> <?= $content['HomePage'][381]?>
            <a href="/tos" target="_blank" class="text-link"><?= $content['HomePage'][382]?></a>.
          </p>
  
          <p class="m-t-2x font-size-h6"><?= $content['HomePage'][383]?>
            <a href="#" id="emailSigninModalTrigger" class="text-link"><?= $content['HomePage'][384]?></a>.
          </p>
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <div class="modal fade text-center" id="signupModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
        </button>
        <div class="modal-body with-padding">
          <h3 class="modal-title fw-bold"><?= $content['HomePage'][385]?></h3>
          <p class="m-b-2x font-size-h6 nowrap-text"><?= $content['HomePage'][386]?>
            <a href="#" id="signinModalTrigger" class="text-link"><?= $content['HomePage'][387]?></a>.
          </p>
          <a class="btn cf-btn-facebook btn-block text-uppercase m-b-1x font-size-sm js-login js-login-facebook flex">
            <i class="zmdi zmdi-facebook-box p-r-1x font-size-h5"></i> <?= $content['HomePage'][388]?>
          </a>
          <a class="btn cf-btn-twitter btn-block text-uppercase m-b-1x font-size-sm js-login js-login-twitter flex">
            <i class="zmdi zmdi-twitter p-r-1x font-size-h5"></i> <?= $content['HomePage'][389]?>
          </a>
          <a class="btn cf-btn-email btn-block text-uppercase m-b-1x font-size-sm flex" id="emailSignupSocialModalTrigger">
            <i class="mdi mdi-email p-r-1x font-size-h5"></i> <?= $content['HomePage'][390]?>
          </a>
          <p class="font-size-xs">
          <?= $content['HomePage'][391]?> <?=$namehost?> <?= $content['HomePage'][392]?>
            <a href="/tos" target="_blank" class="text-link"><?= $content['HomePage'][393]?></a>.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade text-center" id="instaLoginErrorModal" tabindex="1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content instagram-modal flex">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
        </button>
        <div class="modal-body with-padding input-with-submit">
          <p class="font-size-h5 text-center fw-bold" id="instaLoginErrorModalText">
          </p>
          <div class="m-t-2x">
            <p class="font-size-h6 text-justify" id="instaLoginErrorModalDescription">
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer-wrapper">
    <div class="container">
      <div class="row">
        <div class="hidden-xs col-sm-2 col-sm-push-1">
          <div class="box-10x footer-logo">
            <img class="img-responsive" src="<?= $media['HomePage'][208]?>" alt="">
          </div>
        </div>
        <div class="col-sm-2 col-sm-push-1 col-xs-6">
          <ul class="footer-nav">
            <li>
              <a href="/terms-of-service">
              <?= $content['HomePage'][394]?>
              </a>
            </li>
            <li>
              <a href="/privacy-policy" rel="noopener">
              <?= $content['HomePage'][395]?>
              </a>
            </li>
            <li>
              <a href="/refund-policy" rel="noopener">
              <?= $content['HomePage'][396]?>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-sm-2 col-xs-12 col-sm-push-1 col-xs-6">
          <ul class="footer-nav">
            <li>
              <a href="/delivery-policy" rel="noopener">
              <?= $content['HomePage'][397]?>
              </a>
            </li>
            <li>
              <a href="/about-us" rel="noopener">
              <?= $content['HomePage'][398]?>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-sm-3 col-xs-6 col-sm-push-2">
          <div class="m-b-2x m-t-2x font-size-sm"><?= $content['HomePage'][399]?></div>
          <ul class="footer-nav">
            <li class="text-left">
              <a href="https://www.facebook.com/" target="_blank" rel="noopener"
                 class="font-size-h5 v-align-m m-r-1x">
                <i class="zmdi zmdi-facebook-box cf-facebook-box"></i>
              </a>
              <a href="https://twitter.com" target="_blank" rel="noopener"
                 class="font-size-h5 v-align-m m-r-1x">
                <i class="zmdi zmdi-twitter cf-twitter"></i>
              </a>
              <a href="https://www.instagram.com/" target="_blank" rel="noopener"
                 class="font-size-h5 v-align-m m-r-1x">
                <i class="mdi mdi-instagram cf-instagram"></i>
              </a>
              <a href="https://soundcloud.com/" target="_blank" rel="noopener"
                 class="font-size-h5 v-align-m">
                <i class="zmdi zmdi-soundcloud cf-soundcloud"></i>
              </a>
              <a href="https://in.pinterest.com/" target="_blank" rel="noopener"
                 class="font-size-h5 v-align-m">
                <i class="mdi mdi-pinterest cf-pinterest"></i>
              </a>
            </li>
          </ul>
  
        </div>
      </div>
      <div class="row">
        <div class="visible-xs col-xs-3">
          <div class="footer-logo">
            <img class="img-responsive" src="<?= $media['HomePage'][209]?>" alt="">
          </div>
        </div>
        <div class="col-xs-9 col-sm-5 footer-copyright col-sm-offset-2">
          <div class="font-size-xs">
          <?= $content['HomePage'][400]?> <?=$namehost?> <?= $content['HomePage'][401]?>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="/assets/scripts/vendor/vendor-landing.f3032fd6.js"></script>
</body>

</html>