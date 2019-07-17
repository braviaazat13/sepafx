initFormUiModule();

function initFormUiModule() {
	$body.on(
		"click",
		".ui.form-field label, .ui.form-field .label",
		function() {
			$(this)
				.next()
				.focus();
		}
	);

	$body.on("click", "label", function() {
		$(this)
			.next()
			.focus();
	});
}

var submit = document.querySelector(".submit-button");
var check = document.querySelector(".form-send");
var form = document.querySelector(".contact-field");

$(submit).on('click', function () {
    // this adds 'required' class to all the required inputs under the same <form> as the submit button
    $(this)
        .closest('form')
        .find('[required]')
        .addClass('required');
});

$(check).hide();
if (document.getElementById("fullpage")) {
	check.addEventListener("click", function() {
		$(check).fadeOut(0);
		$(form).fadeIn(0);
	});
}

