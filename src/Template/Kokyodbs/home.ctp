<div id="contents">

	<div id="contents_introduction">
		<div id="contents_introduction_top">
			<?php echo $this->Html->image('introduction_img.png',array('id' => 'contents_introduction_gazou')); ?>
			<div id="contents_introduction_right">
				<h1 class="contents_introduction_h1">皇居の生き物データベース</h1>
				<p class="text_weight1">国立科学博物館では平成8年から25年まで継続して皇居の生物を調査したくさんの動物・植物・菌類などを確認しました。</p>
				<a href="<?php echo $this->Url->build(['controller'=>'Kokyodbs','action'=>'category']); ?>">
					<div class="contents_introduction_btn_data">データベースを見る</div>
				</a>
			</div>
		</div>
		<div id="contents_introduction_btns">
			<div class="contents_introduction_btn_others">
                       		<span>調査の概要</span>
                   	</div>
                   	<div class="contents_introduction_btn_others">
                       		<span>皇居の自然</span>
                   	</div>
                   	<div class="contents_introduction_btn_others">
                       		<span>引用文献</span>
                   	</div>
		</div>
	</div>

	<hr class="line1">
        <hr class="line2">

	
        <div id="contents_main" >
                 <h1>皇居の生き物データベース</h1>
                 <hr class="line3">
                 <div class="contents_topic1">
                    	<h2>簡単な概要</h2>
                    	<p class="text_weight2">国立科学博物館では平成8年から25年まで継続して皇居の生物を調査したくさんの動物・植物・菌類などを確認しました。</p>
                 </div>
                 <div class="contents_topic2">
                    	<h2>スタッフ一覧</h2>
              	 	<p class="text_weight3" >スタッフ名</p>
			<p class="text_weight3" >スタッフ名</p>
                        <p class="text_weight3" >スタッフ名</p>
                 </div>
		 <a href="<?php echo $this->Url->build(['controller'=>'Kokyodbs','action'=>'category']); ?>">
                 	<div id="contents_main_btn_data">
                 		<span>データベースを見る</span>
       		 	</div>
		 </a>
        </div>

        <hr class="line1">
        <hr class="line2">


        <div id="contents_outline" class="scroll_contents">
                 <h1>調査の概要</h1>
                 <hr class="line3">
                 <div class="contents_topic1">
                 	<h2>皇居調査の概要</h2>
                    	<p class="text_weight2">〇〇団体と協力し平成8年から毎年◯月◯日から◯月◯日までの◯日間かけて調査。調査の方法は.......</p>
                 </div>
                 <div class="contents_topic2">
                    	<h2>参考文献(紀要)の紹介とリンク</h2>
                    	<p class="text_weight3">〇〇団体ーウンタラカンタラ</p>
                 </div>
        </div>

        <hr class="line1">
        <hr class="line2">


            <div id="contents_nature" class="scroll_contents">
                <h1>皇居の自然紹介</h1>
                <hr class="line3">
                <div class="contents_topic1">
                    <h2>皇居の自然の概要</h2>
                    <p class="text_weigh2">皇居周辺には多くの生物が生息できる環境が整っています。(皇居の説明)</p>
                </div>

                <div class="contents_topic2">
                    <h2>各種解説ページへのリンク</h2>
                    <p class="text_weight3">管内庁ホームページ</p>
                </div>

            </div>

        <hr class="line4">

	<div id="contents_quote" class="scroll_contents">
                <h1>引用文献</h1>
                <div class="contents_topic3">
                    <p class="text_weight2">引用文献の羅列</p>
                </div>

       </div>


</div>
