<!DOCTYPE html>
<html>
<header>
<title>HTML Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<BODY>
 <form name="encryptEmail" method="post" action="abc.php" onsubmit="encrypt.disabled = true; return true;" >
            <div>
            <p>
              <input type="text" name="name" placeholder="Your Full Name"></p>
             <p><input type="text" name="email" placeholder="Your E-mail Address" 						>
              </p>
              <button class="btn" type="submit" name="encrypt">Continue</button>
            </div>
</BODY>
</html>