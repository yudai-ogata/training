<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <meta name="Keywords" content="スリランカ, カフェ, コーヒー">
  <meta name="description" content="株式会社ZiQの研修プログラム用サンプルサイトです。">
  <title>Sri Lan Cafe | CONTACT</title>
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css">
</head>
<body>
  <header class="header">
    <div class="header_box">
      <a href="index.html"><img class="header_logo" src="images/logo2.svg" alt="logo"></a>
      <img class="header_img" src="images/header.jpg" alt="header">
      <h1 class="header_ttl hidden">Sri Ran Cafe</h1>
    </div>
    
    <nav class="nav">
      <ul class="navList">
        <li class="navItem">
          <a class="navItem_link" href="#">HOME<br>
            <span class="navItem_sub">-ホーム-</span>
          </a>
        </li>
        <li class="navItem">
          <a class="navItem_link" href="#">SPECIAL<br>
            <span class="navItem_sub">-こだわり-</span>
          </a>
        </li>
        <li class="navItem">
          <a class="navItem_link" href="#">MENU<br>
            <span class="navItem_sub">-メニュー-</span>
          </a>
        </li>
        <li class="navItem">
          <a class="navItem_link" href="#">STORE<br>
            <span class="navItem_sub">-店舗情報-</span>
          </a>
        </li>
        <li class="navItem">
          <a class="navItem_link" href="#">RECRUIT<br>
            <span class="navItem_sub">-採用情報-</span>
          </a>
        </li>
        <li class="navItem">
          <a class="navItem_link navItem_link-active" href="contact.html#contact">CONTACT<br>
            <span class="navItem_sub">-お問合せ-</span>
          </a>
        </li>
      </ul>
    </nav>
    
  </header>

  <main class="contact">
    <div class="contact_filter">

     <h1 class="heading contact_heading" id="contact">CONTACT<br><span class="heading_sub">-お問合せ-</span></h1>

      <article>
        <form action="complete.html#contact" method="post">
          <table class="contact_table">
            <tr>
              <th>お名前</th>
              <td>
                <?php echo htmlspecialchars($_POST["name"]); ?>
              </td>
            </tr>
            <tr>
              <th>e-mail</th>
              <td><?php echo htmlspecialchars($_POST["email"]); ?></td>
            </tr>
            <tr>
              <th>性別</th>
              <td>
                <?php echo $_POST["jender"]; ?>
              </td>
            </tr>
            <tr>
              <th>年齢</th>
              <td>
                <?php echo $_POST["age"]; ?>
              </td>
            </tr>
            <tr>
              <th>どこで知りましたか？
              </th>
              <td>
                <?php
                if ( isset($_POST["where"]) ) {
                  foreach($_POST["where"] as $where) {
                    echo $where ."<br>";
                  }
                } else {
                  echo "未選択";
                }
                ?>
              </td>
            </tr>
            <tr>
              <th>ご用件</th>
              <td>
                <?php echo nl2br($_POST["content"]); ?>
              </td>
            </tr>
          </table>
          <div class="contact_flexBox">
            <input class="btn contact_btn" type="submit" value="送信する">
            <button class="btn contact_btn" type="button" onclick="history.back()">修正する</button>
          </div>
        </form>
      </article>

    </div>
  </main>

  <footer class="footer">
    <nav class="nav">
      <ul class="navList">
        <li class="navItem">
          <a class="navItem_link" href="#">HOME<br>
            <span class="navItem_sub">-ホーム-</span>
          </a>
        </li>
        <li class="navItem">
          <a class="navItem_link" href="#">SPECIAL<br>
            <span class="navItem_sub">-こだわり-</span>
          </a>
        </li>
        <li class="navItem">
          <a class="navItem_link" href="#">MENU<br>
            <span class="navItem_sub">-メニュー-</span>
          </a>
        </li>
        <li class="navItem">
          <a class="navItem_link" href="#">STORE<br>
            <span class="navItem_sub">-店舗情報-</span>
          </a>
        </li>
        <li class="navItem">
          <a class="navItem_link" href="#">RECRUIT<br>
            <span class="navItem_sub">-採用情報-</span>
          </a>
        </li>
        <li class="navItem">
          <a class="navItem_link navItem_link-active" href="contact.html#contact">CONTACT<br>
            <span class="navItem_sub">-お問合せ-</span>
          </a>
        </li>
      </ul>
    </nav>
    
    <div class="flexBox">
      <a href="index.html"><img class="footer_logo" src="images/logo2.svg" alt="logo"></a>
      <div class="sns">
        <a href="#"><i class="fa fa-twitter-square"></i><span class="hidden">Twitter</span></a>
         <a href="#"><i class="fa fa-facebook-square"></i><span class="hidden">Facebook</span></a>
        <a href="#"><i class="fa fa-instagram"></i><span class="hidden">Instagram</span></a>
      </div>
    </div>
    <address class="footer_company">〒106-0031 東京都港区西麻布1-14-5 永都ビルB1</address>
    <a class="btn footer_btn" href="#">会社情報</a>
    <p class="footer_copy">&copy; Sri Lan Cafe all rights reserved.</p>
  </footer>
</body>
</html>