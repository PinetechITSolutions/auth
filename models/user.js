const mongoose = require('mongoose');

const userSchema = mongoose.Schema({
  firstName: String,
  lastName: String,
  email: String,
});


class User {
  async findUser(email, password) {
    console.log('email.......', email);
    return true;
  }
}

module.exports = User;