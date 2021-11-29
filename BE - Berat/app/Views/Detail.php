<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<table>
    <tr>
        <td>
        <h2>BE Berat</h2>
        </td>
        <td>
            <a href="/data/<?php echo $data->id; ?>/edit"><button>Edit</button></a>
        </td>
    </tr>
</table>
<table>
  <thead>
    <tr>
        <th>Tanggal</th>
        <th><?php echo $data->date; ?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>Max</td>
        <td><?php echo $data->max; ?></td>
    </tr>
    <tr>
        <td>Min</td>
        <td><?php echo $data->min; ?></td>
    </tr>
    <tr>
        <td>Perbedaan</td>
        <td><?php echo $data->max - $data->min; ?></td>
    </tr>
  </tbody>
</table>

</body>
</html>

