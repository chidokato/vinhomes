<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /
    >
    <title>https://vinhomesinvest.net/</title>
    <meta name="author" content="Matthew Howell" />
    <meta name="description" content="fullPage continuous scrolling demo." />
    <meta name="keywords"  content="fullpage,jquery,demo,scroll,loop,continuous" />
    <meta name="Resource-type" content="Document" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="dist/fullpage.css" />
    <link rel="stylesheet" type="text/css" href="examples.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- front chữ -->
    
    <link rel="stylesheet" type="text/css" href="dist/css/slider-tienich.css" /> <!-- tiện ích -->
    
    <!-- thư viện -->
    <link href="dist/css/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="dist/css/custom.css" /> <!-- main -->
    <link rel="stylesheet" type="text/css" href="dist/css/responsive.css" /> <!-- responsive -->

</head>
<body>
    <div id="menu" class="menu">
        <div class="logo">
            <a href="."><img src="imgs/logo.png"></a>
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

        <div class="dropdown d-none">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-reorder"></i></button>
            <ul class="dropdown-menu">
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

    </div>
    


<div id="fullpage">
    <div class="section trangchu" id="section1">
        <link href="//cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet">

<script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/jplayer/jquery.jplayer.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/add-on/jplayer.playlist.min.js"></script>

<!-- DEFAULT JPLAYER VIDEO HTML WRAPPER -->
<div id="jp_video_container" class="jp-video jp-video-270p" role="application" aria-label="media player">
    <div class="jp-type-playlist">
        <div id="jp_video" class="jp-jplayer"></div>
        <div class="jp-gui">
            <div class="jp-video-play">
                <button class="jp-video-play-icon" role="button" tabindex="0">play</button>
            </div>
            <div class="jp-interface">
                <div class="jp-progress">
                    <div class="jp-seek-bar">
                        <div class="jp-play-bar"></div>
                    </div>
                </div>
                <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                <div class="jp-controls-holder">
                    <div class="jp-controls">
                        <button class="jp-previous" role="button" tabindex="0">previous</button>
                        <button class="jp-play" role="button" tabindex="0">play</button>
                        <button class="jp-next" role="button" tabindex="0">next</button>
                        <button class="jp-stop" role="button" tabindex="0">stop</button>
                    </div>
                    <div class="jp-volume-controls">
                        <button class="jp-mute" role="button" tabindex="0">mute</button>
                        <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                        <div class="jp-volume-bar">
                            <div class="jp-volume-bar-value"></div>
                        </div>
                    </div>
                    <div class="jp-toggles">
                        <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                        <button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
                        <button class="jp-full-screen" role="button" tabindex="0">full screen</button>
                    </div>
                </div>
                <div class="jp-details">
                    <div class="jp-title" aria-label="title">&nbsp;</div>
                </div>
            </div>
        </div>
        <div class="jp-playlist">
            <ul>
                <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                <li>&nbsp;</li>
            </ul>
        </div>
        <div class="jp-no-solution">
            <span>Update Required</span>
            To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
        </div>
    </div>
