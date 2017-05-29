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

/* Project-site scrolled */
  function scrolled() {
    window.alert("Page scrolled down");
  }
