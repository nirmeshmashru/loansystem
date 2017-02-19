<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>loan_index</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="body-cont">
<div class="top-nav-bg">
    <section class="container">
        <div class="row">
            <div class="col-md-4">
                <p class="welcome">wellcome to financial advisor</p>
            </div>

            <div class="col-md-5 col-md-offset-3">
                <ul class="nav-site">
                    <li class="up-nav-style top-nav-style1">need help call: 12345678</li>
                    <li class="up-nav-style top-nav-style2">free consultation</li>
                    <li class="top-nav-style3"><a href="#"><i class="fa fa-search is-clr" aria-hidden="true"></i></a>
                    </li>
                    <li class="top-nav-style3"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
            </div>
        </div>
    </section>
</div>


<header class="banner-bg">
    <div class="container">
        <div class="main-nav clearfix">

            <nav class="navbar  navbar-left main-nav-1">
                <a href="#" class="logo">logo goes here</a>
            </nav>


            <nav class="navbar navbar-right main-nav-1">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav site-nav">
                            <li class="active"><a href="#">home <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="#">cas study</a></li>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">news</a></li>
                            <li><a href="#">features</a></li>
                            <li><a href="#">contact us</a></li>
                        </ul>


                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <section class="banner-cont">
                    <h1 class="banner-heading">value and client are of<br>importent to us</h1>
                    <p class="banner-sub">emme yhteistyössä monien pankkien ja rahoituslaitoksien<br>kanssa ja näin
                        pyrimme aina hankkimaan </p>
                    <button class="label btn-banner btn-free">get free cunsultetions<i class="fa fa-arrow-right fa-rr"
                                                                                       aria-hidden="true"></i>
                    </button>
                </section>
            </div>
            <div class="col-md-6"></div>

        </div>

    </div>
</header>


