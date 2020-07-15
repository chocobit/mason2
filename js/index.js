var r = 0;
$('.link').click(function(e) {
    $('.color-bg').css("background", $(this).css("background"));

    var color = $('.color-bg').css('backgroundColor');
    var rgb = /rgb\((\d+), (\d+), (\d+)\)/.exec(color);
    var r = rgb[1],
        g = rgb[2],
        b = rgb[3];
    console.log('Red  :' + r);
    console.log('Green:' + g);
    console.log('Blue :' + b);

    $(".c-r").text(r);
    $(".c-g").text(g);
    $(".c-b").text(b);

    var hex = rgb2hex($('.color-bg').css('backgroundColor'));
    // alert(hex);
    $(".color-show").text(hex);

});

$('.home.fab').click(function(e) {
    //  $('.color-bg').css("background", $(this).css("background"));

    var color = $('.color-bg').css('backgroundColor');
    var rgb = /rgb\((\d+), (\d+), (\d+)\)/.exec(color);
    var r = rgb[1],
        g = rgb[2],
        b = rgb[3];
    console.log('Red  :' + r);
    console.log('Green:' + g);
    console.log('Blue :' + b);

    $(".c-r").text(r);
    $(".c-g").text(g);
    $(".c-b").text(b);

    var hex = rgb2hex($('.color-bg').css('backgroundColor'));

    $(".color-show").text(hex);

});



$('.pick1').click(function(e) {

    var j = 1;
    var k = 1;
    $('.fab').css("background", color[r][0]);
    $('.click-more').css("background", color[r][0]);
    $('.color-bg').css("background", color[r][0]);
    $('.link-p').each(function(f) {
        // alert("d");
        $(this).css("background", color[r][j]);
        j++;
    });

    $('.link-up').each(function(f) {
        // alert("d");
        $(this).css("background", color[r][k]);
        k++;
    });

    if (r < color.length - 1)
        r++;
    else
        r = 0;


});

$('.pick2').click(function(e) {

    var j = 1;
    var k = 1;
    $('.fab').css("background", color[r][0]);
    $('.color-bg').css("background", color[r][0]);
    $('.click-more').css("background", color[r][0]);
    $('.link-p').each(function(f) {
        // alert("d");
        $(this).css("background", color[r][j]);
        j++;
    });

    $('.link-up').each(function(f) {
        // alert("d");
        $(this).css("background", color[r][k]);



        k++;
    });

    if (r < color.length - 1)
        r++;
    else
        r = 0;


});

// var color = [
//     [
//         "#b71c1c",
//         "#ffcdd2",
//         "#ef9a9a",
//         "#ef5350",
//         "#e53935",
//         "#c62828"
//     ],
//     [
//         "#0d47a1",
//         "#bbdefb",
//         "#64b5f6",
//         "#2196f3",
//         "#1976d2",
//         "#1565c0"
//     ],
//     [
//         "#1b5e20",
//         "#c8e6c9",
//         "#81c784",
//         "#4caf50",
//         "#388e3c",
//         "#2e7d32"
//     ],

// ];


var color1 = '';
$('#color-popup .link').click(function() {
    var x = $(this).css('backgroundColor');
    hexc(x);

    $(".color-show").text(color1);

})

function hexc(colorval) {
    var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    delete(parts[0]);
    for (var i = 1; i <= 3; ++i) {
        parts[i] = parseInt(parts[i]).toString(16);
        if (parts[i].length == 1) parts[i] = '0' + parts[i];
    }
    color1 = '#' + parts.join('');
}


function rgb2hex(rgb) {
    rgb = rgb.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);
    return (rgb && rgb.length === 4) ? "#" +
        ("0" + parseInt(rgb[1], 10).toString(16)).slice(-2) +
        ("0" + parseInt(rgb[2], 10).toString(16)).slice(-2) +
        ("0" + parseInt(rgb[3], 10).toString(16)).slice(-2) : '';
}
 