var img_arr = ["catpic_1.jpeg", "catpic_2.jpeg", "catpic_3.jpeg", "catpic_4.jpeg", "catpic_5.jpeg"]
var curr = 0;

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
