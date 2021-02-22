const search_btn = document.querySelector('.search_btn');
const panel_busqueda = document.querySelector('.panel_busqueda');
const cerrar_busqueda = document.querySelector('.cerrar_buscador');
const input_busqueda = document.querySelector('#input_busqueda');
const foto_laura = document.querySelector('.foto_laura');
const fashion2_img = document.querySelector('.fashion2');
const cont_info4 = document.querySelector('.cont_info4');
const menu_scroll = document.querySelector('.menu_scroll');
const menu_movil = document.querySelector('.menu_movil');
const btn_ir_arriba = document.querySelector('.btn_ir_arriba');
let html = document.getElementsByTagName("html")[0];
let body = document.getElementsByTagName("body")[0];
const info_img1 = document.querySelector(".info_img1");
const info_img2 =document.querySelector(".info_img2");
const info_img3 =document.querySelector(".info_img3");
const info_container = document.querySelector(".info_container");
const overlay = document.querySelector(".overlay");
const btn_show_movil = document.querySelector("#btn_show_movil");
const btn_hide_movil = document.querySelector("#btn_hide_movil");
const blanco = document.querySelector(".blanco");

const column_info_container = document.querySelector(".column_info_container");
const grid_info1 = document.querySelectorAll("#grid_info1");
const grid_info2 = document.querySelectorAll("#grid_info2");
const btn_mas_info_que_es_un_emprendedor = document.querySelector("#btn_mas_info_que_es_un_emprendedor");
const btn_mas_info_caracteristicas_emprendedor = document.querySelector("#btn_mas_info_caracteristicas_emprendedor");
const btn_mas_info_retos_emprededor = document.querySelector("#btn_mas_info_retos_emprededor");
const btn_mas_grid_info1 = document.querySelector("#btn_mas_grid_info1");
const btn_mas_grid_info2 = document.querySelector("#btn_mas_grid_info2");
const btn_mas_paralax = document.querySelector("#btn_mas_paralax");
const overlay_mas_info = document.querySelector(".overlay.mas_info");
const mas_info_que_es_un_emprendedor = document.querySelector(".mas_info_que_es_un_emprendedor");
const mas_info_caracteristicas_emprendedor = document.querySelector(".mas_info_caracteristicas_emprendedor");
const mas_info_retos_emprendedor = document.querySelector(".mas_info_retos_emprendedor");
const mas_info_grid_info1 = document.querySelector(".mas_info_grid_info1");
const mas_info_grid_info2 = document.querySelector(".mas_info_grid_info2");
const mas_info_paralax = document.querySelector(".mas_info_paralax");

const cuadro_busqueda = document.querySelector("#cuadro_busqueda");

let grid_product_resul_busqueda = document.querySelector("#grid_products_resul_busqueda");
let title_resultado_busqueda = document.querySelector(".title_resultado_busqueda");
let img_searching_buscador = document.querySelector("#img_searching_buscador");


const cerrar_mas_info = document.querySelectorAll(".cerrar_mas_info");

const header1_menu_social_social_i = document.querySelectorAll(".header1 .menu_social .social a");
const header1_menu_social_social_i_tooltips = document.querySelectorAll(".header1 .menu_social .social i .tooltips");


const httpRequest = new XMLHttpRequest();





window.addEventListener("load", ()=>{
    setInterval(() => {
        if(blanco){

            blanco.classList.add("active");
        }
        if(info_img1 && info_img2 && info_img3){
            
            info_img1.classList.add("active");
            info_img2.classList.add("active");
            info_img3.classList.add("active");
            
        }
        if(info_container){
            info_container.classList.add("active");
        }
    }, 50);

    // setInterval(() => {
    //     overlay.classList.add("active");
    // }, 3000);
    
});

