const userModel = require("../models/user");

class User {
    constructor() {
        this._userModel = new userModel();
    }
    async login(email, password) {
        const isUserExist = await this._userModel.findUser(email, password);
        return isUserExist;
    }
    async signup(payload) {
        const data = await this._userModel.signupUser(payload);
        return data;
    }
}

module.exports = User;