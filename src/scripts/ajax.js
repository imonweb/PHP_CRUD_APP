// require( 'datatables.net-dt' );

// import $ from "jquery";
// let table = new DataTable('#table');

$(document).ready(function(){
$("table").DataTable();

  showAllUsers();

  function showAllUsers(){
    $.ajax({
      url: "action.php",
      type: "POST",
      data: {action: "view"},
      success: function(response){
        console.log(response);
      }
    });
  }

});
 

