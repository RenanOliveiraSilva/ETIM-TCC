<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>

    <style>

       
        a{
            color: inherit;
        }
        #ul_1{
            list-style: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        #ul_1 > * + *{
            margin-top: 10px;
        }
        #li_1{
            display: block;
        }
        #li_1 a.active{
            font-weight: bold;
        }
        .slider{
            background-color: teal;
            max-width: 1400px;
            color: #ffffff;

            grid-template-columns: 35% 65%;
            position: relative;
            display: grid;

            -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        }
        .slider .content_container{
            padding: 40px;
        }
        .slider .slides{
            overflow-y: auto;
            max-height: 400px;
            scrollbar-width: none;
        }
        .slider .slides::-webkit-scrollbar{
            display: none;
        }
        .slider .slides .slide{
            min-height: calc(100% - 80px);
            background-color: skyblue;
            display: flex;
            padding: 40px;
            color: #333;
            align-items: center;
        }
        .slider .slides .slide:nth-child(even){
            background-color: skyblue;
        }
    </style>

</head>
<body>
    <section class="slider">
        <div class="content_container">
            <h1>Saiba mais</h1>
            <p></p>
            <ul id="ul_1" class="slide_navigation">
                <li id="li_1"><a href="#slide_1" class="active" style="text-decoration: underline;">Cadastro da Plantação</a></li>
                <li id="li_1"><a href="#slide_2" style="text-decoration: underline;">Gestão de Gastos</a></li>
                <li id="li_1"><a href="#slide_3" style="text-decoration: underline;">Previsão para a Colheita</a></li>
                <li id="li_1"><a href="#slide_4" style="text-decoration: underline;">Tabela de Lucros</a></li>
            </ul>
        </div>
        <div class="slides">
            <div class="slide">
                <div class="inner_content">
                    <h1>Cadastro de Plantação:</h1>
                    <p>Nessa função o usuário deverá cadastrar informações de uma plantação como:
                         nome da planta, tipo (semente ou muda), Quantidades de Sementes ou Mudas Plantadas, tempo para a colheita, e quantidade de irrigações.
                        <br><br> Após a inserção dos dados o usuário deve clicar no botão enviar.  </p>
                </div>
            </div>

            <div class="slide">
                <div class="inner_content">
                    <h1>Gestão de Gastos:</h1>
                    <p>Nessa função o usuário poderá ver as informações cadastradas podendo alterar preço da tarifa,
                         excluir a informação cadastrada e selecionar as informações da planta. </p>
                </div>
            </div>

            <div class="slide">
                <div class="inner_content">
                    <h1>Previsão para a Colheita:</h1>
                    <p>Nessa função o usuário poderá acompanhar a estimativa do tempo de colheita em um cultivo já criado.</p>
                </div>
            </div>

            <div class="slide">
                <div class="inner_content">
                    <h1>Tabela de Lucros:</h1>
                    <p>Nessa função o usuário poderá inserir informações sobre as despesas e rendimentos paralelos ao valor do mercado.</p>
                </div>
            </div>

            <div class="slide">
                <div class="inner_content">
                    <h1></h1>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
</body>

        <script>

            (function () {
                "use strict";
                //vertical slider object
                const vertical_slider = {
                    //slide class name
                    slider_class: ".slider",
                    //show slide
                    show_slide: function(slide_id, context_item) {
                        const slide_container =
                         context_item.closest(this.slider_class).querySelector(".slides");
                         if(slide_container){
                            const slides = slide_container.querySelectorAll(".slide")
                         
                        if(slides && slides[slide_id]) {

                            //scroll to active slide
                            slide_container.scrollTo({
                                top: slides[slide_id].offsetTop,
                                behavior: "smooth"
                            });

                            //set active context item
                            const active_context_item =
                             context_item.closest(".slide_navigation").querySelector(".active");
                            if (active_context_item) {
                                active_context_item.classList.remove("active");
                            }

                            context_item.classList.add("active")
                        }
                    }
                },
                //initialize slide
                init_slider: function (slider) {

                    const navigation_items =
                     slider.querySelectorAll(".slide_navigation a");

                    if (navigation_items) {
                        Object.keys(navigation_items).forEach(function
                        (key) {
                            navigation_items[key].onclick = function(e)
                            {
                                e.preventDefault();

                                vertical_slider.show_slide(key,
                                 navigation_items[key]);
                            };
                        });
                    }
                },
                //initialize sliders
                init: function () {
                    document.querySelectorAll(this.slider_class).forEach((slider) =>
                     this.init_slider(slider));
                }
            };

                // initialize sliders
                vertical_slider.init();
            }());
        </script>

</html>