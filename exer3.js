var held_img = "bub_held.jpg";
var norm_img = "lilbub.jpg";

function hover_image(){
  document.getElementById('bub_pic').src = held_img;
}
function unhover_image(){
  document.getElementById('bub_pic').src = norm_img;
}
function prev(){
  if(curr == 0){
    curr = img_arr.length - 1;
  }else{
    curr -= 1;
  }
  document.getElementById('mycatpic').src = img_arr[curr];
}

function next(){
  if(curr == img_arr.length - 1){
    curr = 0;
  }else{
    curr += 1;
  }
  document.getElementById('mycatpic').src = img_arr[curr];
}
