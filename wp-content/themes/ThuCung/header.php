<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('title'); ?></title>
  <style>
    .container {
      display: flex;
      justify-content: center;
    }
    .container-content {
      width: 1021px;
    }
    .icon-contact {
      display: flex;
      color: black;
    }
    .logo {
      display: flex;
      margin-bottom: 15px;
    }
    .icon-range {
      margin-left: 20px;
      color: black;
      font-size: 11px;
    }
    .icon-range:hover {
      color: #4db2ec;
    }
    .header-icon-contect {
      display: flex;
      justify-content: space-between;
      padding: 15px 0px;
    }
    .nav-content {
      display: flex;
      justify-content: space-between;
      background: #f0ff23;
      border-top: 4px solid #4db2ec;
      background: #f0ff23;
    }
    .calendar>a {
      color: black;
    }
    .calendar {
      display: flex;
      font-weight: 700;
      font-size: 11px;
      text-transform: uppercase;
      font-family: 'Open Sans', arial, sans-serif;
    }
    a:hover {
      text-decoration: none;
      color: #f0ff23;
    }
    .home {
      background: white;
      padding: 10px;
      padding-top: 12px;
      color: black;
      font-weight: 550;
      font-family: 'Open Sans', arial, sans-serif;
      font-size: 14px;
    }

    .home:hover {
      color: black;
    }

    .border-padding:hover {
      background: white;
      color: black;
    }

    .border-padding {
      background: #f0ff23;
      padding: 10px;
      padding-top: 12px;
      font-weight: 550;
      font-family: 'Open Sans', arial, sans-serif;
      color: black;
      font-size: 14px;
    }

    .search {
      color: black;
      padding: 15px 0px;
      margin-right: 20px;
      font-size: 14px;
      cursor: pointer;
    }
    .icon-f-y{
      font-size: 2em;
      margin-left: 100px;
    }
    .fa-youtube-square{
       color: red;
     }
    .fa-headphones{
      font-size: 2.5em;
      margin-left: 50px;
    }
    .name-phone{
      font-weight: bold;
      color: orangered;
      margin-left: 10px;
    }
    .login a{
      font-weight: bold;
      margin-left: 60px;
      text-decoration: none;
      color: blue;
    }
  </style>
</head>

<body>
  <?php wp_head(); ?>
  <div>
    <div class="container">
      <div class="container-content">
        <div class="logo">
          <a href="/" style="margin-right: 20px">
            <img class="logo" src="<?= get_template_directory_uri() ?>/assets/images/logo.png" alt="Logo">
          </a>
          <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <form class="form-inline my-2 my-lg-0">
            <i class="fas fa-headphones"></i>
            <div class="name-phone">
            Hổ trợ khách hàng
            </div>
           
          </form>
          <form class="form-inline my-2 my-lg-0">
            <div class="login">
              <a href="">ĐĂNG NHẬP</a>
            </div>
          </form>
        </div>
        <div class="nav-content">
          <div style="display: flex; margin-left: 20px">
            <a class="home" href="">DANH MỤC SẢN PHẨM</a>
            <a class="border-padding" href="">CHÓ CẢNH</a>
            <a class="border-padding" href="">MÈO CẢNH</a>
            <a class="border-padding" href="">PHỤ KIỆN</a>
            <a class="border-padding" href="">LOẠI KHÁC<i class="fa fa-angle-down"></i></a>
            <a class="border-padding" href="">TIN TỨC</a>
            <a class="border-padding" href="">LIÊN HỆ</a>
            <div class="icon-f-y">
            <a href=""><i class="fab fa-facebook-square"></i></a>
            <a href=""><i class="fab fa-youtube-square"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
