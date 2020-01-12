// GOAL:
// creare una pagina che stampi tutte le configurazioni presenti nel DB. Dare inoltre la possibilita' di aggiungere una nuova configurazione (titolo e descrizione) e tentare l'approccio per una update (aggiornamento di una configurazione esistente).
// in caso di prematura riuscita di tutto l'esercizio procedere con l'eliminazione di una configurazione esistente
// N.B.: qualunque scelta di front-end sara' tollerata -->


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

  // console.log("id", id);
  // ALERT:

  var newTitle = alert ("new title");
}

function init() {

  getConfigurazioni();

  $(this).on("click", ".changeConf", changeConf);

}

$(window).ready(init);
