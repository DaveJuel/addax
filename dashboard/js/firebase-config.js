/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAFBLuODavofCTJLkw61ZYhFkq-iD31508",
    authDomain: "nimasafaris-1516642268778.firebaseapp.com",
    databaseURL: "https://nimasafaris-1516642268778.firebaseio.com",
    projectId: "nimasafaris-1516642268778",
    storageBucket: "nimasafaris-1516642268778.appspot.com",
    messagingSenderId: "216195631353"
  };
  firebase.initializeApp(config);
  const storageRef = firebase.storage().ref('/dev/safaris-images');
  const progressState = document.getElementById('upload-progress');
  const handleUpload = (file) => {
      //const file=fileObject = obj.files[0];
      const { name } = file;
      const uploadTask = storageRef.child(name).put(file);
      
      uploadTask.on('state_changed',  (snapshot) => {
          
          
          let progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
            console.log('Upload is ' + progress + '% done');
            progressState.innerHTML = parseFloat(progress).toFixed(2) + "% Uploaded";
            switch (snapshot.state) {
              case firebase.storage.TaskState.PAUSED: // or 'paused'
                console.log('Upload is paused');
                break;
              case firebase.storage.TaskState.RUNNING: // or 'running'
                console.log('Upload is running');
                break;
            }

          
      }, (error) => {
           console.log(error);
      }, () => {
          uploadTask.snapshot.ref.getDownloadURL()
            .then( url => {                  
                  document.getElementById("add_image").type="text";
                  document.getElementById("add_image").value=url;
            });
      });
  };

  const handleChange =  (event) => {
    const file = event.target.files[0];    
    handleUpload(file); 
  };
  

