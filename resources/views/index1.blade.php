<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/functions.js"></script>


    <title>Zend Finance</title>
    <meta name="description" content="Kilpailuta lainasi aina 50000 euroon asti – valitse halvin laina ja säästä jopa tuhansia euroja!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                ZEND FINANCE – KILPAILUTA LAINASI ILMAISEKSI
            </div>
        </div>
    </div>
</div>

<div class="section__1">

    <nav>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 logo-container">
                    <span id="logo">ZEND</span>
                    <span id="underlogo">FINANCE</span>
                </div>
                <!--
                <div class="col-sm-8 col-xs-12 menu">
                    <a href="#" class="menu-item">Menu item</a>
                    <a href="#" class="menu-item">Menu item</a>
                    <a href="#" class="menu-item">Menu item</a>
                    <a href="#" class="menu-item">Menu item</a>
                </div>
                -->
                <div class="col-xs-12">
                    <span class="grey-line"></span>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-5 section__1__left">
                <h2>HAE EDULLISINTA LAINAA</h2>
                <h4 style="font-weight:400">Zend Finance kilpailuttaa puolestasi 22 pankkia ja rahoituslaitosta – ilmaiseksi.</h4>
                <span id="nopea-hakemus"><i class="fa fa-clock-o orange" aria-hidden="true"></i> 3 MIN HAKEMUS</span>
            </div>
            <div class="col-xs-12 col-md-7">
                <form action="{{Route('loanstore')}}" method="POST">
                <div class="form">
                    <span class="form__title">LAINAHAKEMUS</span>
                    <span class="blue-line"></span>
                    <span id="form__desc">Hakemuksen täyttäminen on ilmaista. Hakemus ei sido hakijaa mihinkään.</span>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-sm-6 col-xs-12 form__sum_title">
                                <span>LAINASUMMA</span>
                                <div id="sum-slider"></div>
                                <div class="slider-help">
                                    <i class="fa fa-2x fa-minus-circle" aria-hidden="true"></i>
                                    <input readonly required="required" name="amount" value="2000 €" type="text" id="sum-input">
                                    <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12 form__sum_title">
                                <span>LAINA-AIKA</span>
                                <div id="time-slider"></div>
                                <div class="slider-help">
                                    <i class="fa fa-2x fa-minus-circle" aria-hidden="true"></i>
                                    <input readonly value="3v" required="required"  name="period" type="text" id="time-input">
                                    <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="form__monthly_container">
                        <span id="form__monthly_container_sum">Kuukausierä*: 44&nbsp;€&nbsp;/&nbsp;kk</span>
                        <span id="form__monthly_container_desc">Esimerkki lainakustannuksista: Nimelliskorko 10,4%, Todellinen vuosikorko 10,91%, Tilinhoitomaksut 0€. Aloitus- ja kuukausikulut 0€, Korkokulut 3589€, Kokonaiskulut 13889€. Tarjottava laina-aika vaihtelee 1-15 vuoden välillä. Lainojen todellinen vuosikorko on minimissään 4,5 % ja maksimissaan 50,5%.</span>
                    </div>
                    <div class="row form__checkboxes">
                        <div class="col-xs-6">
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="oldloans"> Yhdistän vanhoja lainoja</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="yhteishakija"> Haen yhteishakijan kanssa</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="blue-line"></span>
                    <span class="form__title_left">HENKILÖ- JA YHTEYSTIEDOT</span>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-xs-12 col-sm-6 col-md-4 form__textinput">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="ssn" required="required" name="ssn" placeholder="Sosiaaliturvatunnus">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 form__textinput">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="iban" name="bank_account" placeholder="Tilinumero (IBAN)">
                    -            </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 form__textinput">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Puhelinnumero">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 form__textinput">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="firstname" name="first_name" placeholder="Etunimi">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 form__textinput">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="lastname" name="last_name" placeholder="Sukunimi">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 form__textinput">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="streetaddress" name="address" placeholder="Katuosoite">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 form__textinput">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Postinumero">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 form__textinput">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="city" name="pobox" placeholder="Postitoimipaikka">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 form__textinput">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Sähköpostiosoite">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 form__textinput">
                                <div class="form-group">
                                    <select class="form-control" id="maritalstatus" name="marital_status">
                                        <option>Siviilisääty</option>
                                        <option>Naimisissa</option>
                                        <option>Avoliitto</option>
                                        <option>Naimaton</option>
                                        <option>Eronnut</option>
                                        <option>Leski</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 form__textinput">
                                <div class="form-group">
                                    <select class="form-control" id="maritalstatus" name="house_hold_people">
                                        <option>Lapsia taloudessa..</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>Enemmän kuin 5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="blue-line"></span>
                    <span class="form__title_left">TYÖ JA ASUMINEN</span>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-xs-12 col-sm-6 col-md-4 form__textinput">
                                <div class="form-group">
                                    <select class="form-control" id="maritalstatus" name="employment_type">
                                        <option>Työsuhde..</option>
                                        <option>Vakinainen</option>
                                        <option>Määräaikainen</option>
                                        <option>Projektityöntekijä</option>
                                        <option>Yrittäjä</option>
                                        <option>Työtön</option>
                                        <option>Eläkeläinen</option>
                                        <option>Opiskelija</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 form__textinput">
                                <div class="form-group">
                                    <select class="form-control" id="maritalstatus" name="education_level">
                                        <option>Koulutus..</option>
                                        <option>Peruskoulu</option>
                                        <option>Lukio</option>
                                        <option>Ammattikoulu</option>
                                        <option>Alempi korkeakoulututkinto</option>
                                        <option>Ylempi korkeakoulututkinto</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 form__textinput">
                                <div class="form-group">
                                    <select name="apartment_type" class="form-control" id="maritalstatus">
                                        <option>Asumismuoto..</option>
                                        <option>Oma</option>
                                        <option>Asumisoikeus</option>
                                        <option>Osaomistus</option>
                                        <option>Vuokra</option>
                                        <option>Vanhempien luona</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 form__textinput">
                                <div class="form-group">
                                    <select name="accomodation_type" class="form-control" id="maritalstatus">
                                        <option>Loma-asunto..</option>
                                        <option>Kyllä</option>
                                        <option>Ei</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form__checkboxes">
                        <div class="col-xs-6">
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="acceptterms" required="required"> Hyväksyn yleiset ehdot (Lainatuotteet)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="acceptgiveinfoaway" required="required"> Suostumus tietojen luovutukseen</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="form__send" class="btn btn-bg-submit" type="submit">LÄHETÄ <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                    {!! csrf_field() !!}
                    <span id="form__bottom_desc">Esimerkki lainakustannuksista: Nimelliskorko 10,4%, Todellinen vuosikorko 10,91%, Tilinhoitomaksut 0€. Aloitus- ja kuukausikulut 0€, Korkokulut 3589€, Kokonaiskulut 13889€. Tarjottava laina-aika vaihtelee 1-15 vuoden välillä. Lainojen todellinen vuosikorko on minimissään 4,5 % ja maksimissaan 50,5%.</span>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>

