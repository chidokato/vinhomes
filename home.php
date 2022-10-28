<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /
    >
    <title>Navigation tooltips - fullPage.js</title>
    <meta name="author" content="Matthew Howell" />
    <meta name="description" content="fullPage continuous scrolling demo." />
    <meta name="keywords"  content="fullpage,jquery,demo,scroll,loop,continuous" />
    <meta name="Resource-type" content="Document" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="dist/fullpage.css" />
    <link rel="stylesheet" type="text/css" href="examples.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" type="text/css" href="dist/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="dist/css/slider.css" />
    <link rel="stylesheet" type="text/css" href="dist/css/responsive.css" />

    <script src='https://www.google.com/recaptcha/api.js'></script>


</head>
<body>
    <div id="menu" class="menu">
        <div class="logo">
            <a href="."><img src="imgs/logo.png"></a>
        </div>
        <div class="d-none">
            <button>Menu</button>
        </div>
        <ul class="m-none">
            <li data-menuanchor="trangchu" class="active"><a href="#trangchu">Trang chủ</a></li>
            <li data-menuanchor="vitri"><a href="#vitri">Vị trí</a></li>
            <li data-menuanchor="tienich"><a href="#tienich">Tiện ích</a></li>
            <li data-menuanchor="phankhu"><a href="#phankhu">Phân khu</a></li>
            <!-- <li data-menuanchor="tintuc"><a href="#tintuc">Tin tức</a></li> -->
            <li data-menuanchor="thuvien"><a href="#thuvien">Thư viện</a></li>
            <li data-menuanchor="dangky"><a href="#dangky">Đăng ký</a></li>
            <li data-menuanchor="lienhe"><a href="#lienhe">Liên hệ</a></li>
        </ul>
    </div>
    