cuadro_busqueda.addEventListener("keyup",()=>{
    httpRequest.open("POST", "http://localhost/asonaema/get_product_api.php", true);
    httpRequest.setRequestHeader("Content-Type","application/x-WWW-form-urlencoded");
    httpRequest.send("param="+cuadro_busqueda.value);
    
    httpRequest.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            if(this.responseText == 'vacio'){
                title_resultado_busqueda.innerHTML = ``;
                img_searching_buscador.classList.add('active');
                grid_product_resul_busqueda.innerHTML = ``;
            }else{

                img_searching_buscador.classList.remove('active');

                let responseJSON = JSON.parse(this.responseText);
                title_resultado_busqueda.innerHTML = `Resultado para <span>${cuadro_busqueda.value}</span>`;
                grid_product_resul_busqueda.innerHTML = "";
    
                
                
                for(i=0; i <= responseJSON.length; i++){
                    
                    
                    console.log(responseJSON);
                    grid_product_resul_busqueda.innerHTML +=
                    `<a href='http://localhost/asonaema/tienda/producto/${responseJSON[i].id_prod}'>
                    <div class='tarjeta_producto_categoria producto_busqueda'>
                    <div class='header_img_card'>
                    <img src='${responseJSON[i].img_prod}' class='carousel_tienda_home_img' alt=''>
                    </div>
                    <div class='body_elemento_tienda_home'>
                    <h3 class='elemento_tienda_home_title' title='${responseJSON[i].nombre_prod}'>${responseJSON[i].nombre_prod}'</h3>
                    <p class='elemento_tienda_home_text'>${responseJSON[i].descripcion_prod}</p>
                    <div class='container_vendedor_y_precio'>
                    <img src='${responseJSON[i].logo_marca}' alt=''>
                    <span class='precio_producto'>RD ${responseJSON[i].precio_prod}</span>
                    </div>
                    </div>
                    </div>
                    </a>
                    
                    
                    `
                }
            }
            
            
            console.log(this.responseText);
            
        }
    }

});


// function focus(){
//     document.getElementById("input_busqueda").focus();
// }

function toggle(objeto, clase){
    objeto.classList.toggle(clase);
}

search_btn.addEventListener('click', function(){
    toggle(panel_busqueda, 'active');

    setTimeout(function(){
        focus();
    },100);
});

cerrar_busqueda.addEventListener('click', function(){
    toggle(panel_busqueda, 'active');
});

if(btn_mas_info_que_es_un_emprendedor){

    btn_mas_info_que_es_un_emprendedor.addEventListener("click", ()=>{
        overlay_mas_info.classList.add('active');
        mas_info_que_es_un_emprendedor.classList.add('active');
        mas_info_caracteristicas_emprendedor.classList.remove('active');
        mas_info_retos_emprendedor.classList.remove('active');
        mas_info_grid_info1.classList.remove('active');
        mas_info_grid_info2.classList.remove('active');
        mas_info_paralax.classList.remove('active');
    });
    btn_mas_info_caracteristicas_emprendedor.addEventListener("click", ()=>{
        overlay_mas_info.classList.add('active');
        mas_info_que_es_un_emprendedor.classList.remove('active');
        mas_info_caracteristicas_emprendedor.classList.add('active');
        mas_info_retos_emprendedor.classList.remove('active');
        mas_info_grid_info1.classList.remove('active');
        mas_info_grid_info2.classList.remove('active');
        mas_info_paralax.classList.remove('active');
    });
    btn_mas_info_retos_emprededor.addEventListener("click", ()=>{
        overlay_mas_info.classList.add('active');
        mas_info_que_es_un_emprendedor.classList.remove('active');
        mas_info_caracteristicas_emprendedor.classList.remove('active');
        mas_info_retos_emprendedor.classList.add('active');
        mas_info_grid_info1.classList.remove('active');
        mas_info_grid_info2.classList.remove('active');
        mas_info_paralax.classList.remove('active');
    });
    btn_mas_grid_info1.addEventListener("click", ()=>{
        overlay_mas_info.classList.add('active');
        mas_info_que_es_un_emprendedor.classList.remove('active');
        mas_info_caracteristicas_emprendedor.classList.remove('active');
        mas_info_retos_emprendedor.classList.remove('active');
        mas_info_grid_info1.classList.add('active');
        mas_info_grid_info2.classList.remove('active');
        mas_info_paralax.classList.remove('active');
    });
    btn_mas_grid_info2.addEventListener("click", ()=>{
        overlay_mas_info.classList.add('active');
        mas_info_que_es_un_emprendedor.classList.remove('active');
        mas_info_caracteristicas_emprendedor.classList.remove('active');
        mas_info_retos_emprendedor.classList.remove('active');
        mas_info_grid_info1.classList.remove('active');
        mas_info_grid_info2.classList.add('active');
        mas_info_paralax.classList.remove('active');
    });
    btn_mas_paralax.addEventListener("click", ()=>{
        overlay_mas_info.classList.add('active');
        mas_info_que_es_un_emprendedor.classList.remove('active');
        mas_info_caracteristicas_emprendedor.classList.remove('active');
        mas_info_retos_emprendedor.classList.remove('active');
        mas_info_grid_info1.classList.remove('active');
        mas_info_grid_info2.classList.remove('active');
        mas_info_paralax.classList.add('active');
    });
    
    for(item of cerrar_mas_info){
    
        item.addEventListener("click", ()=>{
            overlay_mas_info.classList.remove('active');
            mas_info_que_es_un_emprendedor.classList.remove('active');
            mas_info_caracteristicas_emprendedor.classList.remove('active');
            mas_info_retos_emprendedor.classList.remove('active');
        });
    }
}


