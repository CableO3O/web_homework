<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Sidebar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
	<script src="./js/jquery-1.9.1.min.js"></script>
  <style>
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

  <div class="sidebar">
    <a href="./index.php">返回首頁</a>
    <a href="#">選項 1</a>
    <a href="#">選項 2</a>
    <a href="#">選項 3</a>
    <a href="#">選項 4</a>
  </div>

  <div class="content">
    <h1>主要內容</h1>
    <p>這裡是主要的內容區域。</p>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>