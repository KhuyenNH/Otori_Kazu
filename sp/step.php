<?php require_once('include/config.php'); ?>
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
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/top.css">
    </head>
    <body>
        <div id="container">
            <?php require_once('include/header.php') ?>
            <!-- /header -->
            <h2 class="title_header">鳳和虎ノ門法律事務所について｜<span>ご相談の流れ</span></h2>
            <!-- /header -->
            <div class="page-main">
                <div id="step__local-01">
                    <div class="container_box">
                        <div class="stepItems">
                            <h2 class="title_h2">Step1：ご予約</h2>
                            <div class="description">
                                <h3 class="title_A">まずはお電話またはメールにて、<br>来所希望日をお申し込みください。</h3>
                                <p class="text">当日中、遅くとも翌日にはご返信をさせていただき、できる限りご希望の日時に沿うように、アポイントメントを取らせていただきます。</p>
                                <p class="noteStep">
                                    ※相談料は<span class="red">初回に限り無料</span>となります。
                                </p>
                                <p class="linkPlay"><i class="fa fa-play-circle"></i><a href="cost.php">相談無料の理由とは？</a></p>
                                <div class="note_description">
                                    <ul>
                                        <li>※相談時間は１時間程度が目安です。</li>
                                        <li>※面談可能な時間帯は平日９：３０～１７：３０の間となりますが、夜間の相談も行っておりますので、ご希望の時間帯をご連絡下さい。</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn">
                                <a href=""><img src="images/root/top/btn_contact.jpg" alt="相談無料まずはご連絡ください。03-6450-1795[営業時間] 9:30～17:30（平日）メールで相談予約"></a>
                            </div>
                        </div>
                        <!-- /stepItems -->
                        <div class="stepItems">
                            <h2 class="title_h2">Step2：ご来所</h2>
                            <div class="description">
                                <h3 class="title_A">ご予約の面談日時に、当法律<br>事務所までお越しください。</h3>
                                <div class="box_mail">
                                    <h3><img src="images/root/step/title_mail.jpg" alt=""></h3>
                                    <div class="content_box">
                                        <span class="orange">事実関係を記載したメモ、書類などの資料</span>をなるべく多くお持ちいただきますと、<span class="orange">相談がスムーズ</span>に進みます。もちろん、お急ぎの場合には、まずはお越しいただいてご相談ください。
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /stepItems -->
                        <div class="stepItems">
                            <h2 class="title_h2">Step3：ご相談</h2>
                            <div class="description">
                                <h3 class="title_A">弁護士に詳細をご相談ください。</h3>
                                <p class="text">どのような内容でもお気軽にご相談ください。その場で事案の一応の見通しをお伝えいたします。なお、その際に、お手持ちの契約書などの資料をお持ちいただければ、より的確な見通しをお伝えできます。</p>
                            </div>
                        </div>
                        <!-- /stepItems -->
                        <div class="stepItems">
                            <h2 class="title_h2">Step4：お見積もり</h2>
                            <div class="description">
                                <h3 class="title_A">ご相談内容を踏まえて、<br>費用をお見積もりします。</h3>
                                <p class="text">ご相談いただいた事案にかかる着手金・報酬金について、お見積もりを作成し、その明細についてご説明させていただきます。</p>
                                <p class="linkPlay"><i class="fa fa-play-circle"></i><a href="cost.php#anchor_costTitle">着手金・報酬金について</a></p>
                            </div>
                        </div>
                        <!-- /stepItems -->
                        <div class="stepItems">
                            <h2 class="title_h2">Step5：ご契約</h2>
                            <div class="description">
                                <h3 class="title_A">お見積もりにご納得いただいた上で、<br>私どもにご依頼ください。</h3>
                                <p class="text">ご依頼いただく内容について、受任契約書を作成の上、ただちに事案に着手いたします。</p>
                            </div>
                        </div>
                        <!-- /stepItems -->
                    </div>
                </div>
                <!-- /step__local-01 -->
            </div>
            <!-- /page-main -->
            <?php require_once('include/footer.php') ?>
            <!-- /footer -->
        </div>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>
