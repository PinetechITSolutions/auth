const userModel = require("../models/user");

class User {
    constructor(){
        this._userModel = new userModel();
    }
    async login(email, password){
        const isUserExist = await this._userModel.findUser(email, password);
        return isUserExist;
    }
    async signup(data){
        const done = await this._userModel.signupUser(data);
        return done;
    }
}

module.exports = User;