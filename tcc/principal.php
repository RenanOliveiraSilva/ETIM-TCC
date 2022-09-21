<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        
        .image_container{
            position: relative;
            width: 95%;
            max-width: 1000px;
            height: min(70vh, 800px);
            cursor: pointer;
        }
        img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .image_container:before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000;
            transform: scale(0);
            transition: all 800ms linear;
            transform-origin: 0 50%;
            z-index: 2;
            opacity: 0.3;
        }
        .image_container:hover:before{
            transform: scale(1);
        }
        span{
            position: absolute;
            color: #fff;
            opacity: 0;
            transition: all 800ms linear;
            z-index: 3;
        }
        .title{
            font-size: 2rem;
            left: 25%;
            top: 50%;
        }
        .description{
            font-size: 1rem;
            left: 25%;
            top: 65%;
            width: 50%;
        }
        .image_container:hover span{
            opacity: 1;
        }
        .line{
            left: 0;
            top: 0;
            position: absolute;
            background: #fff;
            transition: all 800ms linear;
        }
        .top{
            width: 3px;
            height: 0;
            left: 20%;
        }
        .image_container:hover .top{
            height: 100%;
        }
        .left{
            width: 0;
            height: 3px;
            top: 95%;
        }
        .image_container:hover .left{
            width: 100%;
        }

        @media (max-width: 424px){
            .title{
                font-size: 1.5rem;
                left: 25%;
                top: 50%;
            }

            .description{
                font-size: 0.8rem;
                left: 25%;
                top: 65%;
                width: 50%;
            }
        }
       
    </style>


</head>
<body >
 
<center>
        <div class="image_container">
            <img src="../imagem/login.jpg" width="1240"/>
            <div class="oi">
            <span class="title" >Humming bird</span>
            <span class="description">
                drjfghuiwhgriu8gfh8usfrhgu8yhswry8ugfui
            </span>
            <span class="line top"></span>
            <span class="line left"></span>
            </div>
        </div>
</center>

</body>
</html>

