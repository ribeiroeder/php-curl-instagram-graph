<div id="instagram-feed1" class="instagram_feed">
  <?php
  $fields = "id,media_type,media_url,thumbnail_url,timestamp,permalink,caption";
  $token = "ENTER_YOUR_TOKEN_ID_HERE";
  $limit = 6; // Set a number of display items

  function fetchData($url){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_TIMEOUT, 20);
      $result = curl_exec($ch);
      curl_close($ch);
      return $result;
  }

  $result = fetchData("https://graph.instagram.com/me/media?fields={$fields}&access_token={$token}&limit={$limit}");
  $result_decode = json_decode($result, true);

  foreach ($result_decode["data"] as $post) : 

  $caption = $post["caption"];

  $permalink = $post["permalink"];
  $media_type = $post["media_type"];

  if ($media_type == "VIDEO" ) {
    $media_url = $post["thumbnail_url"]; }
  else {
    $media_url = $post["media_url"];
  }
  ?>
  <div class="instagram_new">
    <a class="insta-link" href="<?php echo $permalink; ?>" rel="noopener" target="_blank">
      <img src="<?php echo $media_url; ?>" loading="lazy" alt="<?php echo $caption; ?>" class="insta-image">
    </a>
  </div>
  <?php endforeach; ?>
</div>