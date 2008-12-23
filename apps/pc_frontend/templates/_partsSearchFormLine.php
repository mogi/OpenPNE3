<?php include_customizes($id, 'before') ?>
<div id="<?php echo $id ?>" class="parts searchFormLine">
<?php include_customizes($id, 'top') ?>
<form action="default/search">
<ul>
<li><?php echo image_tag('icon_search.gif', array('alt' => 'search')) ?></li>
<li>
<input type="hidden" value="action" name="search" />
<input type="text" size="30" value="" name="search_query" />
</li>
<li>
<select name="search_module">
<?php include_customizes($id, 'itemFirst') ?>
<?php foreach($option['items'] as $key => $value) : ?>
<option value="<?php echo $key ?>"><?php echo $value ?></option>
<?php endforeach; ?>
<?php include_customizes($id, 'itemLast') ?>
</select>
</li>
<li>
<input type="submit" value="<?php echo $option['button'] ?>" />
</li>
</ul>
</form>
<?php include_customizes($id, 'bottom') ?>
</div>
<?php include_customizes($id, 'after') ?>