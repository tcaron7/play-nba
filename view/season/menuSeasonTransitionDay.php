<?php
	/** Description
	  * Displays the transaction menu
	  */
	  
	/** Parameters
	  * $sectionTitle
	  */
?>
<section>
<?php
$sectionTitle = 'NBA Next Season';
echo '<div class="sectionHeader">' . $sectionTitle . '</div>';
if(checkDayOver() == 0)
{ ?>
    <div class="sectionBody">
    <p>It is time to prepare the next NBA Season.</p>
    <p>Follow <a href="<?php echo $GLOBALS['router']->generateUrl( 'season_create' ); ?>">this link</a> to create new season.</p>
    </div>
<?php }
else
{ ?>
    <div class="sectionBody">
    <p>It is time to start the next NBA Season.</p>
    <p>Click on the button next day to start the new season.</p>
    </div>
<?php } ?>


</section>