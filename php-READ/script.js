// Rappresentazione grafica con HB

function printData(data) {

  var target = $("#container");

  var template = $("#box-template").html();
  var compiled = Handlebars.compile(template);

  for (var i = 0; i < data.length; i++) {
    var person = data[i];
    var personHTML = compiled(person);
    target.append(personHTML);
  }
}

// ----------------------------------

// function printData(data) {
//   document.getElementById("container").innerHTML=data;
// }

function getData() {

  $.ajax({

    url: "getAllPersons.php",
    method: "GET",
    success : function(data) {

      printData(data);

      console.log("data", data);
    },
    error: function(err) {

      console.log("err", err);
    }
  });
}

function init() {
  getData();
}

$(document).ready(init);
