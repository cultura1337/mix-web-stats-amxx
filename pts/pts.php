<head>
  <link href="pts.css" rel="stylesheet">
</head>


<body>
 <div id="wrapper">
  <div class="made-with-love">
  <h1><i>♥</i> SERVER NAME</h1>
</div>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Player</span></th>
        <th><span>Wins</span></th>
        <th><span>Loss</span></th>
        <th><span>PTS</span></th>
      </tr>
    </thead>
    <tbody>
	  <?php
            $con = new mysqli("Host", "User", "Password", "DataBase");
            $execItems = $con->query("SELECT    * 
									FROM      `cultura_pts` AS `pts` 
									LEFT JOIN `cultura_players` AS `player` 
									ON        pts.player_id = player.id 
									ORDER BY  pts.pts DESC limit 10");
            while($infoItems = $execItems->fetch_array()):
        ?>
      <tr>
        <td class="lalign"><?= $infoItems['player_name'] ?></td>
        <td><?= $infoItems['wins'] ?></td>
        <td><?= $infoItems['loss'] ?></td>
        <td><?= $infoItems['pts'] ?></td>
      </tr>
		<?php endwhile; ?>
    </tbody>
  </table>
 </div> 
</body>