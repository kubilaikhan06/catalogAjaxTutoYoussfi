<?php require_once("C:\wamp64\www\CatalogAjaxTutoYoussfi\conn.php") ?>
<?php
    $req = "select * from cayegories";
    $rs = mysql_query($req);
?>

<select>
    <?php while ($cat = mysql_fetch_assoc($rs)) { ?>
        <option value="<?php echo ($cat['ID_CAT']) ?>" ><?php echo ($cat['NOM_CAT']) ?>
        </option>
    
    
<?php }?>
    

</select>