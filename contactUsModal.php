<html>
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
<a href="#contactModal" role="button" data-toggle="modal" class="btn btn-default btn-lg"><i class="fa fa-contact "></i> <span class="network-name">Contact</span></a>
  <!-- Modal -->
        <div id="contactModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Contact</h4>
                    </div>
                    <div class="modal-body">
                        <div class="containter">
                            <div class="row">
                                <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                                    <div class="col-xs-8">
                                        <div class="form-group">
                                            <label for="InputName" class="col-lg-4 control-label">Name</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="first_name" id="first_name"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="InputEmail" class="col-lg-4 control-label">Email</label>
                                            <div class="col-lg-8">
                                                <input type="email" class="form-control" id="email" name="email"  required  >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="InputMessage" class="col-lg-4 control-label">Message</label>
                                            <div class="col-lg-8">
                                                <textarea name="comments" id="comments" class="form-control" rows="5" required></textarea>
                                            </div>
                                        </div>
                                        
                                        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
                                    </div>
                                </form>
                                <hr class="featurette-divider hidden-lg">
                                <div class="col-xs-4 text-right ">
                                    <address>
                                        <h3>Locatie</h3>
                                        <p class="lead"><a href="https://goo.gl/maps/7ryTz">City<br>
                                            </a><br>
                                            Phone: xxx<br>
                                            E-mail: xxxxx</p>
                                    </address>
                                </div>

                            </div>

                        </div>
                    </div><!-- End of Modal body -->
                </div><!-- End of Modal content -->
            </div><!-- End of Modal dialog -->
        </div><!-- End of Modal -->
        
        <!--PhP code for the email sending, copy this code and nme it send_form_email.php and on line 120 change the link.
        <?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "your email address";
    $email_subject = "Email subject";
 
 
    $first_name = $_POST['first_name']; // required
  
    $email_from = $_POST['email']; // required    
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z\s.'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }

  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
    $email_message = "Form details below.\n\n";
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";   
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
sleep(1);
echo "<meta http-equiv='refresh' content=\"0; url=http://graphicdesk.ro/index.html\">";
?>
 
<?php
}
?>
</body>
</html>