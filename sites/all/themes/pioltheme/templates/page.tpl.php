<?php require_once 'header.php'; ?>
<?php print $messages; //non cancellarlo serve a me per stampare le variabili...?>
<div id="content-wrap">
<h2>Qui inizia il contenuto delle pagine....</h2>
<?php print render($page['content']); ?>
<h2>....e qui finisce.</h2>
</div>
<?php require_once 'footer.php'; ?>