$(document).ready(function(){
    // Owl carousel
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:20,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            900:{
                items:4,
            }
        }
    });
});

$(document).ready(function(){
    $('.datedropper-end').dateDropper({
        large: true,
    });

    $('.datedropper-start').dateDropper({
        theme: 'leaf',
        large: true,
    });
});

//date-qty section
let $qty_plus = $(".date-title .plus");
let $qty_minus = $(".date-title .minus");

//click on qty plus
$qty_plus.click(function(e){
    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    if($input.val() >= 1 && $input.val() <= 29){
        $input.val(function(i, oldval){
            return ++oldval;
        });
    }
});

// click on qty minus 
$qty_minus.click(function(e){
    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    if($input.val() > 1 && $input.val() <= 30){
        $input.val(function(i, oldval){
            return --oldval;
        });
    }
});

$(document).ready(function(){
    let harga = $('#harga').html();
    // let malam = $('#malam').val();
    $('#malam').click(function(){
        $('#total_harga').text($('#malam_banget').val()* harga +'$');//this menggantikan #malam
    });
    $('#edit').click(function(){
        console.log('halo');
    });
});