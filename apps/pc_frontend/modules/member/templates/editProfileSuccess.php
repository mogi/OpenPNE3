<form action="<?php echo url_for('member/editProfile') ?>" method="post">
<table>
<?php echo $memberForm ?>
<?php echo $profileForm ?>
<tr>
<td colspan="2"><input type="submit" value="登録" /></td>
</tr>
</table>
</form>