<div class="container">
    <div class="row">

        <!-----------------------------------------form start------------------------------------------->
        <div class="form-hole-cont form-position clearfix">
            <form action="{{Route('loanstore')}}" method="POST">
                <div>
                    <section class="form-cont">
                        <h3 class="form-head">LOAN APPLICATION FORM</h3>
                        <p class="sub-head">Applying for a loan is free of charge and does not commit you to
                            anything</p>

                        <div class="row">
                            <div class="col-md-6">
                                <section class="price-cont">
                                    <h4 class="form-head-1">Amount of the loan</h4>
                                    <!-- <span style="width:100%;float:left; text-align:center;"><img src="img/loan-website-v-2.jpg" alt="" class="img-responsive"></span>-->
                                    <div class="price-value-cont clearfix">
                                        <div class="range">
                                            <input type="range" name="range" min="1" max="100" value="50"
                                                   onchange="range.value=value">
                                            <output id="range">50</output>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <a href="#"><i class="fa fa-plus-circle fa-2x"
                                                               aria-hidden="true"></i></a>
                                                <input required="required" name="amount" class="form-control text-box" type="text">
                                                <a href="#"><i class="fa fa-minus-circle fa-2x" aria-hidden="true"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                            </div>
                            <div class="col-md-6">
                                <section class="price-cont">
                                    <h4 class="form-head-1">The loan period</h4>
                                    <!-- <span style="width:100%;float:left; text-align:center;"><img src="img/loan-website-v-2.jpg" alt="" class="img-responsive"></span>-->
                                    <div class="price-value-cont clearfix">
                                        <div class="range">
                                            <input type="range" name="range" min="1" max="100" value="50"
                                                   onchange="range.value=value">
                                            <output id="range">50</output>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <a href="#"><i class="fa fa-plus-circle fa-2x"
                                                               aria-hidden="true"></i></a>
                                                <input required="required"  name="period" class="form-control text-box" type="text">
                                                <a href="#"><i class="fa fa-minus-circle fa-2x" aria-hidden="true"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="form-cont">

                    <section class="mid-form-bg">
                        <div class="form-mid-cont">
                            <h5 class="midd-form-head">Monthly loan : 44 $ / month</h5>

                            <p class="form-mid-cont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                imperdiet a ante mattis<br> laoreet. Pellentesque venenatis in tortor vitae rutrum. Nam
                                quis facilisis felis.</p>
                        </div>
                    </section>


                    <section class="form-mid-block">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input check-text">
                                        I would like to combine old loans
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        I am applying with a co-applicant
                                    </label>
                                </div>
                            </div>

                        </div>

                    </section>


                    <div class="down-block">
                        <section class="block-1">
                            <h6 class="down-cont-head">PERSONAL AND CONTACT INFORMATION</h6>

                            <div class="row">
                                <div class="col-md-4 col-xs-12">
                                    <div><input required="required" name="ssn" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0 block-box"
                                                id="inlineFormInput" placeholder="Henkilötunnus"></div>
                                    <div><input name="bank_account" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0 block-box"
                                                id="inlineFormInput" placeholder="Tilinumero"></div>
                                    <div><input name="phone" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0 block-box"
                                                id="inlineFormInput" placeholder="puhelin"></div>
                                    <select name="marital_status" class="form-control" id="exampleSelect1">
                                        <option value="" disabled="disabled" selected="selected">Marital
                                                    status</option>
                                        <option value="Married">Married</option>
                                        <option value="Cohabitation">Cohabitation</option>
                                        <option value="Unmarried">Unmarried</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widow">Widow</option>
                                    </select>


                                </div>

                                <div class="col-md-4 col-xs-12">
                                    <div><input name="first_name" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0 block-box"
                                                id="inlineFormInput" placeholder="Etunimi"></div>
                                    <div><input name="last_name" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0 block-box"
                                                id="inlineFormInput" placeholder="Sukunimi"></div>
                                    <div><input name="address" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0 block-box"
                                                id="inlineFormInput" placeholder="Katuosoite"></div>
                                    <select name="house_hold_people" class="form-control" id="exampleSelect1">
                                        <option value="" disabled="disabled" selected="selected">Children</option>
                                        <option value="None">None</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="More then 6">More then 6</option>
                                    </select>

                                </div>

                                <div class="col-md-4 col-xs-12">
                                    <div><input name="zipcode" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0 block-box"
                                                id="inlineFormInput" placeholder="Postinumero"></div>
                                    <div><input name="pobox" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0 block-box"
                                                id="inlineFormInput" placeholder="Postitoimipaikka"></div>
                                    <div><input name="email" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0 block-box"
                                                id="inlineFormInput" placeholder="Sähköpostiosoite"></div>
                                </div>
                            </div>
                        </section>
                    </div>


                    <div class="down-block">

                        <h6 class="down-cont-head">EMPLOYMENT AND HOUSINGN</h6>

                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <select name="employment_type" class="form-control block-box" id="exampleSelect1">
                                    <option value="" disabled="disabled" selected="selected">Employee</option>
                                    <option value="Forced">Forced</option>
                                    <option value="Temporary">Temporary</option>
                                    <option value="Project Worker">Project Worker</option>
                                    <option value="Entrepreneur">Entrepreneur</option>
                                    <option value="Unemployed">Unemployed</option>
                                    <option value="Pensioner">Pensioner</option>
                                    <option value="Student">Student</option>
                                </select>

                                <select name="education_level" class="form-control block-box" id="exampleSelect1">
                                    <option value="" disabled="disabled" selected="selected">Training</option>
                                    <option value="Primary School">Primary School</option>
                                    <option value="High School">High School</option>
                                    <option value="Vocational School">Vocational School</option>
                                    <option value="Bachelors Degree">Bachelors Degree</option>
                                    <option value="Master Degree">Master Degree</option>
                                </select>

                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                                    <select name="apartment_type" class="form-control block-box" id="exampleSelect1">
                                        <option value="" disabled="disabled" selected="selected">Type of home</option>
                                        <option value="Own">Own</option>
                                        <option value="Asumisoikeus">Asumisoikeus</option>
                                        <option value="Fractional Ownership">Fractional Ownership</option>
                                        <option value="Rental">Rental</option>
                                        <option value="At parents">At parents</option>
                                    </select>
                                </div>

                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                                    <select name="accomodation_type" class="form-control block-box" id="exampleSelect1">
                                        <option value="" disabled="disabled" selected="selected">Accommodation</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                    </div>


                </div>


                <div class="down-block">
                    <p class="form-buttom">Do you have any loans / credit cards</p>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <select name="credit_cards" class="form-control" id="exampleSelect1">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" required="required">
                                    I agree with the general terms and conditions
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" required="required">
                                    Consent to the transfer of data
                                </label>
                            </div>

                        </div>
                    </div>

                </div>
                {!! csrf_field() !!}
                <input class="btn btn-bg-submit" type="submit" value="send">

                <div class="form-ex-button-bg">
                    <div>
                        <div class="button-form-cont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                            imperdiet a ante<br> mattis laoreet. Pellentesque venenatis in tortor vitae rutrum. Nam quis
                            facilisis felis.
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <!-----------------------------------------form end------------------------------------------->
        <div class="col-md-6">
            <section class="up-cont">
                <h2 class="up-cont-head">about us</h2>
                <p class="up-about">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Vivamus tristique at
                    odio Quisque<br> dictum lectus quis lobortis aliquet.</p>
                <p class="up-about-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Vivamus tristique at
                    odio Quisque dictum lectus quis lobortis<br> aliquet.Lorem ipsum dolor sit amet</p>

                <button class="btn btn-primary about-us-btn" type="submit">about us<i class="fa fa-caret-right"
                                                                                      aria-hidden="true"></i>
                </button>

                <img class="about-us-img img-responsive" src="img/docu_img_1.jpg" alt="img-1">

            </section>
        </div>

        <div class="col-md-6">
        </div>


    </div>

