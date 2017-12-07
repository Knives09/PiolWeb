<?php
$large=0;
$medium=0;
$small=0;
$first=true;
$roundLarge=ceil(count($node->field_progetti['und'])/4);
$roundMedium=ceil(count($node->field_progetti['und'])/2);
$roundSmall=count($node->field_progetti['und']);
?>
<!-- carousel for medium & large devices -->
<div id="carousel-example-generic-0" class="carousel slide visible-md visible-lg"> 
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php for($i=0;$i<$roundLarge;$i++){ ?>
        <li data-target="#carousel-example-generic-0" data-slide-to="<?php echo($i); ?>" class="active"></li>
        <?php } ?>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner"> 
        <!-- Slide -->
<?php foreach ($node->field_progetti['und'] as $key){ 
    if($large==0){ ?>
<div class="item <?php if($first){echo("active"); $first=false;} ?>">
            <div class="row">
<?php } ?>
                <div class="col-xs-3"><a href="<?php echo($key['target_id']); ?>"> <img src="<?php echo(file_create_url($key['entity']->field_anteprima['und'][0]['uri'])); ?>" alt=""/>
                    <div class="carousel-caption"><?php echo($key['entity']->title); ?></div>
                  </a>
                </div>
<?php $large++; if($large==4){$large=0; echo("</div></div>");} } ?>
</div>
</div>
    <!-- Controls --> 
    <a class="left carousel-control" href="#carousel-example-generic-0" data-slide="prev"> <span class="icon-prev"></span> </a> <a class="right carousel-control" href="#carousel-example-generic-0" data-slide="next"> <span class="icon-next"></span> </a> </div></div>


<!-- carousel for small devices -->
<div id="carousel-example-generic-1" class="carousel slide visible-sm"> 
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php for($i=0;$i<$roundMedium;$i++){ ?>
        <li data-target="#carousel-example-generic-1" data-slide-to="<?php echo($i); ?>" class="active"></li>
        <?php } ?>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner"> 
        <!-- Slide -->
<?php $first=true; foreach ($node->field_progetti['und'] as $key){ 
    if($medium==0){ ?>
<div class="item <?php if($first){echo("active"); $first=false;} ?>">
            <div class="row">
<?php } ?>
                 <div class="col-xs-6"><a href="<?php echo($key['target_id']); ?>"> <img src="<?php echo(file_create_url($key['entity']->field_anteprima['und'][0]['uri'])); ?>" alt=""/>
                    <div class="carousel-caption"><?php echo($key['entity']->title); ?></div>
                  </a>
                </div>
<?php $medium++; if($medium==2){$medium=0; echo("</div></div>");} } ?>
</div>
</div>
    <!-- Controls --> 
    <a class="left carousel-control" href="#carousel-example-generic-1" data-slide="prev"> <span class="icon-prev"></span> </a> <a class="right carousel-control" href="#carousel-example-generic-1" data-slide="next"> <span class="icon-next"></span> </a> </div></div>

<!-- carousel for extra-small devices -->
<div id="carousel-example-generic-2" class="carousel slide visible-xs"> 
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php for($i=0;$i<$roundSmall;$i++){ ?>
        <li data-target="#carousel-example-generic-2" data-slide-to="<?php echo($i); ?>" class="active"></li>
        <?php } ?>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner"> 
        <!-- Slide -->
<?php $first=true; foreach ($node->field_progetti['und'] as $key){ 
    if($small==0){ ?>
<div class="item <?php if($first){echo("active"); $first=false;} ?>">
            <div class="row">
<?php } ?>
                 <div class="col-xs-12"><a href="<?php echo($key['target_id']); ?>"> <img src="<?php echo(file_create_url($key['entity']->field_anteprima['und'][0]['uri'])); ?>" alt=""/>
                    <div class="carousel-caption"><?php echo($key['entity']->title); ?></div>
                  </a>
                </div>
<?php $small++; if($small==1){$small=0; echo("</div></div>");} } ?>
</div>
    <!-- Controls --> 
    <a class="left carousel-control" href="#carousel-example-generic-2" data-slide="prev"> <span class="icon-prev"></span> </a> <a class="right carousel-control" href="#carousel-example-generic-2" data-slide="next"> <span class="icon-next"></span> </a> </div></div>