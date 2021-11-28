<!DOCTYPE html>
<html>
<body>

<h2>Update Berat</h2>

<form method='POST' action="/data/update">
  <input type="hidden" name="id" value="<?php echo $data->id; ?>">
  <label for="date">Date:</label><br>
  <input type="date" id="date" name="date" value="<?php echo $data->date; ?>" required><br>
  <label for="max">Max:</label><br>
  <input type="text" id="max" name="max" value="<?php echo $data->max; ?>" required><br>
  <label for="min">Min:</label><br>
  <input type="text" id="min" name="min" value="<?php echo $data->min; ?>" required><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>

