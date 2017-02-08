/**
 * Created by marciohelenomaiapessoa on 21/11/16.
 */
// função dropMenu
// function dropMenu() {
//     document.getElementById("menuServicos").classList.toggle("show");
// }
// window.onclick = function (e) {
//     if (!e.target.matches('.dropbtn')) {
//         var dropbtns = document.getElementsByClassName('menuServicos');
//         var i;
//         for (i = 0; i < dropbtns.length; i++) {
//             var openDropdowns = dropbtns[i];
//             if (openDropdowns.classList.contains('show')) {
//                 openDropdowns.classList.remove('show');
//             }
//         }
//     }
// };
// function toggleMenu() {
//     document.getElementById('headerMenu').classList.toggle('menuShow');
// }
// window.onclick = function (e) {
// };
// function openMenu() {
//     document.getElementById('headerMenu').style.left = '0';
//     // document.getElementById('headerMenu').style.left = '-100%'.preventDefault;
// }
// require('./../sass/style.scss');
//jQuery
require('./vendor/backstretch');
require('./vendor/custom');
require('./vendor/jquery.simpleslider');
// require('./vendor/')

console.log('deu certo');

// require("!style!css!compass!./../sass/style.scss");
// require("!css!compass!./../sass/style.scss");
// $(function () {
//     $('#triggerMenu').on('click', function () {
//         $('nav').toggleClass('open');
//         console.log('open');
//     });
// })

// testimonial
$('.cd-testimonials-wrapper').flexslider({
    //declare the slider items
    selector: ".cd-testimonials > li",
    animation: "slide",
    //do not add navigation for paging control of each slide
    controlNav: false,
    slideshow: false,
    //Allow height of the slider to animate smoothly in horizontal mode
    smoothHeight: true,
    start: function(){
        $('.cd-testimonials').children('li').css({
            'opacity': 1,
            'position': 'relative'
        });
    }
});
