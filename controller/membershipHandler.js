$(function () {

  $("#contactForm input, #contactForm textarea").jqBootstrapValidation({
      preventSubmit: true,
      submitError: function ($form, event, errors) {
      },
      submitSuccess: function ($form, event) {
          event.preventDefault();
          var email = $("input#email").val();
          var title = $("select#title").val();
          var firstname = $("input#firstname").val();
          var lastname = $("input#lastname").val();
          var dob = $("input#dob").val();
          var phone = $("input#phone").val();
          var address = $("input#address").val();
          var biography = $("textarea#biography").val();
          var ticoWhereBy = $("textarea#ticoWhereBy").val();
          var whyTicoMember = $("textarea#whyTicoMember").val();
          var photo = $("input#wizard-picture").prop('files')[0];
          // console.log(photo);

          $this = $("#sendApplicationButton");
          $this.prop("disabled", true);

          var formData = new FormData();
          formData.append("email", email);
          formData.append("title", title);
          formData.append("firstname", firstname);
          formData.append("lastname", lastname);
          formData.append("dob", dob);
          formData.append("phone", phone);
          formData.append("address", address);
          formData.append("biography", biography);
          formData.append("ticoWhereBy", ticoWhereBy);
          formData.append("whyTicoMember", whyTicoMember);
          formData.append("photo", photo);
    
          $.ajax({
            url: "controller/membershipHandler.php",
            type: "POST",
            enctype: 'multipart/form-data',
            data: formData,
            dataType: 'text', 
            cache: false,
            contentType: false,
            processData: false,
            success: function () {
                $('#success').html("<div class='alert alert-success'>");
                $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                $('#success > .alert-success')
                        .append("<strong>Application Sent successfully. </strong>");
                $('#success > .alert-success')
                        .append('</div>');
                $('#contactForm').trigger("reset");
            },
            error: function () {
                $('#success').html("<div class='alert alert-danger'>");
                $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                $('#success > .alert-danger').append($("<strong>").text("Sorry " + firstname + ", it seems that Application Failed. Please contact System Administrator for Help!"));
                $('#success > .alert-danger').append('</div>');
                $('#contactForm').trigger("reset");
            },
            complete: function () {
                setTimeout(function () {
                    $this.prop("disabled", false);
                }, 1000);
            }
          
          });
      },
      filter: function () {
          return $(this).is(":visible");
      },
  });

  $("a[data-toggle=\"tab\"]").click(function (e) {
      e.preventDefault();
      $(this).tab("show");
  });
});

$('#firstname').focus(function () {
  $('#success').html('');
});
