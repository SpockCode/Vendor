$(document).ready(function(){
    // $(".home").load(function(){
    $(".home").show();
    $(".signup").hide();
    $(".next").hide();
    $(".login").hide();
});
   // });




$(document).ready(function(){
    $("#vreg").click(function(){
        $(".home").hide();
        $(".login").hide();
        $(".next").hide();
         $(".signup").show();
    });
});




$(document).ready(function() {
    $("#vlog").click(function(){
        $(".home").hide();
         $(".signup").hide();
        $(".next").hide();
         $(".login").show();
    });
}); 


$(document).ready(function() {
    $("#altlog").click(function(){
        $(".home").hide();
         $(".signup").hide();
        $(".next").hide();
         $(".login").show();
    });
}); 


$(document).ready(function() {
    $("#altlog2").click(function(){
        $(".home").hide();
         $(".signup").hide();
        $(".next").hide();
         $(".login").show();
    });
}); 

$(document).ready(function(){
    $("#altreg").click(function(){
        $(".home").hide();
        $(".login").hide();
        $(".next").hide();
         $(".signup").show();
    });
});

/*

$(document).ready(function(){
  $('#next').on('click',function(){
        $(".home").hide();
        $(".login").hide();
         $(".signup").hide();
        $(".next").show();
    });
});


*/


/*



function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xhttp.open("GET", "cd_catalog.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Artist</th><th>Title</th></tr>";
  var x = xmlDoc.getElementsByTagName("CD");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}



*/





