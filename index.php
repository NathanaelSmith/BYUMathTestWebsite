<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
  <title>BYU Math</title>
</head>
<body class="loginBody">
  <div id="app" class="projectSelect">
  <div class="projectMenu">	
    <ul>
      <li><button v-on:click='newProject = true, oldProjects = false' >New Project</button></li>
      <li><button v-on:click='newProject = false, oldProjects = true'>Past Projects</button></li>
    </ul>
  </div> 
  <br>
  <div v-if='oldProjects'>
  <?php include 'projects.php';?>
  <form enctype="multipart/form-data" action="upload.php" method="POST">
    <p>Upload Your File</p>
    <input type="file" name="uploaded_file"></input><br>
    <input type="submit" value="Upload"></input>
  </form>
  </div>
  <div class="newProject" v-if="newProject">
  <form enctype="multipart/form-data" action="create.php" method="POST">
    <p>Create a New Project</p>
    <input type="text" name="newDir"></input><br>
    <input type="submit" value="Sumbit"></input>
  </form>
  </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js" integrity="sha256-mpnrJ5DpEZZkwkE1ZgkEQQJW/46CSEh/STrZKOB/qoM=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.js" integrity="sha256-pU9euBaEcVl8Gtg+FRYCtin2vKLN8sx5/4npZDmY2VA=" crossorigin="anonymous"></script>
   <script src="/script.js"></script>
</body>
</html>

