$('#loginForm').on("submit", function (e) {
  e.preventDefault();
  var formData = new FormData(this);
  $.ajax({
    url:$(this).attr('action'),
    method:$(this).attr('method'),
    data:formData,
    processData:false,
    dataType:'json',
    contentType:false,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    beforeSend:function(){
      call_ajax_loader();
      
      //Create new error span space for each input field
      $(document).find('.error-text').remove();
      for (var [key, value] of formData) {
        var node = $('[name='+key+']')
        var childElement = document.createElement("span");
        childElement.setAttribute("class", "text-danger error-text "+key+"-error");
        node.after(childElement);
      }
    },
    error: function (response) {
      var response = response.responseJSON;
      $('.email-error').text(response.email);
    },
    success: function (response) {
    Swal.fire({
      icon:response.status,
      title:response.status,
      html:response.customMessage,
      customClass: {
        confirmButton: 'd-none',
      }
    })
    setTimeout(() => {
     window.location.replace("/dashbaord")
    }, 1000 * 3)


        
    },
    complete: function() {
      end_ajax_loader();
    }
  });

});