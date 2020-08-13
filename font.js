var font_large = false ;
function change_size( ){
  demo = document.getElementById('menu');
  demo1 = document.getElementById('menu1');
  demo2 = document.getElementById('menu2');
  demo3 = document.getElementById('menu3');
  demo4 = document.getElementById('menu4');
  header = document.getElementById('header');
  if (!font_large) {
    demo.style.fontSize = "25" ;
    demo1.style.fontSize = "20" ;
    demo2.style.fontSize = "16" ;
    demo3.style.fontSize = "16" ;
    font_large = true ;
  }
  else {
    demo.style.fontSize = "40" ;
    demo1.style.fontSize = "35" ;
    demo2.style.fontSize = "15" ;
    demo3.style.fontSize = "15" ;
    font_large = false ;
  }
}

function random_rgba() {
    var o = Math.round, r = Math.random, s = 255;
    return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
	}

function change_color(){
	
	document.getElementById("menu").style.color = random_rgba();
}

function default_color(){
  
}