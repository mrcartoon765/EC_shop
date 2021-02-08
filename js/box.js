const buttons = document.getElementsByClassName("button");

const colors = ["Red", "Blue", "Green", "Yellow", "Pink", "Orange"];
for(let count = 0; count < colors.length; count++){
  buttons[count].innerHTML = '<div class="text">'+ colors[count] + '</div>';
  buttons[count].addEventListener("click", function(){
    document.body.style.backgroundColor = colors[count];
  });
}