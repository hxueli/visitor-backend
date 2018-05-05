<template>
  <div class="hello">
    <form class="vs-form">
      <label class="vs-input">Username</label>
      <input type="text" class="vs-input" name="username" placeholder="userName" v-model="userName">
      <label class="vs-input">phoneNumber</label>
      <input type="text" class="vs-input" name="phoneNumber" placeholder="phoneNumber" v-model="phoneNumber">
      <select class="vs-input"  v-model="whatFor">
        <option v-for="item in items" v-bind:key="item.text" v-bind:value="item.value">{{item.text}}</option>
      </select>
      <a class="button" href="javascript:;" @click="addUser">提交</a>
    </form>
  </div>
</template>

<script>/* eslint-disable */
import axios from 'axios'
export default {
  name: 'HelloWorld',
  data () {
    return {
      userName: '',
      phoneNumber: '',
      items:[{text:'请选择',value:''},{text:'面试',value:'面试'},{text:'商务',value:'商务'},{text:'其他',value:'其他'}],
      whatFor:''
    }
  },
  methods: {
    addUser () {
      let name = this.userName;
      let phoneNumber = this.phoneNumber;
      let whatFor = this.whatFor;
      axios.post('/user/addUser', {
        username: name,
        phoneNumber: phoneNumber,
        whatFor: whatFor
      }, {}).then((response) => {
        console.log(response);
      })
    }
  }
}
</script>

<style scoped>
h1 {
  font-weight: normal;
}
.hello {
  /*display: flex;*/
}
.vs-form {
  width: 750px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
}
.vs-input {
  margin-top: 5px;
  margin-bottom: 5px;
  margin-left: 280px;

}
  .button {
    margin-left: 280px;

    color: black;
    text-decoration: none;
    border-style: solid;
    border-width: 2px;
    border-color: black;
    border-radius: 5px;
    padding-left: 5px;
    padding-right: 5px;
    padding-top: 5px;
    padding-bottom: 5px;
  }
</style>
