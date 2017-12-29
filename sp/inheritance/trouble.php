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
        <link rel="stylesheet" href="<?php echo BASE_URL ?>css/inheritance.css">
    </head>
    <body>
        <div id="container">
            <?php require_once('../include/header.php') ?>
            <!-- /header -->
            <h2 class="title_header">相続・遺言｜<span>相続トラブルQ&amp;A</span></h2>
            <!-- /header -->
            <div class="page-main pB10">
                <div id="trouble__local-01">
                    <div class="container_box">
                        <div class="table_qa_top">
                            <div class="group_qa">
                                <h3 class="title_qa_top">【相続税】</h3>
                                <p class="link_question"><a href="#">相続した財産は、すべて課税されるのですか？</a></p>
                                <p class="link_question"><a href="#">財産を相続したけれど、相続税が払えません。どうすればいいの？</a></p>
                                <p class="link_question"><a href="#">遺産分割が終わらなければ、相続税は払わなくてもいいの？</a></p>
                            </div>
                            <!-- /group_qa -->
                            <div class="group_qa">
                                <h3 class="title_qa_top">【遺産分割】</h3>
                                <p class="link_question"><a href="#">遺産分割が終わった後に、他の土地がでてきたのですが、協議はやり直せますか？</a></p>
                                <p class="link_question"><a href="#">遺産分割協議が終わった後に、亡くなった父が過去に認知した子どもが現れました。どうすればいいですか？</a></p>
                                <p class="link_question"><a href="#">父の遺産分割が終わった後に、別の遺言書が出てきました。どうすればいいですか？</a></p>
                            </div>
                            <!-- /group_qa -->
                            <div class="group_qa">
                                <h3 class="title_qa_top">【遺言書】</h3>
                                <p class="link_question"><a href="#">家庭裁判所にパソコンで書かれた遺言書は無効と言われました。本当ですか？</a></p>
                                <p class="link_question"><a href="#">一度書いた遺言書を直したいのですが、できますか？</a></p>
                                <p class="link_question"><a href="#">長兄が良い財産をもらい、私は不利な財産を残すと遺言に書かれています。<br>納得がいかないのですが？</a></p>
                            </div>
                            <!-- /group_qa -->
                        </div>
                        <div class="post">
                            <h2 class="title_h2 brd">相続税</h2>
                            <div class="description">
                                <h3 class="title_qa">相続した財産は、<br>すべて課税されるのですか？</h3>
                                <p class="answerText">以下のように、相続税がかかる財産と、かからない財産があります。<br>詳しい内容は、弁護士などの専門家に相談しましょう。</p>
                                <ul class="list_table">
                                    <li>
                                        <h4 class="title_highlight">相続税がかかる財産</h4>
                                        <div class="group_list">
                                            <h5>「本来の相続財産」の例</h5>
                                            <p class="text">①　現金、預貯金、土地・建物およびそれらに関する権利
                                                <br>②　株式、公社債などの「有価証券」
                                                <br>③　自動車や宝石、美術品等の動産
                                                <br>④　特許権や実用新案などの「無体財産権」
                                                <br>⑤　何らかの商品や製品、原材料といった「棚卸し資産」
                                                <br>⑥　果樹、立木、立竹
                                                <br>⑦　その他（ゴルフ会員権、貸付金、未収入金 など）
                                            </p>
                                        </div>
                                        <div class="group_list">
                                            <h5>「みなし相続財産」の例</h5>
                                            <p class="text">①　生命保険金や生命保険に関する権利
                                                <br>②　死亡退職金、退職手当金、功労金、慰労金など
                                                <br>②　死亡退職金、退職手当金、功労金、慰労金など
                                                <br>④　補償期間付定期金に関する権利
                                            </p>
                                        </div>
                                        <div class="group_list">
                                            <h5>「贈与財産」</h5>
                                            <p class="text">①　相続時精算課税制度を利用して生前贈与を受けた贈与財産
                                                <br>②　相続開始前３年以内に贈与を受けたすべての贈与財産
                                            </p>
                                        </div>
                                    </li>
                                    <!-- /li -->
                                    <li>
                                        <h4 class="title_highlight">相続税がかからない財産(非課税財産)</h4>
                                        <p class="text">①　皇室経済法の規定により、行為とともに後嗣が受け継ぐもの
                                            <br>②　墓地や墓石、仏壇、祭具など日常礼拝の対象としているもの（投資対象を除く）
                                            <br>③　宗教、慈善、学術、その他公益を目的とする事業を行う人が取得した財産で、その公益事業に使われることが確実なもの
                                            <br>④　心身障害者共済制度にもとづく給付金の受益権
                                            <br>⑤　相続人が取得した生命保険金などのうち「500万円×法定相続人の数」までの金額
                                            <br>⑥　相続人が取得した死亡退職金などのうち「500万円×法定相続人の数」までの金額
                                            <br>⑦　個人で経営している幼稚園の事業で使われていた財産で一定の要件を満たすもの
                                            <br>⑧　相続税の申告期限までに国や地方公共団体、特定の公益法人に寄与したもの、あるいは特定の公益信託の信託財産とするために支出したもの
                                        </p>
                                    </li>
                                    <!-- /li -->
                                </ul>
                            </div>
                        </div>
                        <!-- /post -->
                        <p class="toTop">ページTOPへ ▲</p>
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
