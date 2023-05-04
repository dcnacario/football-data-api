<?php 
    require('standings.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
        $competition = $data['competition'];
        ?>
        <img src="<?php echo $competition['emblem']?>"
        height="200px" style="display: block; margin-left: auto; margin-right: auto;"
        >
        <table class="styled-table">
            <thead>
            <tr>
                <th>Position</th>
                <th colspan="2">Team/Club</th>
                <th>MP</th>
                <th>W</th>
                <th>D</th>
                <th>L</th>
                <th>Points</th>
                <th>Form</th>
            </tr>
            </thead>
            <?php 
                $standings = $data['standings'][0]['table'];
                foreach($standings as $teams){
            ?>
            <tr>
                <td><?php echo $teams['position']?></td>
                <td><img src="<?php echo $teams['team']['crest']?>" width="40" height="40"></td>
                <td><?php echo $teams['team']['name']?></td>
                <td><?php echo $teams['playedGames']?></td>
                <td><?php echo $teams['won']?></td>
                <td><?php echo $teams['draw']?></td>
                <td><?php echo $teams['lost']?></td>
                <td><?php echo $teams['points']?></td>
                <td><?php echo $teams['form']?></td>
            </tr>
            <?php 
                }
            ?>
        </table>
    </body>
</html>