function $id(id) {
    return document.getElementById(id);
}

var parallax_target =document.getElementsByClassName("parallax");
var scroll_Y;

document.body.onscroll = function() {
    scroll_Y = window.scrollY;
    for (var i = 0 ; i < parallax_target.length ; i++) {
        var elem = parallax_target[i];
        if (elem.hasAttribute("data-scroll-factor")) {
            var factor = elem.getAttribute("data-scroll-factor");
            parallax_on_scroll(elem, factor);
        } else {
        parallax_on_scroll(elem);
        }
    }
}

var mouse_X, diff_X;

document.body.onmousemove = function() {
    mouse_X = event.clientX;
    for (var i = 0 ; i < parallax_target.length ; i++) {
        var elem = parallax_target[i];
        if (elem.hasAttribute("data-mouse-factor")) {
            var factor = elem.getAttribute("data-mouse-factor");
            parallax_on_mousemove(elem, factor);
        } else {
        parallax_on_mousemove(elem);
        }
    }
}

function parallax_on_scroll(elem , factor = 2) {
    var position_Y = elem.parentNode.offsetTop;
    var new_mT = Math.round((scroll_Y - position_Y) / factor);
    console.log(new_mT);
    elem.style.marginTop = new_mT + "px";
}

function parallax_on_mousemove(elem , factor = 50) {
    diff_X = Math.round ((mouse_X - (window.innerWidth / 2)) * -1 / factor);
    elem.style.marginLeft = diff_X + "px";
}

function lazyload_elem(elem) {
    var the_src = elem.getAttribute("data-src");
    var img = document.createElement("img");

    img.src = the_src;
    img.onload = function() {
        elem.style.backgroundImage = "url(" + this.src + ")";
        elem.classList.remove("lazy");
    }
}

function update_scroll() {
    var scroll_Y = window.scrollY;
    var scrolled_bottom = scroll_Y + window.innerHeight;
    var lazyload_target = document.getElementsByClassName("gallery_element");
    for (var i = 0; i < lazyload_target.length; i++) {
        
    var the_elem = lazyload_target[i];
        if (the_elem.offsetTop < scrolled_bottom) {
            lazyload_elem(the_elem);
        }
    }
}

document.body.onscroll = update_scroll;

document.body.onload = update_scroll;