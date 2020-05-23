
const mongoose = require('mongoose');
    
const userSchema = mongoose.Schema({
    firstName: String,
    lastName: String,
    email: String,
  });


class User {
    async findUser(email, password){
        console.log('email.......', email);
        return true;
    }
}

module.exports = User;



class User {
  constructor() {
    this.schema = userSchema;
  }

  async login(email, password) {
    const user = await this.schema.findOne({ email });
  }
}
