<html>
<head>
<style>
*{  
  margin:0;
  padding:0;
}
 
body{ 
  background-color:#d34836;
  font-family:Arial;
}
 
a{
  display:block;
  color:#ad5482;  
  text-decoration:none;
  font-weight:bold;
}
.wrapper {
  position:relative;
  height: 90%;
  width:600px;
  margin-left:auto;
  margin-right:auto;
  margin-top:2%;
  border-radius:5px;
  background:#fff;
  -webkit-box-shadow:  0px 0px 15px 0px rgba(0, 0, 0, .4);        
  box-shadow:  0px 0px 15px 0px rgba(0, 0, 0, .4);
}
 
.form {
  float:left;
  height:90%;
  width:100%;
  box-sizing:border-box;
  padding:40px;
}
 
.text{
  height:50px;
  width:49%;
  border-radius:3px;
  border:rgba(0,0,0,.3) 2px solid;
  box-sizing:border-box;
  padding:10px;
  margin-bottom:30px;
}
 
.text:focus{
  outline:none;
   border:rgba(24,149,215,1) 2px solid;
   color:rgba(24,149,215,1);
}
 
.login {
  height:50px;
  width:100%;
  border-radius:3px;
  border:rgba(0,0,0,.3) 0px solid;
  box-sizing:border-box;
  padding:10px;
  margin-bottom:30px;
  background:#90c843;
  color:#fff;
  font-weight:bold;
  font-size: 12pt;
  transition:background .3s;
  cursor:pointer;
}
 
.login:hover{
  background:#80b438;
}
</style>
</head>
<body>
<div class="wrapper">  
<form action="Redirecting.php" method="post">
 <div style="padding-left: 22%;padding-top: 10%;">
 <div style="color: #d34836;font-weight: bold;padding-bottom: 20px;">Login Page</div>
 <input type="text" name="email" id="email" value="" placeholder="Enter Email " class="text" style="width:70%" >
 <input type="password"  id="password" name="password" value="" placeholder="Enter Password " class="text" style="width:70%" >
 <div>
 <input type="hidden" name="submitted" value="TRUE" />
 <input type="submit" value="Login into your Page" class="login" style="width:70%"/>
 </div>
 </div>
</form>
 </div>
 </body>
 </html>