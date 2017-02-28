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
                        <h1><b><i>MGデルタプラス</i></b></h1>
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
                                ガンダムUC（ユニコーン）は今までのUC（宇宙世紀）の総まとめであり、そのMSの博物館ぶりも見ものです＾＾<br>
                                といっても小説ではそんな印象は少なく、アニメでもep4が特にそうってことなんですが！ｗ<br><br>

                                百式系列として発表されたデルタシリーズもかっこいいです♪<br>
                                百式改などのように金ぴかではないのも見所ですかね？？デルタガンダムにして金ぴか塗装も見かけますがｗ<br><br>

                                実際、変形機構を搭載成功したら、航空機として（MSとしてもあれだけど）金ぴかはどうなんだ？？とかｗ<br>
                                なので何気に初なレッドセンサーを搭載してみたりもしました＾＾

                            </div>
                        </div>
 
                        <? for($i = 1; $i <= 6; $i++) { ?>
                        <div class="row row-bottom-padded-sm animate-box">
                            <div class="col-md-12">
                                <figure class="fh5co-bio-photo">
                                <img src="/gallery/img_gallery/gundam/deltaplus/gal<?=$i?>.JPG" class="img-responsive" alt="MGデルタプラス"></a></figure>
                            </div>
                        </div>
                        <? } ?>
                        
                        <div class="row row-bottom-padded-sm animate-box">
                            <div class="col-md-12">

                                <ul class="fh5co-list-style-1 fh5co-inline">
                                    <li>制作状況</li>
                                    <li><img src = "/gallery/img_gallery/gundam/deltaplus/model1.JPG" alt = "MGデルタプラス" width = "240" height = "180"><br>
                                        製作開始です♪<br>
                                        箱の大きさは標準MGサイズで薄目ですが、<br>
                                        構造上スリットや露出が多いので<br>
                                        パーツは小ぶりめで多い<br>
                                        （この内容にしては）？？</li>
                                    <li><img src = "/gallery/img_gallery/gundam/deltaplus/model2.JPG" alt = "MGデルタプラス" width = "240" height = "180"><br>
                                        かなり前に可動指・極め手を買ってたんですが、<br>
                                        サイズが合わずに放置してたものを初使用！＾＾<br>
                                        なんですが、ハイデティールや可動が凄すぎて<br>
                                        バランス取れないこともありそう・・・<br>
                                        というか実際にデティアップしましたｗ</li>
                                    <li><img src = "/gallery/img_gallery/gundam/deltaplus/model3.JPG" alt = "MGデルタプラス" width = "240" height = "180"><br>
                                        レッドセンサーは配置や形状が決まれば<br>
                                        切り出して塗装して貼るだけ＾＾<br>
                                        スリットもピンバイスで適宜やっただけです。</li>
                                    
                                </ul>
                                <ul class="fh5co-list-style-1 fh5co-inline">
                                    <li>塗装状況</li>
                                    <li><img src = "/gallery/img_gallery/gundam/deltaplus/tosou1.JPG" alt = "MGデルタプラス" width = "240" height = "180"><br>
                                        基本的には後ハメないのでサクサク塗装出来ます。<br>
                                        が、ライフルだけは合わせ目処理必要な上、<br>
                                        エネルギーパイプの関係で難しい。。。<br>
                                        ので、市販の少し細めの径の合うチェーンに変更。</li>
                                    
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
                                            <a href = "sinanju.php" target = "_blank">
                                            <img src = "/gallery/img_gallery/gundam/sinanju/sub.jpg" width = "160" height = "120" alt="MGシナンジュ"><br>MGシナンジュ<br><br>
                                            </a>
                                        </li>
                                        <li>
                                            <a href = "rizel.php" target = "_blank">
                                            <img src = "/gallery/img_gallery/gundam/rizel/sub.jpg" width = "160" height = "120" alt="MGリゼル（隊長機）"><br>MGリゼル（隊長機）<br><br>
                                            </a>
                                        </li>
                                        <li>
                                            <a href = "unicorn.php" target = "_blank">
                                            <img src = "/gallery/img_gallery/gundam/unicorn/sub.jpg" width = "160" height = "120" alt="MGユニコーン"><br>MGユニコーン<br><br>
                                            </a>
                                        </li>
                                        <li>
                                            <a href = "nu_ka.php" target = "_blank">
                                            <img src = "/gallery/img_gallery/gundam/nu_ka/sub.jpg" width = "160" height = "120" alt="MG νガンダム Ver.Ka"><br>MG νガンダム Ver.Ka<br>アルティメットフェネクス<br>
                                            </a>
                                        </li>
                                        <li>
                                            <a href = "fauc.php" target = "_blank">
                                            <img src = "/gallery/img_gallery/gundam/fauc/sub.jpg" width = "160" height = "120" alt="MGフルアーマーデルタプラスガンダム"><br>MG FAユニコーン<br><br>
                                            </a>
                                        </li>
                                        <li>
                                            <a href = "banshee.php" target = "_blank">
                                            <img src = "/gallery/img_gallery/gundam/banshee/sub.jpg" width = "160" height = "120" alt="MGバンシィ"><br>MGバンシィ<br><br>
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
                                パーツ切り出し・成型（ヤスリがけ）⇒表面処理（1000番）・エッジ出し⇒サフチェック・最終成型⇒再びサフ後塗装⇒ツヤ消しフラットコート
                                <br><br>
                                下腕・・・ピンバイスでスリット。
                                <br><br>
                                両ふくらはぎ・・・ピンバイスでスリット。
                                <br><br>
                                デティールアップ・・・インストにてバランス調整し、全身にレッドセンサー
                                <br><br><br>
                                <h2><b><i><span class="title-text">○塗装</span></i></b></h2>
                                <br><br>
                                水色・・・ガイアの純色シアン+ガイアのニュートラルグレー
                                <br><br>
                                紺色・・・ガイアの純色シアン+ガイアのピュアブラック+ガイアの蛍光ピンク
                                <br><br>
                                ホワイト・・・フィニッシャーズファンデーションホワイト
                                <br><br>
                                赤（レッドセンサー）・・・0.2mmクリアプラ板にクリアーレッド
                                <br><br>
                                フレーム・・・ガンダムカラーのグレー24+ガイアのピュアブラック
                                <br><br>
                                ウェポンのアクセントにメッキシルバー使用、フレームのアクセントにスーパーゴールド+ガイアのスターブライトシルバー使用
                                <br><br>
                                仕上げのツヤはツヤ消し二種類で模型栄えを目指しました。
                            </div>
                        </div>	
                        
                        <div class="row row-bottom-padded-sm animate-box">
                            <div class="col-md-12">
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B000WOYF8C&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B0052PEUCW&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B001GXSMSW&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B004ANBDFE&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B00APB7930&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B005QKF860&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B0071QGXHU&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                                <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=shin001-22&o=9&p=8&l=as1&asins=B00B596V26&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
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

