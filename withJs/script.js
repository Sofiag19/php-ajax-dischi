function init(){

  getData();

}

function getData(){
  $.ajax({
      url: "data.php",
      method:'GET',
      success: function(data){
        printData(data);
      },
      error: function(error){
        alert("si è verificato un errore!", error)
      }
    })
}

function printData(data){
  for (var i = 0; i < data.length; i++) {
    var disco = data[i];
    console.log(disco);
    var copiaTempl = $("#hb-disco").html();
    var templReady = Handlebars.compile(copiaTempl);
    var createEl = templReady(disco);
    $('#container-dischi').append(createEl);
  }
}

$(document).ready(init);
