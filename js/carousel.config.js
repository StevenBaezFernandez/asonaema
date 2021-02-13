window.addEventListener('load', ()=>{
    const carosuel_miembros= new Glider(document.querySelector('.carousel__lista'), {
        slidesToShow: 4,
        slidesToScroll: 4,
        draggable: false,
        dots: '.carousel__indicadores',
        arrows: {
            prev: '.carousel__anterior',
            next: '.carousel__siguiente'
        }
    });     
    
});

window.addEventListener("load", ()=>{

    const carosuel_tienda= new Glider(document.querySelector('.carousel_tienda_home_lista1'), {
        slidesToShow: 4,
        slidesToScroll: 4,
        draggable: false,
        dots: '.carousel_tienda_home_indicadores1',
        arrows: {
        prev: '.carousel_tienda_home_anterior1',
        next: '.carousel_tienda_home_siguiente1'
        }
    });
})
window.addEventListener("load", ()=>{

    const carosuel_tienda2= new Glider(document.querySelector('.carousel_tienda_home_lista2'), {
        slidesToShow: 4,
        slidesToScroll: 4,
        draggable: false,
        dots: '.carousel_tienda_home_indicadores2',
        arrows: {
        prev: '.carousel_tienda_home_anterior2',
        next: '.carousel_tienda_home_siguiente2'
        }
    });
})

window.addEventListener("load", ()=>{

    const carosuel_tienda3= new Glider(document.querySelector('.carousel_tienda_home_lista3'), {
        slidesToShow: 4,
        slidesToScroll: 4,
        draggable: false,
        dots: '.carousel_tienda_home_indicadores3',
        arrows: {
        prev: '.carousel_tienda_home_anterior3',
        next: '.carousel_tienda_home_siguiente3'
        }
    });
})

window.addEventListener("load", ()=>{

    const carosuel_tienda3= new Glider(document.querySelector('.carousel_producto_recomendado_producto_lista'), {
        slidesToShow: 3,
        slidesToScroll: 1,
        draggable: false,
        dots: '.carousel_producto_recomendado_producto_dots',
        arrows: {
        prev: '.carousel_producto_recomendado_producto_anterior',
        next: '.carousel_producto_recomendado_producto_siguiente'
        }
    });
})
