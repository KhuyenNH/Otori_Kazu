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
            <h2 class="title_header">労働問題｜<span>労働トラブルQ&amp;A</span></h2>
            <!-- /header -->
            <div class="page-main">
                <div id="trouble__local-01">
                    <div class="container_box">
                        <div class="table_qa_top">
                            <div class="group_qa">
                                <h3 class="title_qa_top">【解雇に関して】</h3>
                                <p class="link_question"><a href="#">上司からの執拗な退職勧奨で精神的に参ってしまいました。</a></p>
                                <p class="link_question"><a href="#">長期間働いても、派遣社員は契約満了時、雇止めに応じなければいけない？</a></p>
                            </div>
                            <!-- /group_qa -->
                            <div class="group_qa">
                                <h3 class="title_qa_top">【パワハラ】</h3>
                                <p class="link_question"><a href="#">転職したものの、仕事の引き継ぎを受けていないので具体的な成果を出せていません。「期待外れだ」と言われ、居づらくなっています。</a></p>
                                <p class="link_question"><a href="#">転属先の部署で仲間はずれにされて鬱病に。</a></p>
                            </div>
                            <!-- /group_qa -->
                            <div class="group_qa">
                                <h3 class="title_qa_top">【セクハラ】</h3>
                                <p class="link_question"><a href="#">セクハラに悩んでいます。誘いを断ったら転勤だと言われました。</a></p>
                                <p class="link_question"><a href="#">宴会で、男性の上司に全裸になるよう強要され、逆らえませんでした。</a></p>
                                <p class="link_question"><a href="#">セクハラを受けていると会社に相談したのに、会社側が対応してくれません。</a></p>
                            </div>
                            <!-- /group_qa -->
                            <div class="group_qa">
                                <h3 class="title_qa_top">【残業代】</h3>
                                <p class="link_question"><a href="#">管理職は、深夜まで働いても残業代がでないのですか。</a></p>
                                <p class="link_question"><a href="#">深夜まで働いても残業代が2時間分しかでないのですが。</a></p>
                                <p class="link_question"><a href="#">家族が過労死しました。でも会社は因果関係を認めません。</a></p>
                            </div>
                            <!-- /group_qa -->
                        </div>
                        <div class="post">
                            <h2 class="title_h2 brd">不当解雇</h2>
                            <div class="description">
                                <h3 class="title_qa">上司からの執拗な退職勧奨で<br>精神的に参ってしまいました。</h3>
                                <p class="answerText">退職について即答するよう求められても、感情的になって怒ったり、その場で回答したりするのは避けてください。辞表を出すよう促された場合も同様です。「重大な問題ですので持ち帰って考えます」と答えるとよいでしょう。<br>日本の法律では、解雇については厳格に規定されているため、みだりに従業員を解雇しようとする会社の多くは、後の紛争を回避する目的から、最初に自主退職するよう促す傾向にあります。執拗な退職勧奨にお困りのときには、弁護士にご相談されることをおすすめします。
                                </p>
                            </div>
                        </div>
                        <!-- /post -->
                        <p class="toTop">ページTOPへ ▲</p>
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
                <!-- /trouble__local-01 -->
            </div>
            <!-- /page-main -->
            <?php require_once('../include/footer.php') ?>
            <!-- /footer -->
        </div>
        <script type="text/javascript" src="<?php echo BASE_URL ?>js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL ?>js/script.js"></script>
    </body>
</html>
