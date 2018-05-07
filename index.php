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
      <li><button v-on:click='newProject = true, oldProjects = false' >Create New Project</button></li>
      <li><button v-on:click='newProject = false, oldProjects = true'>Projects List</button></li>
    </ul>
  </div> 
  <br>
  <div class="newProject" v-if='oldProjects'>
  <?php include 'projects.php';?>
  </div>


  <div class="newProject" v-if="newProject">
  <div v-if="makeProject">
  <form id="newDir" enctype="multipart/form-data" action="" method="POST"  v-on:submit.prevent="ffileUpload()">
    <p>Create a New Project</p>
    <input type="text" name="newDir" id="newName" placeholder="Enter project name here..." v-model="newName"></input><br>
    <input type="submit" value="Sumbit" class="subNew" ></input>
  </form>
  </div>
  <div v-if="fileUpload">
   <form enctype="multipart/form-data" action="" method="POST" v-on:submit="create()">
    <p>Upload Your File</p>
    <input type="file" name="uploaded_file"></input><br>
    <input type="submit" value="Upload"></input>
  </form>
  </div>
 </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js" integrity="sha256-mpnrJ5DpEZZkwkE1ZgkEQQJW/46CSEh/STrZKOB/qoM=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.js" integrity="sha256-pU9euBaEcVl8Gtg+FRYCtin2vKLN8sx5/4npZDmY2VA=" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="/script.js"></script>

</body>
</html>