<div id="fullpage">
    <div class="section trangchu" id="section1">
        <video id="myVideo" loop muted data-autoplay playsinline>
            <source src="../vinhomes2.mp4" type="video/mp4">
        </video>
        <div class="content">
            <p>Located at the gateway of Hanoi - Hai Phong highway, in the territory of 2 communes Nghia Tru and Long Hung, Van Giang district, Hung Yen province. Vinhomes Ocean Park 2 - The Empire urban area is parallel to the arterial road connecting "Economic triangle: Hanoi - Hai Phong - Ha Long".</p>
            <p>In addition, the project also fully owns the key traffic connections of Gia Lam from everywhere to Vinhomes Ocean Park - The Empire including Co Linh Interchange (400 billion): Completed in January 2021 and broaden with 4 lanes, expected to be completed in 2023.</p>
        </div>
    </div>

    <div class="section vitri">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 content">
                <h2>Project location</h2>
                <p>Located at the gateway of Hanoi - Hai Phong highway, in the territory of 2 communes Nghia Tru and Long Hung, Van Giang district, Hung Yen province. Vinhomes Ocean Park 2 - The Empire urban area is parallel to the arterial road connecting "Economic triangle: Hanoi - Hai Phong - Ha Long".</p>
                <p  class="m-none">In addition, the project also fully owns the key traffic connections of Gia Lam from everywhere to Vinhomes Ocean Park - The Empire including Co Linh Interchange (400 billion): Completed in January 2021 and broaden with 4 lanes, expected to be completed in 2023.</p>
                <p>Besides, from the project, residents can easily connect to many other important places such as</p>
                <ul class="m-none">
                    <li>3 minutes to move to Vinhomes Ocean Park urban area</li>
                    <li>5 minutes to Co Linh intersection</li>
                    <li>10 minutes to Vinh Tuy Bridge</li>
                    <li>15 minutes to Times City urban area</li>
                    <li>20 minutes to Hoan Kiem Lake Hanoi</li>
                    <li>40 minutes to Noi Bai International Airport</li>
                    <li>45 minutes to Hai Phong province</li>
                    <li>90 minutes to the famous tourist area of Ha Long Bay.</li>
                </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-8">
                <img src="imgs/vitri.png">
            </div>
        </div>
    </div>

    <div class="section tienich">
        <section class="slideshow">
 
      <ul class="navigation">
 
        <li class="navigation-item active">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(imgs/tinich.png);"></span>
        </li>
        <!-- slideshow:navigation:item END -->

        <!-- slideshow:navigation:item START -->
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(imgs/tinich1.png);"></span>
        </li>
        <!-- slideshow:navigation:item START -->
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(imgs/tinich1.png);"></span>
        </li>
        <!-- slideshow:navigation:item START -->
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(imgs/tinich1.png);"></span>
        </li>
        <!-- slideshow:navigation:item START -->
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(imgs/tinich1.png);"></span>
        </li>
       

        
       

      </ul>
      
      <div class="detail">
        <div class="detail-item active">
          <div class="background" style="background-image: url(imgs/tinich1.png); height: 100vh;"><div class="info">
            <h2>1ĐẠI TIỆN ÍCH</h2>
            <h3>Công viên Royal Wave Park quy mô lên tới 18ha</h3>
            <p>Đắm chìm trong những con sóng hạnh phúc bất tận tại Công viên  Royal Wave Park, trái tim của Vinhomes Ocean Park 2 - The Empire, lấy cảm hứng từ ”vương quốc” huyền bí Atlantis có quy mô lên tới 18ha với hàng loạt tiện ích tầm cỡ thế giới.</p>
        </div></div>
          
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
            
          <div class="background" style="background-image: url(imgs/tinich.png); height: 100vh;">
          <div class="info">
                <h2>2ĐẠI TIỆN ÍCH</h2>
                <h3>Công viên Royal Wave Park quy mô lên tới 18ha</h3>
                <p>Đắm chìm trong những con sóng hạnh phúc bất tận tại Công viên  Royal Wave Park, trái tim của Vinhomes Ocean Park 2 - The Empire, lấy cảm hứng từ ”vương quốc” huyền bí Atlantis có quy mô lên tới 18ha với hàng loạt tiện ích tầm cỡ thế giới.</p>
            </div></div>
        </div>
        <!-- slideshow:details END -->
        <!-- slideshow:details START -->
        <div class="detail-item">
          
          <div class="background" style="background-image: url(imgs/tinich.png); height: 100vh;"><div class="info">
                <h2>3ĐẠI TIỆN ÍCH</h2>
                <h3>Công viên Royal Wave Park quy mô lên tới 18ha</h3>
                <p>Đắm chìm trong những con sóng hạnh phúc bất tận tại Công viên  Royal Wave Park, trái tim của Vinhomes Ocean Park 2 - The Empire, lấy cảm hứng từ ”vương quốc” huyền bí Atlantis có quy mô lên tới 18ha với hàng loạt tiện ích tầm cỡ thế giới.</p>
            </div></div>
        </div>
        <!-- slideshow:details END -->
        <!-- slideshow:details START -->
        <div class="detail-item">
         
          <div class="background" style="background-image: url(imgs/tinich.png); height: 100vh;"> <div class="info">
                <h2>4ĐẠI TIỆN ÍCH</h2>
                <h3>Công viên Royal Wave Park quy mô lên tới 18ha</h3>
                <p>Đắm chìm trong những con sóng hạnh phúc bất tận tại Công viên  Royal Wave Park, trái tim của Vinhomes Ocean Park 2 - The Empire, lấy cảm hứng từ ”vương quốc” huyền bí Atlantis có quy mô lên tới 18ha với hàng loạt tiện ích tầm cỡ thế giới.</p>
            </div></div>
        </div>
        <!-- slideshow:details END -->
        <!-- slideshow:details START -->
        <div class="detail-item">
          
          <div class="background" style="background-image: url(imgs/tinich.png); height: 100vh;"><div class="info">
                <h2>5ĐẠI TIỆN ÍCH</h2>
                <h3>Công viên Royal Wave Park quy mô lên tới 18ha</h3>
                <p>Đắm chìm trong những con sóng hạnh phúc bất tận tại Công viên  Royal Wave Park, trái tim của Vinhomes Ocean Park 2 - The Empire, lấy cảm hứng từ ”vương quốc” huyền bí Atlantis có quy mô lên tới 18ha với hàng loạt tiện ích tầm cỡ thế giới.</p>
            </div></div>
        </div>
        <!-- slideshow:details END -->
        
        
     
        
      </div>
      <!-- slideshow:details END -->

    </section>
    </div>

    <!-- <div class="section tienich">
        <div class="slide active" style="background-image: url(imgs/tinich.png); background-attachment: fixed;">
            <div class="info">
                <h2>ĐẠI TIỆN ÍCH</h2>
                <h3>Đại lộ Kinh đô Ánh sáng Kingdom Avenue</h3>
                <p>Với điểm nhấn Quảng trường Empire Square và tháp điêu khắc biểu tượng Ánh sáng cao tới 30m</p>
            </div>
        </div>
        <div class="slide" style="background-image: url(imgs/tinich1.png); background-attachment: fixed;">
            <div class="info">
                <h2>ĐẠI TIỆN ÍCH</h2>
                <h3>Trung tâm thương mại VINCOM MEGA MALL</h3>
                <p>Thiên đường mua sắm, vui chơi, giải trí đẳng cấp Vincom Mega Mall lấy cảm hứng từ những làn sóng văn hoá thời thượng với hàng loạt thương hiệu hàng đầu trong nước và quốc tế, mang đến trải nghiệm tất cả trong một đầy mới mẻ</p>
            </div>
        </div>
        <div class="slide" style="background-image: url(imgs/tinich.png); background-attachment: fixed;">
            <div class="info">
                <h2>ĐẠI TIỆN ÍCH</h2>
                <h3>Trung tâm thương mại VINCOM MEGA MALL</h3>
                <p>Thiên đường mua sắm, vui chơi, giải trí đẳng cấp Vincom Mega Mall lấy cảm hứng từ những làn sóng văn hoá thời thượng với hàng loạt thương hiệu hàng đầu trong nước và quốc tế, mang đến trải nghiệm tất cả trong một đầy mới mẻ</p>
            </div>
        </div>
        <div class="slide" style="background-image: url(imgs/tinich1.png); background-attachment: fixed;">
            <div class="info">
                <h2>ĐẠI TIỆN ÍCH</h2>
                <h3>Trung tâm thương mại VINCOM MEGA MALL</h3>
                <p>Thiên đường mua sắm, vui chơi, giải trí đẳng cấp Vincom Mega Mall lấy cảm hứng từ những làn sóng văn hoá thời thượng với hàng loạt thương hiệu hàng đầu trong nước và quốc tế, mang đến trải nghiệm tất cả trong một đầy mới mẻ</p>
            </div>
        </div>
        <div class="slide" style="background-image: url(imgs/tinich.png); background-attachment: fixed;">
            <div class="info">
                <h2>ĐẠI TIỆN ÍCH</h2>
                <h3>Trung tâm thương mại VINCOM MEGA MALL</h3>
                <p>Thiên đường mua sắm, vui chơi, giải trí đẳng cấp Vincom Mega Mall lấy cảm hứng từ những làn sóng văn hoá thời thượng với hàng loạt thương hiệu hàng đầu trong nước và quốc tế, mang đến trải nghiệm tất cả trong một đầy mới mẻ</p>
            </div>
        </div>
    </div> -->

    <div class="section phankhu" style="background: url(imgs/phoicanh.jpg) center center;">

    </div>
    <!-- <div class="section tintuc">
        <div class="container">
            <h2>TIN TỨC</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="iteam">
                        <img src="imgs/tinich.png">
                        <div class="info">
                            <h3 class="line2"><a href="">Sắp khai trương tổ hợp biển hồ tạo sóng tại Vinhomes Ocean Park 2 - The Empire</a></h3>
                            <p class="line2">Khách hàng và nhà đầu tư sẽ được mục sở thị tiện ích công viên Royal Wave Park 18ha với tổ hợp biển tạo sóng và hồ nước mặn Laguna đẳng cấp hàng đầu thế giới, cùng chuỗi lễ hội Summer Wave Park sôi động ngập tràn sắc màu</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iteam">
                        <img src="imgs/tinich.png">
                        <div class="info">
                            <h3 class="line2"><a href="">Sắp khai trương tổ hợp biển hồ tạo sóng tại Vinhomes Ocean Park 2 - The Empire</a></h3>
                            <p class="line2">Khách hàng và nhà đầu tư sẽ được mục sở thị tiện ích công viên Royal Wave Park 18ha với tổ hợp biển tạo sóng và hồ nước mặn Laguna đẳng cấp hàng đầu thế giới, cùng chuỗi lễ hội Summer Wave Park sôi động ngập tràn sắc màu</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iteam">
                        <img src="imgs/tinich.png">
                        <div class="info">
                            <h3 class="line2"><a href="">Sắp khai trương tổ hợp biển hồ tạo sóng tại Vinhomes Ocean Park 2 - The Empire</a></h3>
                            <p class="line2">Khách hàng và nhà đầu tư sẽ được mục sở thị tiện ích công viên Royal Wave Park 18ha với tổ hợp biển tạo sóng và hồ nước mặn Laguna đẳng cấp hàng đầu thế giới, cùng chuỗi lễ hội Summer Wave Park sôi động ngập tràn sắc màu</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iteam">
                        <img src="imgs/tinich.png">
                        <div class="info">
                            <h3 class="line2"><a href="">Sắp khai trương tổ hợp biển hồ tạo sóng tại Vinhomes Ocean Park 2 - The Empire</a></h3>
                            <p class="line2">Khách hàng và nhà đầu tư sẽ được mục sở thị tiện ích công viên Royal Wave Park 18ha với tổ hợp biển tạo sóng và hồ nước mặn Laguna đẳng cấp hàng đầu thế giới, cùng chuỗi lễ hội Summer Wave Park sôi động ngập tràn sắc màu</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iteam">
                        <img src="imgs/tinich.png">
                        <div class="info">
                            <h3 class="line2"><a href="">Sắp khai trương tổ hợp biển hồ tạo sóng tại Vinhomes Ocean Park 2 - The Empire</a></h3>
                            <p class="line2">Khách hàng và nhà đầu tư sẽ được mục sở thị tiện ích công viên Royal Wave Park 18ha với tổ hợp biển tạo sóng và hồ nước mặn Laguna đẳng cấp hàng đầu thế giới, cùng chuỗi lễ hội Summer Wave Park sôi động ngập tràn sắc màu</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iteam">
                        <img src="imgs/tinich.png">
                        <div class="info">
                            <h3 class="line2"><a href="">Sắp khai trương tổ hợp biển hồ tạo sóng tại Vinhomes Ocean Park 2 - The Empire</a></h3>
                            <p class="line2">Khách hàng và nhà đầu tư sẽ được mục sở thị tiện ích công viên Royal Wave Park 18ha với tổ hợp biển tạo sóng và hồ nước mặn Laguna đẳng cấp hàng đầu thế giới, cùng chuỗi lễ hội Summer Wave Park sôi động ngập tràn sắc màu</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> -->
    <div class="section thuvien">
    <script src='dist/js/jssor.slider-28.1.0.min.js'></script>
    <script src='dist/js/custom.js'></script>
        <h2>THƯ VIỆN</h2>

        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1024px;height:450px;visibility:hidden;">
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;">
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1024px;height:450px;overflow:hidden;">
                <div style="position:relative">
                    <img data-u="image" src="imgs/tinich.png" />
                    <button style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 0; background: #0c254e00; " type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal"></button>
                </div>
                <div style="position:relative">
                    <img data-u="image" src="imgs/tinich1.png" />
                    <button style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 0; background: #0c254e00" type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal"></button>
                </div>
                <div style="position:relative">
                    <img data-u="image" src="imgs/tinich.png" />
                    <button style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 0; background: #0c254e00; " type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal"></button>
                </div>
                <div style="position:relative">
                    <img data-u="image" src="imgs/tinich.png" />
                    <button style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 0; background: #0c254e00; " type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal"></button>
                </div>
                <div style="position:relative">
                    <img data-u="image" src="imgs/tinich1.png" />
                    <button style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 0; background: #0c254e00" type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal"></button>
                </div>
                <div style="position:relative">
                    <img data-u="image" src="imgs/tinich.png" />
                    <button style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 0; background: #0c254e00; " type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal"></button>
                </div>
                <div style="position:relative">
                    <img data-u="image" src="imgs/tinich.png" />
                    <button style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 0; background: #0c254e00; " type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal"></button>
                </div>
                <div style="position:relative">
                    <img data-u="image" src="imgs/tinich1.png" />
                    <button style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 0; background: #0c254e00" type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal"></button>
                </div>
                <div style="position:relative">
                    <img data-u="image" src="imgs/tinich.png" />
                    <button style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 0; background: #0c254e00; " type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal"></button>
                </div>
            </div>
            <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:-30px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:14px;height:14px;">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                    </svg>
                </div>
            </div>
        </div><script type="text/javascript">jssor_1_slider_init();</script>




        <div class="modal fade bd-example-modal-lg" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-body">
                    <div id="jssor_2" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:700px;overflow:hidden;visibility:hidden;">
                        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        </div>
                        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:700px;overflow:hidden;">
                            <div>
                                <img data-u="image" src="https://storage.googleapis.com/vinhomes-data-02/styles/ocp_images_1920_940/public/2022_05/PggvbLxA_1652092977.jpeg" />
                                <img data-u="thumb" src="https://storage.googleapis.com/vinhomes-data-02/styles/ocp_images_1920_940/public/2022_05/PggvbLxA_1652092977.jpeg" />
                            </div>
                            <div>
                                <img data-u="image" src="https://storage.googleapis.com/vinhomes-data-02/styles/ocp_images_1920_940/public/2022_05/VHOCP2_PC08_Baicat-2_1651721262.jpg" />
                                <img data-u="thumb" src="https://storage.googleapis.com/vinhomes-data-02/styles/ocp_images_1920_940/public/2022_05/VHOCP2_PC08_Baicat-2_1651721262.jpg" />
                            </div>
                        </div>
                        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;" data-autocenter="1" data-scale-bottom="0.75">
                            <div data-u="slides">
                                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                                    <div data-u="thumbnailtemplate" class="t"></div>
                                    <svg viewbox="0 0 16000 16000" class="cv">
                                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div><script type="text/javascript">jssor_2_slider_init();</script>
                </div>
              </div>
            </div>
        </div>

    </div>

    <?php
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
      {
            $secret = 'secret_key'; //Thay thế bằng mã Secret Key của bạn
            $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
            $response_data = json_decode($verify_response);
            if($response_data->success)
            {
                $message = 'Xác thực thành công';
            }
            else
            {
                $message = 'Không thể xác thực, vui lòng thử lại';
            }
       }
    ?>

    <div class="section dangky">
        <h2>ĐĂNG KÝ THÔNG TIN</h2>
        <form action="" method="post">
            <input type="text" name="name" class="form-control" placeholder="Họ và Tên">
            <input type="text" name="phone" class="form-control" placeholder="Số điện thoại">
            <input type="email" name="email" class="form-control" placeholder="Địa chỉ email">
            <p><div class="g-recaptcha" data-sitekey="6LfsErkiAAAAABhpVqPBI85ByiHOUvdQ-h2TT_X2"></div></p>
            <button class="form-control" type="submit">Đăng Ký</button>
        </form>
    </div>
    <div class="section lienhe">
        <h2>LIÊN HỆ</h2>
        <div><img src="imgs/logo.png"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h5>LIÊN HỆ</h5>
                    <p>Số điện thoại: 1900 23 23 89</p>
                    <p>Email: info@vinhomes.vn</p>
                    <p>Địa chỉ giao dịch: Trung tâm giao dịch Bất động sản Vinhomes, L3-01, Tầng 2, TTTM Vincom Mega Mall, Vinhomes Ocean Park, Gia Lâm, Hà Nội</p>
                </div>
                <div class="col-lg-6">
                    <h5>CHÚ Ý</h5>
                    <p>*Thông tin, hình ảnh, các tiện ích trên website chỉ mang tính chất tương đối và có thể được điều chỉnh theo quyết định của Chủ đầu tư tại từng thời điểm đảm bảo phù hợp quy hoạch và thực tế thi công Dự án. Các thông tin, cam kết chính thức sẽ được quy định cụ thể tại Hợp đồng mua bán. Việc quản lý, vận hành và kinh doanh của khu đô thị sẽ theo quy định của Ban quản lý.</p>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="dist/fullpage.js"></script>
