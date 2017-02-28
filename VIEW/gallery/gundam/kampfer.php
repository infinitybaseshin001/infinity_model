<?php require_once("../../VIEW/common/header.php"); ?>

<body>

    <!-- Loader -->
    <div class="fh5co-loader"></div>

    <div id="fh5co-page">
    <? require_once("../../VIEW/common/navi.php"); ?>
        <header id="fh5co-header" role="banner" class="fh5co-project js-fh5co-waypoint no-border" data-colorbg="#222222" data-next="yes">
            <div class="container">
                <div class="fh5co-text-wrap animate-box">
                    <div class="fh5co-intro-text">
                        <h1><b><i>MGケンプファー</i></b></h1>
                    </div>
                    <div class="btn-next animate-box fh5co-learn-more">
			<a href="#" class="scroll-btn">
			<span>See the detail</span>
			<i class="icon-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
    
        <div class="js-fh5co-waypoint fh5co-project-detail" id="fh5co-main" data-colorbg="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
			<div class="row row-bottom-padded-sm animate-box">
                            <div class="col-md-12">
                                思い入れの深い、MGケンプファーです。<br>
                                0080を見て、一目ぼれしたデザイン。<br>
                                0080のストーリーの秀逸さ。<br>
                                MGケンプファーの出来の良さ。<br>
                                <br>
                                改修はナシで、カッコよさ追及のためグロス仕上げ(メタリック)にしています。

                            </div>
                        </div>
 
                        <? for($i = 1; $i <= 11; $i++) { ?>
                        <div class="row row-bottom-padded-sm animate-box">
                            <div class="col-md-12">
                                <figure class="fh5co-bio-photo">
                                <img src="/gallery/img_gallery/gundam/kampfer/gal<?=$i?>.JPG" class="img-responsive" alt="MGケンプファー"></a></figure>
                            </div>
                        </div>
                        <? } ?>
                   
                        <div class="col-md-12">    
                            <div class="row row-bottom-padded-sm animate-box">
                                <div class="col-md-9">
                                    <p class="fh5co-lead"><span class="title-text">関連ギャラリー</span></p>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="flexslider">
                                    <ul class="fh5co-social">
                                        <li>
                                            <a href = "f91.php" target = "_blank">
                                            <img src = "/gallery/img_gallery/gundam/f91/sub.jpg" width = "160" height = "120" alt="MG F91"><br>MG F91<br><br>
                                            </a>
                                        </li>
                                        <li>
                                            <a href = "oyw.php" target = "_blank">
                                            <img src = "/gallery/img_gallery/gundam/oyw/sub.jpg" width = "160" height = "120" alt="MGガンダムOYW"><br>MGガンダムOYW<br><br>
                                            </a>
                                        </li>
                                        <li>
                                            <a href = "marasai.php" target = "_blank">
                                            <img src = "/gallery/img_gallery/gundam/marasai/sub.jpg" width = "160" height = "120" alt="MGマラサイ　ジョニー・ライデン専用強襲型"><br>MGマラサイ<br>ジョニー・ライデン専用強襲型<br>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-bottom-padded-sm animate-box">
                            <div class="col-md-12">
                                <h2><b><i><span class="title-text">○制作内容</span></i></b></h2><br>
                                <br><br>
                                出来が良いので、改修はナシです。<br>
                                メタリック仕様なので、表面処理を丁寧に、くらいですね(^^)<br>
                                <br><br>
                                <h2><b><i><span class="title-text">○塗装</span></i></b></h2><br>
                                詳しくは覚えてないんですが。。。<br>
                                作例を参考に、メッキシルバーにクリアーを調色して吹き、コンパウンドで磨き上げました。<br><br>
                                他、フレームにもスーパーアイアンなど、メタリック感を追求しています♪
                            </div>
                        </div>	
                        
                        <div class="row row-bottom-padded-sm animate-box">
                            <div class="col-md-12">
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B00030EU3A&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B001R2IQVU&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    <? require_once("../../VIEW/common/footer.php"); ?>

    </div>

</body>
</html>

