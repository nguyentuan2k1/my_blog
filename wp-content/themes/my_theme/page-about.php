<?php
get_header();
?>
<style>
    .my_theme_about_top{
        margin-top:50px;
    }
	.my_theme_about_top_title{
		display: flex;
		align-items: center;
	}

    .my_theme_about_top_title span:nth-child(2){
        flex: 1;
        text-align: center;
        display: flex;
        flex-direction: row;
        font-size:20px;
        margin:0 10px;
    }
    .my_theme_about_top_title span:nth-child(2):before , .my_theme_about_top_title span:nth-child(2):after {
        content: "";
        flex: 1 1;
        border-bottom: 2.5px dashed #DADADA;
        margin: auto;
    }
    .my_theme_about_top_title span:nth-child(2):before{
        margin-right:20px;
    }
    .my_theme_about_top_title span:nth-child(2):after{
        margin-left:20px;
    }

    .my_theme_about_top_content{
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 70%;
        margin: 30px auto;

    }
    .my_theme_about_top_content p{
        margin: 30px 0;
        text-align: center;
        font-size: 16px;
        font-weight: 500;
    }

    .my_theme_about_top_content_div_img{
        display: flex;
        gap: 0 30px;
        overflow: hidden;
        justify-content: space-between;
    }
    .my_theme_about_top_content_div_img img{
        width: 50%;
        height: auto;
    }

    .my_theme_about_top_content_social{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0 5px;
    }
    .my_theme_about_top_content_social_item{
        padding: 15px 20px;
        background: #fff83f;
        color: #0c0c0c;
        transition: all 0.3s;
    }
    .my_theme_about_top_content_social_item i{
        font-size: 18px;
    }
    .my_theme_about_top_content_social_item:hover{
        background: #272727;
    }
    .my_theme_about_top_content_social_item:hover i{
        color: #fff;
    }
    /*about content*/
    .my_theme_about_content{
        padding: 40px 0;
        background: #f7f7f6;
    }
    .my_theme_about_content_title{
        display: flex;
        align-items: center;
    }

    .my_theme_about_content_title span:nth-child(2){
        flex: 1;
        text-align: center;
        display: flex;
        flex-direction: row;
        font-size:20px;
        margin:0 10px;
    }
    .my_theme_about_content_title span:nth-child(2):before , .my_theme_about_content_title span:nth-child(2):after {
        content: "";
        flex: 1 1;
        border-bottom: 2.5px dashed #DADADA;
        margin: auto;
    }
    .my_theme_about_content_title span:nth-child(2):before{
        margin-right:20px;
    }
    .my_theme_about_content_title span:nth-child(2):after{
        margin-left:20px;
    }
    .my_theme_about_content_body{
        margin: 30px 0;
        display: grid;
        grid-template-columns: repeat(5,1fr);
        grid-column-gap: 60px;
    }
    .my_theme_about_content_body_item{
        display: flex;
        flex-direction: column;
        align-items:center;
    }

    .my_theme_about_content_body_item_img{
        width:100%;
        height: 100%;
        padding: 40px 15px;
        border: 2.5px dashed  #DADADA;
        border-radius:50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .my_theme_about_content_body_item h4{
        margin-top: 15px ;
        font-weight: 700;
        text-align:center;
    }
    .my_theme_about_content_body_item p{
        font-size: 12px;
        text-align:center;
    }

  



    @media (max-width: 991.98px) {
        .my_theme_about_content_body{
            grid-column-gap:25px;
        }

        .my_theme_about_content_body_item_img{
            width: 100%;
            height: 50%;
            padding: 30px;
            border: 2.5px dashed #DADADA;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    @media (max-width: 767.98px) {
        .my_theme_about_top_content_div_img{
            display: flex;
            gap: 30px 0;
            flex-direction: column;
        }
        .my_theme_about_top_content_div_img img{
            width: 100%;
        }
        .my_theme_about_top_title{
            display: flex;
            align-items: center;

        }
        .my-theme-about-top-container-wrap{
            width: 80%;
            margin: 0 auto;
            /*text-align: center;*/
        }
        /*    Content body*/
        .my_theme_about_content_title{
            display: flex;
            align-items: center;
            width: 80%;
            justify-content: center;
            margin: 0 auto;
        }
        .my_theme_about_content_title span:nth-child(2){
            font-size:10px;
        }

        .my_theme_about_content_body{
            grid-template-columns: repeat(1,1fr);
            grid-row-gap: 40px;
        }
        .my_theme_about_content_body_item_img{
            width: 50%;
            height: 100%;
            padding: 40px 0;
        }
    }






</style>


<div class="my_theme_about">

	<div class="my_theme_about_top">
		<div class="container">
            <div class="my-theme-about-top-container-wrap">
                <div class="my_theme_about_top_title">
                    <span><img src="<?= get_template_directory_uri().'/img/close.png' ?>" alt=""> </span>
                    <span>About me</span>
                    <span><img src="<?= get_template_directory_uri().'/img/close.png' ?>" alt=""></span>
                </div>

                <div class="my_theme_about_top_content">
                    <img src="<?= get_template_directory_uri().'/img/about-1.jpg' ?>" alt="">
                    <p>Digital nomads are a type of people who use telecommunications technologies to earn a living and, more generally, conduct their life in a nomadic manner. Such workers often work remotely from foreign countries, coffee shops, public libraries, co-working spaces, or recreational vehicles. This is often accomplished through the use of devices that have wireless Internet capabilities such as smartphones or mobile hotspots. Successful digital nomads typically have a financial cushion. The digital nomad community has had various events.</p>
                    <div class="my_theme_about_top_content_div_img">
                        <img src="<?= get_template_directory_uri().'/img/post-33-copyright-1024x1024.jpg' ?>" alt="">
                        <img src="<?= get_template_directory_uri().'/img/post-32-copyright-1024x1024.jpg' ?>" alt="">
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia. Ut enim ad minim veniam, nostrud exercitation ullamco laboris nisi ut aliquip ex ea esse commodo consequat. Duis aute irure dolor in reprehende rit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sint occaecat.</p>

                    <div class="my_theme_about_top_content_social">
                        <a href="">
                            <p class="my_theme_about_top_content_social_item">
                               <i class="fa-brands fa-facebook-f"></i>
                            </p>
                        </a>

                        <a href="">
                            <p class="my_theme_about_top_content_social_item">
                                <i class="fa-brands fa-twitter"></i>
                            </p>
                        </a>

                        <a href="">
                            <p class="my_theme_about_top_content_social_item">
                                <i class="fa-brands fa-instagram"></i>
                            </p>
                        </a>

                        <a href="">
                            <p class="my_theme_about_top_content_social_item">
                                <i class="fa-brands fa-pinterest"></i>
                            </p>
                        </a>


                        <a href="">
                            <p class="my_theme_about_top_content_social_item">
                                <i class="fa-brands fa-linkedin"></i>
                            </p>
                        </a>



                    </div>


                </div>

            </div>



		</div>
	</div>

    <div class="my_theme_about_content">
        <div class="container">
            <div class="my_theme_about_content_title">
                <span><img src="<?= get_template_directory_uri().'/img/close.png' ?>" alt=""> </span>
                <span>HOW I START PLANNING MY TRIP</span>
                <span><img src="<?= get_template_directory_uri().'/img/close.png' ?>" alt=""></span>
            </div>
            <div class="my_theme_about_content_body">
                <div class="my_theme_about_content_body_item">
                    <div class="my_theme_about_content_body_item_img">
                        <img src="<?= get_template_directory_uri().'/img/console.png' ?>" alt="">
                    </div>
                    <h4>Visit the Forum</h4>
                    <p>Get answers from fellow
                        nomads</p>
                </div>

                <div class="my_theme_about_content_body_item">
                    <div class="my_theme_about_content_body_item_img">
                        <img src="<?= get_template_directory_uri().'/img/world.png' ?>" alt="">
                    </div>
                    <h4>Visit the Forum</h4>
                    <p>Get answers from fellow
                        nomads</p>
                </div>


                <div class="my_theme_about_content_body_item">
                    <div class="my_theme_about_content_body_item_img">
                        <img src="<?= get_template_directory_uri().'/img/umbrella.png' ?>" alt="">
                    </div>
                    <h4>Visit the Forum</h4>
                    <p>Get answers from fellow
                        nomads</p>
                </div>


                <div class="my_theme_about_content_body_item">
                    <div class="my_theme_about_content_body_item_img">
                        <img src="<?= get_template_directory_uri().'/img/send.png' ?>" alt="">
                    </div>
                    <h4>Visit the Forum</h4>
                    <p>Get answers from fellow
                        nomads</p>
                </div>

                <div class="my_theme_about_content_body_item">
                    <div class="my_theme_about_content_body_item_img">
                        <img src="<?= get_template_directory_uri().'/img/home-icon-silhouette.png' ?>" alt="">
                    </div>
                    <h4>Visit the Forum</h4>
                    <p>Get answers from fellow
                        nomads</p>
                </div>



            </div>


        </div>
    </div>

    <div>
        
    </div>


</div>




<?php
get_footer();
