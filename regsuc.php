<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration completed</title>
    <style type="text/css">
		body {
			background-color: #1a273b;
		}
		.container{
 /* padding: 0px;*/
}
p{
  display:block;
  float:right;
  align-items:center;
  align-content:center;
  
}
.card{
  width: 300px;
  height: 638px;
  background-color: #182831;
  border-radius: 10px 10px;
}

.header{
  border-radius: 10px 10px 0px 0px;
  padding: 5px;
  background-color: #181425;
}

h3{
  color: #FFFFFF;
  font-family: 'Roboto', sans-serif;
  margin-left: 1rem;
}

.iconM{
  font-size: 18px;
  margin-left: 170px;
  color: #2f89fc;
}

.icon{
  margin-right: 8px;
}

.body li{
  transition: 1s all;
  font-family: 'Roboto', sans-serif;
  font-size: 18px;
  padding: 15px;
  margin-left: -40px;
  margin-top: 0px;
  color: #fff;
  list-style: none;
  display: block;
  border-top-right-radius: 10px 10px;
  border-bottom-right-radius: 10px 10px;

}

li:hover{
  transition: 1s all;
  color: #2f89fc;
  background-color: rgba(42, 56, 65, 0.82);
  border-top-right-radius: 10px 10px;
  border-bottom-right-radius: 10px 10px;
  cursor: pointer;
}

.body > li{
  float: left;
}

.body li ul{
  background: #1E2B32;
  margin-left: 280px;
  margin-top: -36px;
  display: none;
  position: absolute;
  border-top-right-radius: 15px 15px;
  border-bottom-right-radius: 15px 15px;
}

.body li:hover > ul{
  display: block;
  cursor: pointer;
}

button{
    height:50px;
    width :200px;
    border-radius:5px;
}
	</style>
</head>
<body>
    <h1>Your account has been succesfully registered.</h1>
    <button href="login.php" onclick="location.href='login.php';" >Click here to continue</button>
</body>
</html>