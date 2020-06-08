
// fx di reset x nn ricaricare la pag ed avere il nuovo dato in pg
function targetReset(){
  var target = $("#container");
  target.html("");
}

// Rappresentazione grafica con HB


function printData(data) {

  targetReset();

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

      // console.log("data", data);
    },
    error: function(err) {

      console.log("err", err);
    }
  });
}

function deletePers(){

  var me = $(this);
  var id = me.data("id");

  $.ajax({

    url:"deletePerson.php",
    data: { id: id },
    method: "POST",
    success: function(data) {
      // console.log("data", data);
      if (data) {
        getData();
      }
    },
    error: function(error) {
      console.log("error", error);
    }
  });
  // console.log("id", id);
}


function putNewPerson(){
  var me = $(this);
  // console.log(me.serialize());
  $.ajax({
    url: "putNewPerson.php",
    method: "POST",
    data: me.serialize(),
    success: function(data){
      // console.log("data", data);
      if (data) {
        getData();
      }
    },
    error: function(error){
      console.log("error", error);
    }
  });
  return false;
}

function changePers() {

  var me = $(this);
  var id = me.data("id");

  var newName = prompt("New name:");
  var newLastname = prompt("New lastname:");

  $.ajax({

    url:"updatePerson.php",
    data: {
      id: id,
      name:newName,
      lastname: newLastname,
    },
    method: "POST",
    success: function(data) {
      // console.log("data", data);
      if (data) {
        getData();
      }
    },
    error: function(error) {
      console.log("error", error);
    }
  });
  // console.log("id", id);
}

function init() {
  getData();
  $("#myForm").submit(putNewPerson);
  $(this).on("click", ".changePers", changePers);
  $(this).on("click", ".deletePers", deletePers);
}

$(document).ready(init);
