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
            <h2 class="title_header">労働問題｜<span>労働問題の解決方法</span></h2>
            <!-- /header -->
            <div class="page-main">
                <div id="solution__local-01">
                    <div class="container_box">
                        <div class="solutionItems">
                            <h2 class="title_h2">話し合いによる和解</h2>
                            <div class="description">
                                <p class="text">労働者と雇用者双方の話し合いによる解決。何をどのくらい請求するのが妥当なのか、わからないという方もいらっしゃるでしょう。そんなときは、話し合いにのぞむ前に、弁護士にご相談ください。</p>
                            </div>
                        </div>
                        <!-- /solutionItems -->
                        <div class="solutionItems">
                            <h2 class="title_h2">労働審判</h2>
                            <div class="description">
                                <p class="text">事業主と労働者の間のトラブルを迅速に解決するために設けられた制度です。地方裁判所で行います。そのため、特定社会保険労務士や司法書士は、代理人になることができません。<br>労働審判は、原則として３回以内の審議で審判に至ります。<span class="orange2 bold">短期間で自分の主張を立証する必要に迫られますので、サポートの弁護士を付けられることをおすすめします。</span></p>
                                <p class="text">審判までの流れは、裁判所のHPをご参照ください。労働審判で和解に至らなければ、裁判での解決をめざして訴訟手続きに移ることになります。</p>
                                <p class="linkPlay"><i class="fa fa-play-circle"></i><a href="">相談無料の理由とは？</a></p>
                            </div>
                            <div class="diagram">
                                <h5 class="light">労働審判申立て</h5>
                                <h5>第1回期日</h5>
                                <h5>第2回期日</h5>
                                <h5 class="last">第3回期日</h5>
                                <ul class="branch_diagram">
                                    <li>調停成立</li>
                                    <li class="right">労働審判</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!-- /solutionItems -->
                        <div class="solutionItems">
                            <h2 class="title_h2">仮処分</h2>
                            <div class="description">
                                <p class="text">話し合いによる和解と民事訴訟の中間的な手続きとして、賃金仮払仮処分があります。労働問題の裁判（民事訴訟）は、解決までに時間を要します。１年かかることも珍しくはありません。<br>
                                <span class="bold">仮処分は、近いうちに民事訴訟を提起して、訴訟で解決をはかろうとしている方が、決着までの生活費や裁判費用を捻出するために、解雇された状態のまま、仮に、賃金を支払ってもらう命令を出してもらう制度です。</span><br>
                                仮の命令を出してもらう手続きとはいっても、民事訴訟に類似の手続きであり、解雇の有効・無効について裁判所の判断が示されるため、仮処分手続きでの最終的な解決をめざすこともあります。そのような場合には、民事訴訟を提起する必要はありません。
                            </div>
                        </div>
                        <!-- /solutionItems -->
                        <div class="solutionItems">
                            <h2 class="title_h2">民事訴訟</h2>
                            <div class="description">
                                <p class="text">労働審判や仮処分でも解決を見ない場合は、法廷における裁判でトラブルの解決をはかります。<br>労働問題の場合は、公共の秩序維持という観点から、犯罪を犯した人の量刑などを決める刑事訴訟ではなく、私人の権利についてのトラブルを法律にてらして解決する民事訴訟になります。<br>
                                <span class="bold">民事訴訟に至っては、できる限りご依頼主にストレスや負担をかけないように配慮し、和解、勝訴に至るよう、全力を尽くしてサポートいたします。</span></p>
                            </div>
                        </div>
                        <!-- /solutionItems -->
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
