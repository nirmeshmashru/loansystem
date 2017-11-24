<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title>Title</title>

    <link
            rel="stylesheet"
            href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
            integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
            crossorigin="anonymous">
    <link href="{{asset('v2/assets/css/animate.css/animate.min.css')}}" rel="stylesheet">
    <!--<link-->
    <!--rel="stylesheet"-->
    <!--href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <link rel="stylesheet" type="text/css" href="{{asset("v2/assets/css/styles.min.css")}}"/>
<!-- Start of terminushelp Zendesk Widget script -->
<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="terminushelp.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();
/*]]>*/</script>
<!-- End of terminushelp Zendesk Widget script -->
</head>
<body class="bg-img-1">


<header class="bg-w w-100 ff-SFNSD">
    <div class="container h2 p-3 text-info"><a>Etusivu</a><a style="padding-left: 22px;">Yritys</a><a style="padding-left: 22px;">Yhteystiedot</a></div>
</header>
<div class="body container">
    <form action="{{Route('loanstore')}}" method="POST" name="loanForm" id="loanForm" novalidate>
        {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6 col-12 block_1_1 pb-4">

            <div class="h3 text-info ff-SFNSD">
           VAKUUDETON LAINA AINA 50 000€ ASTI 
            </div>
            <div class="h5 ff-ASUF">
                <p>Lainakonttori kilpailuttaa pankit ja rahoituslaitokset puolestasi.</p> <p>Kauttamme tarpeisiisi ja olosuhteisiisi parhaiten istuvat lainatarjoukset maksutta. Yhdellä hakemuksella vaivatta. </p>
            </div>
            <table class="ff-ASUF text-muted w-100">
                <tr>
                    <td width="100px">
                        <div class="circle c-active bg-active"><span class="ff-SFNSD text-white h3">1</span></div>
                        <div class="stovbnjak bg-active"></div>
                    </td>
                    <td width="*">
                        <p class="h4 text-info">VALITSE LAINASUMMA JA TAKAISINMAKSUAIKA </p>
                        <p class="h6 ff-ASUF">
                           Lainasumman perusteella käyttöösi avautuu räätäköity hakemuslomake. Täytä lomake huolellisesti. 
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="stovbnjak bg-muted"></div>
                        <div class="circle bg-muted"><span class="ff-SFNSD text-white h3">2</span></div>

                        <div class="stovbnjak bg-muted"></div>
                    </td>
<td>
<p class="h4 text-info">VERTAILE LAINATARJOUKSIA</p>
                        <p class="h6 ff-ASUF">
                            Lainahakemuslomakkeen täytöstä 24 tunnin sisällä saat eri lainatarjouksia pankeilta ja rahoituslaitoksilta. Vertaile ehtoja huolellisesti.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="stovbnjak bg-muted"></div>
                        <div class="circle bg-muted"><span class="ff-SFNSD text-white h3">3</span></div>
                    </td>
                    <td>
                        <p class="h4 text-info">HYVÄKSY PARAS TARJOUS</p>
                        <p class="h6 ff-ASUF">
                           Hyväksy mieluisin seuraamalla tarjouksessa olevia ohjeita. Rahat saat nostettua tilillesi yleensä välittömästi lainatarjouksen hyväksymisen jälkeen.  
                        </p>
                    </td>
                </tr>
            </table>
            <div class="custom-border" style="display: none">
            </div>
        </div>
        <div class="col-md-6 col-12 block_1_2 bg-w border-bottom" id="border-bottom">
            <div class="mt-4 h3 ff-SFNSD text-info text-center">TÄYTÄ ILMAINEN LAINAHAKEMUS 
SAAT LAINATARJOUKSEN HETI  
            </div>
            <hr style="width: 240px">
            <div id="slider1" class="block_1_2_">
                <div class="form-group d-flex justify-content-between row">
                    <label class="col-4 align-self-center">Lainasumma:</label>
                    <input class="col-5 align-self-center value" type="text" name="amount" required="required"/>
                    <div class=" col-3 unit h3 align-self-center text-info ff-SFNSD">euroa</div>
                </div>
                <div class="choice d-flex justify-content-between row">
                    <label class=" col-2 from">500€</label>
                    <div class="col-8 slide align-self-center"></div>
                    <label class="col-2 to">50000€</label>
                </div>
            </div>
            <div id="slider2" class="block_1_2_">
                <div class="form-group d-flex justify-content-between row">
                    <label class="col-4 align-self-center">Laina-aika:</label>
                    <input class="col-5 align-self-center value" type="text" name="period" required="required"/>
                    <div class="col-3 unit h3 align-self-center text-info ff-SFNSD">vuotta</div>
                </div>
                <div class="choice d-flex justify-content-between row">
                    <label class="col-2 from align-self-center">1 vuosi</label>
                    <div class="col-8 slide align-self-center"></div>
                    <label class="col-2 to align-self-center">15 vuotta</label>
                </div>
            </div>
            <div class="block_1_2_">
                <div class="title d-flex justify-content-between row">
                    <label class="col-4 align-self-center">Kuukausierä*:</label>
                    <input class="col-5 align-self-center value bg-blue" value="475" type="text" name="monthly_payment" required="required"/>
                    <div class="col-3 unit h3 align-self-center text-info ff-SFNSD">euroa</div>
                </div>
                <div class="title d-flex justify-content-between row">
                    <label class="col-4 align-self-center">Kulut & korot*:</label>
                    <input class="col-5 align-self-center value bg-blue" value="475" type="text" name="cost_and_interest" required="required"/>
                    <div class="col-3 unit h3 align-self-center text-info ff-SFNSD">euroa</div>
                </div>
            </div>
                <div class="item form-group input-text">
                    <label class="h4 text-info">Sähköpostiosoite:</label>
                    <input class="required" name="from_email" placeholder="test@gmail.com" type="text" id="from_email" />
                </div>
                <div class="item form-group input-text item">
                    <label class="h4 text-info">Matkapuhelin:</label>
                    <input class="required" name="from_phone" placeholder="000000" type="text" id="from_phone"/>
                </div>
                {{--<div class="col-md-12 pull-right" >
                    <button class="btn btn-primary" type="button" onclick="$('#MainDiv').show(),$('#myBtn').hide()">Aloita lainahakemus</button>
                </div>--}}
                <div class="w-100 text-center" id="myBtn">
                    <a href="javascript:void(0)" onclick="openApplicationForm()">
                        <img src="v2/src/img/button.png" >
                    </a>
                </div>
                <div class="w-100 text-center pb-4">
                    <img src="v2/src/img/Bitmap.png">
                </div>
                <div class="h6 ff-ASUF text-muted">
                    Hakemukset välitetään Lainakonttorin yhteistyökumppaneille, jotka ovat pankkeja ja luvanvaraisia rahoituslaitoksia. .
                    <p class="mt-2 mb-2 text-black">
                        *Kuukausierä on laskettu 10,90 % esimerkkikorolla
                    </p>
                    Esimerkkilaskelma: Todellinen vuosikorko on 13,12 %, kun lainasumma on 10 000 €, takaisinmaksuaika on 5 vuotta, tilinhoitomaksu 5 €, avausmaksu 150 € ja esimerkkikorko 10,9 %. Takaisinmaksettava summa on tällöin 13 465 €, eli 216,93 €/kk.
                    <br>
                    <br>
                    Todellinen vuosikorko maks. 4,9–50 %. Laina-aika 1–15 vuotta.
                 
                    
                </div>
                <div class="m-3">
                    <img src="v2/src/img/Shape.png">
                    <span class="h6 m-2 text-muted">09 123456789</span>
                </div>


        </div>
        <div class="girl hidden-sm-down">
            <img src="v2/src/img/Bitmap1.png">
        </div>
    </div>
    <div class="block_2 bg-w p-3" style="display: none" id="MainDiv">
        <section>
            <div class="h3 text-info">1. Henkilötiedot</div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Sähköpostiosoite</label>
                    <input type="text" class="w-100" name="email" id="email"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Etunimi</label>
                    <input type="text" name="first_name"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Sukunimi</label>
                    <input type="text" name="last_name"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Henkilötunnus</label>
                    <input type="text" name="ssn"/>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 item">
                    <label>Siviilisääty</label>
                    <select class="required" name="marital_status" >
                        <option value="">-Valitse-</option>
                        <option value="Naimisissa">Naimisissa</option>
                        <option value="Avoliitto">Avoliitto</option>
                        <option value="Naimaton">Naimaton</option>
                        <option value="Eronnut">Eronnut</option>
                        <option value="Leski">Leski</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Lapsien määrä</label>
                    <select name="no_of_children">
                        <option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Aikuisten määrä taloudessa</label>
                    <select name="no_of_adults">
                        <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Kansalaisuus</label>
                    <select name="citizenship" >
                        <option value="">-Valitse-</option><option value="1">Suomi</option><option value="2">Muu</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="any_politically_influential">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description h4 text-info">Minä tai perheenjäseneni on poliittisesti vaikutusvaltaisessa asemassa.</span>
                    </label>
                </div>
            </div>
        </section>
        <section>
            <div class="h3 text-info">2. Asuminen & yhteystiedot</div>
            <div class="row form-group">
                <div class="item col-12 col-md-6 col-lg-3 input-text">
                    <label>Osoite</label>
                    <input type="text" class="required" name="address"/>
                </div>
                <div class="item col-12 col-md-6 col-lg-3 input-text">
                    <label>Postinumero</label>
                    <input type="text" class="required" name="zipcode"/>
                </div>
                <div class="item col-12 col-md-6 col-lg-3 input-text">
                    <label>Postitoimipaikka</label>
                    <input type="text" name="pobox" class="required"/>
                </div>
                <div class="name col-12 col-md-6 col-lg-3 select-custom">
                    <label>Asumismuoto</label>
                    <select name="accomodation_type" class="required">
                        <option value="NotSpecified">-Valitse-</option><option value="OwnProperty">Oma asunto</option><option value="Tenant">Asumisoikeusasunto / Osa-omistus</option><option value="MunicipalTenancy">Kunnan vuokra-asunto</option><option value="PrivateTenancy">Yksityinen vuokra-asunto</option><option value="WithParents">Vanhempien luona</option><option value="Lodger">Muu</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="item col-12 col-md-6 col-lg-3 input-text">
                    <label>(Matka-)puhelin</label>
                    <input type="text" name="phone" id="phone" class="required"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Asunnon tyyppi</label>
                    <select name="apartment_type">
                        <option value="">-Valitse-</option><option value="1">Omakotitalo</option><option value="2">Erillistalo</option><option value="3">Paritalo</option><option value="4">Rivitalo</option><option value="5">Kerrostalo</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Asunnon pinta-ala (m2)</label>
                    <input type="text" name="apartment_size"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text item">
                    <label>Muuttoajankohta</label>
                    <input type="text" name="moving_time" class="required"/>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="summer_cottage">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description h4 text-info">Minulla on kesäasunto / mökki</span>
                    </label>
                </div>
            </div>
        </section>
        <section>
            <div class="h3 text-info">3. Koulutus & työ</div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Koulutus</label>
                    <select name="education_level">
                        <option value="">-Valitse-</option><option value="Peruskoulu">Peruskoulu</option><option value="Lukio">Lukio</option><option value="Ammattikoulu/Opisto">Ammattikoulu/Opisto</option><option value="KorkeakouluAlempi">Alempi korkeakoulututkinto</option><option value="KorkeakouluYlempi">Ylempi korkeakoulututkinto</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Työsuhde</label>
                    <select name="employment_type">
                        <option value="">-Valitse-</option><option value="WorkerPermanent">Työntekijä (vakituinen)</option><option value="WorkerTemporary">Työntekijä (määräaikainen)</option><option value="PartTime">Osa-aikainen</option><option value="SelfEmployed">Yrittäjä</option><option value="Pensioner">Eläkeläinen</option><option value="Student">Opiskelija</option><option value="Unemployed">Työtön</option><option value="Misc">Muu</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Y-tunnus (Tarkista YTJ:stä »)</label>
                    <input type="text" class="" name="business_id"/>
                </div>
                {{--<div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>(Matka-)puhelin</label>
                    <select>
                        <option value="default">-Valitse-</option>
                    </select>
                </div>--}}
            </div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 input-text item">
                    <label>Bruttopalkka kuukaudessa
                        <div class="h7">(ennen veroja)</div>
                    </label>
                    <input type="text" name="gross_monthly_income" class="required"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text item">
                    <label>Nettopalkka kuukaudessa
                        <div class="h7">(verojen jälkeen)</div>
                    </label>
                    <input type="text" name="net_monthly_income" class="required"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text item">
                    <label>Muut tulot kuukaudessa
                        <div class="h7">&nbsp;</div>
                    </label>
                    <input type="text" name="other_income_per_month" class="required"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text item">
                    <label>Muiden tulojen lähde
                        <div class="h7">&nbsp;</div>
                    </label>
                    <input type="text" name="source_of_other_income" class="required"/>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 input-text item">
                    <label>Työsuhde</label>
                    <input type="text" name="employer" class="required"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
            </div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Työsuhde alkanut</label>
                    <select name="employment_start_time">
                        <option value="">-kuukausi-</option><option value="1">tammikuu</option><option value="2">helmikuu</option><option value="3">maaliskuu</option><option value="4">huhtikuu</option><option value="5">toukokuu</option><option value="6">kesäkuu</option><option value="7">heinäkuu</option><option value="8">elokuu</option><option value="9">syyskuu</option><option value="10">lokakuu</option><option value="11">marraskuu</option><option value="12">joulukuu</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>&nbsp;</label>
                    <select name="employment_start_time_year">
                        <option value="">-year-</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
            </div>
        </section>
        <section>
            <div class="h3 text-info">4. Velat & menot</div>
            <table>
                <thead>
                <tr>
                    <th>Velkaerittely</th>
                    <th>Yhteensä jäljellä</th>
                    <th>Lyhennys / kk</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>Asuntolaina</th>
                    <td class="input-text"><input type="text" value="0" name="mortage_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="mortage_month"/></td>
                    <td width="25%"></td>
                </tr>
                <tr>
                    <th>Kulutusluotot</th>
                    <td class="input-text"><input type="text" value="0" name="consumer_credit_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="consumer_credit_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Auto- ja venelainat</th>
                    <td class="input-text"><input type="text" value="0" name="boat_loan_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="boat_loan_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Luottokortti</th>
                    <td class="input-text"><input type="text" value="0" name="credit_card_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="credit_card_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Pikalainat</th>
                    <td class="input-text"><input type="text" value="0" name="quick_loan_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="quick_loan_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Takaukset</th>
                    <td class="input-text"><input type="text" value="0" name="guarantees_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="guarantees_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Maksettava elatusapu</th>
                    <td class="input-text"><input type="text" value="0" name="payabal_maintance_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="payabal_maintance_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Osamaksut</th>
                    <td class="input-text"><input type="text" value="0" name="installment_paln_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="installment_paln_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Muut velat</th>
                    <td class="input-text"><input type="text" value="0" name="other_debts_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="other_debts_month"/></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
            <label>
                <p class="h4 text-info">Mitä luottokortteja sinulla on?</p>
            </label>
            <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="credit_cards[]" value="Visa">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description h5 text-muted">Visa</span>
                    </label>
                    <img class="credit-img" src="v2/src/img/visa.png">
                </div>
                <div class="col-4 col-md-2">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="credit_cards[]" value="MasterCard">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description h5 text-muted">MasterCard</span>
                    </label>
                    <img class="credit-img" src="v2/src/img/mastercard.png">
                </div>
                <div class="col-4 col-md-2">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="credit_cards[]" value="American Express">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description h5 text-muted">American Express</span>
                    </label>
                    <img class="credit-img" src="v2/src/img/american-express-logo.png">
                </div>
                <div class="col-4 col-md-2">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="credit_cards[]" value="Diners Club">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description h5 text-muted">Diners Club</span>
                    </label>
                    <img class="credit-img" src="v2/src/img/dc.png">
                </div>
                <div class="col-4 col-md-2">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="credit_cards[]" value="Muita Kotteja">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description h5 text-muted">Muita Kotteja</span>
                    </label>
                    <img class="credit-img" src="v2/src/img/mk.png">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Asumiskulut €/kk
                        <div class="h7">(oma osuus numeroina)</div>
                    </label>
                    <input type="text" name="housing_cost_month"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Muut kulut €/kk
                        <div class="h7">(oma osuus numeroina)</div>
                    </label>
                    <input type="text" name="other_expenses_month"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Puolison kuukausitulot
                        <div class="h7">(Bruttopalkka ennen veroja)</div>
                    </label>
                    <input type="text" value="0" name="monthly_income_of_spouse"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Puolison kuukausimenot
                        <div class="h7">(puolison osuus numeroina)</div>
                    </label>
                    <input type="text" value="0" name="monthly_cost_of_spouse"/>
                </div>
            </div>
        </section>
        <section>
            <div class="h3 text-info">5. Pankkitiedot</div>
            <div class="row">
                <div class="col-12 col-md-7 col-lg-5  pankkitiedot-input item">
                    <label>Pankkitili (IBAN)</label>
                    <input type="text" placeholder="esim: f9890989057509676967404" name="bank_account" class="required"/>
                </div>
                <div class="col-10 col-md-4 col-lg-3 select-custom">
                    <label>BIC</label>
                    <select name="bic">
                        <option value="">-Valitse-</option><option value="HELSFIHH">Aktia Pankki | HELSFIHH</option><option value="CITIFIHX">Citibank | CITIFIHX</option><option value="DABAFIHH">Danske Bank | DABAFIHH</option><option value="HANDFIHH">Handelsbanken | HANDFIHH</option><option value="NDEAFIHH">Nordea Pankki | NDEAFIHH</option><option value="OMASP">OmaSp | OMASP</option><option value="OKOYFIHH">Osuuspankki / Pohjola | OKOYFIHH</option><option value="POPFFI22">POP | POPFFI22</option><option value="SBANFIHH">S-Pankki | SBANFIHH</option><option value="ITELFIHH">Säästöpankki | ITELFIHH</option><option value="ESSEFIHX">Skandinaviska Enskilda Banken | ESSEFIHX</option><option value="SWEDFIHH">Swedbank | SWEDFIHH</option><option value="TAPIFI22">Tapiola Pankki | TAPIFI22</option><option value="AABAFI22">Ålandsbanken | AABAFI22</option>
                    </select>
                </div>
            </div>
        </section>
        <section>
            <div class="h3 text-info">6. Yhteishakija</div>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" onclick="$(this).is(':checked')?$('#jointUserDiv').show():$('#jointUserDiv').hide()">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description h4 text-info">
                            Haen lainaa yhdessä toisen henkilön kanssa<br>
                            (Parantaa mahdollisuuksia saada lainaa matalalla korolla!)</span>
            </label>
            <div id="jointUserDiv" style="display: none">
            <p class="h4 text-info pt-3 pb-3">6.1 Yhteishakijan tiedot</p>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Etunimi</label>
                    <input type="text" name="joint_first_name"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Sukunimi</label>
                    <input type="text" class="" name="joint_last_name"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Henkilötunnus</label>
                    <input type="text" class="" name="joint_ssn"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Sähköpostiosoite</label>
                    <input type="text" class="" name="joint_email"/>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Puhelinnumero
                        <div class="h7">&nbsp;</div>
                    </label>
                    <input type="text" name="joint_phone"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Nettopalkka kuukaudessa
                        <div class="h7">(verojen jälkeen)</div>
                    </label>
                    <input type="text" name="joint_net_salary_per_month"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Koulutus
                        <div class="h7">&nbsp;</div>
                    </label>
                    <select name="joint_education_level">
                        <option value="">-Valitse-</option><option value="Peruskoulu">Peruskoulu</option><option value="Lukio">Lukio</option><option value="Ammattikoulu/Opisto">Ammattikoulu/Opisto</option><option value="KorkeakouluAlempi">Alempi korkeakoulututkinto</option><option value="KorkeakouluYlempi">Ylempi korkeakoulututkinto</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Työsuhde
                        <div class="h7">&nbsp;</div>
                    </label>
                    <select name="joint_employment_type">
                        <option value="">-Valitse-</option><option value="WorkerPermanent">Työntekijä (vakituinen)</option><option value="WorkerTemporary">Työntekijä (määräaikainen)</option><option value="PartTime">Osa-aikainen</option><option value="SelfEmployed">Yrittäjä</option><option value="Pensioner">Eläkeläinen</option><option value="Student">Opiskelija</option><option value="Unemployed">Työtön</option><option value="Misc">Muu</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Y-tunnus (Tarkista YTJ:stä »)</label>
                    <input type="text" name="joint_business_id"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
            </div>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description h4 text-info">
                            Yhteishakija tai yhteishakijan perheenjäsen on poliittisesti vaikutusvaltaisessa asemassa.
                        </span>
            </label>
            <p class="h4 text-info pt-4 pb-3">6.2 Velat & menot</p>
            <table>
                <thead>
                <tr>
                    <th>Yhteishakijan velat</th>
                    <th>Yhteensä jäljellä</th>
                    <th>Lyhennys / kk</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>Asuntolaina</th>
                    <td class="input-text"><input type="text" value="0" name="mortage_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="mortage_joint_month"/></td>
                    <td width="25%"></td>
                </tr>
                <tr>
                    <th>Kulutusluotot</th>
                    <td class="input-text"><input type="text" value="0" name="consumer_credit_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="consumer_credit_joint_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Auto- ja venelainat</th>
                    <td class="input-text"><input type="text" value="0" name="boat_loan_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="boat_loan_joint_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Luottokortti</th>
                    <td class="input-text"><input type="text" value="0" name="credit_card_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="credit_card_joint_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Pikalainat</th>
                    <td class="input-text"><input type="text" value="0" name="quick_loan_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="quick_loan_joint_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Takaukset</th>
                    <td class="input-text"><input type="text" value="0" name="guarantees_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="guarantees_joint_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Maksettava elatusapu</th>
                    <td class="input-text"><input type="text" value="0" name="payabal_maintance_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="payabal_maintance_joint_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Osamaksut</th>
                    <td class="input-text"><input type="text" value="0" name="installment_paln_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="installment_paln_joint_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Muut velat</th>
                    <td class="input-text"><input type="text" value="0" name="other_debts_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="other_debts_joint_month"/></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
            <p class="h4 text-info pt-4 pb-3">6.3 Yhteishakijan hyväksynnät</p>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="joint_venture_approval">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description h4 text-info">
                            Luotonmyöntäjät saavat hakea Suomen Asiakastieto Oy:n kyselyjärjestelmästä yhteishakijan tiedot. (Parantaa lainansaantimahdollisuuksia!)
                        </span>
            </label>
            </div>
        </section>
        <section>
            <div class="h3 text-info">7. Hyväksy lainahakemus</div>
            <div class="row form-group pb-3">
                <div class="col-10 col-md-4 col-lg-3 select-custom">
                    <label>Lainan käyttötarkoitus</label>
                    <select name="purpose_of_loan">
                        <option value="">-Valitse-</option><option value="Tuotteiden tai palveluiden ostaminen">Tuotteiden ja palveluiden ostaminen (ml. päivittäiset maksut)</option><option value="Muun kiinteistön (ei asuinkiinteistö) ostaminen">Muun kiinteistön (ei asuinkiinteistö) ostaminen omaan käyttöön</option><option value="Arvopapereiden ostaminen">Arvopapereiden ostaminen</option><option value="Yritystoiminta (tarkenna)">Yrityksen kaupallisen toiminnan aloittaminen</option><option value="REFIN_Yritystoiminta (tarkenna)">Yrityksen kaupallisen toiminnan laajentaminen</option><option value="Kodin ostaminen tai remontoiminen">Asunnon ostaminen/remontoiminen</option><option value="REFIN_Tuotteiden tai palveluiden ostaminen">Muun käyttöomaisuuden ostaminen (ml. ajoneuvot)</option><option value="Opiskelua varten">Opiskelun rahoittamista varten</option><option value="Jollekin toiselle henkilölle">Jollekin toiselle henkilölle</option><option value="Matkustaminen">Matkustaminen</option><option value="Yhdistelylaina">Lainojen yhdistäminen</option><
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
            </div>
            <label class="custom-control custom-checkbox item">
                <input type="checkbox" class="custom-control-input required" >
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description h4 text-info">
                            Hyväksyn Omalaina.fin yleiset palveluehdot.
                        </span>
            </label>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" required="required">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description h4 text-info">
                            Luotonmyöntäjät saavat hakea Suomen Asiakastieto Oy:n kyselyjärjestelmästä tietoni.
                        (Parantaa lainansaantimahdollisuuksia!)
                        </span>
            </label>

        </section>
        <div class="Hae-Nyt-button text-center">

            <input type="image" src="v2/src/img/button.png"/>

        </div>
    </div>
    </form>
</div>
<footer class="d-flax flex-column ff-ASUF">
    <div class=" w-100 about p-3">
        <div class="container row m-auto">
            <div class="col-12 col-md-6">
                <table class="h4 text-white">
                    <tr>
                        <td width="175px">HAKIJAN EDELLYTYKSET</td>
                        <td width="*">
                            <hr style="width: 100%">
                        </td>
                    </tr>
                </table>
                <p class="h6">
                - Ikä vähintään 20 vuotta <br>
                    - Säännölliset tulot <br>
                    - Ei maksuhäiriömerkintöjä <br>

                </p>


            </div>
            <div class="col-12 col-md-6">
                <table class="h4 text-white">
                    <tr>
                        <td width="95px">LISÄTIETOJA</td>
                        <td width="*">
                            <hr style="width: 100%">
                        </td>
                    </tr>
                </table>
                <p class="h6">
           Lainakonttori.fi tarjoaa lainanhakijoille nopean ja helpon tavan kilpailuttaa erilaisia luottoja tarjoavat yhtiöt. Palvelu on täysin maksuton eikä lainahakemuksen jättäminen velvoita mihinkään. Lainakonttorin kautta jätetyt lainahakemukset välitetään Lainakonttorin yhteistyökumppaneille, jotka ovat kotimaisia ja Euroopan talousalueella toimivia lisensoituja pankkeja ja rahoituslaitoksia.<a href="#"> 
Rekisteriseloste</a></span>
                </p>
            </div>
        </div>
        <img class="up-arrow" src="v2/src/img/up-arrow.png">

    </div>
    <div class="container copy-right w-100 bg-faded text-center p-3">
        <p class="h4 text-white">Ajankohtaista lainoista - Laina FAQ - Yrityslaina - Ota yhteyttä</p>
        <p class="h7">Terminus Brokers Oy  © 2017 | Fredrikinkatu 61, 6. krs  | 00100 Helsinki (Ei asiakaspalvelua) </p>
 <p class="h7">asiakaspalvelu@lainakonttori.fi  | 09 123456789 | Rekisteriseloste  </p>
    </div>
</footer>


<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>

<script
        src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>

<script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>

<!--<script src={{asset("v2/assets/js/bundle.js")}}></script>-->
<script src="{{asset('v2/assets/js/validator/validator.js')}}" type="text/javascript"></script>
<script src="{{asset("v2/src/js/index.js")}}"></script>
<script>
    $(document).ready(function (){
        init_validator();
    });
</script>
</body>
</html>