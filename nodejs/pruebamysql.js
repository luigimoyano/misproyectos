
// Ejemplo y libreria tomado de esta pagina
//https://github.com/felixge/node-mysql

http://howtonode.org/node-js-and-mongodb-getting-started-with-mongojs
var mysql      = require('mysql');
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : '12345',
});

connection.connect();

connection.query('SELECT * from directory.employee', function(err, rows, fields) {
  if (err) throw err;

  for(var key in rows){
	console.log('The solution is: ', rows[key].title);
  }
	
  
});

connection.end();
