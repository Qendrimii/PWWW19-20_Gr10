
// Ruan dhe rigjen qiftet key-value duke perdorur
// HTML5 localStorage and sessionStorage
var tags; // vargu i tagjeve per kerkimet 

// loadon kerkimet e meparshme dhe shfaq ato ne faqe
function loadSearches() 
{
   if ( !window.sessionStorage.getItem( "herePreviously" ) )
   {
      sessionStorage.setItem( "herePreviously", "true" );
      document.getElementById( "welcomeMessage" ).innerHTML = 
         "Mirsevini tek aplikacioni i kerkimeve te preferuara ne Facebook";
   }

   var length = localStorage.length; // numri i qifteve key-value
   tags = [];

   // loadon te gjithe qelsat
   for (var i = 0; i < length; ++i) 
   {
      tags[i] = localStorage.key(i);
   } 

   tags.sort(); // sorton qelesat

   var markup = "<ul>"; // used to store search link markup
   var url = "http://facebook.com/search?q=";

   // nderton listen e linqeve
   for (var tag in tags) 
   {
      var query = url + localStorage.getItem(tags[tag]);
      markup += "<li><span><a href = '" + query + "'>" + tags[tag] + 
         "</a></span>" +
         "<input id = '" + tags[tag] + "' type = 'button' " + 
            "value = 'Edit' onclick = 'editTag(id)'>" +
         "<input id = '" + tags[tag] + "' type = 'button' " + 
            "value = 'Delete' onclick = 'deleteTag(id)'>";
   } 

   markup += "</ul>";
   document.getElementById("searches").innerHTML = markup;
} 

// fshin te gjitha qiftet key-value nga localStorage
function clearAllSearches() 
{
   localStorage.clear();
   loadSearches(); // riloadon kerkimet
} // end function clearAllSearches

// ruan kerkim e ri te etiketuar ne localStorage
function saveSearch() 
{
   var query = document.getElementById("query");
   var tag = document.getElementById("tag");
   localStorage.setItem(tag.value, query.value); 
   tag.value = ""; // clear tag input
   query.value = ""; // clear query input
   loadSearches(); // riloadon kerkimet 
} 

// deletes a specific key-value pair from localStorage
// fshin nje qift specifik key-value nga localStorage
function deleteTag( tag ) 
{
   localStorage.removeItem( tag );
   loadSearches(); // riloadon kerkimet
}

// shfaq kerkimin ekzistues te etiketuar per editim
function editTag( tag )
{
   document.getElementById("query").value = localStorage[ tag ];
   document.getElementById("tag").value = tag;   
   loadSearches(); // riloadon kerkimet
} 

// regjistron mbajtesit e ngjarjeve pastaj loadon kerkimet
function start()
{
   var saveButton = document.getElementById( "saveButton" );
   saveButton.addEventListener( "click", saveSearch, false );
   var clearButton = document.getElementById( "clearButton" );
   clearButton.addEventListener( "click", clearAllSearches, false );
   loadSearches(); // loadon kerkimet e meparshme te ruajtura
} 

window.addEventListener( "load", start, false );
