$(document).ready(function(){
	$("#sum-slider").slider({
		min: 100,
		max: 50000,
		step: 100,
		value: 2000,
		range: "min",
        slide: function(event, ui) {
            $("#sum-input").val(ui.value + " €");
        }
	})

	$("#time-slider").slider({
		min: 1,
		max: 10,
		step: 1,
		value: 3,
		range: "min",
        slide: function(event, ui) {
            $("#time-input").val(ui.value + "v");
        }
	})
})