<template>
<div class="container">
  <div class="logo">Intellifusion</div>

  <el-form  :model="ruleForm" :rules="rules" ref="ruleForm"  class="demo-ruleForm">
    <el-form-item class="item" label="您的姓名" prop="userName"></el-form-item>
    <el-input  class="input" v-model="ruleForm.userName"></el-input>

    <el-form-item class="item" label="您的电话" prop="phoneNumber"></el-form-item>
    <el-input class="input" v-model="ruleForm.phoneNumber"></el-input>

    <el-form-item class="item" label="要拜访的人" prop="who"></el-form-item>
    <el-input class="input" v-model="ruleForm.who"></el-input>

    <el-form-item class="item" label="您的公司" prop="whatCompany"></el-form-item>
    <el-input class="input" v-model="ruleForm.whatCompany"></el-input>

    <el-form-item class="item" label="来访目的" prop="whatFor"></el-form-item>
    <el-radio-group v-model="ruleForm.whatFor" fill="gold">
      <el-radio-button label="商务"></el-radio-button>
      <el-radio-button label="面试" class="btmid"></el-radio-button>
      <el-radio-button label="其他"></el-radio-button>
    </el-radio-group>
    <el-form-item class="item"></el-form-item>
    <div class="subm">
    <el-button class="button"  @click="addUser('ruleForm')">提交</el-button>
    </div>
  </el-form>
</div>
</template>
<script>/* eslint-disable */
import axios from 'axios'
export default {
  name: 'container',
  data () {
    return {
      ruleForm: {
        userName: '',
        phoneNumber: '',
        who: '',
        whatCompany: '',
        whatFor: [{text: '商务', value: '商务'}, {text: '面试', value: '面试'}, {text: '其他', value: '其他'}]
      },
      rules: {
        userName: [
          {required: true, message: '请输入您的姓名', trigger: 'blur'},
          {min: 2, max: 20, message: '长度在 2 到 20 个字符', trigger: 'blur'}
        ],
        phoneNumber: [
          {required: true, message: '请输入您的手机号', trigger: 'blur'},
          {min: 10, max: 12, message: '长度11位数字', trigger: 'blur'}
        ],
        who: [
          {required: true, message: '请输入您要拜访的人', trigger: 'blur'},
          {min: 1, max: 20, message: '长度在 1 到 20 个字符', trigger: 'blur'}
        ],
        whatCompany: [
          {required: true, message: '请输入您的公司名称', trigger: 'blur'},
          {min: 1, max: 20, message: '长度在 1 到 20 个字符', trigger: 'blur'}
        ],
        whatFor: [
          {required: true, message: '请选择来访目的', trigger: 'change'}
        ]
      }
    }
  },
      methods: {
        addUser(formName) {
          this.$refs[formName].validate((valid) => {
            if (valid) {
              let userName = this.ruleForm.userName;
              let phoneNumber = this.ruleForm.phoneNumber;
              let who = this.ruleForm.who;
              let whatCompany = this.ruleForm.whatCompany;
              let whatFor = this.ruleForm.whatFor;

              const h = this.$createElement;
              axios.post('/users/addUser.php', {
                userName: userName,
                phoneNumber: phoneNumber,
                who: who,
                whatCompany: whatCompany,
                whatFor: whatFor
              }, {}).then((response) => {
                console.log(response)
              })

              this.$notify({
                title: '标题名称',
                message: h('i', { style: 'color: teal'}, '提交成功')
              });
//                        alert('submit!');
            } else {
              console.log('error submit!!');
              return false;
            }
          });
        },
//        addUser() {
//        let userName = this.ruleForm.userName;
//        let phoneNumber = this.ruleForm.phoneNumber;
//        let who = this.ruleForm.who;
//        let whatCompany = this.ruleForm.whatCompany;
//        let whatFor = this.ruleForm.whatFor;
//        axios.post('/users/addUser', {
//          userName: userName,
//          phoneNumber: phoneNumber,
//          who: who,
//          whatCompany: whatCompany,
//          whatFor: whatFor
//        }, {}).then((response) => {
//          console.log(response);
//        })
//      }
    }
};
</script>

<style>
  .el-radio-button__inner {
    line-height: 1;
    white-space: nowrap;
    background: #fff;
    /* border: 1px solid #dcdfe6; */
    /*font-weight: 500;*/
    border-left: 0;
    color: #606266;
    /* padding-left: 12.5px; */
    /* padding-right: 12.5px; */
    -webkit-appearance: none;
    text-align: center;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    cursor: pointer;
    -webkit-transition: all .3s cubic-bezier(.645,.045,.355,1);
    transition: all .3s cubic-bezier(.645,.045,.355,1);
    padding: 12px 20px;
    font-size: 14px;
    border-radius: 0;
  }
  .el-form-item__error {
    color: #f56c6c;
    font-size: 12px;
    line-height: 1;
    padding-top: 22px;
    padding-left: 100px;
    position: absolute;
    top: 100%;
    left: 0;
  }
  .subm {
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .el-form-item__label {
    line-height: 20px;
  }
  .el-row {
    display: flex;
    -webkit-box-sizing: border-box;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
  }
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
  .el-radio-button__inner {
    width: 120px;
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
    /*width: 750px;*/
    width: 500px;
    height: 750px;
    margin-left: 125px;
    margin-right: 125px;
    /*padding-left: 187.5px;*/
    /*padding-right: 187.5px;*/
    margin-top: 100px;
  }
</style>
