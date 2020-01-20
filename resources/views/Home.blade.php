<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 -->


  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}




<script type="text/javascript">
  function send(){
    var text=$('#msg').val().toLowerCase();
    console.log(text);
     // $.ajax({
     //            type:"post",
     //            url:"/getmsg",
     //            data:{text:text},
     //            success:function(data){
     //                alert(data);
     //                //$('#ref').load(' #ref');
     //            }
     //  });
     var json={
      'input':text
     };
     addtext(text);
     var xhttp=new XMLHttpRequest();
     xhttp.onreadystatechange=function(){
      if(this.status==200 && this.readyState==4)
      {
         var reply=JSON.parse(this.responseText)
         addbot(reply);

        // console.log(reply['input']);
        //console.log(this.responseText);
      }
     };
     xhttp.open('POST','/getmsg');
     xhttp.setRequestHeader('Content-Type',"application/json");
     xhttp.send(JSON.stringify(json));
  }
  function addtext(text)
{


var div1 = document.createElement("div");
var para1 = document.createElement("p");
var node1 = document.createTextNode(text);
div1.setAttribute("class","container1 darker b");
para1.appendChild(node1);
div1.appendChild(para1);
var element1 = document.getElementById("box");
element1.appendChild(div1);
}


function addbot(reply)
{


var div1 = document.createElement("div");
var para1 = document.createElement("p");
var node1 = document.createTextNode(reply);
div1.setAttribute("class","container1 a");
para1.appendChild(node1);
div1.appendChild(para1);
var element1 = document.getElementById("box");
element1.appendChild(div1);

}
</script>

<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container1 {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container1::after {
  content: "";
  clear: both;
  display: table;
}



div.sticky {
  position: -webkit-sticky;
  position: sticky;
  bottom: 0;
  margin-top: 200px;
  background-color: #ddd;
  padding: 10px 0 0 10px;
  font-size: 20px;
}
.square {
  height: auto;
  width: 810px;
  padding: 8px;
  background-color: #fff;
  border: 2px solid #dedede;
 
}
.a{
  margin-right: 400px;
}
.b{
  margin-left: 400px;
}
</style>
 </head>
<body>

<span id="ref">
<div class="square">
<center><h2>Chat Messages</h2></center>
<br>
 
  <div id="box">
  </div>


<div class="sticky">
  <div class="row">
     <div class="col-md-12">
       <div class="input-group mb-3">
          <input type="text" class="form-control" id="msg">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" onclick="send()">Send</button>
            </div>
        </div>
   </div>
  </div>
</div>
</div>
</span>
<br/>


</body>
</html>