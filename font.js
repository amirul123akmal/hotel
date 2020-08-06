var font_large = false ;
function click_and_change( ){
  demo_paragraph = document.getElementById('menu');
  demo_paragraph1 = document.getElementById('menu1');
  demo_paragraph2 = document.getElementById('menu2');
  demo_paragraph3 = document.getElementById('menu3');
  if (!font_large) {
    demo_paragraph.style.fontSize = "20" ;
    demo_paragraph1.style.fontSize = "15" ;
    demo_paragraph2.style.fontSize = "10" ;
    demo_paragraph3.style.fontSize = "10" ;
    font_large = true ;
  }
  else {
    demo_paragraph.style.fontSize = "40" ;
    demo_paragraph1.style.fontSize = "35" ;
    demo_paragraph2.style.fontSize = "15" ;
    demo_paragraph3.style.fontSize = "15" ;
    font_large = false ;
  }
}

function change_color(){
	function random_rgba() {
    var o = Math.round, r = Math.random, s = 255;
    return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
	}
	document.getElementById("menu").style.color = random_rgba();
}