<!-- <script type="text/javascript" src="examples.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="https://unpkg.com/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/CSSPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/TextPlugin.min.js"></script>
<script src="dist/js/demo.js"></script>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        sectionsColor: ['#0c254e', '#0c254e', '#0c254e', '#0c254e', '#0c254e', '#0c254e', '#0c254e'], // backgroud corlor

        anchors: ['trangchu', 'vitri', 'tienich', 'phankhu', 'thuvien', 'dangky', 'lienhe'],
        // verticalCentered: false,
        navigation:true,
        navigationTooltips: ['Trang chủ', 'Vị trí', 'Tiện ích', 'Phân khu', 'Thư viện', 'Đăng ký', 'Liên hệ'],
        showActiveTooltip: true,

        menu: '#menu', // menu
        continuousVertical: true, // lăn chuột quay vòng lên đầu
        
        // Slider
        // controlArrows: false, // ẩn nút slider
        controlArrows: true, // hiện nút slider
        controlArrowsHTML: ['<div class="my-arrow"><i class="fas fa-arrow-alt-circle-left"></i></i></div>','<div class="my-arrow"><i class="fas fa-arrow-alt-circle-right"></i></div>',], // sửa icon slider
        slidesNavigation: true, // chấm tròn bên dưới slider
        // end slider
        css3:false,

        // responsiveWidth: 900

    });

</script>

</body>
</html>