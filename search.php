<?php
require_once('function.php');
require_once('dbconnect.php');

$nickname = '';
if (isset($_GET['nickname'])) {
    $nickname = $_GET['nickname'];
}
    $stmt = $dbh->prepare('SELECT * FROM surveys WHERE nickname like ?');
    $stmt->execute(["%$nickname%"]);
    $results = $stmt->fetchAll();




 ?>
 <!DOCTYPE html>
 <html lang="ja">
 <head>
    <meta charset="utf-8">
     <title>Document</title>
       <link rel="stylesheet" href="arrange.css">
        <link rel="stylesheet" href="bootstrap.css">
 </head>
 <body>


  <nav class="navbar navbar-light bg-light fixed-top text-center" >
    <form action="search.php" method="GET" class="form-inline ml-auto mr-5 text-center">
      <input type="text" name="nickname" class="form-control mr-sm-2 text-center">
      <input type="submit" value="Search" class=" btn btn-info my-2 my-sm-0" style="text-align: center;">
    </form>
  </nav>


  

  <div class="ikemen mt-5">
    <h3 class="mt-5 text-center">seach result</h3>
    <div class="mt-5 ">
      <?php foreach ($results as $result): ?>
        <div class="mt-3 border-info mx-auto" style="width: 18rem;">
          <div class="card-body">
            <p><?php echo 'NAME：' . h($result['nickname']); ?></p>
            <p><?php echo 'MAIL：' . h($result['email']); ?></p>
            <p><?php echo 'INFORMATION：' . h($result['content']); ?></p>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-dark" data-id="<?php echo $result['id'] ?>" data-nickname="<?php echo $result['nickname']?>" data-toggle="modal" data-target="#exampleModal">
              DELETE
            </button>
          </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">CONFIRMATION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- テキスト挿入 -->
              </div>
              <div class="modal-footer">
                <form action="delete.php" method="POST">
                  <!-- <input type="submit" value="削除" class="btn btn-outline-danger"> -->
                  <button type="submit" class="btn btn-outline-danger">DELETE</button>
                  <input type="hidden" class="sendid" name="id" value="">
                  <input type="hidden" class="sendnickname kawaii" name="nickname" value="">
                </form>
                <button type="button" class="btn btn-outline-dark kawaii" data-dismiss="modal">BACK</button>
              </div>
            </div>
          </div>
        </div>
        
      <?php endforeach ; ?>
    </div>
  </div>
    <script src="fucking.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="bootstrap.js"></script>
    
 
 </body>
 </html>