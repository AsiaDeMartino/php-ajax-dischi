<?php

//include __DIR__.'/server.php';
// var_dump($dischi)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="header">
    <img src="spotify-logo.png" alt="">
</div>
<div class="main">
    <div class="card-wrapper" id="app">
        <?php
            //foreach($dischi as $value){
        ?>
        <!-- <div class="card">
            <figure>
                <img src="<?php //echo $value['poster'] ?>" alt="">
            </figure>
            <h1><?php //echo $value['title'] ?></h1>
            <span><?php //echo $value['author'] ?></span>
            <span><?php //echo $value['year'] ?></span>
        </div> -->
        <?php
            //};
        ?>    
    </div>
    
</div>
<script src="app.js"></script>
</body>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Abel";
}

img {
    max-width: 100%;
    display: block;
}

.main{
    margin: 0 auto;
    height: 100vh;
    background-color: rgb(23,34,45);
    padding: 150px 200px;
    overflow: scroll;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.card-wrapper{
    width: 70vw;
    height: 360px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    row-gap: 20px;
    column-gap: calc(5% / 4);
}

.nascondi{
    display: none;
}

.card{
    height: 360px;
    width: calc(100% / 6);
    display: flex;
    flex-direction: column;
    align-items: center;
    color: white;
    background-color: rgb(35,44,54);
    padding: 2%;
    text-align: center;
}

figure{
    aspect-ratio: 1;
    width: 100%;
    margin-bottom: 15px;
}

.card img{
    height: 100%;
}

h1{
    text-transform: uppercase;
    font-size: 1.5em;
    margin-bottom: 20px;
}

span{
    color: grey;
    font-size: 1em;
    margin-bottom: 3px;
}

.header{
    height: 70px;
    width: 100vw;
    background-color: rgb(35,44,54);
    display: flex;
    align-items: center;
    position: fixed;
}

.header img{
    height: 45px;
    margin-left: 20px;
}
</style>
</html>