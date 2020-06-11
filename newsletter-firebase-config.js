const config = {
    apiKey: "AIzaSyAHcahhEWp8G0YucSZcjhIaAlaQ1F5-0Xw",
    authDomain: "techknights-web.firebaseapp.com",
    databaseURL: "https://techknights-web.firebaseio.com/",
    projectId: "techknights-web",
    storageBucket: "techknights-web.appspot.com",
    messagingSenderId: "250182191569",
    appId: "1:250182191569:web:98a06f53248ce27a7578f0",
    measurementId: "G-1B8C0CTB89"
  };
  // Initialize Firebase;
  firebase.initializeApp(config);
   firebase.analytics();
  
  
const database=firebase.database();
const rootRef=database.ref('newsletter/');



document.getElementById('button').addEventListener('click',()=>{
	const data=document.getElementById('email');
    const mailFormat= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	if(data.value==""){
		alert('Input not valid');
		data.focus();
	}else if(data.value.match(mailFormat)){
        alert('Email address is invalid');
    }
	else{
		const autoID=rootRef.push().key;
		rootRef.child(autoID).set({
			email:data.value
		})
	}
	
})