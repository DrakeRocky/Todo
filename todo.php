<html>
  <head>
    <title> To Do List </title >
      <link href="todo.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="intro"> <b><em>This is a To Do List in which you can fill in all your day to day activities to keep track of everything that needs
      to get done.</em></b> </div>
    <div id="button"><input type="button" value="Add new tasks" onclick="add();">
      <div id="new">
        Your tasks go here:
      </div>
      <script>
      function add() {
        var newtask=document.createElement('div');
        newtask.innerHTML="<input type= 'text' id='task'>";
        document.getElementById("new").appendChild(newtask);
      }  
      </php echo "hello world" ?>    
      </script>
    </button></div> 
  </body>
</html>