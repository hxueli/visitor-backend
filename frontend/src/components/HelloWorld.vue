<template>
<div class="container">
  <div class="logo">Intellifusion</div>
  <div class="item"><span>姓名：</span></div>
    <el-input v-model="userName" placeholder="请输入您的姓名"></el-input>
  <div class="item"><span>手机号：</span></div>
  <el-row>
    <el-input v-model="phoneNumber" placeholder="请输入您的手机号"></el-input>
  </el-row>
  <div class="item"><span>受访人：</span></div>
  <el-row>
    <el-input v-model="who" placeholder="请输入您要拜访的人"></el-input>
  </el-row>
  <div class="item"><span>您的公司：</span></div>
  <el-row>
    <el-input v-model="whatCompany" placeholder="请输入您的公司"></el-input>
  </el-row>
  <div class="item"><div class="item2">来访目的：</div>
    <el-radio-group v-model="whatFor">
      <el-radio-button label="商务"></el-radio-button>
      <el-radio-button label="面试"></el-radio-button>
      <el-radio-button label="其他"></el-radio-button>
    </el-radio-group>
  </div>
<div class="submit">
  <el-row>
    <el-button href="javascript:;" @click="addUser">提交</el-button>
    <!--<el-button><a href="javascript:;" @click="addUser">提交</a></el-button>-->
  </el-row>
</div>
</div>
</template>
<script>/* eslint-disable */
import axios from 'axios'
export default {
  name: 'container',
  data () {
    return {
      userName: '',
      phoneNumber: '',
      who: '',
      whatCompany: '',
      whatFor: [{text:'商务',value:'商务'},{text:'面试',value:'面试'},{text:'其他',value:'其他'}]
    }
  },
  methods: {
    addUser () {
      let userName = this.userName;
      let phoneNumber = this.phoneNumber;
      let who = this.who;
      let whatCompany = this.whatCompany;
      let whatFor = this.whatFor;
      axios.post('/users/addUser', {
        userName: userName,
        phoneNumber: phoneNumber,
        who: who,
        whatCompany: whatCompany,
        whatFor: whatFor
      }, {}).then((response) => {
        console.log(response);
      })
    }
  }
}
</script>

<!--<script>-->
<!--export default {-->
  <!--data () {-->
    <!--return {-->
      <!--userName: '',-->
      <!--whatFor: ''-->
    <!--}-->
  <!--}-->
<!--}-->
<!--</script>-->
<style>
  .el-button {
    border: 1px solid gold;
  }
  .el-input__inner {
    border-style: solid;
    border-width: 1px;
    border-radius: 6px;
    border-color: gold;
    opacity: 0.7;
  }
  .el-radio-group {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: stretch;
  }
  .el-radio-button {
    display: flex;
    width: 120px;
    flex-direction: column;
    justify-content: space-around;
    align-items: stretch;
    border-style: solid;
    border-width: 1px;
    border-radius: 6px;
    border-color: gold;
    opacity: 0.7;
  }
  .logo {
    display: flex;
    font-size: 44px;
    margin-top: 20px;
    margin-bottom: 20px;
    color: gold;
    justify-content: center;
    align-items: center;
  }
  .submit {
    margin-top: 10px;
    margin-bottom: 10px;
  }
  .item{
    margin-top: 10px;
    margin-bottom: 10px;
  }
  .item2{
    margin-top: 10px;
    margin-bottom: 10px;
  }
  .container{
    width: 375px;
    height: 800px;
    margin-left: 187.5px;
    margin-right: 187.5px;
    margin-top: 100px;
  }
</style>
