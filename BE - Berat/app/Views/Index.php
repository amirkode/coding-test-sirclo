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
            <a href="/data/create"><button>Create</button></a>
        </td>
    </tr>
</table>
<table>
  <thead>
    <tr>
        <th>Tanggal</th>
        <th>Max</th>
        <th>Min</th>
        <th>Perbedaan</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($data->data as $d) {
        echo '<tr>
            <td>' . $d->date . '</td>
            <td>' . $d->max . '</td>
            <td>' . $d->min . '</td>
            <td>' . ($d->max - $d->min) . '</td>
            <td><a href="' . '/data/' . $d->id . '' . '"><button>Detail</button></a></td>
        </tr>';
    }
    ?>
  </tbody>
  <tfoot>
    <tr>
        <?php 
            echo '<td>Rata - Rata</td>
            <td>' . $data->avg_min . '</td>
            <td>' . $data->avg_max . '</td>
            <td>' . $data->avg_diff . '</td>'
        ?>
    </tr>  
  </tfoot>
</table>

</body>
</html>