</div>


<div class="site-mid-bg-1">

    <div class="container">
        <section class="service-block">
            <h2 class="service-head">financial advisor service</h2>
            <p class="service-sub-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </section>


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">

                    <div class="row">
                        <div class="col-md-4">
                            <section class="planing-block">
                                <img src="img/docu_img_2.jpg" alt="img-3">
                                <div class="planing-block-bg">
                                    <h4 class="palning-head">investment planing</h4>
                                    <p class="palning-cont">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vivamus tristique at odio eget consequat. Curabitur sit amet ante </p>

                                    <a href="#" class="more">show more<i class="fa fa-caret-right"
                                                                         aria-hidden="true"></i></a>
                                </div>
                            </section>
                        </div>

                        <div class="col-md-4">
                            <section class="planing-block">
                                <img src="img/Untitled-3.jpg" alt="img-3">
                                <div class="planing-block-bg">
                                    <h4 class="palning-head">investment planing</h4>
                                    <p class="palning-cont">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vivamus tristique at odio eget consequat. Curabitur sit amet ante </p>

                                    <a href="#" class="more">show more<i class="fa fa-caret-right"
                                                                         aria-hidden="true"></i></a>
                                </div>
                            </section>
                        </div>

                        <div class="col-md-4">
                            <section class="planing-block">
                                <img src="img/Untitled-4.jpg" alt="img-5">
                                <div class="planing-block-bg">
                                    <h4 class="palning-head">investment planing</h4>
                                    <p class="palning-cont">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vivamus tristique at odio eget consequat. Curabitur sit amet ante </p>

                                    <a href="#" class="more">show more<i class="fa fa-caret-right"
                                                                         aria-hidden="true"></i></a>
                                </div>
                            </section>
                        </div>
                    </div>


                </div>


                <div class="item">

                    <div class="row">
                        <div class="col-md-4">
                            <section class="planing-block">
                                <img src="img/docu_img_2.jpg" alt="img-3">
                                <div class="planing-block-bg">
                                    <h4 class="palning-head">investment planing</h4>
                                    <p class="palning-cont">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vivamus tristique at odio eget consequat. Curabitur sit amet ante </p>

                                    <a href="#" class="more">show more<i class="fa fa-caret-right"
                                                                         aria-hidden="true"></i></a>
                                </div>
                            </section>
                        </div>

                        <div class="col-md-4">
                            <section class="planing-block">
                                <img src="img/Untitled-3.jpg" alt="img-3">
                                <div class="planing-block-bg">
                                    <h4 class="palning-head">investment planing</h4>
                                    <p class="palning-cont">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vivamus tristique at odio eget consequat. Curabitur sit amet ante </p>

                                    <a href="#" class="more">show more<i class="fa fa-caret-right"
                                                                         aria-hidden="true"></i></a>
                                </div>
                            </section>
                        </div>

                        <div class="col-md-4">
                            <section class="planing-block">
                                <img src="img/Untitled-4.jpg" alt="img-5">
                                <div class="planing-block-bg">
                                    <h4 class="palning-head">investment planing</h4>
                                    <p class="palning-cont">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vivamus tristique at odio eget consequat. Curabitur sit amet ante </p>

                                    <a href="#" class="more">show more<i class="fa fa-caret-right"
                                                                         aria-hidden="true"></i></a>
                                </div>
                            </section>
                        </div>
                    </div>


                </div>


            </div>


        </div>

        <!-- Controls -->

    </div>


</div>
</div>


<!--logo scrool start-------------------->


