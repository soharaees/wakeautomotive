
function pick() {
 var checkBox = document.getElementById("pick-car");
 var text = document.getElementById("uaddress");
 if (checkBox.checked == true){
   text.style.display = "block";
 } else {
    text.style.display = "none";
 }
}
  $(".chosen-select").chosen({
no_results_text: "Oops, nothing found!"
})