



/* add course listing */
function create_course_listing() {
  $(document).on("click", "#btn-add-course", function (e) {
    e.preventDefault();

    var type=$("#type").val();
    var title = $("#title").val();
    var author = $("#author").val();
    var content = $("#content").val();

    if (title == "" || author == "" || content == "" ) {
      swal({
        title: "Warning!",
        text: "Please fill in the selected inputs.",
        icon: "warning",
        button: "OK!",
      });
    } else if ($("#type")[0].selectedIndex <= 0) {
      swal({
        title: "Warning!",
        text: "Please Select What Type of Course!.",
        icon: "error",
        button: "OK!",
      });
    } else {
      
        var fields = {
          create_course_listing: "create_course_listing",
          type: type,
          title: title,
          author: author,
          content: content
        };

        $.ajax({
          url:  "../controllers/create_course_controller.php", 
          type: "POST",
          dataType: "JSON",
          data: fields,
          success: function (data) {
            if(data.success == true){
              swal({
                title: "Success",
                text: "Course has been added!",
                icon: "success",
                button: "OK!",
                closeModal: true,
              }).then((result) => {
                  window.location.href = "../views/admin.php";
            })
            } else{
              swal({
                title: "Error!",
                text: "Failed to add course!",
                icon: "error",
                button: "OK!",
              }).then((result) => {
                        if (result.value) {
                            // location.reload();
                        }
                    })
              }
            }
        });
    }
  });
}
/* end of add course listing */

/* delete course listing */
function delete_course_listing(){ 
  $(document).on("click",".btn-delete",function(e) { 
     e.preventDefault();

     var btnDelete=$(this).val();

      if(btnDelete != ""){

         var fields = {
             delete_course_listing: "delete_course_listing",
             btnDelete: btnDelete
         };

        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this course!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              url:  "../controllers/delete_course_listing_controller.php", 
              type : "POST",
              dataType : "JSON",
              data : fields,
              success : function(data){
                swal("Done! Course has been deleted!", {
                  icon: "success",
                }).then((willDelete) => {
                  window.location.href = "../views/admin.php";
                  }) 
              }, 
          });
          } else {
            swal("Action has been canceled!");
          }
        });
       } else{
        swal({
          title: "Error!",
          text: "Something went Wrong.",
          icon: "error",
          button: "OK!",
        }).then((result) => {
            if (result.value) {
                // location.reload();
            }
        })
     }
 });
} 
/* end of delete course listing */

/* update course listing */
function update_course_listing() {
  $(document).on("click", "#btn-listing", function (e) {
    e.preventDefault();

    var course_id = $(this).attr("course-id");
    var type=$("#type_"+course_id).val();
    var title=$("#title_"+course_id).val();
    var author=$("#author_"+course_id).val();
    var content=$("#content_"+course_id).val();
    var id=$("#id_"+course_id).val();

    if (title == "" || author == "" || content == "") {
      swal({
        title: "Warning!",
        text: "Please fill in the selected inputs.",
        icon: "warning",
        button: "OK!",
      });
    } else {
      
        var fields = {
          update_course_listing: "update_course_listing",
          type: type,
          title: title,
          author: author,
          content: content,
          id: id,
        };

        $.ajax({
          url:  "../controllers/update_course_listing_controller.php", 
          type: "POST",
          dataType: "JSON",
          data: fields,
          success: function (data) {
            if(data.success == true){
              swal({
                title: "Success",
                text: "Updated Successfully!",
                icon: "success",
                button: "OK!",
                closeModal: true,
              }).then((result) => {
                window.location.href = "../views/admin.php";
            })
            } else{
              swal({
                title: "Error!",
                text: "Update Failed!",
                icon: "error",
                button: "OK!",
              }).then((result) => {
                        if (result.value) {
                            // location.reload();
                        }
                    })
              }
            }
        });
    }
  });
}
/* end of update course listing */




jQuery(function() {
  create_course_listing();
  delete_course_listing();
  update_course_listing();
});
