<?php echo $this->Html->charset(); ?>

<div>
    <h3>List</h3>
	<?php
     	   if(is_null($first->category)){
      	     echo 'empty';
           }else{
             $breadcrumbcategory = mb_convert_encoding($first->category,'UTF-8','auto'); }
         ?>

        <span>HOME></span>
	<span><a href="<?php echo $this->Url->build(['controller'=>'Kokyodbs','action'=>'category']); ?>">CATEGORY></a></span>
	<span><a href="<?php echo $this->Url->build(['controller'=>'Kokyodbs','action'=>'subcategory',$breadcrumbcategory]); ?>"><?php echo $breadcrumbcategory ?></a></span>
	<span><?php echo $breadcrumbsubcategory ?></span>
    <table>
    <thead>
        <tr>
            <th>familiy</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($kokyodbs as $kokyodb): ?>
        <tr>
            <td>
                <?php echo $kokyodb ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
</div>