<div class="section__2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-3 col-xs-12 section__2__left">
                <h3>Kilpailuta lainat helposti</h3>
                <br>
                <h5>Zend Finance -lainahakemus on helppo ja nopea tapa hakea markkinoiden edullisinta lainaa. Lainahakemuksesi käsitellään välittömästi, ja saat lainatarjoukset sähköpostiisi minuuteissa.</h5>
                <br>
                <h5><i class="fa fa-check orange" aria-hidden="true"></i> 100 % ilmainen</h5>
                <h5><i class="fa fa-check orange" aria-hidden="true"></i> SSL-suojattu, turvallinen hakemus</h5>
                <h5><i class="fa fa-check orange" aria-hidden="true"></i> Yhdellä hakemuksella 22 tarjousta</h5>
                <br>
                <img src="img/laptop.PNG" class="photo hidden-sm hidden-xs">
            </div>
        </div>
    </div>
</div>

<div class="section__3">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>1 HAKEMUS – JOPA 22 LAINATARJOUSTA</h2>
                <p>Yhteistyössä mm.</p>
                <br>
                <div class="col-xs-4 col-sm-2">
                    <img src="img/logo1.jpg">
                </div>
                <div class="col-xs-4 col-sm-2">
                    <img src="img/logo2.jpg">
                </div>
                <div class="col-xs-4 col-sm-2">
                    <img src="img/logo3.jpg">
                </div>
                <div class="col-xs-4 col-sm-2">
                    <img src="img/logo4.jpg">
                </div>
                <div class="col-xs-4 col-sm-2">
                    <img src="img/logo5.jpg">
                </div>
                <div class="col-xs-4 col-sm-2">
                    <img src="img/logo6.jpg">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section__4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-12">
                    Lainahakemuksen täyttäminen ei sido sinua mihinkään. Tietosi käsitellään 100 % luottamuksellisesti. Hakemusjärjestelmä on suojattu pankkimaisella SSL-suojauksella.
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-sm-3 col-xs-12">
                    <h4>ZEND FINANCE</h4>
                    <p>Rekisteriseloste</p>
                    <p>Sopimusehdot</p>
                    <p>Sivuston käyttöehdot</p>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <h4>KILPAILUTA LAINASI</h4>
                    <p>Zend Finance on riippumaton, 100 % suomalainen lainavertailu. Kilpailutamme lainahakemuksesi jopa 22 pankissa ja rahoituslaitoksessa. Hakemus ei sido sinua mihinkään – voit tarkastella tarjouksia ja päättää sitten, haetko lainaa.</p>
                </div>
                <div class="col-sm-3 col-xs-12">
                </div>
                <div class="col-sm-3 col-xs-12">
                    <p>Zend Finance 2017 – Kaikki oikeudet pidätetään</p>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>