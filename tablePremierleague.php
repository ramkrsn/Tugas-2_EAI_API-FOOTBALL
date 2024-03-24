<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'navbar.php';
require 'API/apistanding.php';
?>

<div class="container">
    <div class="bg-white mt-4">
        <table class="table table-bordered">
            <thead style="background-color: #e3f2fd;">
                <tr class="text-center">
                    <th scope="col">Position</th>
                    <th scope="col">Club</th>
                    <th scope="col">Play</th>
                    <th scope="col">Win</th>
                    <th scope="col">Draw</th>
                    <th scope="col">Lose</th>
                    <th scope="col">Point</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datastandingenglish as $team): ?>
                    <tr>
                        <td class="text-center"><?php echo $team['overall_league_position']; ?></td>
                        <td>
                            <img src="<?php echo $team['team_badge']; ?>" alt="Logo team" width="50px">
                            <?php echo $team['team_name']; ?>
                        </td>
                        <td class="text-center"><?php echo $team['overall_league_payed']; ?></td>
                        <td class="text-center"><?php echo $team['overall_league_W']; ?></td>
                        <td class="text-center"><?php echo $team['overall_league_D']; ?></td>
                        <td class="text-center"><?php echo $team['overall_league_L']; ?></td>
                        <td class="text-center"><?php echo $team['overall_league_PTS']; ?></td>
                    </tr>
                <?php endforeach; ?>            
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
