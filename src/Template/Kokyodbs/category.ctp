<div id="contents">    

    <div id="category-header">
	<a href="<?php echo $this->Url->build(['controller'=>'Kokyodbs','action'=>'home']); ?>">
        	<span class="breadcrumb">ホーム > </span>
	</a>
        <h1>大分類</h1>
    </div>

<div id="category">
    <?php foreach ($kokyodbs as $kokyodb): ?>
		<a href="<?php echo $this->Url->build(['controller'=>'Kokyodbs','action'=>'subcategory',$kokyodb->category]); ?>">
			<div class="category-btn">		
				<span><?php echo $kokyodb->category ?></span>
			</div>
		</a>
    <?php endforeach; ?>
<div>



</div>
