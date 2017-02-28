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
                        <h1><b><i>MGバスター</i></b></h1>
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
                                SEED系列はストーリーはそこまでではないんですが、MSがカッコイイ！！
                                <br><br>
                                そんなでフリーダムやストライクは何回か作ってたんですが、他SEEDガンダム展開再開の第三弾・バスター！^^<br>
                                最近の技術を惜しみなく投入し、デティールからプロポーションから可動からかなりのレベルです♪
                                <br><br>
                                これはもはや細々したデティール辺りくらいしか改修が思いつかない。。。ｗ<br>
                                のでその辺りを調整してから五機（2012/12/01段階でMGストライクのリメイクも発表）並べようかな、と♪
                                <br><br>
                                立ち位置は微妙でしたが、パイロットのディアッカ人気もあったり砲撃仕様がカッコよかったり、いい機体だと思います＾＾

                            </div>
                        </div>
                        
                        <? for($i = 1; $i <= 8; $i++) { ?>
                        <div class="row row-bottom-padded-sm animate-box">
                            <div class="col-md-12">
                                <figure class="fh5co-bio-photo">
                                <img src="/gallery/img_gallery/gundam/buster/gal<?=$i?>.JPG" class="img-responsive" alt="MGバスター"></a></figure>
                            </div>
                        </div>
                        <? } ?>
                        
                        <div class="row row-bottom-padded-sm animate-box">
                            <div class="col-md-12">

                                <ul class="fh5co-list-style-1 fh5co-inline">
                                    <li>制作状況</li>
                                    <li><img src = "/gallery/img_gallery/gundam/buster/model1.JPG" alt = "MGバスター" width = "240" height = "180"><br>
                                        箱はMGの標準大きめサイズです。<br>
                                        厚みも普通で、色分けが細かいとは言え<br>
                                        ブリッツに比べたらパーツ数も合わせ目も楽です＾＾</li>
                                    <li><img src = "/gallery/img_gallery/gundam/buster/model2.JPG" alt = "MGバスター" width = "240" height = "180"><br>
                                        新SEEDシリーズ恒例？？<br>
                                        の太ももモールドを置換しました。<br>
                                        KOTOBUKIYAのマイナスモールドⅡの3mmくらいが<br>
                                        ちょうどいいですが、梱包数が少ないｗｗ<br>
                                        他の大きさも他のデティに使いますが。。。^^;</li>
                                    <li><img src = "/gallery/img_gallery/gundam/buster/model3.JPG" alt = "MGバスター" width = "240" height = "180"><br>
                                        腰のセンサーがショボイので、Hアイズでも貼り付け♪<br>
                                        これはラピーテープでもラインストーンでも、<br>
                                        なんでもそれらしくなると思いますｗ</li>
                                </ul>
                                <ul class="fh5co-list-style-1 fh5co-inline">
                                    <li>塗装状況</li>
                                    <li><img src = "/gallery/img_gallery/gundam/buster/tosou1.JPG" alt = "MGバスター" width = "240" height = "180"><br>
                                        デュエルというかMG開発画稿の色調に合わせて、<br>
                                        鮮やかというよりもワントーン落としています。<br>
                                        デカール等もミリタリー機体感が<br>
                                        減ると言えばそうかもですが、<br>
                                        戦車的なマーキングでもあります＾＾</li>
                                    
                                </ul>
                            </div>
                        </div>
                        
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
                                            <a href = "justice.php" target = "_blank">
                                            <img src = "/gallery/img_gallery/gundam/justice/sub.jpg" width = "160" height = "120" alt="MGジャスティス"><br>MG(改造)ジャスティス<br><br>
                                            </a>
                                        </li>
                                        <li>
                                            <a href = "strike.php" target = "_blank">
                                            <img src = "/gallery/img_gallery/gundam/strike/sub.jpg" width = "160" height = "120" alt="MGストライク"><br>MGストライク PG Ver<br>～フルストライカー～<br>
                                            </a>
                                        </li>
                                        <li>
                                            <a href = "duel.php" target = "_blank">
                                            <img src = "/gallery/img_gallery/gundam/duel/sub.jpg" width = "160" height = "120" alt="MGデュエルアサルトシュラウド"><br>MGデュエル<br>アサルトシュラウド<br>
                                            </a>
                                        </li>
                                        <li>
                                            <a href = "freedam.php" target = "_blank">
                                            <img src = "/gallery/img_gallery/gundam/freedam/sub.jpg" width = "160" height = "120" alt="MGフリーダム"><br>MGフリーダム<br>～Type Stylish～<br>
                                            </a>
                                        </li>
                                        <li>
                                            <a href = "aegis.php" target = "_blank">
                                            <img src = "/gallery/img_gallery/gundam/aegis/sub.jpg" width = "160" height = "120" alt="MGイージス"><br>MGイージス<br><br>
                                            </a>
                                        </li>
                                        <li>
                                            <a href = "blitz.php" target = "_blank">
                                            <img src = "/gallery/img_gallery/gundam/blitz/sub.jpg" width = "160" height = "120" alt="MGブリッツ"><br>MGブリッツ<br><br>
                                            </a>
                                        </li>
                                        <li>
                                            <a href = "strike_rm.php" target = "_blank">
                                            <img src = "/gallery/img_gallery/gundam/strike_rm/sub.jpg" width = "160" height = "120" alt="MGストライクVer.RM"><br>MGストライク<br>～Ver.RM～<br>
                                            </a>
                                        </li>
                                        <li>
                                            <a href = "build_strike.php" target = "_blank">
                                            <img src = "/gallery/img_gallery/gundam/build_strike/sub.jpg" width = "160" height = "120" alt="MGビルドストライクフルパッケージ"><br>MGビルドストライク<br>～フルパッケージ～<br>
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
                                パーツ切り出し・成型（ヤスリがけ）⇒表面処理（1000番）・エッジ出し⇒サフチェック・最終成型⇒再びサフ後塗装⇒ツヤ消しフラットコート<br><br>
                                ・脚・・・太もものマイナスモールドをMSGのものに置換
                                <br><br>
                                <br>
                                <h2><b><i><span class="title-text">○塗装</span></i></b></h2>
                                <br><br>
                                塗装はMG開発画稿がカッコ良かったので、アニメ版よりもトーンを落としたカラーリングにしています。<br><br>
            
                                C→クレオス、G→ガイアカラー、F→フィニッシャーズ<br><br>

                                白･･･Fファンデーションホワイト+Fブラウン+G橙黄色+下記グレー<br><br>

                                緑･･･Fピュアグリーン+Gピュアブラック<br><br>

                                赤･･･GXハーマンレッド+G橙黄色＋下記エンジングレー+Gピュアホワイト<br><br>

                                グレー･･･CエンジングレーFS16081<br><br>

                                アクセント･･･フレームにスーパーアイアン、ウェポン・バーニアにメッキシルバー
                            </div>
                        </div>	
                        
                        <div class="row row-bottom-padded-sm animate-box">
                            <div class="col-md-12">
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B00C0NRVKW&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B0002YNR5E&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B000JCES5W&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B000JCES48&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B006F9CFZ8&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B007NU6IAG&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B008KZ5B2E&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B008KZ5CPA&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
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

