var owidth = $('#scroller li')[0].offsetWidth;
var olength = $('#scroller li').length;
var scroller = document.getElementById('scroller');
scroller.style.width = owidth * olength + olength * 43 + 'px';
