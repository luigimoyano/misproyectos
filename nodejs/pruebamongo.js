// http://howtonode.org/node-js-and-mongodb-getting-started-with-mongojs
// npm install mongojs
var databaseUrl = "comercio"; // "username:password@example.com/mydb"
var collections = ["diarios", "periodicos"]
var db = require("mongojs").connect(databaseUrl, collections);

// Encuentra de una determinada tabla con ciertos requisitos.
// Ocupan mucho las colecciones de mongo con respecto a mysql??

db.diarios.find({site: "Peru 21"}, function(err, users) {
  if( err || !users) console.log("No users found");
  else users.forEach( function(femaleUser) {
    console.log(femaleUser);
  } );
});




