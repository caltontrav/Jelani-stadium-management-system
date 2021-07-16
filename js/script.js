var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

function register() {
  x.style.left = "-400px";
  y.style.left = "50px";
  z.style.left = "110px";
}
function login() {
  x.style.left = "50px";
  y.style.left = "450px";
  z.style.left = "0";
}

/*$(document).ready(function() {
    
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      defaultDate: '2016-12-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2016-12-01'
        },
        {
          title: 'Long Event',
          start: '2016-12-07',
          end: '2016-12-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2016-12-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2016-12-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2016-12-11',
          end: '2016-12-13'
        },
        {
          title: 'Meeting',
          start: '2016-12-12T10:30:00',
          end: '2016-12-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2016-12-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2016-12-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2016-12-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2016-12-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2016-12-13T07:00:00'
        }
      ]
    });
    
  });*/