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
            <h2 class="title_header">労働問題｜<span>弁護士に相談するメリット</span></h2>
            <!-- /header -->
            <div class="page-main">
                <div id="merit__local-01">
                    <div class="container_box">
                        <div class="meritItems">
                            <h2 class="title_h2">早い解決とスムーズな展開。</h2>
                            <div class="description">
                                <p class="text">トラブルを抱えているのは、ただでさえ辛いことです。そんな状態で、自分の主張を立証するための資料の収集や、書類の作成をしなければならないとなると、本当に大変です。交渉が遅々として進まないこともあります。いろいろ考えると、労働問題を独力で解決しようとするのは、無理があるかもしれませんね。</p>
                                <p class="text">それから、こんな経験はありませんか？</p>
                                <p class="textReply">例えば、残業代について。</p>
                                <p class="text">連日深夜まで残業しているにも関わらず、残業代がまったくでない。会社に説明を求めたら「管理職は残業代がでないものだ」「年棒制の給料には残業代が含まれている」と説明を受けた。間違っているとは思うけど、何が間違っているのかわからない…。しかし、法律の専門家である弁護士なら、その説明が正確でないことは、すぐにわかります。そして、会社との交渉の切り口を見いだすこともできます。会社側も、弁護士からの交渉依頼があれば真摯に対応せざるをえません。</p>
                                <p class="noteMerit">つまり、弁護士に依頼することで、あなたの負担が軽くなることはもちろん、短い時間で問題が解決する可能性も高くなります。</p>
                            </div>
                        </div>
                        <!-- /meritItems -->
                        <div class="meritItems">
                            <h2 class="title_h2">一貫して代理人になれる、<br>請求額に上限設定がない。</h2>
                            <div class="description">
                                <p class="text">よくこんな質問をいただきます。</p>
                                <p class="noteMerit">司法書士や社労士ではなく弁護士に依頼するメリットって何かあるの？<br>労働基準監督署に申し立てるのと何が違うの？</p>
                                <p class="text">この疑問について、お答えします。</p>
                                <p class="textReply">まず、司法書士（特定司法書士）や社労士（特定社会保健労務士）ではなく弁護士に依頼するメリットについて。</p>
                                <p class="text">特定司法書士は、簡易裁判所で行われる訴訟の代理権を有し、請求額は１４０万円までという上限設定があります。また、行政機関での、あっせん（双方を取り持って争議の解決をはかること）の代理権は有しません。<br>特定社労士は、行政機関でのあっせん手続きの代理権を有し、請求額に上限はありませんが、裁判所での代理権は認められていません。労働審判の場合は地方裁判所で行われるため、代理人になれるのは弁護士のみです。<br>弁護士は、あっせんをはじめ、示談交渉、行政委員会での手続きなどあらゆる法律事務についての代理権が認められています。もちろん、簡易裁判所から最高裁判所まで、すべての裁判所であなたの代理を務めることができます。</p>
                                <div class="imgContent">
                                    <img src="<?php echo BASE_URL ?>images/labor/merit/tab_01.png" alt="">
                                </div>
                                <p class="textReply">次に、労働基準監督署との違いについて。</p>
                                <p class="text">労働基準監督署でも法律相談を受けることはできます。それにもとづいて紛争調整委員会によるあっせんをしてもらうこともできます。ですが、あっせんには法的拘束力がありません。だから、もし、あなたと会社の主張に大きな隔たりがあった場合は不調となり、交渉はまた一からリセットです。</p>
                                <p class="text">弁護士に依頼するメリット、おわかりいただけましたでしょうか。</p>
                            </div>
                        </div>
                        <!-- /meritItems -->
                        <div class="listButton_01">
                            <ul>
                                <li><a href="<?php echo BASE_URL ?>labor/merit.php"><img src="<?php echo BASE_URL ?>images/labor/solution/nav_accor_01.png" alt="弁護士に相談するメリット"></a></li>
                                <li><a href="<?php echo BASE_URL ?>labor/solution.php"><img src="<?php echo BASE_URL ?>images/labor/solution/nav_accor_02.png" alt="労働問題の解決方法"></a></li>
                                <li><a href="<?php echo BASE_URL ?>labor/advice1.php"><img src="<?php echo BASE_URL ?>images/labor/solution/nav_accor_03.png" alt="在職中の方へのアドバイス"></a></li>
                                <li><a href="<?php echo BASE_URL ?>labor/advice2.php"><img src="<?php echo BASE_URL ?>images/labor/solution/nav_accor_04.png" alt="離職中の方へのアドバイス"></a></li>
                            </ul>
                        </div>
                        <!-- /listButton_01 -->
                    </div>
                </div>
                <!-- /merit__local-01 -->
            </div>
            <!-- /page-main -->
            <?php require_once('../include/footer.php') ?>
            <!-- /footer -->
        </div>
        <script type="text/javascript" src="<?php echo BASE_URL ?>js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL ?>js/script.js"></script>
    </body>
</html>
