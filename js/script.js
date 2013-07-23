/*! A fix for the iOS orientationchange zoom bug. Script by @scottjehl, rebound by @wilto.MIT / GPLv2 License.*/(function(a){function m(){d.setAttribute("content",g),h=!0}function n(){d.setAttribute("content",f),h=!1}function o(b){l=b.accelerationIncludingGravity,i=Math.abs(l.x),j=Math.abs(l.y),k=Math.abs(l.z),(!a.orientation||a.orientation===180)&&(i>7||(k>6&&j<8||k<8&&j>6)&&i>5)?h&&n():h||m()}var b=navigator.userAgent;if(!(/iPhone|iPad|iPod/.test(navigator.platform)&&/OS [1-5]_[0-9_]* like Mac OS X/i.test(b)&&b.indexOf("AppleWebKit")>-1))return;var c=a.document;if(!c.querySelector)return;var d=c.querySelector("meta[name=viewport]"),e=d&&d.getAttribute("content"),f=e+",maximum-scale=1",g=e+",maximum-scale=10",h=!0,i,j,k,l;if(!d)return;a.addEventListener("orientationchange",m,!1),a.addEventListener("devicemotion",o,!1)})(this); 

// lets set up some variables
var newloc = '';

// grab the JSON file
$.getJSON('activ.json', function(data) {
	
  // create an items array
  var items = [];
 
  // for each item in the json file, create as a html list item 
  $.each(data, function(name, loc) {
    items.push('<li id="' + name + '">'+ name + ', ' + loc + '</li>');
  });

  // randloc = Random Location
  var randloc = items[Math.floor(Math.random() * items.length)]
 
  // Create new UL, add in single random activity from JSON file and append to body
  $('<ul/>', {
    'class': 'my-new-list',
    html: randloc
  }).appendTo('body');
	
  // output the random location in the console.log so we know it works
	console.log(randloc);
});

// Here's the fun stuff. We've got our form (#addLoc) and this is where we can add new items
$("#addLoc").on( "submit", function( event ) {
  event.preventDefault();
  var newloc = ( $(this).serialize() );

  // output new location
  console.log(newloc);

  // Mikes code - take the serialised inputs and pass to json.php so it adds it to the json file.
  $.ajax({
      url: 'json.php',
      type: 'GET',
      data: {
        location: $('#inputname').val(),
        postcode: $('#inputlocation').val()
      }
    }).done(function() {
      $(this).addClass("done");
    });
});



