<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Sidebar</title>
  <!-- 引入 Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- 自訂樣式 -->
  <style>
    /* 添加自定義的樣式 */
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 250px;
      padding-top: 50px;
      background-color: #333;
      color: #fff;
    }
    .sidebar a {
      padding: 10px;
      display: block;
      color: #fff;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #555;
    }
    .content {
      margin-left: 250px;
      padding: 20px;
    }
  </style>
</head>
<body>

  <!-- 側邊選單 -->
  <div class="sidebar">
    <a href="./index.php">返回首頁</a>
    <a href="#">選項 1</a>
    <a href="#">選項 2</a>
    <a href="#">選項 3</a>
    <a href="#">選項 4</a>
  </div>

  <!-- 內容 -->
  <div class="content">
    <h1>主要內容</h1>
    <p>這裡是主要的內容區域。</p>
  </div>

  <!-- 引入 Bootstrap JS（必要時） -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>