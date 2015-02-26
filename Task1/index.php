<?php
/*-----------------------------------------------------------------------------*
* This form has 2 parts:
* 1. the first time (_submit not in $_POST) the form is displayed
* to the user requesting input data
* 2. when $_POST['submit'] is set, the form has been filled in
* and the variables in $_POST must be validated.
* Fields filled: continue whatever processing you want to do
* Fields not exist or blank, redisplay form with previous values echoed
*-----------------------------------------------------------------------------*/
if (isset($_POST["submit"]) ) {
$errors = array();
// validate the input
if (!isset($_POST['empl']) OR strlen(trim($_POST['empl'])) == 0) {
$errors[] = 'Employee number is invalid';
}
if (!isset($_POST['name']) OR strlen(trim($_POST['name'])) == 0) {
$errors[] = 'Employee name is invalid';
}
// further validation of inpuit
//
// ------------------------------------------------------
// Everything is fine, continue processing
// ------------------------------------------------------
if (!$errors) {
// when values valid process further
exit;
}
// ------------------------------------------------------
// Errors encounterd, display them and show form again
// ------------------------------------------------------
else {
print '<span style="color:red"><ul><li><b>';
print implode('</b></li><li><b>',$errors);
print '</b></li></ul></span>';
}
} // End isset submit
?>
<form name='form1' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Employee number:&nbsp;&nbsp;
<input type ='text' name='empl' maxlength='10' value="<?php echo (isset($_POST['empl'])) ? $_POST['empl'] : ""; ?>" /> <br />
Employee Name:&nbsp;&nbsp;
<input type ='text' name='name' maxlength ='30' value="<?php echo (isset($_POST['name'])) ? $_POST['name'] : ""; ?>" /><br />
<input type ='hidden' name='_submit' value = '1' /> <br />
<input type ='submit' name='submit' value="Submit request"/>
</form>[/php]