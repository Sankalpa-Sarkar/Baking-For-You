<?php
 /* Template Name: FormTemplate */?>

<form method="get" enctype="application/x-www-form-urlencoded" action="/html/codes/html_form_handler.cfm">

<p>
<label>Name
<input type="text" name="customer_name" required>
</label> 
</p>

<p>
<label>Email 
<input type="email" name="email_address">
</label>
</p>

<fieldset>
<legend>How skilled would you say you are in baking?</legend>
<p><label> <input type="radio" name="baking" required value="Beginner"> Beginner </label></p>
<p><label> <input type="radio" name="baking" required value="Intermediate"> Intermediate </label></p>
<p><label> <input type="radio" name="baking" required value="Advanced"> Advanced </label></p>
</fieldset>

<fieldset>
<legend>Ingredients</legend>
<p><label> <input type="checkbox" name="ing" value="Sugar"> Sugar  <input type="checkbox" name="ing" value="Butter"> Butter  <input type="checkbox" name="ing" value="Eggs"> Eggs </label></p>
<p><label> <input type="checkbox" name="ing" value="Flour"> Flour <input type="checkbox" name="ing" value="Vanilla extract"> Vanilla extract <input type="checkbox" name="ing" value="Salt"> Salt </label></p>
<p><label> <input type="checkbox" name="ing" value="Baking soda"> Baking soda <input type="checkbox" name="ing" value="Baking Powder"> Baking Powder <input type="checkbox" name="ing" value="Brown sugar"> Brown sugar </label></p>
<p><label> <input type="checkbox" name="ing" value="Cream cheese"> Cream cheese <input type="checkbox" name="ing" value="Lemon"> Lemon <input type="checkbox" name="ing" value="Cocoa powder"> Cocoa powder </label></p>
<p><label> <input type="checkbox" name="ing" value="Chocolate"> Chocolate  <input type="checkbox" name="ing" value="Chocolate chips"> Chocolate chips  <input type="checkbox" name="ing" value="Sour cream"> Sour cream </label></p>
<p><label> <input type="checkbox" name="ing" value="Cornstarch"> Cornstarch  <input type="checkbox" name="ing" value="Vegetable oil"> Vegetable oil  <input type="checkbox" name="ing" value="Buttermilk"> Buttermilk </label></p>
<p><label> <input type="checkbox" name="ing" value="Milk"> Milk  <input type="checkbox" name="ing" value="Cinnamon"> Cinnamon  <input type="checkbox" name="ing" value="Oreo"> Oreo </label></p>
<p><label> <input type="checkbox" name="ing" value="Blueberries"> Blueberries  <input type="checkbox" name="ing" value="Graham crackers"> Graham crackers  <input type="checkbox" name="ing" value="Coffee"> Coffee </label></p>
<p><label> <input type="checkbox" name="ing" value="Whipping cream"> Whipping cream  <input type="checkbox" name="ing" value="Vinegar"> Vinegar  <input type="checkbox" name="ing" value="Food colouring"> Food colouring </label></p>
<p><label> <input type="checkbox" name="ing" value="Butterscotch chips"> Butterscotch chips  <input type="checkbox" name="ing" value="Pie Crust"> Pie Crust  <input type="checkbox" name="ing" value="Apples"> Apples </label></p>
<p><label> <input type="checkbox" name="ing" value="Bread"> Bread  <input type="checkbox" name="ing" value="Cream of tartar"> Cream of tartar  <input type="checkbox" name="ing" value="Pumpkin (canned)"> Pumpkin (canned) </label></p>
<p><label> <input type="checkbox" name="ing" value="Ground Ginger"> Ground Ginger  <input type="checkbox" name="ing" value="Ground Cloves"> Ground Cloves  <input type="checkbox" name="ing" value="Peanut Butter"> Peanut Butter </label></p>
<p><label> <input type="checkbox" name="ing" value="Lime Zest"> Lime Zest  <input type="checkbox" name="ing" value="Strawberries"> Strawberries  <input type="checkbox" name="ing" value="Heavy Cream"> Heavy Cream </label></p>


</fieldset>
<p><button>Find Recipes</button></p>

</form>

<?php get_footer(); ?>