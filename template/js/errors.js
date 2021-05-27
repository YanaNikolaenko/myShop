function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

var str = getCookie('errors');
var regex = /\+/gm;
var str2 = str.replace(regex, " ");
var reg = /"(.*?)"/gm;
var ok = str2.match(reg);

console.log(ok)

document.querySelector(".first").addEventListener('click', function(){
    Swal.fire({
        title: "У Вас есть ошибки!",
        text: ok,
        icon: "error",
        button: "Aww yiss!",
    });
});

document.querySelector(".second").addEventListener('click', function(){
    Swal.fire("Our First Alert", "With some body text!");
});

document.querySelector(".third").addEventListener('click', function(){
    Swal.fire("Our First Alert", "With some body text and success icon!", "success");
});



