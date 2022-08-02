import { createConnection } from 'mysql';

var con = createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "lender"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});