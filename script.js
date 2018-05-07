var app = new Vue({
 el: '#app',
  data: {
    newProject: true,
    oldProjects: false,
    fileUpload: false,
    makeProject: true,
    message: "",
    newName: "",	
  },
  
  methods: {
    ffileUpload: function(){
		if(this.newName == ""){
			alert("You must enter a name")
		}
		else{
			this.makeProject = false;
			this.fileUpload = true;
		}
	},
    create: function() {
       $.ajax({
                type: "GET",
                url: "upload.php" ,
            });
      $.ajax({
		type: "GET",
		url: "create.php"
	    });
      this.makeProject = true;
      this.fileUpload = false;      
      alert("Successfully created a new project.")
    }

  }
});