for(item of header1_menu_social_social_i){
    item.addEventListener("mouseover", ($event)=>{
        $event.target.childNodes[1].classList.toggle('active');
    });
    item.addEventListener("mouseout", ($event)=>{
        $event.target.childNodes[1].classList.toggle('active');
    });
}



if(btn_ir_arriba){

    btn_ir_arriba.addEventListener("click", ()=>{
        html.scrollTop = 0;
    });
}



function scrollAnimation(){
    
    document.addEventListener("scroll", ()=>{
        if(html.scrollTop >=800 && fashion2_img){
            fashion2_img.classList.add('active');
        }
        if(html.scrollTop >=1450){
            if( cont_info4){

                cont_info4.classList.add('active');
            }
        }
        if(html.scrollTop >= 200){
            menu_scroll.classList.add("active");
        }
        if(html.scrollTop <= 199){
            menu_scroll.classList.remove("active");
        }
        if(html.scrollTop >= 300){
            btn_ir_arriba.classList.add("active");
        }
        if(html.scrollTop <= 299){
            btn_ir_arriba.classList.remove("active");
        }
        // animaciones pagina home
        if(column_info_container){
            
            let display_size = window.innerHeight/1.3;
            let obj_position1 = column_info_container.getBoundingClientRect().top;
            let obj_position2 = document.querySelector('#grid_info1').getBoundingClientRect().top;
            let obj_position3 = document.querySelector('#grid_info2').getBoundingClientRect().top;
            let obj_position4 = document.querySelector('#main_paralax').getBoundingClientRect().top;
            let obj_position5 = document.querySelector('#carousel_miembros').getBoundingClientRect().top;
            let img = document.querySelector('.grid_img').getBoundingClientRect().top;

            if(obj_position1 <= display_size){
                column_info_container.classList.add('active');
            }
            if(obj_position2 < display_size){
                document.querySelector('#grid_info1').classList.add('active');
            }
            if(obj_position3 < display_size){
                document.querySelector('#grid_info2').classList.add('active');
            }
            if(obj_position4 < display_size){
                document.querySelector('#main_paralax').classList.add('active');
            }
            if(obj_position5 < display_size){
                document.querySelector('#carousel_miembros').classList.add('active');
            }
    
        }

        if(document.querySelector('#sub_container_valor_mision_vision')){
            let display_size = window.innerHeight/1.3;
            let obj_position1 = document.querySelector('#sub_container_valor_mision_vision > .mision').getBoundingClientRect().top;
            let obj_position2 = document.querySelector('.organigrama_container').getBoundingClientRect().top;
            let obj_position3 = document.querySelector('.quienes').getBoundingClientRect().top;



            if(obj_position1 < display_size){
                document.querySelector('#sub_container_valor_mision_vision > .mision').classList.add('active');
                document.querySelector('#sub_container_valor_mision_vision > .valores').classList.add('active');
                document.querySelector('#sub_container_valor_mision_vision > .vision').classList.add('active');
            }
            if(obj_position2 < display_size){
                document.querySelector('.organigrama_container').classList.add('active');
            }
            if(obj_position3 < display_size){
                document.querySelector('.info_quienes').classList.add('active');
                document.querySelector('.img_quienes').classList.add('active');
            }

        }
        if(document.querySelector('.container_categoria')){
            let display_size = window.innerHeight/1.3;
            let obj_position1 = document.querySelector('.container_categoria').getBoundingClientRect().top;



            if(obj_position1 < display_size){
                // document.querySelector('.categoria_item.capilares').classList.add('active');
                // document.querySelector('.categoria_item.piel').classList.add('active');
                // document.querySelector('.categoria_item.bisuteria').classList.add('active');
            }

        }

    });
}


btn_show_movil.addEventListener("click", ()=>{
    menu_movil.classList.add("active");
});
btn_hide_movil.addEventListener("click", ()=>{
    menu_movil.classList.remove("active");
});

scrollAnimation();