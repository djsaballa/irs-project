<?php
  $zipcode = $_POST['zipcode'];
  $state = $_POST['state'];

  $table = file_get_contents('https://www.irs.gov/efile-index-taxpayer-search?zip='. $zipcode .'&state='. $state);
  $dom = new DOMDocument;


  $dom->loadHTML($table);
  $dom->preserveWhiteSpace = false;
  $tables = $dom->getElementsByTagName('table');

  foreach ($tables as $singleTable) {
    try {
      $rows = $singleTable->getElementsByTagName('tr');
                  
          foreach ($rows as $row) {
              $cols = $row->getElementsByTagName('td');
              $providersBR = nl2br($cols[1]->textContent);
              $providersExplode = preg_split('/<br[^>]*>/i', $providersBR);
              $providerInfo = [
                "businessName" => $providersExplode[0],
                "name" => $providersExplode[3],
                "contactNumber" => $providersExplode[4]
              ];
              $providers[] = $providerInfo;
          }
      } catch (Exception $ex) {
          print_r($ex);
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IRS Project</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  </head>
  <body class="container-fluid p-5" style="background-color: rgb(240, 236, 230);">
    <h1 class="m-5">Authorized IRS e-file Providers</h1>
    <table id="table" class="table table-striped">
      <thead>
          <tr>
              <th>Business Name</th>
              <th>Name</th>
              <th>Phone Number</th>
          </tr>
      </thead>
      <tbody>
        <?php
          foreach($providers as $index => $value):
        ?>
          <tr>
              <td><?php echo $value["businessName"] ?></td>
              <td><?php echo $value["name"] ?></td>
              <td><?php echo $value["contactNumber"] ?></td>
          </tr>
        <?php
          endforeach;
        ?>
        </tbody>
    </table>
    <a href="index.php">
      <button class="btn btn-secondary">
        Search Again
      </button>
    </a>

    <script>
      let table = new DataTable('#table');
    </script>
  </body>
</html>