</div>
<!-- END JPLAYER VIDEO HTML WRAPPER -->
<script type="text/javascript">
    $(function() {
  /* Load jPlayer */
   new jPlayerPlaylist({
            jPlayer: "#jp_video",
            cssSelectorAncestor: "#jp_video_container"
        }, [
            {
                title:"Finding Nemo Teaser",
                m4v: "http://www.jplayer.org/video/m4v/Finding_Nemo_Teaser.m4v",
            },
            {
                type: "youtube", /* <- Remember to add this */
                title: "Finding Dory - Youtube",
                m4v:"https://www.youtube.com/watch?v=cfLob5IYMp8",
            },
            {
                title:"Incredibles Teaser",
                m4v: "http://www.jplayer.org/video/m4v/Incredibles_Teaser.m4v",
            }
        ], {
            playlistOptions: {
                autoPlay: true
            },
            supplied: "m4v",
            smoothPlayBar: true,
            keyEnabled: false,
        });
  
    /* Youtube Integration Setup */
    var setupYoutube = function(whereDivTo, width, height) {
        $("<div>").attr("id", "ytplayer").appendTo(whereDivTo);

        onYouTubeIframeAPIReady = function() {
            youtubeApi = new YT.Player("ytplayer", {
                width: width,
                height: height,
        videoId: "cfLob5IYMp8",
                playerVars: {
                    "autoplay": 1,
                    "color": "white",
                    "modestbranding": 1,
                    "rel": 0,
                    "showinfo": 0,
                    "theme": "light"
                },
                events: {
                    "onReady": function() {
                        $(document).trigger("ready.Youtube");
                    },
                    "onStateChange": "youtubeStateChange"
                }
            });
        }

        $.getScript("//www.youtube.com/player_api");
    },
    loadYoutubeListeners = function(player, jplayer, id) {
        var container = $(player.options.cssSelector.gui, player.options.cssSelectorAncestor);

        youtubeStateChange = function(ytEvent) {
            switch(ytEvent.data) {
                case -1:
                    $(ytEvent.target.getIframe()).show();
                    $(jplayer).find('video').hide();
                    container.css({ 'opacity' : 0, 'z-index': -1, 'position' : 'relative' });
                    container.find('.jp-interface').slideUp("slow");
                break;

                case YT.PlayerState.ENDED:
                    $(jplayer).trigger($.jPlayer.event.ended);
                break;

                case YT.PlayerState.CUED:
                    $(jplayer).find('video').show();
                    $(ytEvent.target.getIframe()).hide();
                    container.css({ 'opacity' : 1, 'z-index': 0 });
                    container.find('.jp-interface').slideDown("slow");

            }
        };

        youtubeApi.loadVideoById(id);
    }

    $(document).on($.jPlayer.event.setmedia, function(jpEvent) {
        var player = jpEvent.jPlayer,
            url = player.status.src;

        if(!player.html.video.available) return;
        if(typeof player.status.media.type === "undefined" || player.status.media.type != 'youtube') {
            if(window['youtubeApi'])
                if(youtubeApi.getPlayerState() != YT.PlayerState.CUED && youtubeApi.getPlayerState() != YT.PlayerState.ENDED)
                    return youtubeApi.stopVideo();

            return;
        }

        var youtubeId = url.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/)[1]

        if(window['youtubeApi'])
            loadYoutubeListeners(player, jpEvent.target, youtubeId);
        else {
            setupYoutube(jpEvent.target, player.status.width, player.status.height);

            $(document).on("ready.Youtube", function() {
                loadYoutubeListeners(player, jpEvent.target, youtubeId);
            });
        }
    });
});

