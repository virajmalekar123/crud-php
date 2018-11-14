// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      username: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      },
      role: {
        required: true
      }
    },
    // Specify validation error messages
    messages: {
      username: {
        required: "Please provide a username",
        email: "Please provide a valid email"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      role: {
        required: "Please select a role"
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
