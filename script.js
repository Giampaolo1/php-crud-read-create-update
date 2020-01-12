function resetMe (){
  var target = $("#container");
  target.html('');
}

function printConfigurazioni(configurazioni) {

  // aggiunto dopo:
  if (configurazioni.length > 0) {
    resetMe();
  }

  var target = $("#container");
  var template = $("#box-template").html();
  var compiled = Handlebars.compile(template);

  // le chiavi sono uguali alle colonne della tebella, quindi la parte di riorganizzazione dei dati non ci serve

  for (var i=0;i<configurazioni.length;i++) {

    var conf = configurazioni[i];
    var confHTML = compiled(conf);

    target.append(confHTML);
  }
}


function getConfigurazioni(){

  $.ajax({

    url: "getAllConfigurazioni.php",
    method: "GET",
    success: function(data) {

      // console.log("data", data);
      // Print
      printConfigurazioni(data);
    },
    error: function(error) {

      console.log("error", error);
    }
  });
}

function changeConf(){
  var me = $(this);
  var id = me.data("id");

  console.log("id", id);
}

function init() {

  getConfigurazioni();

  $(this).on("click", ".changeConf", changeConf);

}

$(window).ready(init);
