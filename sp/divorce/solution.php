<!-- <?php require_once('../include/config.php'); ?> -->
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
        <link rel="stylesheet" href="<?php echo BASE_URL ?>css/divorce.css">
    </head>
    <body>
        <div id="container">
            <?php require_once('../include/header.php') ?>
            <!-- /header -->
            <h2 class="title_header">離婚｜<span>離婚問題の解決方法</span></h2>
            <!-- /header -->
            <div class="page-main">
                <div id="solution__local-01">
                    <div class="container_box">
                        <div class="solutionItems">
                            <h2 class="title_h2 brd">協議離婚</h2>
                            <div class="description">
                                <p class="text">夫婦が話し合いの上、お互いに離婚を合意し、役所に離婚届を提出して受理されれば、離婚が成立します。</p>
                            </div>
                        </div>
                        <!-- /solutionItems -->
                        <div class="solutionItems">
                            <h2 class="title_h2 brd">調停離婚</h2>
                            <div class="description">
                                <p class="text">夫婦が話し合っても、意見が対立し、合意を得ない場合は、家庭裁判所での調停に進みます。<br>ここで夫婦の双方の意見を元に、男女各一名ずつの調停委員が間に入り、お互いが納得できる合意点を探りつつ、話し合いがつけば離婚が成立します。</p>
                            </div>
                        </div>
                        <!-- /solutionItems -->
                        <div class="solutionItems">
                            <h2 class="title_h2 brd">審判離婚</h2>
                            <div class="description">
                                <p class="text">家庭裁判所での調停において、ほとんどの条件で合意できたものの、わずかな相違点があって完全には合意できていないような場合や、合意はできているものの、調停成立時に本人が立ち会えない場合に、裁判所が、それまでの話し合いの経緯を踏まえて、適切な内容を決定します。</p>
                            </div>
                        </div>
                        <!-- /solutionItems -->
                        <div class="solutionItems">
                            <h2 class="title_h2 brd">裁判離婚</h2>
                            <div class="description">
                                <p class="text">調停離婚でも解決しない場合は、夫婦どちらかが訴訟を起こす「裁判離婚」となります。<br>裁判では夫婦双方が主張を行った後、本人および証人の尋問が行われます。<br>それでも和解が成立しない場合は判決言い渡し期日が指定され、離婚が成立します。</p>
                            </div>
                        </div>
                        <!-- /solutionItems -->
                        <div class="solutionItems">
                            <h2 class="title_h2 brd">裁判上の和解による離婚</h2>
                            <div class="description">
                                <p class="text">裁判の途中でお互いの合意が得られれば裁判上の和解による離婚が成立します。</p>
                                <div class="imgContent">
                                    <img src="<?php echo BASE_URL ?>images/divorce/solution/img_01.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- /solutionItems -->
                    </div>
                </div>
                <!-- /solution__local-01 -->
            </div>
            <!-- /page-main -->
            <?php require_once('../include/footer.php') ?>
            <!-- /footer -->
        </div>
        <script type="text/javascript" src="<?php echo BASE_URL ?>js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL ?>js/script.js"></script>
    </body>
</html>
