<?php 


$cu = curl_init();

$url = "https://api.exchangeratesapi.io/2010-01-15?symbols=USD,EEK";

curl_setopt($cu, CURLOPT_URL , $url);

curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($cu);


$decoded = json_decode($resp, true);
print_r($decoded);
 

curl_close($cu);




?>
<style>
table {
  width:50%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #fff;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: #eee;
  color: black;
}
</style>

<table id="t01">
  <tr>
    <th>Currency</th>
    <th>Exchange rate (base <?php print($decoded['base']);?>)</th>
  </tr>
  <?php foreach($decoded['rates'] as $key => $value ){
      echo"<tr>
      <td>".$key."</td>
      <td>".$value."</td>
    </tr>";
  }?>
  

</table>