<?php
include 'database/config.php';
session_start();
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_GET['get-otp'])) {

    $receiver = $_GET['email'];
    $code = $_GET['otp'];

    class VerificationCode {
        public $smtpHost;
        public $smtpPort;
        public $sender;
        public $password;
        public $receiver;
        public $code;

        public function __construct($receiver) {
        /**
         * Your email id  
         * For example : johndoe@gmail.com
         * contact@johndoe.com
         * 
         */
        $this->sender = "giftmusanza@gmail.com"; 

        /**
         *  YOUR PASSWORD 
         *  ************
         */               
        $this->password = "@GiFt01?";  

        /**
         * Receiver email
         * For example : johndoe@gmail.com
         */     
        $this->receiver = $receiver;  

        /**
         * YOUR SMTP HOST NAME 
         * For example : smtp.gmail.com 
         * OR mail.youwebsite.com
         */     
        $this->smtpHost="";        
        
        /**
         * SMTP port number
         * For example :587
         */
        $this->smtpPort = 587;

    }
    public function sendMail(){
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->Host = $this->smtpHost;   
        $mail->Port = $this->smtpPort;    
        $mail->IsHTML(true);
        $mail->Username = $this->sender;
        $mail->Password = $this->password;
        $mail->Body=$this->getHTMLMessage();
        $mail->Subject = "Your verification code is {$this->code}";
        $mail->SetFrom($this->sender,"Verification Codes");
        $mail->AddAddress($this->receiver);
        if($mail->send()){
            $msg =  'MAIL SENT SUCCESSFULLY';
          // return true;
            //exit;  
        }
        $error = 'FAILED TO SEND MAIL';
        // return false;

    }
    public function getVerificationCode() {
        return (int) substr(number_format(time() * rand(), 0, '', ''), 0, 6);
    }

    public function getHTMLMessage(){
        $this->code=$this->getVerificationCode();   
        $htmlMessage=<<<MSG
        <!DOCTYPE html>
        <html>
        <body>
        <h1>Your verification code is {$this->code}</h1>
        <p>Use this code to verify your account.</p>
        </body>
        </html>        
        MSG;
        return $htmlMessage;
    }

}

// pass your recipient's email
$vc=new VerificationCode('musanzag@gmail.com'); 
$vc->sendMail(); // MAIL SENT SUCCESSFULLY

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home | Poultry Farming Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="bg-image">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container">
            <a class="navbar-brand" href="index.php"><span class="navbar-logo"><img src="assets/img/pofarms_black.png"></span> Poultry Farming Management System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="divider"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://fims.pofarms.icu/" target="blank">FIMS <span class="divider"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://dbms.pofarms.icu/" target="blank">COVID-19 Response Monitor <span class="divider"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About <span class="divider"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<br><br />
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php if(isset($msg)){ ?>
                        <div class="toast" role="alert" data-autohide="false" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <strong class="mr-auto">Alert</strong>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                                <?php echo $msg; ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if(isset($error)){ ?>
                        <div class="toast" role="alert" data-autohide="false" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <strong class="mr-auto">Alert</strong>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                                <?php echo $error; ?>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="jumbotron">
                        <div id="login">
                            <form method="get">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                        </div>
                                        <input type="email" name="email" class="form-control" required="" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon"><i class="fa fa-key"></i></span>
                                        </div>
                                        <input type="number" name="otp" class="form-control" required="" value="" placeholder="Enter OTP">
                                    </div>
                                </div>
                                <button type="submit" name="get-otp" onclick="randomStringToInput(this)" class="btn btn-primary">Get OTP</button>
                                <a href="reset.php" class="btn btn-secondary float-right">Proceed</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h4>Links</h4>
                    <ul>
                        <li><a href="https://zrdc.org/" target="blank">ZRDC</a></li>
                        <li><a href="http://fims.pofarms.icu/" target="blank">FIMS</a></li>
                        <li><a href="https://www.icuzambia.net/" target="blank">ICU Zambia</a></li>
                        <li><a href="https://getbootstrap.com/" target="blank">Boostrap 4.5</a></li>
                        <li><a href="http://dbms.pofarms.icu/" target="blank">COVID-19 Response Monitor</a></li>
                    </ul>
                </div>
                <div class="col-xl-4">
                    <div class="logo-footer">
                        <center>
                            <img src="assets/img/pofarms_white.png"><br>
                            Poultry Farming Management System (POFARMS)<br>
                            <p>
                                Helping you process, store and retrieve records on time for production analysis and evaluation,
                                and management of poultry farming.
                            </p>
                        </center>
                    </div>
                </div>
                <div class="col-xl-4">
                    <h4>Developer</h4>
                    <ul>
                        <li>Student Name: Gift Musanza</li>
                        <li>Student No. 1601305427</li>
                        <li>Course: Final Year Project</li>
                        <li>Program: BA of ICT in Systems Engineering</li>
                        <li>Email address: <a href="mailto:giftmusanza@gmail.com">giftmusanza@gmail.com</a></li>
                        <li>Telephone No. <a href="tel:+260969685645">+260 969 685 645</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">Poultry Farming Management System &copy; 2020</div>
    </section>
</main>
</body>
<script>
    function randomStringToInput(clicked_element)
    {
        var self = $(clicked_element);
        var random_string = generateRandomString(6);
        $('input[name=otp]').val(random_string);
    //self.remove();
}
function generateRandomString(string_length)
{
    var characters = '0123456789';
    var string = '';
    for(var i = 0; i <= string_length; i++)
    {
        var rand = Math.round(Math.random() * (characters.length - 1));
        var character = characters.substr(rand, 1);
        string = string + character;
    }
    return string;
}
</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('.toast').toast('show');
    });
</script>
</html>
