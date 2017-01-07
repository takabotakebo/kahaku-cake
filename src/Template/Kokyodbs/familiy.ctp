<?php echo $this->Html->charset(); ?>

<div id="contents">
    <div id="category-header">
	<?php
     	   if(is_null($first->category)){
      	     echo 'empty';
           }else{
             $breadcrumbcategory = mb_convert_encoding($first->category,'UTF-8','auto'); }
         ?>

	<a href="<?php echo $this->Url->build(['controller'=>'Kokyodbs','action'=>'home']); ?>">
                <span class="breadcrumb">ホーム > </span>
        </a>
        <a href="<?php echo $this->Url->build(['controller'=>'Kokyodbs','action'=>'category']); ?>" class="breadcrumb">大分類 > </a>
	<span><a href="<?php echo $this->Url->build(['controller'=>'Kokyodbs','action'=>'subcategory',$breadcrumbcategory]); ?>" class="breadcrumb"><?php echo $breadcrumbcategory ?> > </a></span>
	<span class="breadcrumb-now"><?php echo $breadcrumbsubcategory ?></span>
	<h1><?php echo $breadcrumbsubcategory ?></h1>

    </div>

    <div id="category">
    <?php foreach ($kokyodbs as $kokyodb): ?>
	<div class="familiy-table">
    	<table border="1" width="800">
    		<thead>
        	    <tr>
            		<th>familiy</th>
        	    </tr>
    		</thead>
    		<tbody>
        	    <tr>
                	<td>
                	    <span>大分類</span>
            		</td>
			<td>
			    <?php echo $kokyodb->category; ?>
			</td>
        	    </tr>
                    <tr>
                        <td>
                            <span>中分類</span>
                        </td>
                        <td>
                            <?php echo $kokyodb->subcategory; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>学名</span>
                        </td>
                        <td>
                            <?php echo $kokyodb->scientific_name; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>和名</span>
                        </td>
                        <td>
                            <?php echo $kokyodb->japanese_name; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>綱（学名）</span>
                        </td>
                        <td>
                            <?php echo $kokyodb->class_taxon; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>綱（和名）</span>
                        </td>
                        <td>
                            <?php echo $kokyodb->class_taxon_ja; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>目（学名）</span>
                        </td>
                        <td>
                            <?php echo $kokyodb->order_taxon; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>目（和名）</span>
                        </td>
                        <td>
                            <?php echo $kokyodb->order_taxon_ja; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>科（学名）</span>
                        </td>
                        <td>
                            <?php echo $kokyodb->family; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>科（和名）</span>
                        </td>
                        <td>
                            <?php echo $kokyodb->family_ja; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>亜科（学名）</span>
                        </td>
                        <td>
                            <?php echo $kokyodb->subfamily; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>亜科（和名）</span>
                        </td>
                        <td>
                            <?php echo $kokyodb->subfamily_ja; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>第一期 (bool)</span>
                        </td>
                        <td>
                            <?php 
				if($kokyodb->first_survey){
				    echo $kokyodb->first_survey;
				}else{
				    echo "none";
				}
			     ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>モニタリング (bool)</span>
                        </td>
                        <td>
                            <?php
				if($kokyodb->monitor_survey){
                                    echo $kokyodb->monitor_survey;
                                }else{
                                    echo "none";
                                } 
 			    ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>第二期 (bool)</span>
                        </td>
                        <td>
                            <?php
                                if($kokyodb->second_survey){
                                    echo $kokyodb->second_survey;
                                }else{
                                    echo "none";
                                }

 			    ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>環境省レッドリストランク</span>
                        </td>
                        <td>
                            <?php echo $kokyodb->redlist_moe; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>東京都レッドリストランク</span>
                        </td>
                        <td>
                            <?php echo $kokyodb->redlist_tokyo; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>参考文献</span>
                        </td>
                        <td>
                            <?php echo $kokyodb->bibiliographies; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>備考</span>
                        </td>
                        <td>
                            <?php echo $kokyodb->notes; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>リンク</span>
                        </td>
                        <td>
                            <a><?php echo $kokyodb->link_url; ?></a>
                        </td>
                    </tr>
		</tbody>
	</table>
	</div>
    <?php endforeach; ?>
    </div>

</div>
