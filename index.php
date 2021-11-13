<?php
include 'core.php';
// 引入核心 PHP 文件
?>
<!DOCTYPE html>
<html>

<head>
  <!-- 指定字符集为 UTF-8 -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- 网站介绍（在 Config.json 内修改） -->
  <meta name="description" content="<?php echo $introduced;?>" />
  <meta name="author" content=" <?php echo $author;?>" />
  <!-- 网站名称（前缀在 Config.json 内修改） -->
  <title>
    <?php echo $servername;?>官方网站
  </title>
  <!-- 网站图标 -->
  <link href="<?php echo $server_headshot;?>" rel="icon"/>
  <!--引用谷歌离线缓存 -->
  <script src="https://cdn.jsdelivr.net/gh/GBCLStudio/src@main/srcipts/sw.js"></script>
  <!-- 引用 Open Sans 字体 -->
  <link href="https://fonts.geekzu.org/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- 引用适用于 Argon 组件库的 Popper.js-->
  <script src="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/assets/js/core/popper.min.js"
    integrity="sha256-NnXyJvmFtk7qauhUTVSWoy0ZmTquGsSj+hASY+8yBvc=" crossorigin="anonymous"></script>
  <!-- 引用适用于 Argon 组件库的 JavaScript-->
  <script src="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/assets/js/argon-design-system.min.js"
    integrity="sha256-viSA1n+z5Zq4VnY/+mgLTTo+aGNdT09w55rxHMuZSss=" crossorigin="anonymous"></script>
  <!-- 引用 FontAwesome 完整图标库-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css"
    integrity="sha256-mUZM63G8m73Mcidfrv5E+Y61y7a12O5mW4ezU3bxqW4=" crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
    integrity="sha256-BYjRZhSY2ARUPcFTf5eEh3qWK58O88TM7nZet/JUNhE=" crossorigin="anonymous">
  <!-- 引用适用于 Argon 组件库的 Jquery-->
  <script src="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/assets/js/core/jquery.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <!-- 引用适用于 Argon 组件库的 Bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/assets/js/core/bootstrap.min.js"
    integrity="sha256-cgnhGkXO8Rno01Oa+yaJg10XsWoKIvgzTYZ893oiDSo=" crossorigin="anonymous"></script>
  <!-- 引用适用于 Argon 组件库的 CSS-->
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/assets/css/argon-design-system.min.css"
    integrity="sha256-NpPc/TvnPWyENGIvbtIf7+u6qQ4bQdjUCiaSFNavXho=" crossorigin="anonymous">
  <script>
      // 控制台版权归属
      !(function () {
        console.log(
          "%c本站正在使用:%c MC-server-website",
          "color: rgba(255,255,255,.6); background: #2196f3; font-size: 15px;border-radius:5px 0 0 5px;padding:10px 0 10px 20px;",
          "color: rgba(255,255,255,1); background: #2196f3; font-size: 15px;border-radius:0;padding:10px 15px 10px 0px;"
        );
      })();
      console.log(
        "%c本站静态资源:%c腾讯云 上海对象存储",
        "color:#fff; background: #2196f3;font-size: 12px;border-radius:5px 0 0 5px;padding:3px 10px 3px 10px;",
        "color:#fff; background: #FF9900;font-size: 12px;border-radius:0 5px 5px 0;padding:3px 10px 3px 10px;"
      );
      console.log(
        "%c我的邮箱：aries#gcxs.fun（# 改为 @）",
        "font-size: 12px;border-radius:5px;padding:3px 10px 3px 10px;border:1px solid #FF9900;"
      );
    </script>
</head>

<body>
  <header class="header-global">
    <nav id="navbar-main" class="
          navbar navbar-main navbar-expand-lg navbar-transparent navbar-light
          headroom
        ">
      <div class="container">
        <!-- 设置导航栏图标（config.json 内修改）-->
        <a class="navbar-brand mr-lg-5" href="/">
          <img src="<?php echo $studio_headshot;?>" class="bg-light img-fluid" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
          aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="/">
                  <!-- 设置导航栏图标 For Mobile（config.json 内修改）-->
                  <img src="<?php echo $studio_headshot;?>" />
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global"
                  aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
              <a class="nav-link nav-link-icon" onclick="javascript:location.reload();" target="_blank"
                data-toggle="tooltip" title="刷新网页">
                <i class="fas fa-sync-alt"></i>
                <span class="nav-link-inner--text d-lg-none">刷新网页</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://github.com/GBCLStudio" target="_blank"
                data-toggle="tooltip" title="GBCLStudio's Github">
                <i class="fab fa-github"></i>
                <span class="nav-link-inner--text d-lg-none">Github</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo $qqgrouplink;?>" target="_blank" data-toggle="tooltip"
                title="<?php echo $tooltips_qq;?>">
                <i class="fab fa-qq"></i>
                <span class="nav-link-inner--text d-lg-none">QQ</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="mailto:<?php echo $email;?>" target="_blank" data-toggle="tooltip"
                title="<?php echo $tooltips_email;?>">
                <i class="fas fa-envelope"></i>
                <span class="nav-link-inner--text d-lg-none">Email</span>
              </a>
            </li>
            <li class="nav-item d-none d-lg-block ml-lg-4">
              <a href="<?php echo $download_game;?>" target="_blank" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon">
                  <i class="fas fa-cloud-download-alt"></i>
                </span>
                <span class="nav-link-inner--text">下载客户端</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main class="profile-page">
    <section class="section-profile-cover section-shaped my-0">
      <!-- Circles background -->
      <div class="shape shape-style-1 shape-primary alpha-4">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
          xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="card card-profile shadow mt--300">
          <div class="px-4">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="<?php echo $server_headshot;?>" class="img-fluid img-thumbnail" />
                  </a>
                </div>
              </div>
              <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                <div class="card-profile-actions py-4 mt-lg-0">
                  <a href="<?php echo $qqgrouplink;?>" class="btn btn-sm btn-default float-right">联系我们</a>
                </div>
              </div>
              <div class="col-lg-4 order-lg-1">
                <div class="card-profile-stats d-flex justify-content-center">
                  <?php
                    if ($status == "在线") {
                      echo "<div><span class='heading'>".$online."/".$max."</span><span class='description'>Onlines</span></div>";
                      echo "<div><span class='heading'>".$delay."ms</span><span class='description'>Deplay</span></div>";
                      echo "<div><span class='heading'>".$version."</span><span class='description'>Version</span></div>";
                    } else {
                      echo "<div><span class='heading'>Offline</span><span class='description'>服务器状态</span></div";
                    }
                    ?>
                  <div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-5">
              <h3>
                <?php echo $servername;?>
              </h3>
            </div>
            <div class="mt-5 py-5 border-top text-center">
              <div class="row justify-content-center">
                <div class="col-lg-9">
                  <p>
                    <?php echo $introduced;?>
                    <br />
                    <br />
                    <a href="minecraft://?addExternalServer=<?php echo $servername;?>|<?php echo $serverip;?>:<?php echo $serverport;?>"
                      target="_blank">
                      <button id="join" class="btn btn-info btn-round">点我自动进入服务器</button>
                    </a>
                    <br />
                    <br />
                    加入我们的世界吧，同我们携手共进！
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy;
            <?php echo $date;?>
            <a href="<?php echo $copyright_url;?>" target="_blank">
              <?php echo $copyright;?>
            </a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="http://www.gcxstudio.cn" class="nav-link" target="_blank">Powered By Dinosaur Cloud</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>
