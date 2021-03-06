$(function(){
    var amount_handle = $("#amount_spinner");
    $("#loan_amount").slider({
        range: "min",
        value: 100,
        min: 0,
        max: 1000,
        step: 50,
        create: function() {
            amount_handle.val( $(this).slider("value") );
        },
        slide: function( event, ui ) {
            amount_handle.val( ui.value + " €" );
        }
    });

    var period_handle = $("#period_spinner");
    $("#loan_period").slider({
        range: "min",
        value: 5,
        min: 1,
        max: 12,
        step: 1,
        create: function() {
            period_handle.val( $(this).slider("value") );
        },
        slide: function( event, ui ) {
            period_handle.val( ui.value + " V" );
        }
    });

    $.widget( "ui.amountSpinner", $.ui.spinner, {
        _format: function(value) { return value + " €"; },
        _parse: function(value) { return parseInt(value); }
    });

    $.widget( "ui.periodSpinner", $.ui.spinner, {
        _format: function(value) { return value + " V"; },
        _parse: function(value) { return parseInt(value); }
    });

    var amountSpinner = $("#amount_spinner").amountSpinner({
        min: 0,
        max: 1000,
        step: 50,
        spin: function( event, ui ){
            $("#loan_amount").slider("value",ui.value);
        }
    }),
    periodSpinner = $("#period_spinner").periodSpinner({
        min: 1,
        max: 12,
        step: 1,
        spin: function( event, ui ){
            $("#loan_period").slider("value",ui.value);
        }
    });
});