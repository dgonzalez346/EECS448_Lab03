let border_colors = [0,0,0];
let bg_colors = [255,255,255];
let border_width = 5;

function update_doc(){
  update_border();
  update_bg();
}

function update_border(){
  let red = document.getElementById('border_Red').value;
  let green = document.getElementById('border_Green').value;
  let blue = document.getElementById('border_Blue').value;
  border_width = document.getElementById('border_width').value;
  border_colors = [red,green,blue];
  document.getElementById("p1").style.borderColor = rgb(border_colors[0],border_colors[1],border_colors[2]);
  document.getElementById("p1").style.borderWidth = border_width;
}

function update_bg(){
  let red = document.getElementById('bg_Red').value;
  let green = document.getElementById('bg_Green').value;
  let blue = document.getElementById('bg_Blue').value;
  bg_colors = [red,green,blue];
  document.body.style.backgroundColor = rgb(bg_colors[0],bg_colors[1],bg_colors[2]);
}
//Below Code found on Stack Overflow property of user "curran"
//for converting ints to RGB color string
function rgb(r, g, b){
  return ["rgb(",r,",",g,",",b,")"].join("");
}
