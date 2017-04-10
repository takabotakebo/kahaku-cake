<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = '皇居の生き物データベース';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('main.css'); ?>	
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

    <?php echo $this->Html->script('http://code.jquery.com/jquery.min.js'); ?>

    <?= $this->fetch('script') ?>
    <link href="/research/db/css/template2.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/common/js/ga.js" charset="UTF-8"></script>
</head>
<script>
$(function () {
    $(".contents_introduction_btn_others").click(function () {
        var i = $(".contents_introduction_btn_others").index(this)
        var p = $(".scroll_contents").eq(i).offset().top;
        $('html,body').animate({ scrollTop: p }, 'slow');
        return false;
    });
});
</script>

<body>
<div id="tmp_wrapper">

    <div id="tmp_header">
          <div id="tmp_header_in"><a href="/index.php"><img src="/research/activities/images/img_logoHeader.gif" width="233" height="48" alt="国立科学博物館ロゴマーク" class="headerLogo" /></a></div>
            <table id="tmp_panNavi"><tr>
              <td><a href="/index.php">ホーム</a> ≫ <a href="/research/index.html">研究と標本・資料</a> ≫ <a href="/research/activities/index.html">研究活動</a> ≫ <a href="/research/activities/project/index.html">総合研究</a> ≫ 皇居の生物相データベース：トップページ</td>
            </tr>
          </table>
    </div>

    <div id="tmp_contents">

        <?= $this->Flash->render() ?>
        <div class="container clearfix">
            <?= $this->fetch('content') ?>
        </div>

    </div>

    <div id="tmp_footer">
          <div id="tmp_footer_in">
            <img src="/research/db/images/img_logoFooter.gif" width="153" height="32" alt="国立科学博物館ロゴマーク" class="tmp_footerLogo" />
                <img src="/common/imgs/icon_copy.gif" width="213" height="10" class="tmp_cr" />
          </div>
    </div>

</div>
</body>
</html>
