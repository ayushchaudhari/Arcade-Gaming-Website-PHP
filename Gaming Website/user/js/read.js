$(document).ready(function(){
    $.getJSON(".../php/user_data.json", function(data){
       // document.write(data.name + "<br>"); 
        //document.write(data.username); 
        document.getElementById("username").innerHTML = "Welcome " + data.name + "!";
        alert("Logged in as "+ data.name + "!");
    }).fail(function(){
        document.write("An error has occurred.");
    });
});