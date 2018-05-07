function mySubmitFunction(event) {
  document.getElementById('mainPage').style.display='block';
  document.getElementById('loginBody').style.display='none';
  showPrep();
  return false;
}
function createNew(event) {
	var newName = document.getElementById('newDir');
	if(newName.value == ''){
		alert('Invalid Project Name');
	} else{
		document.getElementById('newProject').style.display='none';
		document.getElementById('fileUpload').style.display='block';
	}
	return false;
}

function logout(){
  document.getElementById('mainPage').style.display='none';
  document.getElementById('loginBody').style.display='block';
}

function showOld() {
	document.getElementById('makeProject').style.display='none';
}

function showNew() {
	document.getElementById('makeProject').style.display='block';
	document.getElementById('newProject').style.display='block';
	document.getElementById('fileUpload').style.display='none';
}


function showProjects() {
	document.getElementById('projectMenu').style.display='block';
	showNew();
}
function exitProjects() {
	document.getElementById('projectMenu').style.display='none';
}

function showPrep() {
	document.getElementById('preparation').style.display='block';
	document.getElementById('dataCap').style.display='none';
	document.getElementById('marking').style.display='none';
	document.getElementById('report').style.display='none';
	
	document.getElementById('prepTab').style.backgroundColor='white';
	document.getElementById('dataTab').style.backgroundColor='#B9B8B8';
	document.getElementById('markTab').style.backgroundColor='#B9B8B8';
	document.getElementById('reportTab').style.backgroundColor='#B9B8B8';
}

function showData() {
	document.getElementById('preparation').style.display='none';
	document.getElementById('dataCap').style.display='block';
	document.getElementById('marking').style.display='none';
	document.getElementById('report').style.display='none';
	
	document.getElementById('prepTab').style.backgroundColor='#B9B8B8';
	document.getElementById('dataTab').style.backgroundColor='white';
	document.getElementById('markTab').style.backgroundColor='#B9B8B8';
	document.getElementById('reportTab').style.backgroundColor='#B9B8B8';
}

function showMark() {
	document.getElementById('preparation').style.display='none';
	document.getElementById('dataCap').style.display='none';
	document.getElementById('marking').style.display='block';
	document.getElementById('report').style.display='none';
	
	document.getElementById('prepTab').style.backgroundColor='#B9B8B8';
	document.getElementById('dataTab').style.backgroundColor='#B9B8B8';
	document.getElementById('markTab').style.backgroundColor='white';
	document.getElementById('reportTab').style.backgroundColor='#B9B8B8';
}

function showReport() {
	document.getElementById('preparation').style.display='none';
	document.getElementById('dataCap').style.display='none';
	document.getElementById('marking').style.display='none';
	document.getElementById('report').style.display='block';
	
	document.getElementById('prepTab').style.backgroundColor='#B9B8B8';
	document.getElementById('dataTab').style.backgroundColor='#B9B8B8';
	document.getElementById('markTab').style.backgroundColor='#B9B8B8';
	document.getElementById('reportTab').style.backgroundColor='white';
}