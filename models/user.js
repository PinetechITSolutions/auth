const mongoose = require('mongoose');
const bcrypt = require('bcrypt');

const userSchema = mongoose.Schema({
  firstName: {
    type: String
  },
  lastName: {
    type: String
  },
  email: {
    type: String
  },
  dateOfBirth: {
    type: String
  },
  password: {
    type: String
  },
});
const UserModel = mongoose.model("UserModel", userSchema);

const comparePassword = async function (candidatePassword, password) {
  return await bcrypt.compare(candidatePassword, password);
};


class User {
  async findUser(email, password) {
    const userObj = await UserModel.findOne({
      email: email
    }).exec()
    if (!userObj) {
      return {
        success: false,
        message: 'user does not exists'
      }
    }
    const compare = await comparePassword(password, userObj.password);
    if (!compare) {
      return {
        message: 'Invalid Credentials',
        success: false
      };
    }
    return true;
  }
  async signupUser(data) {
    const exists = await UserModel.findOne({
      email: data.email
    }).exec();
    if (exists) {
      return {
        message: 'email already exists',
        success: false
      }
    }
    // await bcrypt.genSalt(10, function (err, salt) {
    await bcrypt.hash(data.password, 10, async function (err, hash) {
      if (err) {
        return err
      }
      const newUser = new UserModel({
        firstName: data.firstName,
        lastName: data.lastName,
        email: data.email,
        dateOfBirth: data.dateOfBirth,
        password: hash
      })
      await newUser.save();
    });
    return {
      message: 'user created',
      success: true
    }
    // });
  }
}

module.exports = User;