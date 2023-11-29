$("#payment-form").validate({
    rules:{
        customer_phone:{
            minlength: 11,
            maxlength: 11
        },
        order_date_time:{
            required: true
        },
        cashOnDel: true,
        customer_address:{
            required: true,
            minlength: 5,
            maxlength: 50
        }
    },
    messages:{
        customer_phone:{
            required: "This field is required",
            minlength: "Phone number contains minimum 11 characters",
            maxlength: "Phone number contains maximum 11 characters"
        },
        order_date_time: "Please select the date & time",
        cashOnDel: "Please select the payment option",
        customer_address:{
            required: "This field is required",
            minlength: "This field contains minimum 5 characters",
            maxlength: "This field contains maximum 50 characters"
        }
    },
  submitHandler: function(form) {
    form.submit();
  }
 });