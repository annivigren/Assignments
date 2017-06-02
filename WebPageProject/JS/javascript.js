function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

  /* Home-page date and time */
    var today = new Date();
      var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
      var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
      var CurrentDateTime = date+' '+time;
        /* Place date and time to id date */
        document.getElementById("date").innerHTML = CurrentDateTime;

/* Mouse over my first project */
  function firstproject() {
    window.alert("This was my latest project.");
  }

/* Contact */
/* Validating contact me */

  function Validate() {
    var firstname;
    var lastname;
    var gender;
    var age;
    var textgender;
    var email;
    var atpos;
    var dotpos;
    var website;
    var comment;



    firstname =
    document.ContactForm.firstname.value;

    lastname =
    document.ContactForm.lastname.value;

    gender =
    document.ContactForm.gender.value;

    age =
    document.ContactForm.age.value;

    email =
    document.ContactForm.email.value;
    atpos = email.indexOf("@");
    dotpos = email.lastIndexOf(".");

    website =
    document.ContactForm.website.value;

    comment =
    document.ContactForm.comment.value;

    if (firstname==""||
    document.ContactForm.firstname.value.length > 25)  {
    alert ("Please fill your first name. Max 25 charachters" );
    return false;
    }
    if (lastname==""||
    document.ContactForm.lastname.value.length > 25)  {
    alert ("Please fill your last name. Max 25 charachters" );
    return false;
    }

    if (gender=="1")  {
    alert ("Please fill the gender information" );
    return false;
    }

    if (isNaN(age) || age < 18 || age > 100) {
    alert ("The age must be more tha 18 or less than 100");
    return false;
    }

    if (email==""||atpos < 1 || ( dotpos - atpos < 2 ))
             {
                alert("Please enter correct email");
                return false;
              }
    if (website==""||
    document.ContactForm.website.value.length > 50)  {
    alert ("Please fill correct website address");
    return false;
    }

    if (comment==""||
    document.ContactForm.website.value.length > 250)  {
    alert ("Please fill comment less than 250 charachters.");
    return false;
    }

    else
    {
    alert('Form Successfully Submitted');
    return true;}
    }
