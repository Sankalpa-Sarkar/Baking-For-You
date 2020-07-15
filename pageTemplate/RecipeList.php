<?php
 /* Template Name: SampleTemp */?>

<?php get_header(); ?>
<h3>Here are the Recipes for You!</h3>

<?php
global $wpdb;
$links = $wpdb->get_results("SELECT Link FROM ingredients WHERE Ingredient1='Sugar' AND Ingredient2='Butter' AND Ingredient3='Eggs' AND Ingredient4='Flour' AND Ingredient5='Vanilla Extract' AND Ingredient6='Salt';");
$names = $wpdb->get_results("SELECT recipe_name FROM ingredients WHERE Ingredient1='Sugar' AND Ingredient2='Butter' AND Ingredient3='Eggs' AND Ingredient4='Flour' AND Ingredient5='Vanilla Extract' AND Ingredient6='Salt';");
?>

<table class="table table-hover">

<?php foreach($links as $link)
{ ?>

<tr>
<a href='http://<?php echo $link->Link; ?>' target='_blank' > RECIPE LINK </a><br><br>
<br><br>
</tr>

<?php } ?>

</table>
<?php get_sidebar();?>
<?php get_footer(); ?>




