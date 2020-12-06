<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="SignIn.css">
    <link rel="stylesheet" type="text/css" href="MainPage.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="tinymce/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector: 'textarea'});</script>
    <meta charset="utf-8">
    <title>MAIN</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Main Page</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Contacts <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="SignInPage.html">Sign In</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Registration.html">Sign Up</a>
            </li>
        </ul>
    </div>
</nav>
<div class="backMain pb-3">
    <div class="job-search-hero pb-3">
        <div class="container ">
            <img src="pictures/6.png"
                 alt="Dice logo" class="dice-brand">
            <div style="display: flex">
                <div id="slot-words-header" class="h1 slot-words-container" style="">
                    <span class="job-search-word-carousel">Find a work of dreams</span>
                </div>
            </div>
            <span class="job-search-tagline"><p>Set your career in motion with Dice</p></span>
        </div>
    </div>
    <div class="s01">
        <div class="inner-form">
            <div class="input-field first-wrap">
                <input id="search" style="width: 300px" type="text" placeholder="What are you looking for?" class="form-control">
            </div>
            <div class="input-field second-wrap">
                <input id="location" style="width: 300px" type="text" placeholder="location " class="form-control">
            </div>
            <div class="input-field third-wrap">
                <button class="btn btn-primary" type="button">Search</button>
            </div>
        </div>
    </div>
    <div>
        <div class="stackable-page-component">
            <div class="text-center-dhi">
                <div class="down-arrow-decoration" onclick="scrollWin();" data-target="#el" id="ctaDownArrow">
                    <i class="fa fa-arrow-down"></i>
                </div>
                <div class="has-edit-button" id="ctaDocumentText">
                    <p class="title"></p>
                    <div class="document-text">
                        <h1>Dice is the leading career destination for tech experts at every stage of their
                            careers.</h1></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-4 offset-1 animation-text d-flex align-items-center">


            <article class="has-edit-button">
                <h2>FIND YOUR
                    PERFECT
                    JOB MATCH</h2>
                <div class="body-animation">
                    <p>Search results tuned precisely to the criteria you set so we can better connect you with relevant
                        and personalized tech positions.</p></div>
            </article>
        </div>
        <div class="col-sm-6 offset-sm-1">
            <img style="width: 90%" src="pictures/1.PNG">
        </div>
    </div>
    <div class="row mt-lg-5">
        <div class="col-sm-5 offset-sm-1 animation-text d-flex align-items-center">
            <img style="width: 90%" src="pictures/2.PNG">
        </div>
        <div class="col-sm-4 ">
            <article class="has-edit-button">
                <h2>TAKE CONTROL OVER YOUR CONTENT</h2>
                <div class="body-animation">
                    <p>Actively searching? Just browsing? Set personalized job alerts and control your profile
                        visibility to get noticed by top tech employers.</p></div>
            </article>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-4 offset-1 animation-text d-flex align-items-center">


            <article class="has-edit-button">
                <h2>GAIN INSIGHTS INTO YOUR TECH CAREER</h2>
                <div class="body-animation">
                    <p>With your free IITU profile and our advanced data tools, you've got access to personalized salary
                        information
                        and data insights to level up your tech career.</p></div>
            </article>
        </div>
        <div class="col-sm-6 offset-sm-1">
            <img style="width: 90%" src="pictures/3.PNG">
        </div>
    </div>

    <div class="mt-5">
        <div>
            <footer class="dice-footer" data-an-category="candidateFooterNavigation"
                    data-analytics-event="footerNavigation">
                <div class="container m-auto">
                    <div class="has-edit-button"></div>

                    <div class="row d-none d-lg-flex">
                        <div class="col-3">
                            <a href="/" class="footer-link" data-item-analytics="">

                                <img width="150px"
                                     src="pictures/6.png"
                                     data-src="/binaries/content/gallery/dice/icons/dice-logo.svg" alt="Dice logo"
                                     class="" style="">
                            </a>
                        </div>
                        <div class="col-6">
                            <footer class="text-white bg-footer-gray py-1">
                                <div>
                                    <div class="container m-auto pb-8" id="haha">
                                        <div class="flex justify-center h-12"
                                             style="font-size: 25px; font-weight: bold">
                                            Контакты
                                        </div>
                                        <div class="flex flex-col justify-center whitespace-no-wrap">
                                            <div class="grid grid-cols-2 gap-2">
                                                <div class="flex flex-col items-end mt-2">
                                                    <div style="font-size: 20px">Callcenter:
                                                        <div style="font-size: 15px"><span>+7(727) 320 00 00</span>
                                                        </div>
                                                        <div style="font-size: 15px"><span>+7(727) 320 00 01</span>
                                                        </div>
                                                    </div>

                                                    <div style="font-size: 20px;margin-top: 10px;margin-bottom: 30px">
                                                        Деканат:
                                                        <div style="font-size: 15px"><span>+7(727) 244 83 71</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </footer>
                        </div>
                        <div class="col-3">
                            <div class="menu-title" style="font-size: 25px">IITU Everywhere</div>
                            <ul class="list-unstyled" data-analytics-parent="Dice Everywhere">
                                <li class="list-item-inline"><a href="https://twitter.com/Dicedotcom" rel="nofollow"
                                                                class="footer-link" data-item-analytics="">
                                        <div style="color: white;font-size: 15px">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-item-inline"><a href="https://twitter.com/Dicedotcom" rel="nofollow"
                                                                class="footer-link" data-item-analytics="">
                                        <div style="color: white;font-size: 15px">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </div>
                                    </a>
                                </li>
                                <li><a href="https://apps.apple.com/app/id794201100" rel="nofollow" class="footer-link"
                                       data-item-analytics="">

                                        <img src="pictures/4.png"
                                             data-src="/binaries/content/gallery/dice/icons/apple-app-store-badge.svg"
                                             alt="App Store" class="" style="width: 127px;">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://play.google.com/store/apps/details?id=com.dice.app.jobs&amp;referrer=trackingcode%3DDI_OS_UN_MA_UP%26utm_campaign%3DDice%2520Universal%2520Header%2520and%2520Footer%26utm_source%3DDice%26utm_medium%3DOnsite%26utm_content%3DUniversal%26utm_term%3DUnpaid"
                                       rel="nofollow" class="footer-link" data-item-analytics="">

                                        <img src="pictures/5.png"
                                             data-src="/binaries/content/gallery/dice/icons/google-play-badge.png"
                                             alt="Google Play" class=""
                                             style="width: 147px; height: 60px; margin-left: -10px; margin-top: -15px;">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="footer-copyright" style="" data-an-category="footerCopyright">
                    <div class="container m-auto pt-3">
                        <div class="has-edit-button"></div>
                        <p>Done By Students from CSSE-1803 (Sagandykov Almat && Tulekova Ulbolsyn)</p>

                        <p><img width="45px" src="pictures/6.png">&nbsp; &nbsp;<a
                                href="https://iitu.kz/ru/" style="margin-top: -20px">IITU</a>&nbsp;</p>
                    </div>
                </div>
            </footer>


        </div>
        <div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function scrollWin() {
        window.scrollTo(0,2000);

    }
</script>
</body>
</html>