</script>
    </div>
    

    <div class="section vitri">
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

    <div class="section phankhu">
        <h2>MẶT BẰNG PHÂN KHU DỰ ÁN</h2>
        <img src="imgs/matbang.jpg">
        <div class="">
            <div class="menu-matbang">
                <ul>
                    <li><a data-toggle="modal" data-target="#matbang" href="#"> <img src="imgs/chala.png"> Phân khu Chà Là </a></li>
                    <li><a data-toggle="modal" data-target="#matbang" href="#"> <img src="imgs/sanho.png"> Phân khu San Hô </a></li>
                    <li><a data-toggle="modal" data-target="#matbang" href="#"> <img src="imgs/saobien.png"> Phân khu Sao Biển </a></li>
                    <li><a data-toggle="modal" data-target="#matbang" href="#"> <img src="imgs/coxanh.png"> Phân khu Cọ Xanh </a></li>
                    <li><a data-toggle="modal" data-target="#matbang" href="#"> <img src="imgs/haiau.png"> Phân khu Hải Âu </a></li>
                    <li><a data-toggle="modal" data-target="#matbang" href="#"> <img src="imgs/daodua.png"> Phân khu Đảo Dừa </a></li>
                    <li><a data-toggle="modal" data-target="#matbang" href="#"> <img src="imgs/kdas.png"> Phân khu KĐAS </a></li>
                </ul>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="matbang" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <p>Located at the gateway of Hanoi - Hai Phong highway, in the territory of 2 communes Nghia Tru and Long Hung, Van Giang district, Hung Yen province. Vinhomes Ocean Park 2 - The Empire urban area is parallel to the arterial road connecting "Economic triangle: Hanoi - Hai Phong - Ha Long".</p>
                    <p>In addition, the project also fully owns the key traffic connections of Gia Lam from everywhere to Vinhomes Ocean Park - The Empire including Co Linh Interchange (400 billion): Completed in January 2021 and broaden with 4 lanes, expected to be completed in 2023.</p>
                </div>
              </div>
            </div>
        </div>
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
        <div class="container">
            <div class="text-center">
                <div class="primary-title">
                    <h2>THƯ VIỆN HÌNH ẢNH</h2>
                </div>
            </div>

            <div class="position-relative broker-slider1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img data-toggle="modal" data-target="#myModal" src="imgs/tinich1.png">
                        </div>
                        <div class="swiper-slide">
                            <img data-toggle="modal" data-target="#myModal" src="imgs/tinich.png">
                        </div>
                        <div class="swiper-slide">
                            <img data-toggle="modal" data-target="#myModal" src="imgs/tinich1.png">
                        </div>
                        <div class="swiper-slide">
                            <img data-toggle="modal" data-target="#myModal" src="imgs/tinich.png">
                        </div>
                        <div class="swiper-slide">
                            <img data-toggle="modal" data-target="#myModal" src="imgs/tinich1.png">
                        </div>
                        <div class="swiper-slide">
                            <img data-toggle="modal" data-target="#myModal" src="imgs/tinich.png">
                        </div>
                    </div>
                    <div class="swiper-pagination d-lg-none"></div>
                </div>
            </div>
            <div class="modal fade bd-example-modal-lg" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                </button>
                    <div class="modal-body">
                        <div class="position-relative broker-slider2">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img data-toggle="modal" data-target="#myModal" src="imgs/tinich1.png">
                                    </div>
                                    <div class="swiper-slide">
                                        <img data-toggle="modal" data-target="#myModa" src="imgs/tinich1.png">
                                    </div>
                                    <div class="swiper-slide">
                                        <img data-toggle="modal" data-target="#myModal" src="imgs/tinich1.png">
                                    </div>
                                    <div class="swiper-slide">
                                        <img data-toggle="modal" data-target="#myModa" src="imgs/tinich1.png">
                                    </div>
                                    <div class="swiper-slide">
                                        <img data-toggle="modal" data-target="#myModal" src="imgs/tinich1.png">
                                    </div>
                                    <div class="swiper-slide">
                                        <img data-toggle="modal" data-target="#myModa" src="imgs/tinich1.png">
                                    </div>
                                </div>
                                <div class="swiper-pagination d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="dist/fullpage.js"></script>
<!-- <script type="text/javascript" src="examples.js"></script> -->

<!-- slider tiện ích -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="https://unpkg.com/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/CSSPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/TextPlugin.min.js"></script>
<script src="dist/js/demo.js"></script>

<!-- thư viện -->
<script src="dist/js/swiper-bundle.min.js"></script>
<script src="dist/js/thuvien.js"></script>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        verticalCentered: true,
        // sectionsColor: ['#0c254e', '#1f4481', '#0c254e', '#0c254e', '#0c254e', '#0c254e', '#0c254e'], // backgroud corlor

        anchors: ['trangchu', 'vitri', 'tienich', 'phankhu', 'thuvien', 'dangky', 'lienhe'],
        // verticalCentered: false,
        navigation:true,
        navigationTooltips: ['Trang chủ', 'Vị trí', 'Tiện ích', 'Phân khu', 'Thư viện', 'Đăng ký', 'Liên hệ'],
        showActiveTooltip: true,
        
        navigationPosition: "left",

        menu: '#menu', // menu
        continuousVertical: true, // lăn chuột quay vòng lên đầu
        
        // Slider
        // controlArrows: false, // ẩn nút slider
        controlArrows: true, // hiện nút slider
        controlArrowsHTML: ['<div class="my-arrow"><i class="fas fa-arrow-alt-circle-left"></i></i></div>','<div class="my-arrow"><i class="fas fa-arrow-alt-circle-right"></i></div>',], // sửa icon slider
        slidesNavigation: true, // chấm tròn bên dưới slider
        // end slider
        css3:false,

        responsiveWidth: 900

    });

</script>

</body>
</html>