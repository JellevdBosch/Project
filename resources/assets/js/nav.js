$('#dd-check').find('a').on('click', function (event) {
    var ddcheck = document.getElementById('dd-check');
    $(ddcheck).toggleClass('open');
});
function toggleClass() {
    var ddSpan = document.getElementById('nav-span');
    $(ddSpan).toggleClass("nav-span-open");
}