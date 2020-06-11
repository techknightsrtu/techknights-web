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
const rootRef=database.ref('blogpost/');

document.getElementById('button').addEventListener('click',()=>{
    const name=document.getElementById('name');
    const email=document.getElementById('email');
    const text=document.getElementById('text');
    const mailFormat= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    if(name.value==""){
        alert('Input field is empty!');
		name.focus();
    }else if(email.value==""){
        alert('Input field is empty!');
		email.focus();
    }else if(text.value==""){
        alert('Input field is empty!');
		text.focus();
    }
    else if(!email.value.match(mailFormat)){
        alert('Email address is invalid');
        email.focus();
    }
    else{
        const autoID=rootRef.push().key;
        rootRef.child(autoID).set({
            name:name.value,
            email:email.value,
            text:text.value
		})
    }
})