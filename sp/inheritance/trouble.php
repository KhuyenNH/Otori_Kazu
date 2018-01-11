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
                                <p class="link_question"><a href="#trb_sec1_1">相続した財産は、すべて課税されるのですか？</a></p>
                                <p class="link_question"><a href="#trb_sec1_2">財産を相続したけれど、相続税が払えません。どうすればいいの？</a></p>
                                <p class="link_question"><a href="#trb_sec1_3">遺産分割が終わらなければ、相続税は払わなくてもいいの？</a></p>
                            </div>
                            <!-- /group_qa -->
                            <div class="group_qa">
                                <h3 class="title_qa_top">【遺産分割】</h3>
                                <p class="link_question"><a href="#trb_sec2_1">遺産分割が終わった後に、他の土地がでてきたのですが、協議はやり直せますか？</a></p>
                                <p class="link_question"><a href="#trb_sec2_2">遺産分割協議が終わった後に、亡くなった父が過去に認知した子どもが現れました。どうすればいいですか？</a></p>
                                <p class="link_question"><a href="#trb_sec2_3">父の遺産分割が終わった後に、別の遺言書が出てきました。どうすればいいですか？</a></p>
                            </div>
                            <!-- /group_qa -->
                            <div class="group_qa">
                                <h3 class="title_qa_top">【遺言書】</h3>
                                <p class="link_question"><a href="#trb_sec3_1">家庭裁判所にパソコンで書かれた遺言書は無効と言われました。本当ですか？</a></p>
                                <p class="link_question"><a href="#trb_sec3_2">一度書いた遺言書を直したいのですが、できますか？</a></p>
                                <p class="link_question"><a href="#trb_sec3_3">長兄が良い財産をもらい、私は不利な財産を残すと遺言に書かれています。<br>納得がいかないのですが？</a></p>
                            </div>
                            <!-- /group_qa -->
                        </div>
                        <div class="post">
                            <h2 class="title_h2 brd">相続税</h2>
                            <div class="description">
                                <h3 class="title_qa" id="trb_sec1_1">相続した財産は、<br>すべて課税されるのですか？</h3>
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
                                        <h4 class="title_highlight">相続税がかからない財産（非課税財産）</h4>
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
                                <p class="toTop">ページTOPへ ▲</p>
                            </div>
                            <!-- /end -->
                            <div class="description">
                                <h3 class="title_qa" id="trb_sec1_2">財産を相続したけれど、相続税が払えません。どうすればいいの？</h3>
                                <p class="answerText">相続税はお金で納付することが原則です。しかし、相続税を支払うためのお金がない場合や、相続した財産を売却しても相続税額のほうが高額だったりする場合、相続した財産そのものを相続税として納付することができます。これを「物納制度」といいます。しかし、相続税が課税されるのは、相続税の基礎控除を超えた場合に限られており、相続する財産が3,600万円以上にならなければ課税されることはありません。</p>
                            </div>
                            <p class="toTop">ページTOPへ ▲</p>
                            <!-- /end -->
                            <div class="description">
                                <h3 class="title_qa" id="trb_sec1_3">遺産分割が終わらなければ、<br>相続税は払わなくてもいいの？</h3>
                                <p class="answerText">遺産分割協議が終わっていなくても、被相続人の死亡を知った日の翌日から10ヶ月以内に申告書を提出し、税金を納める必要があります。これを放置すると、延滞税や15～20％の無申告加算税などが課せられます。</p>
                            </div>
                            <p class="toTop">ページTOPへ ▲</p>
                            <!-- /end -->
                        </div>
                        <!-- /post -->
                        <div class="post">
                            <h2 class="title_h2 brd">遺産分割</h2>
                            <div class="description">
                                <h3 class="title_qa" id="trb_sec2_1">遺産分割が終わった後に、他の土地がでてきたのですが、協議はやり直せますか？</h3>
                                <p class="answerText">一度、成立した遺産分割協議は原則的にやり直すことはできません。新たな財産について遺産分割協議を行う必要があります。ただし、その土地が重要であると判断された場合は、最初の遺産分割協議に瑕疵があると判断され無効になるケースもあります。詳しくは専門家にご相談ください。</p>
                            </div>
                            <p class="toTop">ページTOPへ ▲</p>
                            <!-- /end -->
                            <div class="description">
                                <h3 class="title_qa" id="trb_sec2_2">遺産分割協議が終わった後に、<br>亡くなった父が過去に認知した<br>子どもが現れました。どうすればいいですか？</h3>
                                <p class="answerText">相続人全員が参加しない遺産分割協議は無効ですので、分割協議をやり直す必要があります。</p>
                            </div>
                            <p class="toTop">ページTOPへ ▲</p>
                            <!-- /end -->
                            <div class="description">
                                <h3 class="title_qa" id="trb_sec2_3">父の遺産分割が終わった後に、別の遺言書が出てきました。どうすればいいですか？</h3>
                                <p class="answerText">相続人全員が遺産分割協議の内容に納得済みでも、後から発見された遺言書の内容と異なる場合は、協議の内容は無効となります。しかし、後から見つかった遺言書の内容を確認した相続人全員が、既に済んだ遺産分割協議の中身を優先させたいと考えている場合は、遺産分割をやり直す必要はありません。いずれにせよ、直ちに相続人全員が集まって遺言書の内容を把握し、遺産分割協議をやり直すかの確認が必要です。</p>
                            </div>
                            <p class="toTop">ページTOPへ ▲</p>
                            <!-- /end -->
                        </div>
                        <!-- /post -->
                        <div class="post">
                            <h2 class="title_h2 brd">遺言書</h2>
                            <div class="description">
                                <h3 class="title_qa" id="trb_sec3_1">家庭裁判所にパソコンで書かれた遺言書は無効と言われました。本当ですか？</h3>
                                <p class="answerText">遺言は全文が自筆で書かれている必要があります。一部がパソコンで書かれていても無効となり、遺言書としては認められません。</p>
                            </div>
                            <p class="toTop">ページTOPへ ▲</p>
                            <!-- /end -->
                            <div class="description">
                                <h3 class="title_qa" id="trb_sec3_2">一度書いた遺言書を直したいのですが、できますか？</h3>
                                <p class="answerText">民法1022条に「遺言者はいつでも遺言の方式に従って、その遺言の全部または一部を撤回することができる」とあるように、一度つくった遺言を変更や撤回することが可能です。その場合、新たな遺言を作成して、前の遺言を撤回することになります。詳しくは、弁護士などの専門家に、ご相談ください。</p>
                            </div>
                            <p class="toTop">ページTOPへ ▲</p>
                            <!-- /end -->
                            <div class="description">
                                <h3 class="title_qa" id="trb_sec3_3">長兄が良い財産をもらい、私は不利な財産を残すと遺言に書かれています。<br>納得がいかないのですが？</h3>
                                <p class="answerText">遺言書による相続人の指定や分割の指定は法的に有効ですので、残念ながら全財産を長兄に相続させるということも有効になります。ただし、配偶者や直系の家族（親、子、孫など）には、最低限の財産の相続を確保する権利（遺留分といいます）がありますので、ここでいう長兄に対して遺留分を請求（遺留分減殺請求といいます）することが可能です。</p>
                            </div>
                            <p class="toTop">ページTOPへ ▲</p>
                            <!-- /end -->
                        </div>
                        <!-- /post -->
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
