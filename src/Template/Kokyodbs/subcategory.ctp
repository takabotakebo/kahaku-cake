<?php echo $this->Html->charset(); ?>

<div id="contents">
    <div id="category-header">
        <a href="<?php echo $this->Url->build(['controller'=>'Kokyodbs','action'=>'home']); ?>">
                <span class="breadcrumb">ホーム > </span>
        </a>
        <a href="<?php echo $this->Url->build(['controller'=>'Kokyodbs','action'=>'category']); ?>" class="breadcrumb">大分類 > </a>
        <span class="breadcrumb-now"><?php echo $breadcrumbcategory ?></span>
        <h1>中分類</h1>
    </div>
    <div id="category">
        <?php foreach ($kokyodbs as $kokyodb): ?>
		<?php 
		    if(is_null($kokyodb->subcategory)){
			echo 'empty';
		    }else{
 			$subcategory = mb_convert_encoding($kokyodb->subcategory,'UTF-8','auto'); }
		?>
		<a href="<?php echo $this->Url->build(['controller'=>'Kokyodbs','action'=>'familiy',$subcategory]); ?>">
			<div class="category-btn">
				<span><?php echo $subcategory ?></span>
			</div>
		</a>
        <?php endforeach; ?>
    </div>
</div>

