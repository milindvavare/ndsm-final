
function RegisterInsert(){
   var full_name = jQuery('.full_name').val();
   var email_id = jQuery('.email_id').val();
   var mobile_no = jQuery('.mobile_no').val();
   var course = jQuery('.course').val();

   if (full_name == '') {
      alert("Enter Full Name");
   }
   else if (email_id == '') {
      alert("Enter Email Id");
   }
   else if (mobile_no == '') {
      alert("Enter Mobile No");
   }
   else{
   jQuery.ajax({
      url:'php/scholarship-insert.php',
      method:'POST',
      data:{full_name:full_name, email_id:email_id, mobile_no:mobile_no, course:course},
      success:function(data){
         if (data == 1) {
            alert("Thank you! We will contact you soon!");
            jQuery(".tutor-modal-close-o").click();
         }   
         else{
            alert("Error ! Something went wrong");
         }         
      }
   })
}

}




function RegistartionFormInsert(){
   var full_name = jQuery('.full_name_2').val();
   var email_id = jQuery('.email_id_2').val();
   var mobile_no = jQuery('.mobile_no_2').val();
   var course = jQuery('.course_2').val();

   if (full_name == '') {
      alert("Enter Full Name");
   }
   else if (email_id == '') {
      alert("Enter Email Id");
   }
   else if (mobile_no == '') {
      alert("Enter Mobile No");
   }
   else{
   jQuery.ajax({
      url:'php/registration.php',
      method:'POST',
      data:{full_name:full_name, email_id:email_id, mobile_no:mobile_no, course:course},
      success:function(data){
         if (data == 1) {
            alert("Thank you! We will contact you soon!");
            jQuery(".tutor-modal-close-o").click();
         }   
         else{
            alert("Error ! Something went wrong");
         }         
      }
   })
}

}





