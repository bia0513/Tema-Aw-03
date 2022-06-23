<?php get_header();?>
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h2><?php the_title(); ?> </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php the_content(); ?>
            </div>
        </div>
        <?php
            }
        }
    ?> 
<?php get_footer(); ?>

 <style>
    h2{
    color:#00f;
}

.logo{
    width: 200px;
    height: 200px;
}

.titulo{
   text-align: center;
    
}

.titulo h1{
    margin-top: 10%;
    text-transform: uppercase;

}
.rodape{
    background-color:#e6e6e6;
    width:100%;
    height:200px;
    text-align:center;
}
.rodape p{
    margin-top:150px;
}

.geral{
    background:#e6e6e6;

}
body{
      background-color:#e6e6e6;
}
h2{
    color:#bfbfbf;
}
.jumbotron{
    text-align:center;
    background-color:#000000;
}

.titulo h1{
    text-align:center;
}
.foto img{
    width:100%;
    height:200px;
}

</style>