      <div class="header" id="HOME">
        <div class="navbar">
        <div class="nav-items topnav" id="myTopnav">
            <a href="index.php" class="link">HOME</a>
            <a href="companies.php" class="link">FOR COMPANIES</a>
            <a href="scholarship.php" class="link">SCHOLARSHIP</a>
            <a href="tutor.php" class="link">BECOME A TUTOR</a>
            <a href="about.php" class="link">ABOUT US</a>
            <a href="hire.php" class="link">HIRE CODERS</a>
            <a class="burger-menu icon fa fa-bars fa-2x"></a>
            <a class="burger-menu icon fa fa-bars fa-2x"></a>
                         <a href="index.php"><img class="logo" src="img/logo.png"></a>
          <div class="seperator"></div>
                    </div>
        </div>
        <div class="header_content">
          <img class="headerimage"><?php echo $image; ?>
          <p class="header_content_text"><?php echo $heading1; ?></p>
          <p class="header_content_text"><?php echo $heading2; ?></p>
          <div class="text_seprator"></div>
          <p class="header_content_sub_text">
              <?php echo $sub_header1; ?>
             <br/>
              <?php echo $sub_header2; ?>
          </p>
          <?php
          $status;
          $status_text;
          $connect_btn = '<div class="btn btn-primary nemo">'.$status_text .'<i class="fa fa-angle-right"><a href="apply.html"></i></div>';
          $contact_box = '
          <div class="form-group">
                <form method="POST" action="contact.php">
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email...">
                <button class="btn btn-primary card-3" type="submit" value="send">Send</button>
                </form>
          </div>
          <p class="input-group-text">Contact us today. We get back to you fast.</p>';

        if($status == "connect") {
          echo $connect_btn;
        }
        else if($status == 'contact') {
          echo $contact_box;
        }
      ?>
      </div>
      </div>
      <!-- end of header -->