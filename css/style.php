@import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&family=Noto+Sans:wght@700&display=swap');

<?php
    header("Content-type: text/css; charset: UTF-8");
?>


* {
  margin: 0px;
  padding: 0px;
}
body {
  font-family: 'Noto Sans', sans-serif;
 
  font-size: 120%;
  background: #F8F8FF;
}

.header {
  width: 30%;
  margin: 30px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.login {
  margin: 10px 0px 10px 0px;
  padding:15px;
}

.register{
  margin: 10px 0px 10px 0px;
}

.login label, .register label {
  display: block;
  text-align: left;
  margin: 3px;
}
.login input, .register input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
  box-shadow: 0 0 2px 1px grey;
}

.btn{
  width: 100%;
}

.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;

}

center img {
  width: 50%;
}

.note{
  font-size: 16px;
  margin: 0 100px
}

span{
  font-style: italic;
  font-size: 12px;
  color: red;
}


@media screen and (max-width: 1445px){
  .note{
  font-size: 16px;
  margin: 0 70px
}
.header {
  width: 50%;
  margin: 30px auto 0px;
  text-align: center;
  padding: 20px;
}
form, .content {
  width: 50%;
  margin: 0px auto;
  padding: 20px;;
} 

.header {
  width: 30%;
  margin: 30px auto 0px;
  text-align: center;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;;
}

}

@media screen and (max-width: 1337px){
  .register .digits {

    font-size: 13px;
}

.note{
  font-size: 16px;
  margin: 0 65px
}

.header {
  width: 50%;
  margin: 30px auto 0px;
  text-align: center;
  padding: 20px;
}
form, .content {
  width: 50%;
  margin: 0px auto;
  padding: 20px;;
} 

.login .inside {
  margin: 15px 19px;
  padding: 20px;
  font-size:20px;
}
.login button {
  padding: 20px;
  font-size:20px;
}
}

@media screen and (max-width: 1122px){

  .header {
  width: 50%;
  margin: 30px auto 0px;
  text-align: center;
  padding: 20px;
}
form, .content {
  width: 50%;
  margin: 0px auto;
  padding: 20px;;
} 

  .login .inside {
  margin: 15px 19px;
  padding: 20px;
  font-size:20px;
}
.login button {
  padding: 20px;
  font-size:20px;
}
}

