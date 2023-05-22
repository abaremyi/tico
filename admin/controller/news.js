$(function () {

  $("#newsForm input, #newsForm textarea").jqBootstrapValidation({
      preventSubmit: true,
      submitError: function ($form, event, errors) {
      },
      submitSuccess: function ($form, event) {
          event.preventDefault();
          var photo = $("input#wizard-picture").prop('files')[0];
          var url = $("textarea#url").val();
          var title = $("input#title").val();
          var newsdate = $("input#newsdate").val();
          var status = $("select#status").val();
          var details = $("textarea#details").val();
          // console.log(" Photo "+photo+" url "+url+" title "+title+" newsdate "+newsdate+" status "+status+" details "+details);

          $this = $("#publish");
          $this.prop("disabled", true);

          var formData = new FormData();
          formData.append("photo", photo);
          formData.append("url", url);
          formData.append("title", title);
          formData.append("newsdate", newsdate);
          formData.append("status", status);
          formData.append("details", details);
    
          $.ajax({
            url: "actions/newsManagement.php",
            type: "POST",
            enctype: 'multipart/form-data',
            data: formData,
            dataType: 'text', 
            cache: false,
            contentType: false,
            processData: false,
            success: function () {
                // $('#success').html("<div class='alert alert-success'>");
                // $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                //         .append("</button>");
                // $('#success > .alert-success')
                //         .append("<strong>Application Sent successfully. </strong>");
                // $('#success > .alert-success')
                //         .append('</div>');
                $('#newsForm').trigger("reset");
            },
            error: function () {
                $('#success').html("<div class='alert alert-danger'>");
                $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                $('#success > .alert-danger').append($("<strong>").text("Sorry " + firstname + ", it seems that Application Failed. Please Contact System Administrator for Help!"));
                $('#success > .alert-danger').append('</div>');
                $('#newsForm').trigger("reset");
                // window.location.reload();
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