<div class="container">
    <h3 class="partner-header">OUR PARTNERS </h3>
    <p class="partner-cont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique at odio<br> eget
        consequat. Curabitur sit</p>

    <div class="logos-block">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active dot"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class="dot"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class="dot"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-2 col-sm-2">
                                    <img class="img-responsive" src="img/logo1.jpg" alt="logo-1">
                                </div>
                                <div class="col-xs-2 col-sm-2">
                                    <img class="img-responsive" src="img/logo2.jpg" alt="logo-1">
                                </div>
                                <div class="col-xs-2 col-sm-2">
                                    <img class="img-responsive" src="img/logo3.jpg" alt="logo-1">
                                </div>
                                <div class="col-xs-2 col-sm-2">
                                    <img class="img-responsive" src="img/logo4.jpg" alt="logo-1">
                                </div>
                                <div class="col-xs-2 col-sm-2">
                                    <img class="img-responsive" src="img/logo5.jpg" alt="logo-1">
                                </div>
                                <div class="col-xs-2 col-sm-2">
                                    <img class="img-responsive" src="img/logo6.jpg" alt="logo-1">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="item">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-2 col-xs-2">
                                    <img class="img-responsive" src="img/logo1.jpg" alt="logo-1">
                                </div>
                                <div class="col-sm-2 col-xs-2">
                                    <img class="img-responsive" src="img/logo2.jpg" alt="logo-1">
                                </div>
                                <div class=" col-sm-2 col-xs-2">
                                    <img class="img-responsive" src="img/logo3.jpg" alt="logo-1">
                                </div>
                                <div class="col-sm-2 col-xs-2">
                                    <img class="img-responsive" src="img/logo4.jpg" alt="logo-1">
                                </div>
                                <div class="col-sm-2 col-xs-2">
                                    <img class="img-responsive" src="img/logo5.jpg" alt="logo-1">
                                </div>
                                <div class="col-sm-2 col-xs-2">
                                    <img class="img-responsive" src="img/logo6.jpg" alt="logo-1">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>

<div class="consul-bg">
    <section class="container">
        <div class="row">
            <section class="con-block">
                <div class="col-md-8"><p class="consul-con">our advice is dedicated to the prosparity of our
                        clients!</p></div>
                <div class="col-md-4">
                    <button class="consultation">get consultetion now</button>
                </div>
            </section>
        </div>
    </section>
</div>


<!--footer start------------------>

<footer class="footer-bg">
    <div class="container footer-block">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="logo-footer">logo hare</a>
                <p class="logo-foot-cont">Financial Advisor is a leading advise company. Our trademark is financial
                    services that combine a high degree of professional with a deep understanding of our clients’ needs.
                    Lacus donec aliquam sodales orci eget convallis mauris tempor id leo massa euismod id nisl eu
                    molestie erat.</p>
            </div>
            <div class="col-md-3">
                <h6 class="logo-footer">Contact us</h6>
                <ul class="footer-add">
                    <li class="clearfix">
                        <div class="icon-foot"><i class="fa fa-map-marker mark-style" aria-hidden="true"></i></div>
                        <div class="footer-mark foot-foot">Street Name &<br> Number, Town,<br> Postcode/Zip</div>
                    </li>
                    <li class="clearfix">
                        <div class="icon-foot"><i class="fa fa-phone mark-style" aria-hidden="true"></i></div>
                        <div class="foot-foot">+00 (123) 456 7890<br>
                            +00 (123) 456 7890
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="icon-foot"><i class="fa fa-envelope-o mark-style" aria-hidden="true"></i></div>
                        <div class="foot-foot">info@financialadvisor.com</div>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">
                <h6 class="logo-footer">Services</h6>
                <ul class="footer-add1">
                    <li><a href="#">Investment</a></li>
                    <li><a href="#">Planning</a></li>
                    <li><a href="#">Financial Planing</a></li>
                    <li><a href="#">Tax Planning </a></li>
                    <li><a href="#">Retirement</a></li>
                    <li><a href="#">Estate Planning</a></li>
                    <li><a href="#">Life Events</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6 class="logo-footer">Free Financial Tips & Hints</h6>
                <p class="mail-foot">Would you like to receive an<br> award winning FREE <br>quarterly financial tips
                    and<br> hints newsletter?</p>
                <div class="form-group">
                    <input type="email" class="form-control from-mail" id="exampleInputEmail1"
                           placeholder="Email address">
                </div>

                <button class="submit" value="submit">submit</button>
            </div>
        </div>

    </div>


    <div>
        <h5 class="social">We are social</h5>
        <div class="social-icons">
            <a href="#"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus-official fa-2x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-info-circle fa-2x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
        </div>
    </div>

    <div class="copyright-bg">
        <p class="copyright">© 2016 Insight Financial Advisor. All rights reserved.</p>
    </div>


</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>