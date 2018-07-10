<h2>create user</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('user/create'); ?>

<label for="userName">userName</label>
<input type="input" name="userName" /><br />
<label for="phoneNumber">phoneNumber</label>
<input type="input" name="phoneNumber" /><br />
<label for="who">who</label>
<input type="input" name="who" /><br />
<label for="whatCompany">whatCompany</label>
<input type="input" name="whatCompany" /><br />
<label for="whatFor">whatFor</label>
<input type="input" name="whatFor" /><br />

<input type="submit" name="submit" value="Create user item" />

</form>
