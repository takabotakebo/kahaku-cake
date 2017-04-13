<?php echo $this->Html->charset(); ?>
<div id="contents-table">
    <div id="category-header">

        <?php echo $this->Html->image('pankuzulogo.png',array('id' => 'pankuzu_logo')); ?>
	<?php
     	   if(is_null($first->category)){
      	     echo 'empty';
           }else{
             $breadcrumbcategory = mb_convert_encoding($first->category,'UTF-8','auto'); }
         ?>

	<a href="../../../index.html">
                <span class="breadcrumb">ホーム > </span>
        </a>
        <a href="<?php echo $this->Url->build(['controller'=>'Kokyodbs','action'=>'category']); ?>" class="breadcrumb">大分類 > </a>
	<span><a href="<?php echo $this->Url->build(['controller'=>'Kokyodbs','action'=>'group',$breadcrumbcategory]); ?>" class="breadcrumb"><?php echo $breadcrumbcategory ?> > </a></span>
	<span class="breadcrumb-now"><?php echo $breadcrumbsubcategory ?></span>
	<h1><?php echo $breadcrumbcategory . "-" . $breadcrumbsubcategory ?></h1>

    </div>

    <div id="table-box">
    <table class="family-table" cellspacing="0" cellpadding="0" style="table-layout: auto;">
        <tbody>
               <tr>
                        <th>学名</th>
                        <th>和名</th>
                        <th>網(和名)</th>
                        <th>網(学名)</th>
                        <th>目(学名)</th>
                        <th>目(和名)</th>
                        <th>科(学名)</th>
                        <th>科(和名)</th>
                        <th>亜科(学名)</th>
                        <th>亜科（和名）</th>
                        <th>第一期</th>
                        <th>モニタリング</th>
                        <th>第二期</th>
                        <th>参考文献</th>
                        <th>備考</th>
                        <th>リンク</th>
                </tr>
		<?php foreach ($kokyodbs as $kokyodb): ?>
        	    <tr>
                        <td>
                            <?php echo $kokyodb->scientific_name; ?>
                        </td>
                        <td>
                            <?php echo $kokyodb->japanese_name; ?>
                        </td>
                        <td>
                            <?php echo $kokyodb->class_taxon; ?>
                        </td>
                        <td>
                            <?php echo $kokyodb->class_taxon_ja; ?>
                        </td>
                        <td>
                            <?php echo $kokyodb->order_taxon; ?>
                        </td>
                        <td>
                            <?php echo $kokyodb->order_taxon_ja; ?>
                        </td>
                        <td>
                            <?php echo $kokyodb->family; ?>
                        </td>
                        <td>
                            <?php echo $kokyodb->family_ja; ?>
                        </td>
                        <td>
                            <?php echo $kokyodb->subfamily; ?>
                        </td>
                        <td>
                            <?php echo $kokyodb->subfamily_ja; ?>
                        </td>
                        <td>
                            <?php 
				if($kokyodb->first_survey){
				    echo $kokyodb->first_survey;
				}else{
				    echo "×";
				}
			     ?>
                        </td>
                        <td>
                            <?php
				if($kokyodb->monitor_survey){
                                    echo $kokyodb->monitor_survey;
                                }else{
                                    echo "×";
                                } 
 			    ?>
                        </td>
                        <td>
                            <?php
                                if($kokyodb->second_survey){
                                    echo $kokyodb->second_survey;
                                }else{
                                    echo "×";
                                }

 			    ?>
                        </td>
                        <td>
                            <?php echo $kokyodb->bibiliographies; ?>
                        </td>
                        <td>
                            <?php echo $kokyodb->notes; ?>
                        </td>
                        <td>
                            <?php
				if($kokyodb->link_url){
				     echo "<a href='". $kokyodb->link_url . "'>解説</a>"; 	
				}else{
				}
                            ?>
			 </td>
                    </tr>
    		<?php endforeach; ?>
	</tbody>
    </table>
    <p>*参考文献の詳細は<a href="">こちら</a>をご覧ください</p>
    </div>

</div>
