<?php require_once('../include/config.php'); ?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="pragma" content="no-cache"/>
        <title>Document</title>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL ?>css/common.css">
        <link rel="stylesheet" href="<?php echo BASE_URL ?>css/labor.css">
    </head>
    <body>
        <div id="container">
            <?php require_once('../include/header.php') ?>
            <!-- /header -->
            <h2 class="title_header">労働問題｜<span>在職中の方へのアドバイス</span></h2>
            <!-- /header -->
            <div class="page-main">
                <div id="advice1__local-01">
                    <div class="container_box">
                        <div class="post">
                            <div class="description">
                                <p class="text">あなたが今、会社との間で何らかの問題を抱えていて、訴訟を起こすことを考えているとします。しかし、すでに退職することが決まっているのであれば、次の就職先を探してキャリアを築くことを、まずは第一に考えて行動してください。ご本人が会社とのトラブルに拘泥するのは、多くの場合、人生の時間の無駄遣いとなるからです。
                                <br><span class="orange2">訴訟に関しては基本的に、その道であるプロの弁護士に任せ、あなたはご自身の生活を安定させることに注力してください。</span>
                                <br>また実際に訴訟を起こすタイミングは、会社を辞めた後でというケースが多く見受けられます。<span class="bold">この退職までの期間にやっておきたいのが、当事者のあなたにしかできない証拠集めです。会社を辞めた後で、証拠を集めることは非常に困難となります。</span>
                                <br>下記のケースはあくまで一般論で、これらの証拠がないと会社に請求できないということではありませんが、参考としてご覧ください
                                </p>
                            </div>
                        </div>
                        <!-- /post -->
                        <div class="post">
                            <h2 class="title_h2">残業代が支払われていない方</h2>
                            <div class="description">
                                <div class="imgContent">
                                    <img src="<?php echo BASE_URL ?>images/labor/advice1/img_01.jpg" alt="">
                                </div>
                                <p class="text"><span class="orange2">未払いの残業代などを請求するには、実際に働いた勤務時間を示す客観的な証拠が必要となります。</span>タイムカードや出勤簿などのコピー、業務用パソコンのログイン・ログアウトの記録、業務上のメールの記録、また給与明細書の控えなどが該当します。<br>これらの資料は会社を辞めてから集めるのは、非常に困難な作業となりますので、可能な限り在職している間に集めることを心がけてください。</p>
                            </div>
                        </div>
                        <!-- /post -->
                        <div class="post">
                            <h2 class="title_h2">セクシャルハラスメントを受けている方</h2>
                            <div class="description">
                                <div class="imgContent">
                                    <img src="<?php echo BASE_URL ?>images/labor/advice1/img_02.jpg" alt="">
                                </div>
                                <p class="text"><span class="orange2">相手からのメールの記録や電話の録音などは、後々重要な証拠となります。</span>嫌な相手からの文面や声なので、消去したくなる気持ちは分かりますが、できる限り保存しておくようにしてください。<br>もちろん身体に被害を受けた場合などは、すぐに医師の診断書を貰うことが大切です。診断書も後日、証拠として重要度が高いものですので、しっかり保管してください。</p>
                            </div>
                        </div>
                        <!-- /post -->
                        <div class="post">
                            <h2 class="title_h2">パワーハラスメントを受けている方</h2>
                            <div class="description">
                                <div class="imgContent">
                                    <img src="<?php echo BASE_URL ?>images/labor/advice1/img_03.jpg" alt="">
                                </div>
                                <p class="text">証拠となるような電話の録音やメール類は、できる限り保管しておいてください。
                                <br>またよくあるケースとして、会議室など密室に閉じ込められて、上司などから罵詈雑言を浴びせられたり、時には暴力を受ける場合などがあります。このような事態になることが想定される場合は、<span class="orange2">ICレコーダーなどでその場の会話を録音することが望ましいです。</span>後々、決定的な証拠となる可能性があります。</p>
                            </div>
                        </div>
                        <!-- /post -->
                        <div class="listButton_01">
                            <ul>
                                <li><a href="#"><img src="<?php echo BASE_URL ?>images/labor/solution/nav_accor_01.png" alt="弁護士に相談するメリット"></a></li>
                                <li><a href="#"><img src="<?php echo BASE_URL ?>images/labor/solution/nav_accor_02.png" alt="労働問題の解決方法"></a></li>
                                <li><a href="#"><img src="<?php echo BASE_URL ?>images/labor/solution/nav_accor_03.png" alt="在職中の方へのアドバイス"></a></li>
                                <li><a href="#"><img src="<?php echo BASE_URL ?>images/labor/solution/nav_accor_04.png" alt="離職中の方へのアドバイス"></a></li>
                            </ul>
                        </div>
                        <!-- /listButton_01 -->
                    </div>
                </div>
                <!-- /advice1__local-01 -->
            </div>
            <!-- /page-main -->
            <?php require_once('../include/footer.php') ?>
            <!-- /footer -->
        </div>
        <script type="text/javascript" src="<?php echo BASE_URL ?>js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL ?>js/script.js"></script>
    </body>
</html>
