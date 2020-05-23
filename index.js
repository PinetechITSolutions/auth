var express = require("express");
const mongoose = require('mongoose');
var bodyParser = require("body-parser");
var app = express();

mongoose.connect('mongodb://localhost:27017/auth-test', {
  useNewUrlParser: true,
  useUnifiedTopology: true
})

var userController = require("./controllers/User")

app.use(bodyParser.json());
app.use(express.static("public"));
app.use(
  bodyParser.urlencoded({
    extended: true,
  })
);
app.engine('html', require('ejs').renderFile);
app.set('view engine', 'html');

// Pages
app.get("/", function (req, res) {
  return res.render("index.html");
});
app.get("/login", function (req, res) {
  return res.render("login.html");
});
app.get("/signup", function (req, res) {
  return res.render("signup.html");
});


// API
app.post("/login", async function (req, res) {
  const user = new userController();
  const token = await user.login(req.body.email, req.body.password);
  return res.json({
    token
  });
});
app.post("/signup", async function (req, res) {
  const user = new userController();
  const token = await user.signup(req.body);
  return res.json({
    success: true
  });
});


app.listen(3000);

console.log("server listening at port 3000");