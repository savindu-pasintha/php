$(document).ready(function () {


    $("#nav").load("sub-parts/navigation.php");
    $("#footer").load("sub-parts/footer.php");
  //  $("#body").load("sub-parts/Login-form.php");  

    $("#submitbtn").click(function (e) { 
       e.preventDefault();
      $(".body").hide(); 
     // $(".newcard").show(); 
      $(".body").fadeIn(6000);
      $("#footer").slideUp("8000");
      //$(".body").removeClass("newcaed");  
      // removeClass("form");
   });

   







});