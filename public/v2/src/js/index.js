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

