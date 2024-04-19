function sendMail(){
  let parms = {
    name : document.getElementById("name").value,
    email : document.getElementById("email").value,
    subject : document.getElementById("subject").value,
    message : document.getElementById("message").value,
  }

emailjs.send("service_5vav4wi","template_0hid949",parms).then(alert("Email sent!!"));

}

