var sqlMap = {
  // 用户
    user: {
      add: 'insert into user(name, phoneNumber, who, whatCompany, whatFor) values (?, ?, ?, ?, ?)',
      list: 'select * from  user'

    }
}
module.exports = sqlMap;
