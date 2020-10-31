<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="news.css" />
</head>

<body>
  <div class="animation">
    <nav>
      <div class="logo">
        <h1 class="">CO-HELP-VID</h1>
      </div>
      <div class="menu">
        <a href="home.html">Home</a>
        <a href="index.html">Cases</a>
        <a href="news.php">News</a>
        <a href="hacks.html">Hacks</a>
        <a href="helpline.php">Helpline</a>
      </div>
    </nav>

    <h1 id="head">NEWS </h1>
    <?php

    $curl = curl_init();

    curl_setopt_array($curl, [
      CURLOPT_URL => "https://rapidapi.p.rapidapi.com/v1/covid?q=covid&lang=en&media=True",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => [
        "x-rapidapi-host: covid-19-news.p.rapidapi.com",
        "x-rapidapi-key: 76124d1379msh9bf335f3bbcd957p1b04acjsnb879a8bf005f"
      ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      $res = json_decode($response, true);
      
    }
    ?>
    <div class="wrapper">
      <div class="team">
        <div class="team_member">
          <div class="team_img">
            <img src="<?php echo $res['articles'][0]['media']?>" onerror="this.onerror=null; this.src='https://www.insidehighered.com/sites/default/server_files/media/covid-19_logo_500px_0.png'"alt="" />
          </div>

          <h3><?php echo $res['articles'][0]['title']; ?></h3>
          <p class="role"></p>
          <p> <?php echo $res['articles'][0]['summary'] ?></p>
          <a href="<?php echo $res['articles'][0]['link'] ?>">Visit the page for full article </a>
        </div>
        <div class="team_member">
          <div class="team_img">
            <img src="<?php echo $res['articles'][1]['media']?>" onerror="this.onerror=null; this.src='https://www.insidehighered.com/sites/default/server_files/media/covid-19_logo_500px_0.png'"alt="" />
          </div>

          <h3><?php echo $res['articles'][1]['title']; ?></h3>
          <p class="role"></p>
          <p> <?php echo $res['articles'][1]['summary'] ?></p>
          <a href="<?php echo $res['articles'][1]['link'] ?>">Visit the page for full article </a>
        </div>
        <div class="team_member">
          <div class="team_img">
            <img src="<?php echo $res['articles'][2]['media']?>" onerror="this.onerror=null; this.src='https://www.insidehighered.com/sites/default/server_files/media/covid-19_logo_500px_0.png'"alt="" />
          </div>

          <h3><?php echo $res['articles'][2]['title']; ?></h3>
          <p class="role"></p>
          <p> <?php echo $res['articles'][2]['summary'] ?></p>
          <a href="<?php echo $res['articles'][2]['link'] ?>">Visit the page for full article </a>
        </div>
        <div class="team_member">
          <div class="team_img">
            <img src="<?php echo $res['articles'][3]['media']?>" onerror="this.onerror=null; this.src='https://www.insidehighered.com/sites/default/server_files/media/covid-19_logo_500px_0.png'"alt="" />
          </div>

          <h3><?php echo $res['articles'][3]['title']; ?></h3>
          <p class="role"></p>
          <p> <?php echo $res['articles'][3]['summary'] ?></p>
          <a href="<?php echo $res['articles'][3]['link'] ?>">Visit the page for full article </a>
        </div>
        <div class="team_member">
          <div class="team_img">
            <img src="<?php echo $res['articles'][4]['media']?>" onerror="this.onerror=null; this.src='https://www.insidehighered.com/sites/default/server_files/media/covid-19_logo_500px_0.png'"alt="" />
          </div>

          <h3><?php echo $res['articles'][4]['title']; ?></h3>
          <p class="role"></p>
          <p> <?php echo $res['articles'][4]['summary'] ?></p>
          <a href="<?php echo $res['articles'][4]['link'] ?>">Visit the page for full article </a>
        </div>
        <div class="team_member">
          <div class="team_img">
            <img src="<?php echo $res['articles'][5]['media']?>" onerror="this.onerror=null; this.src='https://www.insidehighered.com/sites/default/server_files/media/covid-19_logo_500px_0.png'"alt="" />
          </div>

          <h3><?php echo $res['articles'][5]['title']; ?></h3>
          <p class="role"></p>
          <p> <?php echo $res['articles'][5]['summary'] ?></p>
          <a href="<?php echo $res['articles'][5]['link'] ?>">Visit the page for full article </a>
        </div>
        <div class="team_member">
          <div class="team_img">
            <img src="<?php echo $res['articles'][6]['media']?>" onerror="this.onerror=null; this.src='https://www.insidehighered.com/sites/default/server_files/media/covid-19_logo_500px_0.png'"alt="" />
          </div>

          <h3><?php echo $res['articles'][6]['title']; ?></h3>
          <p class="role"></p>
          <p> <?php echo $res['articles'][6]['summary'] ?></p>
          <a href="<?php echo $res['articles'][6]['link'] ?>">Visit the page for full article </a>
        </div>
        <div class="team_member">
          <div class="team_img">
            <img src="<?php echo $res['articles'][7]['media']?>" onerror="this.onerror=null; this.src='https://www.insidehighered.com/sites/default/server_files/media/covid-19_logo_500px_0.png'"alt="" />
          </div>

          <h3><?php echo $res['articles'][7]['title']; ?></h3>
          <p class="role"></p>
          <p> <?php echo $res['articles'][7]['summary'] ?></p>
          <a href="<?php echo $res['articles'][7]['link'] ?>">Visit the page for full article </a>
        </div>
        <div class="team_member">
          <div class="team_img">
            <img src="<?php echo $res['articles'][8]['media']?>" onerror="this.onerror=null; this.src='https://www.insidehighered.com/sites/default/server_files/media/covid-19_logo_500px_0.png'"alt="" />
          </div>

          <h3><?php echo $res['articles'][8]['title']; ?></h3>
          <p class="role"></p>
          <p> <?php echo $res['articles'][8]['summary'] ?></p>
          <a href="<?php echo $res['articles'][8]['link'] ?>">Visit the page for full article </a>
        </div>
        <div class="team_member">
          <div class="team_img">
            <img src="<?php echo $res['articles'][9]['media']?>" onerror="this.onerror=null; this.src='https://www.insidehighered.com/sites/default/server_files/media/covid-19_logo_500px_0.png'"alt="" />
          </div>

          <h3><?php echo $res['articles'][9]['title']; ?></h3>
          <p class="role"></p>
          <p> <?php echo $res['articles'][9]['summary'] ?></p>
          <a href="<?php echo $res['articles'][9]['link'] ?>">Visit the page for full article </a>
        </div>
        <div class="team_member">
          <div class="team_img">
            <img src="<?php echo $res['articles'][10]['media']?>" onerror="this.onerror=null; this.src='https://www.insidehighered.com/sites/default/server_files/media/covid-19_logo_500px_0.png'"alt="" />
          </div>

          <h3><?php echo $res['articles'][10]['title']; ?></h3>
          <p class="role"></p>
          <p> <?php echo $res['articles'][10]['summary'] ?></p>
          <a href="<?php echo $res['articles'][10]['link'] ?>">Visit the page for full article </a>
        </div>
        <div class="team_member">
          <div class="team_img">
            <img src="<?php echo $res['articles'][11]['media']?>" onerror="this.onerror=null; this.src='https://www.insidehighered.com/sites/default/server_files/media/covid-19_logo_500px_0.png'"alt="" />
          </div>

          <h3><?php echo $res['articles'][11]['title']; ?></h3>
          <p class="role"></p>
          <p> <?php echo $res['articles'][11]['summary'] ?></p>
          <a href="<?php echo $res['articles'][11]['link'] ?>">Visit the page for full article </a>
        </div>
        <div class="team_member">
          <div class="team_img">
            <img src="<?php echo $res['articles'][12]['media']?>" onerror="this.onerror=null; this.src='https://www.insidehighered.com/sites/default/server_files/media/covid-19_logo_500px_0.png'"alt="" />
          </div>

          <h3><?php echo $res['articles'][12]['title']; ?></h3>
          <p class="role"></p>
          <p> <?php echo $res['articles'][12]['summary'] ?></p>
          <a href="<?php echo $res['articles'][12]['link'] ?>">Visit the page for full article </a>
        </div>
        <div class="team_member">
          <div class="team_img">
            <img src="<?php echo $res['articles'][13]['media']?>" onerror="this.onerror=null; this.src='https://www.insidehighered.com/sites/default/server_files/media/covid-19_logo_500px_0.png'"alt="" />
          </div>

          <h3><?php echo $res['articles'][13]['title']; ?></h3>
          <p class="role"></p>
          <p> <?php echo $res['articles'][13]['summary'] ?></p>
          <a href="<?php echo $res['articles'][13]['link'] ?>">Visit the page for full article </a>
        </div>
        <div class="team_member">
          <div class="team_img">
            <img src="<?php echo $res['articles'][14]['media']?>" onerror="this.onerror=null; this.src='https://www.insidehighered.com/sites/default/server_files/media/covid-19_logo_500px_0.png'"alt="" />
          </div>

          <h3><?php echo $res['articles'][14]['title']; ?></h3>
          <p class="role"></p>
          <p> <?php echo $res['articles'][14]['summary'] ?></p>
          <a href="<?php echo $res['articles'][14]['link'] ?>">Visit the page for full article </a>
        </div>
        <div class="team_member">
          <div class="team_img">
            <img src="<?php echo $res['articles'][15]['media']?>" onerror="this.onerror=null; this.src='https://www.insidehighered.com/sites/default/server_files/media/covid-19_logo_500px_0.png'"alt="" />
          </div>

          <h3><?php echo $res['articles'][15]['title']; ?></h3>
          <p class="role"></p>
          <p> <?php echo $res['articles'][15]['summary'] ?></p>
          <a href="<?php echo $res['articles'][15]['link'] ?>">Visit the page for full article </a>
        </div>
        
      </div>
    </div>
  </div>
</body>

</html>