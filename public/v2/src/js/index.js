/**
 * Created by julius on 13.10.17.
 */

//
//  import $ from 'jquery';
// import 'jquery-ui';
// import 'bootstrap';
$(document).ready(() => {
  $('#slider1 .slide').slider({
    range: "min",
    min: 500,
    max: 50000,
    value: 25000,
    slide(event, ui) {
      $('#slider1 input').val(ui.value);
    },
  });
  $('#slider1 input').val($('#slider1 .slide').slider('value'));

  $('#slider2 .slide').slider({
    range: "min",
    min: 1,
    max: 15,
    value: 12,
    slide(event, ui) {
      $('#slider2 input').val(ui.value);
    },
  });

  $('#slider2 input').val($('#slider2 .slide').slider('value'));

  $('select').selectmenu();

  $('.ui-selectmenu-button .ui-icon')
    .css('background-image', 'none')
    .append('<img src="v2/src/img/chevron-down.png" />');

  $('.custom-control-indicator').append('<div class="custom-control-indicator-in"></div>');



});

function openApplicationForm(e) {
  if($("#from_email").val() != '' && $("#from_phone").val() != ''){
    $('#MainDiv').show();
    $('#myBtn').hide();
    $('.custom-border').show();
    $('.girl').hide();
    $('#border-bottom').removeClass('border-bottom');
    $('#email').val($('#from_email').val());
    $('#phone').val($('#from_phone').val());
    $("#loanForm").submit();
  }else{
    $("#loanForm").submit();
  }
}

/*
function init_validator () {

  if( typeof (validator) === 'undefined'){ return; }
  console.log('init_validator');

  // initialize the validator function
  validator.message.date = 'not a real date';

  // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
  $('form')
      .on('blur', 'input[required], input.optional, select.required', validator.checkField)
      .on('change', 'select.required', validator.checkField)
      .on('keypress', 'input[required][pattern]', validator.keypress);

  $('.multi.required').on('keyup blur', 'input', function() {
    validator.checkField.apply($(this).siblings().last()[0]);
  });

  $('form').submit(function(e) {
    e.preventDefault();
    if(!$(this).hasClass('ajax-form-submit')){
      var submit = true;

      // evaluate the form using generic validaing
      if (!validator.checkAll($(this))) {
        submit = false;
      }

      if (submit)
        this.submit();

      return false;
    }else if(!validator.checkAll($(this))){
      return false;
    }else{
      return true;
    }
  });

};*/


function init_validator(){"undefined"!=typeof validator&&(console.log("init_validator"),validator.message.date="not a real date",$("form").on("blur","input[required], input.optional, select.required",validator.checkField).on("change","select.required",validator.checkField).on("keypress","input[required][pattern]",validator.keypress),$(".multi.required").on("keyup blur","input",function(){validator.checkField.apply($(this).siblings().last()[0])}),$("form").submit(function(a){a.preventDefault();var b=!0;return validator.checkAll($(this))||(b=!1),b&&this.submit(),!1}))}