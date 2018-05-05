<template>
  <div class="hello">
    <div class="pagelogo">
      <a class="page2logo">Insta360</a>
    </div>
    <div class="vs-inp">
      <!--<label class="title">您的姓名</label>-->
      <input class="input" placeholder="your name :" v-model="name"/>
    </div>
    <div>
      <div>
        <!--<label class="title">您的电话</label>-->
      </div>
      <input class="input" placeholder="your phoneNumber :" v-model="phoneNumber"/>
    </div>
    <div>
      <!--<label class="title">要拜访的人</label>-->
      <input class="input" placeholder="contact people :" v-model="who"/>
    </div>
    <div>
      <!--<label class="title">您的公司</label>-->
      <input class="input" placeholder="your Company :" v-model="whatCompany"/>
    </div>
    <div>
      <!--<label class="title">来访目的</label>-->
      <select class="input-s" v-model="whatFor">
        <option  v-for="item in items" v-bind:key="item.text" v-bind:value="item.value">{{item.text}}</option>
      </select>
    </div>
    <div class="submit">
      <a class="list-tx" href="https://www.insta360.com/about?inspm=77c1c2.6666cd.0.0" @click="addUser">提交</a>
    </div>
  </div>
</template>

<style scoped>
  .input-s {
    display: block;
    font-size: 22px;
    height: 44px;
    width: 422px;
    margin-left: 175px;
    margin-top: 10px;
    margin-bottom: 10px;
    padding-left: 22px;
    border-style: solid;
    border-width: 1px;
    border-color: gold;
    border-radius: 10px;
    background-color: white;
  }
  .submit {
    font-size: 22px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 22px;
  }

  .list-tx {
    width: 100px;
    height: 44px;
    text-decoration: none;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 22px;
    border-style: solid;
    border-width: 1px;
    border-color: gold;
    border-radius: 10px;
    color: #000;
    background-color: gold;
    /*opacity:1;*/
  }

  .list-bt {
    flex-direction: row;
    margin-left: 125px;
    margin-right: 125px;
    justify-content: space-between;
    align-items: center;
  }

  .button {
    width: 166.66px;
    height: 56px;
    padding-top: 2px;
    padding-bottom: 2px;
    padding-left: 2px;
    padding-right: 2px;
    border-style: solid;
    border-width: 1px;
    border-radius: 10px;
    align-items: center;
    justify-content: center;
    opacity: 0.8;
  }

  .pagelogo {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 88px;
    margin-bottom: 44px;
  }

  .page2logo {
    font-size: 66px;
    color: gold;
  }

  .title {
    font-size: 22px;
    margin-left: 175px;
    margin-top: 15px;
    margin-bottom: 25px;
  }

  .input {
    font-size: 22px;
    height: 44px;
    width: 400px;
    margin-left: 175px;
    margin-top: 10px;
    margin-bottom: 10px;
    padding-left: 22px;
    border-style: solid;
    border-width: 1px;
    border-color: gold;
    border-radius: 10px;

  }
</style>

<script>/* eslint-disable */
import axios from 'axios'

export default {
  name: 'page2',
  data () {
    return {
      name: '',
      phoneNumber: '',
      who: '',
      whatCompany: '',
      items: [{text: 'select', value: ''}, {text: '面试', value: '面试'}, {text: '商务', value: '商务'}, {
        text: '其他',
        value: '其他'
      }],
      whatFor: ''
    }
  },
  methods: {
    addUser () {
      let name = this.name
      let phoneNumber = this.phoneNumber
      let who = this.who
      let whatCompany = this.whatCompany
      let whatFor = this.whatFor
      axios.post('/user/addUser', {
        name: name,
        phoneNumber: phoneNumber,
        who: who,
        whatCompany: whatCompany,
        whatFor: whatFor
      }, {}).then((response) => {
        console.log(response)
      })
    }
  }
}
</script>
