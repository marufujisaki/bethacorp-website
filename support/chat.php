<?php
  session_start();
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once('header.php');?>
<body>
    <div class="wrapper">
      <section class="chat-area user-chat">
      <header>
        <div class="content">
        <?php
            include_once("php/config.php");
            $user_id = 893637214;
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="img/<?php echo $row['img']; ?>" alt="" />
          <div class="details">
            <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
          <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
        </header>
        <div class="chat-box">
          
        </div>
        <form action="#" class="typing-area">
          <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id'] ?>" hidden>
          <input type="text" name="incoming_id" value="<?php echo $user_id ?>" hidden>
          <input type="text" class="input-field" name="message" placeholder="Type a message here..." />
          <button><i class="fab fa-telegram-plane"></i></button>
        </form>
      </section>
    </div>
    <script src="js/chat.js"></script>
  </body>
</html>
