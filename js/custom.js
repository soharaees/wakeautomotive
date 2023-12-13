let x=document.getElementById('theme');
x.addEventListener("click",function good(){
    document.body.classList.toggle("light-theme");
   // this.innerHTML="changed";
    if(x.innerHTML === '<i class="fa fa-moon-o" aria-hidden="true" style="font-size:1rem"></i>Dark mode'){
        x.innerHTML = '<i class="fa fa-sun-o" aria-hidden="true" style="font-size:1rem"></i>Light mode';
    }
    else{
        x.innerHTML = '<i class="fa fa-moon-o" aria-hidden="true" style="font-size:1rem"></i>Dark mode';
    }
})

    function pick() {
        var checkBox = document.getElementById("pick-car");
        var text = document.getElementById("uaddress");
        if (checkBox.checked == true){
          text.style.display = "block";
        } else {
           text.style.display = "none";
        }
      }
 
     