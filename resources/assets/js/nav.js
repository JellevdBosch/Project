var ddOpen = document.getElementsByClassName('open');
var ddSpan = document.getElementById('nav-span');

if (ddOpen !== null) {
    console.log('here');
    ddSpan.style.color = "5d963f";
} else {
    console.log('there');
    ddSpan.style.color = "ffffff";
}