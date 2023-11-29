$("#fd_list_validate").validate({
    rules:{
        foodname:{
            minlength: 3
        },
        foodprice:{
            number: true
        } 
    },
    messages:{
        foodname:{
            required: "Please enter the food name",
            minlength: "The name at least 3 characters"
        },
        foodprice: "Please enter the food price",
    },
  submitHandler: function(form) {
    form.submit();
  }
 });