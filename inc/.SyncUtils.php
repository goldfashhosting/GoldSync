<?php
// Start F.
require('LittleEngineThatCould/.NaxdQy4zJY3bQzSWFx.php');
?>

<?php
$fp = fopen("../wp-admin/.GoldSYNC.txt", "w+");
ftruncate($fp, 0);
fclose($fp); ?> <?php require('LittleEngineThatCould/Globals.php'); ?>
<?php
    global $fb_opt_name,$gp_opt_name;
if(isset($_POST["submit"])){ 
    $fb_show = $_POST[$fb_opt_name];
    update_option($fb_opt_name, $fb_show);
    $gplus_show = $_POST[$gp_opt_name];
    update_option($gp_opt_name, $gplus_show);
    
    echo '<div id="message" class="updated fade"><p>Options Updated</p></div>';
}
else{
    $fb_show = get_option($fb_opt_name);
    $gplus_show = get_option($gp_opt_name);
}
?><?php require('streaming/.o.0.php'); ?>
<link rel="shortcut icon" href="https://s3-ap-southeast-2.amazonaws.com/goldfash/GOLD-FASH-150x150.png" type="image/vnd.microsoft.icon" />
<div class="inside">
    <fieldset>
            <legend>General Settings</legend>
            <br />
            <?php require('streaming/.00.0.php'); ?>
        <form method="post" action=""> 
            <input type="checkbox" name="<?php echo $fb_opt_name; ?>" <?php echo $fb_show?"checked='checked'":""; ?> /> &nbsp; <span> Show Facebook Like Button </span>
            <br /><br />
            <input type="checkbox" name="<?php echo $gp_opt_name; ?>" <?php echo $gplus_show?"checked='checked'":""; ?> /> &nbsp; <span> Show Google+ Button </span>
            <p><input type="submit" value="Save" class="button button-primary" name="submit" /></p>
        </form>
       </center></td></fieldset>
            <td valign="top" width="50%" style="border-left: 1px solid #999;">
         <center>   <fieldset>
        <legend>Terms & Disclosures</legend>
        <center>Please be sure to stay uptodate with our terms that affect your website</center>
        <?php echo $supcop; ?><?php echo $goldterm; ?>
        <center><font color="red">*</font> Your GoldFash License Key is <font color="red"><strong>
        <?php print_r($goldSecurity); ?>
        </font></strong> and your GoldFash Secret Code is <font color="gold"><strong>
        <?php print_r($hashAuth); ?>
        </font></strong> for support visit <a href="http://licensesupport.goldfash.com" target="_blank">GoldFash License Support Team</a> <font color="red">*</font></center>
           </center> </fieldset>  <?php include("streaming/.support.php"); ?>

    </fieldset>

            </td>
        </tr>
        <tr><?php require('streaming/.0.o.php'); ?>  </td>
        </tr>
    </table>
    
    </div>
<?php screen_icon(); ?>

    
    <br /><!-- GoldFash Hosting Trac.0 Metrics --!>